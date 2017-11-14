@extends('layouts.app', [
    'title' => trans('items.show.title', ['item' => $item->name]),
    'description' => trans('items.show.description'),
    'breadcrumbs' => [
        ['url' => route('items.index'), 'label' => trans('items.index.title')],
        $item->name,
    ]
])
@section('content')
    <div class="row">
        <div class="col-md-3">

            <!-- Profile Image -->
            <div class="box">
                <div class="box-body box-profile">
                    @if ($item->image)
                    <a href="/storage/{{ $item->image }}">
                        <img class="profile-user-img img-responsive img-circle" src="/storage/{{ $item->image }}" alt="{{ $item->name }} picture">
                    </a>
                    @endif

                    <h3 class="profile-username text-center">{{ $item->name }}
                        @if ($item->is_private)
                             <i class="fa fa-lock" title="{{ trans('crud.is_private') }}"></i>
                        @endif
                    </h3>

                    <ul class="list-group list-group-unbordered">
                        @if ($item->type)
                        <li class="list-group-item">
                            <b>{{ trans('items.fields.type') }}</b> <a class="pull-right">{{ $item->type }}</a>
                            <br class="clear" />
                        </li>
                        @endif
                        @if (!empty($item->location))
                            <li class="list-group-item">
                                <b>{{ trans('items.fields.location') }}</b>
                                <span  class="pull-right">
                                <a href="{{ route('locations.show', $item->location_id) }}">{{ $item->location->name }}</a>
                                    @if ($item->location->parentLocation)
                                        , <a href="{{ route('locations.show', $item->location->parentLocation->id) }}">{{ $item->location->parentLocation->name }}</a>
                                    @endif
                                </span>
                                <br class="clear" />
                            </li>
                        @endif
                        @if (!empty($item->character))
                            <li class="list-group-item">
                                <b>{{ trans('items.fields.character') }}</b> <a class="pull-right" href="{{ route('characters.show', $item->character_id) }}">{{ $item->character->name }}</a>
                                <br class="clear" />
                            </li>
                        @endif
                    </ul>

                    @if (Auth::user()->can('update', $item))
                    <a href="{{ route('items.edit', $item->id) }}" class="btn btn-primary btn-block">
                        <i class="fa fa-pencil" aria-hidden="true"></i> {{ trans('crud.update') }}
                    </a>
                    @endif

                    @if (Auth::user()->can('delete', $item))
                    <button class="btn btn-block btn-danger delete-confirm" data-name="{{ $item->name }}" data-toggle="modal" data-target="#delete-confirm">
                        <i class="fa fa-trash" aria-hidden="true"></i> {{ trans('crud.remove') }}
                    </button>
                    {!! Form::open(['method' => 'DELETE','route' => ['items.destroy', $item->id], 'style'=>'display:inline', 'id' => 'delete-confirm-form']) !!}
                    {!! Form::close() !!}
                    @endif
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>

        <div class="col-md-9">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#information" data-toggle="tab" aria-expanded="false">{{ trans('items.show.tabs.information') }}</a></li>
                    <!--<li><a href="#character" data-toggle="tab" aria-expanded="false">Characters</a></li>-->
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="information">
                        @if (!empty($item->description))
                        <div class="post">
                            <h3>{{ trans('items.fields.description') }}</h3>
                            <p>{!! $item->description !!}</p>
                        </div>
                        @endif

                        @if (!empty($item->history))
                        <div class="post">
                            <h3>{{ trans('items.fields.history') }}</h3>
                            <p>{!! $item->history !!}</p>
                        </div>
                        @endif
                    </div>
                    <div class="tab-pane" id="character">
                    </div>
                </div>
            </div>
            </div>

            <!-- actions -->
        </div>
    </div>
@endsection
