@extends('layouts.legalworld')

@section('content')

      <!-- Breadcrumbs -->
      <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(/legalworld/images/breadcrumbs-image-1.jpg);">
        <div class="breadcrumbs-custom-inner">
          <div class="container breadcrumbs-custom-container">
            <div class="breadcrumbs-custom-main">
              <h6 class="breadcrumbs-custom-subtitle title-decorated">@lang('legalworld.arb')</h6>
              <h1 class="breadcrumbs-custom-title">@lang('legalworld.arb')</h1>
            </div>
            <ul class="breadcrumbs-custom-path">
              <li><a href="{{ route('legalworld.main') }}">@lang('legalworld.home')</a></li>
              <li><a href="{{ route('legalworld.services') }}">@lang('legalworld.services')</a></li>
              <li class="active">@lang('legalworld.arb')</li>
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
                <h3>@lang('legalworld.arb')</h3>
                <p>   Каждый предприниматель в современной бизнес сфере хочет, чтобы его бизнес развивался без каких-либо потерь или рисков.
                  Для этого, в первую очередь, необходимо позаботиться о правильном оформлении документов, чтобы проверяющим органам не дать
                  повода для штрафов.  Как правило, выделяют несколько факторов, которые могут привести к бизнес потерям: <br>
                   - Неграмотная юридическая служба предприятия; <br>
                   - Некорректное оформление документов и договоров с партнерами, что приводит к снижению ожидаемой прибыли, а то и убыткам;<br>
                   - Юридическая и бухгалтерские отделы не взаимодействуют между собой в должной мере. <br>
                   Зачастую такое положение приводит к раздору внутри предприятия. <strong>Юридическая помощь нужна даже в урегулировании конфликтов
                   между работодателем и сотрудниками.</strong> Поэтому не стоит пренебрегать такой важной составляющей любого бизнеса.
                </p>
            </div>
            <div class="col-md-10 col-lg-6 col-xl-5"><img class="img-responsive" src="/legalworld/images/law.png" alt="" width="570" height="368"/>
            </div>
          </div>
          <div class="row row-50 justify-content-center justify-content-lg-between">
            <div class="col-md-10 col-lg-5 col-xl-5"><img class="img-responsive" src="/legalworld/images/law1.png" alt="" width="570" height="368"/></div>
            <div class="col-md-10 col-lg-7">
                <h3>Что мы предлагаем </h3>
                <ul>
                    <li>•	Регистрация компании (ООО, АО, СП, ЧП и др. формы собственности);</li>
                    <li>•	Регистрация и изменение фирменного наименования предприятия;</li>
                    <li>•	Изменения размера Уставного фонда предприятия (уменьшение/увеличение);</li>
                    <li>•	Аккредитация представительств;</li>
                    <li>•	Получение разрешения на привлечение иностранной рабочей силы в Узбекистане;</li>
                    <li>•	Реорганизация юридического лица в форме присоединения;</li>
                    <li>•	Реорганизация юридического лица в форме разделения;</li>
                    <li>•	Изменения юридического адреса;</li>
                    <li>•	Ликвидация предприятия;</li>
                    <li>•	Изменения состава участников предприятия;</li>
                    <li>•	Сопровождение в получении лицензий и разрешительных документов в Узбекистане;</li>
                    <li>•	Учреждение филиалов на территории Республики Узбекистан;</li>
                    <li>•	Бизнес-риски. Помощь в соблюдении правил эксплуатации и законодательства;</li>
                    <li>•	Сопровождение клиентов для решения сложностей, связанных с финансовыми потерями в ходе судебных разбирательств в результате мошенничества, страховых и других споров.</li>
                </ul>
              <a class="button button-lg button-primary button-winona" href="{{route('legalworld.contact')}}">@lang('legalworld.contacts')</a>
            </div>
          </div>
        </div>
      </section>

@endsection
