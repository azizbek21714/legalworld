@extends('layouts.legalworld')

@section('content')
      <!-- Breadcrumbs -->
      <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(/legalworld/images/breadcrumbs-image-1.jpg);">
        <div class="breadcrumbs-custom-inner">
          <div class="container breadcrumbs-custom-container">
            <div class="breadcrumbs-custom-main">
              <h6 class="breadcrumbs-custom-subtitle title-decorated">@lang('legalworld.services')</h6>
              <h1 class="breadcrumbs-custom-title">@lang('legalworld.services')</h1>
            </div>
            <ul class="breadcrumbs-custom-path">
              <li><a href="{{ route('legalworld.main') }}">@lang('legalworld.home')</a></li>
              <li class="active">@lang('legalworld.services')</li>
            </ul>
          </div>
        </div>
      </section>
      <!-- A Few Words About Us-->

    @include('legalworld/serviceasset')

@endsection
