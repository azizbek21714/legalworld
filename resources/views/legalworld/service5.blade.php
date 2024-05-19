@extends('layouts.legalworld')

@section('content')

      <!-- Breadcrumbs -->
      <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(/legalworld/images/breadcrumbs-image-1.jpg);">
        <div class="breadcrumbs-custom-inner">
          <div class="container breadcrumbs-custom-container">
            <div class="breadcrumbs-custom-main">
              <h6 class="breadcrumbs-custom-subtitle title-decorated">@lang('legalworld.cor')</h6>
              <h1 class="breadcrumbs-custom-title">@lang('legalworld.cor')</h1>
            </div>
            <ul class="breadcrumbs-custom-path">
              <li><a href="{{ route('legalworld.main') }}">@lang('legalworld.home')</a></li>
              <li><a href="{{ route('legalworld.services') }}">@lang('legalworld.services')</a></li>
              <li class="active">@lang('legalworld.cor')</li>
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
              <h3>@lang('legalworld.cor')</h3>
              <ul>
                <li>•	5555555555555Консультирование в проведении тендерных и конкурсных торгов для предприятий любых форм собственности и сферы деятельности;</li>
                <li>•	Определение способов и логистических маршрутов транспортировки грузов с одновременным расчетом стоимости;</li>
                <li>•	Разработка бизнес-планов и ТЭО;</li>
                <li>•	Менеджмент, построение и оптимизация бизнес-процессов;</li>
                <li>•	Консультации по экологичности, энергоэффективности, пищевой и информационной безопасности предприятия. (ISO 9001:2015, ISO 14001:2015, ISO 45001:2018, ISO 27001:2013, ISO 22000:2018, ISO 50001:2018);</li>
                <li>•	Проведение Технико-Экономических Исследований (анализ способности успешного завершения проекта с учетом правовых, экономических, технологических, временных и других факторов);</li>
                <li>•	Бизнес-тренинги и Семинары Основные услуги включают: Оценка качества прибыли; Анализ баланса активов и обязательств; Оценка денежных потоков и прогнозов; Оценка позиционирования на рынке, проблем отрасли и возможностей и потенциальных партнерств; Обзор бизнес-планов; Оценка деятельности и цепочка поставок;</li>
                <li>•	Создание отдела продаж под ключ;</li>
                <li>•	Внедрение новых технологий и методов для увеличения продаж;</li>
                <li>•	Оказание консультационных услуг в сфере ВЭД;</li>
            </ul>
              <a class="button button-lg button-primary button-winona" href="{{route('legalworld.contact')}}">@lang('legalworld.contacts')</a>
            </div>
            <div class="col-md-10 col-lg-6"><img class="img-responsive" src="/legalworld/images/con1.svg" alt="" width="570" height="368"/>
            </div>
          </div>
        </div>
      </section>

@endsection
