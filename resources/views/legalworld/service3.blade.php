@extends('layouts.legalworld')

@section('content')

      <!-- Breadcrumbs -->
      <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(/legalworld/images/breadcrumbs-image-1.jpg);">
        <div class="breadcrumbs-custom-inner">
          <div class="container breadcrumbs-custom-container">
            <div class="breadcrumbs-custom-main">
              <h6 class="breadcrumbs-custom-subtitle title-decorated">@lang('legalworld.kap')</h6>
              <h1 class="breadcrumbs-custom-title">@lang('legalworld.kap')</h1>
            </div>
            <ul class="breadcrumbs-custom-path">
              <li><a href="{{ route('legalworld.main') }}">@lang('legalworld.home')</a></li>
              <li><a href="{{ route('legalworld.services') }}">@lang('legalworld.services')</a></li>
              <li class="active">@lang('legalworld.kap')</li>
            </ul>
          </div>
        </div>
      </section>
      <!-- A Few Words About Us-->

      <!-- A Few Words About Us-->
      <section class="section section-lg bg-gray-100">
        <div class="container">
          <div class="row row-50 justify-content-center justify-content-lg-between">
            <div class="col-md-10 col-lg-6">
              <h3>@lang('legalworld.kap')</h3>
              <ul>
                  <li>•	Проведение маркетинговых исследований качественных/количественных, SWOT - анализ, определение максимального,
                    усредненного и минимального уровней цен для предтендерной и предконкурсной проработки во всем диапазоне номенклатуры
                    товаров и услуг на внутреннем и внешнем рынках, востребованных организациями и предприятиями на территории Республики Узбекистан;</li>
                  <li>•	Помощь в повышении операционной эффективности;</li>
                  <li>•	Маркетинговый анализ товаров и услуг;</li>
                  <li>•	Социальный медиа маркетинг и продвижение товаров;</li>
                  <li>•	Рекламные ролики, Баннеры, Реклама по ТВ и Радио;</li>
                  <li>•	Абонентское (аутсорсинговое) обслуживание предприятия по Маркетингу;</li>
              </ul>
              <a class="button button-lg button-primary button-winona" href="{{route('legalworld.contact')}}">@lang('legalworld.contacts')</a>
            </div>
            <div class="col-md-10 col-lg-6 col-xl-5"><img class="img-responsive" src="/legalworld/images/consulting1.png" alt="" width="570" height="368"/>
            </div>
          </div>
        </div>
      </section>

@endsection
