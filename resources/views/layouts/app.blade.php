<?php
/**
 * @var \App\Models\Campaign $campaign
 * @var \App\Models\MiscModel $miscModel
 */
$campaign = \App\Facades\CampaignLocalization::getCampaign();
$themeOverride = request()->get('_theme');
$specificTheme = null;
?>
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" @if(app()->getLocale() == 'he') dir="rtl" @endif>
<head>
@include('layouts._tracking')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{!! $title ?? '' !!} - {{ config('app.name', 'Kanka') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta property="og:title" content="{{ $title ?? '' }} - {{ config('app.name') }}" />
    <meta property="og:site_name" content="{{ config('app.site_name') }}" />
@if (isset($canonical))
    <link rel="canonical" href="{{ LaravelLocalization::localizeURL(null, $campaign->locale) }}" />
@endif
@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
    <link rel="alternate" href="{{ LaravelLocalization::localizeUrl(null, $localeCode) }}" hreflang="{{ $localeCode }}">
@endforeach

    @yield('og')
    <link rel="shortcut icon" href="/images/favicon/favicon.ico" type="image/x-icon" />
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
    <link rel="apple-touch-icon" href="/images/favicon/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="/images/favicon/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/images/favicon/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="/images/favicon/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/images/favicon/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="/images/favicon/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/images/favicon/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="/images/favicon/apple-touch-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-touch-icon-180x180.png" />

    <!-- Styles -->
    <link href="{{ mix('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ mix('css/vendor.css') }}" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ mix('css/freyja.css') }}" rel="stylesheet">
@if(app()->getLocale() == 'he')
    <link href="{{ mix('css/app-rtl.css') }}" rel="stylesheet">
@endif
@yield('styles')

@if (!empty($themeOverride) && in_array($themeOverride, ['dark', 'midnight', 'future', 'base']))
    @php $specificTheme = $themeOverride; @endphp
    @if($themeOverride != 'base')
    <link href="{{ mix('css/' . request()->get('_theme') . '.css') }}" rel="stylesheet">
    @endif
@else
    @if (!empty($campaign) && $campaign->boosted() && !empty($campaign->theme))
    @if ($campaign->theme_id !== 1)
        <link href="{{ mix('css/' . $campaign->theme->name . '.css') }}" rel="stylesheet">
        @php $specificTheme = $campaign->theme->name @endphp
    @endif
    @elseif (auth()->check() && !empty(auth()->user()->theme))
        <link href="{{ mix('css/' . auth()->user()->theme . '.css') }}" rel="stylesheet">
        @php $specificTheme = auth()->user()->theme @endphp
    @endif
@endif

@if(!empty($campaign) && $campaign->boosted() && $campaign->hasPluginTheme())
    <link href="{{ route('campaign_plugins.css', ['ts' => $campaign->updated_at->getTimestamp()]) }}" rel="stylesheet">
@endif
@if (!empty($campaign) && $campaign->boosted())
    <link href="{{ route('campaign.css', ['ts' => \App\Facades\CampaignCache::stylesTimestamp()]) }}" rel="stylesheet">
@endif
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
</head>
{{-- Hide the sidebar if the there is no current campaign --}}
<body class="skin-black sidebar-mini @if (!empty($campaign) || (auth()->check() && auth()->user()->hasCampaigns()) || (!empty($sidebar) && $sidebar == 'settings'))@else layout-top-nav @endif @if(isset($miscModel) && !empty($miscModel->entity)){{ $miscModel->bodyClasses() }}@endif @if(isset($dashboard))dashboard-{{ $dashboard->id }}@endif @if(isset($bodyClass)){{ $bodyClass }}@endif @if(!empty($specificTheme)) theme-{{ $specificTheme }} @endif">
@include('layouts._tracking-fallback')
    <div id="app" class="wrapper">
        @include('layouts.header')

        @include('layouts.sidebars.' . ($sidebar ?? 'app'))

        @yield('fullpage-form')

        <div class="content-wrapper" @if(isset($contentId)) id="{{ $contentId }}" @endif>
            @include('layouts.banner')

            @if(!view()->hasSection('content-header'))
            <section class="content-header">
                @if (!isset($breadcrumbs) || $breadcrumbs !== false)
                <ol class="breadcrumb">
                @if (!isset($breadcrumbsDashboard) || $breadcrumbsDashboard === true)
                    @if ($campaign)
                        <li>
                            <a href="{{ route('dashboard') }}">
                                <i class="fa fa-globe"></i>
                                <span class="hidden-xs hidden-sm">
                                    {!! $campaign->name !!}
                                </span>
                            </a>
                        </li>
                    @else
                        <li>
                            <a href="{{ route('home') }}">
                                <i class="fa fa-dashboard"></i>
                                <span class="hidden-xs hidden-sm">
                                    {{ __('dashboard.title') }}
                                </span>
                            </a>
                        </li>
                    @endif
                @endif
                    @if (isset($breadcrumbs))
                        @foreach ($breadcrumbs as $breadcrumb)
                            <li>
                                @if (!empty($breadcrumb['url']))
                                    <a href="{{ $breadcrumb['url'] }}" title="{{ $breadcrumb['label'] }}">
                                        @if (strlen($breadcrumb['label']) > 22)
                                            {{ substr($breadcrumb['label'], 0, 20) . '...' }}
                                        @else
                                            {{ $breadcrumb['label'] }}
                                        @endif
                                    </a>
                                @else
                                    @if (strlen($breadcrumb) > 22)
                                        <span title="{{ $breadcrumb }}">{{ substr($breadcrumb, 0, 20) . '...' }}</span>
                                    @else
                                        {{ $breadcrumb }}
                                    @endif
                                @endif
                            </li>
                        @endforeach
                    @endif
                </ol>
                @endif

                @if (!View::hasSection('entity-header'))
                    @if (isset($mainTitle))
                        @yield('header-extra')
                    @else
                        <h1>
                            @yield('header-extra')
                            {!! $title ?? "Page Title" !!}
                            <small class="hidden-xs hidden-sm">{{ $description ?? null }}</small>
                        </h1>
                    @endif
                @endif
            </section>
            @endif

            @yield('content-header')

            <section class="content">
                @if (auth()->check() && \App\Facades\Identity::isImpersonating())
                    <div class="alert alert-warning">
                        <h4>
                            <i class="icon fa fa-exclamation-triangle"></i>
                            {{ __('campaigns.members.impersonating.title', ['name' => auth()->user()->name]) }}
                        </h4>
                        <p>
                            {{ __('campaigns.members.impersonating.message') }}

                            <a href="{{ route('identity.back') }}" class="btn btn-warning btn-sm">
                                <i class="fa fa-sign-out-alt"></i> {{ trans('campaigns.members.actions.switch-back') }}
                            </a>
                        </p>
                    </div>
                @endif
                @include('partials.success')

