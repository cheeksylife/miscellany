<?php


namespace App\Http\Resources;


use App\Services\Api\ApiService;
use Carbon\Carbon;
use Illuminate\Support\Str;

trait ApiSync
{
    /**
     * Create new anonymous resource collection.
     *
     * @param  mixed  $resource
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public static function collection($resource)
    {
        $additional = [
            'sync' => Carbon::now(),
        ];
        if (config('app.debug')) {
            $additional['queries'] = new ApiService();
        }

        // Make sure we have the app's url for pagination, otherwise on prod it will skip the https scheme
        try {
            if (app()->environment('prod')) {
                /** @var \Illuminate\Pagination\LengthAwarePaginator $resource */
                $path = $resource->path();
                $path = Str::replaceFirst('http://', 'https://', $path);
                $resource->setPath($path);
            }
        } catch (\Exception $e) {
            // Do nothing, this can happen for sub resources
            // being called (ex character::characterOrgsCollection)
        }

        return parent::collection($resource)
            ->additional($additional);
    }
}
