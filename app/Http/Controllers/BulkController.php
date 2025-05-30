<?php

namespace App\Http\Controllers;

use App\Exceptions\TranslatableException;
use App\Facades\CampaignLocalization;
use App\Http\Requests\BulkRequest;
use App\Services\AttributeService;
use App\Services\BulkService;
use App\Services\EntityService;
use App\Traits\BulkControllerTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BulkController extends Controller
{
    use BulkControllerTrait;

    /**
     * @var BulkService
     */
    protected $bulkService;

    /**
     * @var EntityService
     */
    protected $entityService;

    /**
     * BulkController constructor.
     * @param BulkService $bulkService
     */
    public function __construct(BulkService $bulkService, EntityService $entityService)
    {
        $this->bulkService = $bulkService;
        $this->entityService = $entityService;
    }

    /**
     * @param BulkRequest $request
     */
    public function process(BulkRequest $request)
    {
        $entity = $request->get('entity');
        $models = $request->get('model', []);
        $action = $request->get('datagrid-action');
        $page = $request->get('page');
        $routeParams = !empty($page) ? ['page' => $page] : [];

        $subroute = 'index';
        if (auth()->user()->defaultNested and \Illuminate\Support\Facades\Route::has($entity . '.tree')) {
            $subroute = 'tree';
        }

        $this->bulkService->entity($entity)->entities($models);

        try {
            if ($action === 'delete') {
                $models = explode(',', $request->get('models'));
                $count = $this->bulkService->entities($models)->delete();
                $key = $entity === 'relations' ? 'entities/relations.bulk.delete' : 'crud.destroy_many.success';
                return redirect()
                    ->route($entity . '.' . $subroute, $routeParams)
                    ->with('success', trans_choice($key, $count, ['count' => $count]));
            } elseif ($action === 'export') {
                $pdf = \App::make('dompdf.wrapper');
                $entities = $this->bulkService->export();
                $entityType = $entity;
                $name = $entity;
                return $pdf
                    ->loadView('cruds.export', compact('entityType', 'entities', 'name'))
                    ->download('kanka ' . $entity . ' export.pdf');
            } elseif ($action === 'print') {
                $entities = $this->bulkService->export();
                return view('entities.pages.print.print-bulk')
                    ->with('entities', $entities)
                    ->with('printing', true)
                    ;
            } elseif ($action === 'permissions') {
                $models = explode(',', $request->get('models'));
                $count = $this
                    ->bulkService
                    ->entities($models)
                    ->permissions($request->only('user', 'role'), $request->has('permission-override'));
                return redirect()
                    ->route($entity . '.' . $subroute, $routeParams)
                    ->with('success', trans_choice('crud.bulk.success.permissions', $count, ['count' => $count]));
            } elseif ($action === 'copy-campaign') {
                $models = explode(',', $request->get('models'));
                $campaignId = $request->get('campaign');
                $campaign = Auth::user()->campaigns()->where('campaign_id', $campaignId)->first();

                $count = $this
                    ->bulkService
                    ->entities($models)
                    ->copyToCampaign($campaign->id);
                return redirect()
                    ->route($entity . '.' . $subroute, $routeParams)
                    ->with('success_raw', trans_choice('crud.bulk.success.copy_to_campaign', $count, ['count' => $count, 'campaign' => $campaign->name]));
            } elseif ($action === 'transform') {
                $models = explode(',', $request->get('models'));
                $target = $request->get('target');
                $count = $this
                    ->bulkService
                    ->entities($models)
                    ->transform($target);
                return redirect()
                    ->route($entity . '.' . $subroute, $routeParams)
                    ->with('success_raw', trans_choice('entities/transform.bulk.success', $count, ['count' => $count, 'type' => __('entities.' . $target)]));
            } elseif ($action === 'templates') {
                $count = $this->bulkService
                    ->entities(explode(',', $request->get('models')))
                    ->templates($request->get('template_id'));
                return redirect()
                    ->route($entity . '.' . $subroute, $routeParams)
                    ->with('success', trans_choice('crud.bulk.success.templates', $count, ['count' => $count]));
            } elseif ($action === 'batch') {
                $entityClass = $this->entityService->getClass($entity);
                $entityObj = new $entityClass;
                $langFile = $entity === 'relations' ? 'entities/relations.bulk.success.' : 'crud.bulk.success.';

                $count = $this
                    ->bulkService
                    ->entities(explode(',', $request->get('models')))
                    ->editing($request->all(), $this->bulkModel($entityObj));
                $total = $this->bulkService->total();

                $key = 'editing';
                if ($count != $total) {
                    $key = 'editing_partial';
                }
                return redirect()
                    ->route($entity . '.' . $subroute, $routeParams)
                    ->with('success', trans_choice($langFile . $key, $count, ['count' => $count, 'total' => $total]));
            }
        } catch (\Exception $e) {
            return redirect()
                ->route($entity . '.' . $subroute, $routeParams)
                ->with('error', __('crud.bulk.errors.general', ['hint' => $e->getMessage()]));
        }

        return redirect()->route($entity . '.' . $subroute, $routeParams);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\JsonResponse|\Illuminate\View\View
     */
    public function modal(Request $request)
    {
        if (!$request->has('view') || !in_array($request->get('view'), ['permissions', 'copy_campaign', 'templates', 'transform'])) {
            return response()->json(['error' => 'invalid view']);
        }

        $type = request()->get('type');
        $templates = [];
        $entities = null;

        if (request()->get('view') == 'templates') {
            $campaign = CampaignLocalization::getCampaign();
            /** @var AttributeService $service */
            $service = app()->make('App\Services\AttributeService');
            $templates = $service->campaign(CampaignLocalization::getCampaign())->templateList($campaign);
        }
        elseif (request()->get('view') === 'transform') {
            $entities = $this->entityService
                ->labelledEntities(true, [Str::plural($type), 'menu_links', 'relations'], true);
            $entities[''] = __('entities/transform.fields.select_one');
        }

        $campaign = CampaignLocalization::getCampaign();
        return view('cruds.datagrids.bulks.modals._' . $request->get('view'), compact(
            'campaign', 'templates', 'type', 'entities'
        ));
    }
}