@if(!empty(config('tracking.adsense')) && (auth()->guest() || auth()->user()->showAds()) && !isset($skipBannerAd) && (!isset($sidebar) || $sidebar != 'settings'))
                <p class="text-center text-muted">
                    {!! __('misc.ads.remove_v2', [
    'supporting' => link_to_route('settings.subscription', __('misc.ads.supporting'), [], ['target' => '_blank']),
    'boosting' => link_to_route('front.pricing', __('misc.ads.boosting'), ['#boost'], ['target' => '_blank']),
    ]) !!}
                </p>
@endif

                @yield('entity-actions')
                @yield('entity-header')
                @yield('content')
            </section>
        </div>

        @yield('fullpage-form-end')

        @include('layouts.footer')

    </div>

    <!-- Modal -->
    <div class="modal fade" id="click-confirm" tabindex="-1" role="dialog" aria-labelledby="clickConfirmLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="{{ __('crud.click_modal.close') }}"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="clickModalLabel">{{ __('crud.click_modal.title') }}</h4>
                </div>
                <div class="modal-body">
                    <p id="click-confirm-text"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">{{ __('crud.delete_modal.close') }}</button>
                    <a href="" type="button" class="btn btn-danger" id="click-confirm-url">{{ __('crud.click_modal.confirm') }}</a>
                </div>
            </div>
        </div>
    </div>
    <!-- new foreign model -->
    <div class="modal fade" id="new-entity-modal" tabindex="-1" role="dialog" aria-labelledby="newEntityModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="{{ __('crud.click_modal.close') }}"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="newEntityModalLabel">{{ __('crud.new_entity.title') }}</h4>
                </div>
                {!! Form::open(['url' => route('entities.create'), 'method' => 'POST', 'id' => 'new-entity-form']) !!}
                <div class="modal-body">
                    <div class="form-group required">
                        <label>{{ __('crud.new_entity.fields.name') }}</label>
                        {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'new-entity-name']) !!}
                    </div>
                    <p class="text-red" id="new-entity-errors" style="display:none">{{ __('crud.new_entity.error') }}</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" id="new-entity-save" data-text="{{ __('crud.save') }}">{{ __('crud.save') }}</button>
                </div>
                {{ csrf_field() }}
                {!! Form::hidden('target', null, ['id' => 'new-entity-type']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>

    <div class="modal fade" id="entity-modal" role="dialog" aria-labelledby="deleteConfirmLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content"></div>
        </div>
    </div>

    <div class="modal fade" id="large-modal" role="dialog" aria-labelledby="deleteConfirmLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" id="large-modal-content"></div>
        </div>
    </div>

@auth
    <div class="modal modal-danger fade" id="delete-confirm" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="{{ __('crud.delete_modal.close') }}"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">{{ __('crud.delete_modal.title') }}</h4>
                </div>
                <div class="modal-body">
                    <p id="delete-confirm-text">
                        {!! __('crud.delete_modal.description', ['tag' => '<b><span id="delete-confirm-name"></span></b>']) !!}
                    </p>
                    <div id="delete-confirm-mirror" class="form-group" style="display: none">
                        <label>
                            <input type="checkbox" id="delete-confirm-mirror-chexkbox" name="delete-mirror">
                            {{ __('crud.delete_modal.mirrored') }}
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">{{ __('crud.cancel') }}</button>
                    <button type="button" class="btn btn-outline delete-confirm-submit">
                        <span class="fa fa-trash"></span>
                        <span class="delete-button-label">{{ __('crud.delete_modal.delete') }}</span>
                        <span class="remove-button-label" style="display: none">{{ __('crud.remove') }}</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endif

    @yield('modals')

    <script src="https://kit.fontawesome.com/d7f0be4a8d.js" crossorigin="anonymous"></script>
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="/js/select2/i18n/{{ LaravelLocalization::getCurrentLocale() == 'en-US' ? 'en' : LaravelLocalization::getCurrentLocale() }}.js" defer></script>
    @yield('scripts')
</body>
</html>
