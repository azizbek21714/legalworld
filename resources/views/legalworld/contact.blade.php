@extends('layouts.legalworld')

@section('content')
    <!-- Breadcrumbs -->
    <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(/legalworld/images/contact-image.jpg);">
        <div class="breadcrumbs-custom-inner">
            <div class="container breadcrumbs-custom-container">
                <div class="breadcrumbs-custom-main">
                    <h6 class="breadcrumbs-custom-subtitle title-decorated">@lang('legalworld.contacts')</h6>
                    <h1 class="breadcrumbs-custom-title">@lang('legalworld.contacts')</h1>
                </div>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{ route('legalworld.main') }}">@lang('legalworld.home')</a></li>
                    <li class="active">@lang('legalworld.contacts')</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="section section-sm">
        <div class="container">
            <div class="layout-bordered">
                <div class="layout-bordered-item wow-outer">
                    <div class="layout-bordered-item-inner wow slideInUp">
                        <div class="icon icon-lg mdi mdi-phone text-primary"></div>
                        <ul class="list-0">
                            <li><a class="link-default" href="tel:#">+998 77 301-15-51</a></li>
                        </ul>
                    </div>
                </div>
                <div class="layout-bordered-item wow-outer">
                    <div class="layout-bordered-item-inner wow slideInUp">
                        <div class="icon icon-lg mdi mdi-email text-primary"></div><a class="link-default"
                            href="mailto:investandtradegroup@gmail.com">info@legelworld.uz</a>
                    </div>
                </div>
                <div class="layout-bordered-item wow-outer">
                    <div class="layout-bordered-item-inner wow slideInUp">
                        <div class="icon icon-lg mdi mdi-map-marker text-primary"></div><a class="link-default"
                            href="#">@lang('legalworld.add')<br>@lang('legalworld.addd')</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('legalworld/contactasset')
@endsection
