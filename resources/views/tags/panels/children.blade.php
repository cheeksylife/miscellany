<?php
/** @var \App\Models\Tag $model*/
/** @var \App\Models\Entity $child */
$filters = [];
$r = null;
$addEntityUrl = route('tags.entity-add', $model);

$datagridSorter = new \App\Datagrids\Sorters\TagChildrenSorter();
$datagridSorter->request(request()->all());

$filters = [];
$allMembers = true;
if (!request()->has('all_members')) {
    $filters['tag_id'] = $model->id;
    $allMembers = false;
}

if ($allMembers) {
    $r = $model->allChildren();
} else {
    $r = $model->entities();
}
$r = $r->acl()
    ->simpleSort($datagridSorter)
    ->paginate();

?>
<div class="box box-solid" id="tag-children">
    <div class="box-body">
        <h2 class="page-header with-border">
            {{ __('tags.show.tabs.children') }}
        </h2>

        <p class="help-block export-hidden">
            {{ __('tags.hints.children') }}
        </p>

        <div class="row export-hidden">
            <div class="col-md-6">
                @include('cruds.datagrids.sorters.simple-sorter', ['target' => '#tag-children'])
            </div>
            <div class="col-md-6 text-right">
                @if (!$allMembers)
                    <a href="{{ route('tags.show', [$model, 'all_members' => true, '#tag-children']) }}" class="btn btn-default btn-sm pull-right">
                        <i class="fa fa-filter"></i> {{ __('crud.filters.all') }} ({{ $model->allChildren()->acl()->count() }})
                    </a>
                @else
                    <a href="{{ route('tags.show', [$model, '#tag-children']) }}" class="btn btn-default btn-sm pull-right">
                        <i class="fa fa-filter"></i> {{ __('crud.filters.direct') }} ({{ $model->entities()->acl()->count() }})
                    </a>
                @endif
            </div>
        </div>
        <table id="section-children" class="table table-hover">
            <tbody><tr>
                <th class="avatar"><br /></th>
                <th>{{ __('crud.fields.name') }}</th>
                <th>{{ __('crud.fields.entity_type') }}</th>
                <th class="text-right">
                    @can('update', $model)
                        <a href="{{ $addEntityUrl }}" class="btn btn-primary btn-sm"
                           data-toggle="ajax-modal" data-target="#entity-modal" data-url="{{ $addEntityUrl }}">
                            <i class="fa fa-plus"></i> <span class="hidden-sm hidden-xs">{{ __('tags.children.actions.add') }}</span>
                        </a>
                    @endcan
                </th>
            </tr>
            @foreach ($r as $child)
                <tr>
                    <td>
                        <a class="entity-image" style="background-image: url('{{ $child->avatar(true) }}');" title="{{ $child->name }}" href="{{ $child->url() }}"></a>
                    </td>
                    <td>
                        {!! $child->tooltipedLink() !!}
                    </td>
                    <td colspan="2">
                        {{ __('entities.' . $child->pluralType()) }}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{ $r->fragment('tag-children')->links() }}
    </div>
</div>
