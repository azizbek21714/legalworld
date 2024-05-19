@extends('layouts.legalworld')

@section('content')
      <!-- Breadcrumbs -->
      <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(/legalworld/images/breadcrumbs-image-1.jpg);">
        <div class="breadcrumbs-custom-inner">
          <div class="container breadcrumbs-custom-container">
            <div class="breadcrumbs-custom-main">
              <h6 class="breadcrumbs-custom-subtitle title-decorated">@lang('legalworld.about')</h6>
              <h1 class="breadcrumbs-custom-title">@lang('legalworld.about')</h1>
            </div>
            <ul class="breadcrumbs-custom-path">
                <li><a class="uppercase" href="{{ route('legalworld.main') }}">@lang('legalworld.home')</a></li>
                <li>@lang('legalworld.about')</li>
            </ul>
          </div>
        </div>
      </section>
      <!-- Overview-->
      <section class="section section-lg">
        <div class="container">
          <div class="row row-50 justify-content-center justify-content-lg-between">
            <div class="col-md-10 col-lg-6">
              <h3>@lang('legalworld.about')</h3>
              <p>@lang('legalworld.aboutekst')</p>
            </div>
            <div class="col-md-10 col-lg-6 col-xl-5"> <img class="img-responsive" src="/legalworld/images/consulting2.png" alt="" width="470" height="334"/></div>
          </div>
          <div class="row row-50 justify-content-center justify-content-lg-between">
            <div class="col-md-10 col-lg-6 col-xl-5"> <img class="img-responsive" src="/legalworld/images/consulting1.png" alt="" width="470" height="334"/></div>
            <div class="col-md-10 col-lg-6">
              <h3>@lang('legalworld.mis')</h3>
              <p>@lang('legalworld.mistekst')</p>
              <p><strong>@lang('legalworld.mistekst1')</strong></p>
              <p>@lang('legalworld.mistekst2')</p>
              <p><strong>@lang('legalworld.mistekst3')</strong></p>
              <p>@lang('legalworld.mistekst4')</p>
              <p><strong>@lang('legalworld.mistekst5')</strong></p>
              <p>@lang('legalworld.mistekst6')</p>
            </div>
          </div>
          <div class="group group-middle"><a class="button button-primary button-winona" href="{{ route('legalworld.services') }}">@lang('legalworld.services')</a><a class="button button-primary-outline button-winona" href="{{ route('legalworld.contact') }}">@lang('legalworld.contacts')</a></div>
        </div>
      </section>
@endsection
