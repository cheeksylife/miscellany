@extends('layouts.app', [
    'title' => trans('tags.tags.title', ['name' => $model->name]),
    'description' => trans('tags.tags.description'),
    'breadcrumbs' => false,
    'mainTitle' => false,
    'miscModel' => $model,
])

@section('content')
    @include('partials.errors')
    <div class="row entity-grid">
        <div class="col-md-2 entity-sidebar-submenu">
            @include('tags._menu', ['active' => 'tags'])
        </div>
        <div class="col-md-10 entity-main-block">
            @include('tags.panels.tags')
        </div>
    </div>
@endsection
