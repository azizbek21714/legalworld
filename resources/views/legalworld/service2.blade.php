@extends('layouts.legalworld')

@section('content')

      <!-- Breadcrumbs -->
      <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(/legalworld/images/breadcrumbs-image-1.jpg);">
        <div class="breadcrumbs-custom-inner">
          <div class="container breadcrumbs-custom-container">
            <div class="breadcrumbs-custom-main">
              <h6 class="breadcrumbs-custom-subtitle title-decorated">@lang('legalworld.bank')</h6>
              <h1 class="breadcrumbs-custom-title">@lang('legalworld.bank')</h1>
            </div>
            <ul class="breadcrumbs-custom-path">
              <li><a href="{{ route('legalworld.main') }}">@lang('legalworld.home')</a></li>
              <li><a href="{{ route('legalworld.services') }}">@lang('legalworld.services')</a></li>
              <li class="active">@lang('legalworld.bank')</li>
            </ul>
          </div>
        </div>
      </section>
      <!-- A Few Words About Us-->

      <!-- A Few Words About Us-->
      <section class="section section-lg bg-gray-100">
        <div class="container">
          <div class="row row-50 justify-content-center justify-content-lg-between">
            <div class="col-md-10 col-lg-6 col-xl-5">
              <h3>@lang('legalworld.bank')</h3>
              <p>Каждое юридическое лицо должен вести бухгалтерский учет для себя и налоговых органов.
                Даже если предпринимательская деятельность приостановлена, то необходимо вести бухучет
                и ОБЯЗАТЕЛЬНО должны сдаваться отчеты в налоговые органы, с предоставлением нулевых балансов.</p>
                <p>Как правило, в штате многих компаний работают бухгалтера, которые и занимаются бухгалтерской
                    отчетностью. Но в последнее время особым спросом пользуется услуга ведения бухгалтерской отчетности
                    сторонними компаниями. Это выгодно, нежели выплачивать заработную плату штату бухгалтеров. Кроме того,
                    большинство небольших компаний сдают минимальные отчеты, которые при обращении к профессионалам,
                    обходятся дешевле, нежели заработная плата штатного бухгалтера.</p>
                <p>Одной из ведущих компаний современного рынка является Consulting Partners, где вам предлагают ведение
                    бухгалтерской отчетности от А до Я. Здесь вам окажут профессиональные бухгалтерские услуги, которые
                    избавят вас от нежелательных проблем с налоговыми органами, и сэкономят ваши денежные средства.</p>
            </div>
            <div class="col-md-10 col-lg-6"><img class="img-responsive" src="/legalworld/images/bux1.svg" alt="" width="570" height="368"/>
            </div>
          </div>
          <div class="row row-50 justify-content-center justify-content-lg-between">
            <div class="col-md-10 col-lg-5 col-xl-5"><img class="img-responsive" src="/legalworld/images/bux2.svg" alt="" width="570" height="368"/></div>
            <div class="col-md-10 col-lg-7">
                <h3>Что мы предлагаем </h3>
                <ul>
                    <li>•	Бухгалтерское сопровождение;</li>
                    <li>•	Восстановление бухгалтерского учета в Узбекистане;</li>
                    <li>•	Консультация по налогообложению в Узбекистане;</li>
                    <li>•	Консультации и поддержка в любой форме транзакционных операций, продажи, приобретения, оценки глобального рынка капитала и т. д.;</li>
                    <li>•	Прединвестиционный анализ «Due diligence»;</li>
                    <li>•	Продление и реструктуризация - услуги по назначению компаний и частных лиц, акционеров или кредиторов в их финансовых проблемах;</li>
                </ul>
              <a class="button button-lg button-primary button-winona" href="{{route('legalworld.contact')}}">@lang('legalworld.contacts')</a>
            </div>
          </div>
        </div>
      </section>

@endsection
