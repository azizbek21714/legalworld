@extends('layouts.legalworld')

@section('content')
      <!-- Slider Light-->
      <section class="swiper-container swiper-slider swiper-slider-light" data-loop="true" data-autoplay="5000" data-speed="1200" data-effect="interleave">
        <div class="swiper-wrapper">
          <div class="swiper-slide" data-slide-bg="/legalworld/images/slide-2.jpg">
            <div class="slide-inner">
              <div class="container">
                <div class="swiper-slide-caption">
                  <h1 class="wow-outer"><span class="fw-light wow-outer"><span class="wow" data-caption-animate="slideInDown">@lang('legalworld.you')</span></span><span class="fw-bold wow-outer"><span class="wow" data-caption-animate="slideInDown" data-wow-delay="0">@lang('legalworld.kim')</span></span></h1>
                  <div class="wow-outer button-outer"><a class="button button-lg button-primary button-winona wow" href="{{route('legalworld.contact')}}" data-caption-animate="slideInDown" data-wow-delay=".2s">@lang('legalworld.mur')</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide" data-slide-bg="/legalworld/images/slide-3.jpg">
            <div class="slide-inner">
              <div class="container">
                <div class="swiper-slide-caption">
                  <h1 class="wow-outer"><span class="fw-light wow-outer"><span class="wow" data-caption-animate="slideInDown">@lang('legalworld.you')</span></span><span class="fw-bold wow-outer"><span class="wow" data-caption-animate="slideInDown" data-wow-delay="0">@lang('legalworld.kim')</span></span></h1>
                  <div class="wow-outer button-outer"><a class="button button-lg button-primary button-winona wow" href="{{route('legalworld.contact')}}" data-caption-animate="slideInDown" data-wow-delay=".2s">@lang('legalworld.mur')</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide" data-slide-bg="/legalworld/images/slide-1.jpg">
            <div class="slide-inner">
              <div class="container">
                <div class="swiper-slide-caption">
                  <h1 class="wow-outer"><span class="fw-light wow-outer"><span class="wow" data-caption-animate="slideInDown">@lang('legalworld.you')</span></span><span class="fw-bold wow-outer"><span class="wow" data-caption-animate="slideInDown" data-wow-delay="0">@lang('legalworld.kim')</span></span></h1>
                  <div class="wow-outer button-outer"><a class="button button-lg button-primary button-winona wow" href="{{route('legalworld.contact')}}" data-caption-animate="slideInDown" data-wow-delay=".2s">@lang('legalworld.mur')</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination-outer container">
          <div class="swiper-pagination swiper-pagination-modern swiper-pagination-marked" data-index-bullet="true"></div>
        </div>
      </section>
      <!-- A Few Words About Us-->
      <section class="section section-lg">
        <div class="container">
          <div class="row row-50 justify-content-center justify-content-lg-between flex-lg-row-reverse">
            <div class="col-md-10 col-lg-6 col-xl-5">
              <h3 class="wow-outer"><span class="wow slideInDown">@lang("legalworld.Несколько слов о нас")</span></h3>
              <p class="wow-outer"><span class="wow slideInDown" data-wow-delay=".05s">@lang('legalworld.Консалтинговая компания')</span></p>
              <p class="wow-outer"><span class="wow slideInDown" data-wow-delay=".1s"></span></p>
              <div class="wow-outer button-outer"><a class="button button-lg button-primary button-winona wow slideInDown" data-wow-delay=".1s" href="{{route('legalworld.about')}}">@lang('legalworld.kop')</a></div>
            </div>
            <div class="col-md-10 col-lg-6 wow-outer"><img class="img-responsive wow slideInLeft" src="/legalworld/images/our-team.png" alt="" width="570" height="368"/>
            </div>
          </div>
        </div>
      </section>
      <h3 class="text-center mb-5">@lang('legalworld.negabiz')</h3>
      <!-- Small Features-->
      <section class="section section-lg bg-gray-100">
        <div class="container">
          <div class="row row-30">
            <div class="col-sm-6 col-lg-4 wow-outer">
              <!-- Box Minimal-->
              <article class="box-minimal">
                <div class="box-minimal-icon fl-bigmug-line-user144 wow fadeIn"></div>
                <div class="box-minimal-main wow-outer">
                  <h4 class="box-minimal-title wow slideInDown text-center">@lang('legalworld.prof')</h4>
                  <p class="wow fadeInUpSmall text-center">@lang('legalworld.prof1')</p>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 wow-outer">
              <!-- Box Minimal-->
              <article class="box-minimal">
                <div class="box-minimal-icon fl-bigmug-line-checkmark14 wow fadeIn" data-wow-delay=".1s"></div>
                <div class="box-minimal-main wow-outer">
                  <h4 class="box-minimal-title wow slideInDown text-center" data-wow-delay=".1s">@lang('legalworld.sam')</h4>
                  <p class="wow fadeInUpSmall text-center" data-wow-delay=".1s">@lang('legalworld.sam1')</p>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 wow-outer">
              <!-- Box Minimal-->
              <article class="box-minimal">
                <div class="box-minimal-icon fl-bigmug-line-rectangular78 wow fadeIn" data-wow-delay=".2s"></div>
                <div class="box-minimal-main wow-outer">
                  <h4 class="box-minimal-title wow slideInDown text-center" data-wow-delay=".2s">@lang('legalworld.xabar')</h4>
                  <p class="wow fadeInUpSmall text-center" data-wow-delay=".2s">@lang('legalworld.xabar1')</p>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>
      <!-- Thin CTA-->
      <section class="section section-xs bg-primary-darker text-center">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-sm-10 col-md-12">
              <div class="box-cta-thin">
                <h4 class="wow-outer"><span class="wow slideInRight">@lang('legalworld.sav') <span class="fw-bold">@lang('legalworld.sav1')</span></span></h4>
                <div class="wow-outer button-outer"><a class="button button-primary button-winona wow slideInLeft" href="{{route('legalworld.contact')}}">@lang('legalworld.contacts')</a></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Services-->
      <section class="section-lg text-center">
        <div class="container">
          <h3 class="wow-outer"><span class="wow slideInUp">@lang('legalworld.prak')</span></h3>
          <h4 class="wow-outer"><span class="wow slideInDown text-width-1">@lang('legalworld.prak1')</span></h4>
          <p>@lang('legalworld.prak2')</p>
          <div class="row row-30 offset-top-2">
            <div class="col-sm-6 col-lg-3 wow-outer">
              <!-- Thumbnail Light-->
              <article class="thumbnail-light wow slideInLeft"><a class="thumbnail-light-media" href="{{route('legalworld.service-details', 1)}}"><img class="thumbnail-light-image" src="/legalworld/images/service1.png" alt="" width="270" height="300"/></a>
                <h5 class="thumbnail-light-title text-center"><a href="{{route('legalworld.service-details', 1)}}">@lang('legalworld.arb')</a></h5>
              </article>
            </div>
            <div class="col-sm-6 col-lg-3 wow-outer">
              <!-- Thumbnail Light-->
              <article class="thumbnail-light wow slideInLeft" data-wow-delay=".05s"><a class="thumbnail-light-media" href="{{route('legalworld.service-details', 2)}}"><img class="thumbnail-light-image" src="/legalworld/images/service2.png" alt="" width="270" height="300"/></a>
                <h5 class="thumbnail-light-title text-center"><a href="{{route('legalworld.service-details', 2)}}">@lang('legalworld.bank')</a></h5>
              </article>
            </div>
            <div class="col-sm-6 col-lg-3 wow-outer">
              <!-- Thumbnail Light-->
              <article class="thumbnail-light wow slideInLeft" data-wow-delay=".1s"><a class="thumbnail-light-media" href="{{route('legalworld.service-details', 3)}}"><img class="thumbnail-light-image" src="/legalworld/images/service3.png" alt="" width="270" height="300"/></a>
                <h5 class="thumbnail-light-title text-center"><a href="{{route('legalworld.service-details', 3)}}">@lang('legalworld.kap')</a></h5>
              </article>
            </div>
            <div class="col-sm-6 col-lg-3 wow-outer">
              <!-- Thumbnail Light-->
              <article class="thumbnail-light wow slideInLeft" data-wow-delay=".15s"><a class="thumbnail-light-media" href="{{route('legalworld.service-details', 4)}}"><img class="thumbnail-light-image" src="/legalworld/images/service4.png" alt="" width="270" height="300"/></a>
                <h5 class="thumbnail-light-title text-center"><a href="{{route('legalworld.service-details', 4)}}">@lang('legalworld.cor')</a></h5>
              </article>
            </div>
          </div>
        </div>
        <div class="wow-outer button-outer"><a class="button button-primary-outline button-winona offset-top-2 wow slideInUp" href="{{route('legalworld.services')}}">@lang('legalworld.vuslug')</a></div>
      </section>
      <!-- Testimonials-->
      <section class="section section-lg text-center">
        <div class="container">
          <h3 class="wow-outer"><span class="wow slideInDown">@lang('legalworld.partn')</span></h3>
          <!-- Owl Carousel-->
          <div class="owl-carousel wow fadeIn" data-items="1" data-md-items="2" data-lg-items="3" data-dots="true" data-nav="false" data-loop="true" data-margin="30" data-autoplay="true" data-stage-padding="0" data-mouse-drag="false">
            <blockquote class="quote-classic">
              <div class="quote-classic-meta">
                <div class="quote-classic-avatar"><img src="/legalworld/images/user2.png" alt="" width="96" height="96"/>
                </div>
                <div class="quote-classic-info">
                  <cite class="quote-classic-cite">Yakubov Zokir</cite>
                  <p class="quote-classic-caption">Директор "Legal World"</p>
                </div>
              </div>
              {{-- <div class="quote-classic-text">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis quis
                nobis tenetur enim fugiat nesciunt, sunt aliquam, nulla similique aut facere suscipit.
                Ex saepe, aperiam quam iure consectetur sit asperiores!</p>
              </div> --}}
            </blockquote>
            <blockquote class="quote-classic">
              <div class="quote-classic-meta">
                <div class="quote-classic-avatar"><img src="/legalworld/images/broker.png" alt="" width="96" height="96"/>
                </div>
                <div class="quote-classic-info">
                  <cite class="quote-classic-cite">Musaev Mansur</cite>
                  <p class="quote-classic-caption">Директор "Legal World Balance"</p>
                </div>
              </div>
              {{-- <div class="quote-classic-text">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis quis
                    nobis tenetur enim fugiat nesciunt, sunt aliquam, nulla similique aut facere suscipit.
                    Ex saepe, aperiam quam iure consectetur sit asperiores!</p>
              </div> --}}
            </blockquote>
            <blockquote class="quote-classic">
              <div class="quote-classic-meta">
                <div class="quote-classic-avatar"><img src="/legalworld/images/woman.png" alt="" width="96" height="96"/>
                </div>
                <div class="quote-classic-info">
                  <cite class="quote-classic-cite">Choy Lee</cite>
                  <p class="quote-classic-caption">Директор "YOUNG IN"</p>
                </div>
              </div>
              {{-- <div class="quote-classic-text">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis quis
                    nobis tenetur enim fugiat nesciunt, sunt aliquam, nulla similique aut facere suscipit.
                    Ex saepe, aperiam quam iure consectetur sit asperiores!</p>
              </div> --}}
            </blockquote>
            <blockquote class="quote-classic">
              <div class="quote-classic-meta">
                <div class="quote-classic-avatar"><img src="/legalworld/images/man.png" alt="" width="96" height="96"/>
                </div>
                <div class="quote-classic-info">
                  <cite class="quote-classic-cite">Djuraev Azizbek</cite>
                  <p class="quote-classic-caption">Директор "ITG"</p>
                </div>
              </div>
              {{-- <div class="quote-classic-text">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis quis
                    nobis tenetur enim fugiat nesciunt, sunt aliquam, nulla similique aut facere suscipit.
                    Ex saepe, aperiam quam iure consectetur sit asperiores!</p>
              </div> --}}
            </blockquote>
          </div>
        </div>
      </section>
      <!-- Contacts-->
      @include('legalworld/contactasset')
      <!-- Contact Info-->
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
                <div class="icon icon-lg mdi mdi-email text-primary"></div><a class="link-default" href="mailto:investandtradegroup@gmail.com">info@legelworld.uz</a>
              </div>
            </div>
            <div class="layout-bordered-item wow-outer">
              <div class="layout-bordered-item-inner wow slideInUp">
                <div class="icon icon-lg mdi mdi-map-marker text-primary"></div><a class="link-default" href="#">@lang('legalworld.add')<br>@lang('legalworld.addd')</a>
              </div>
            </div>
          </div>
        </div>
      </section>


@endsection
