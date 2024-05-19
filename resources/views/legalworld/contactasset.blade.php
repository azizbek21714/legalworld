<section class="section bg-gray-100">
    <div class="range justify-content-xl-between">
        <div class="cell-xl-6 align-self-center container">
            <div class="row">
                <div class="col-lg-9 cell-inner">
                    <div class="section-lg">
                        <h3 class="wow-outer"><span class="wow slideInDown">@lang('legalworld.contacts')</span></h3>
                        <!-- RD Mailform-->
                        <form class="rd-form rd-mailform" method="post" action="{{ route('legalworld.contact2') }}">
                            @csrf
                            <div class="row row-10">
                                <div class="col-md-6 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside" for="contact-first-name">@lang('legalworld.ism')</label>
                                        <input class="form-input" id="contact-first-name" type="text" name="name"
                                            data-constraints="@Required">
                                    </div>
                                </div>
                                <div class="col-md-6 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside" for="contact-last-name">@lang('legalworld.fam')</label>
                                        <input class="form-input" id="contact-last-name" type="text" name="surname"
                                            data-constraints="@Required">
                                    </div>
                                </div>
                                <div class="col-md-6 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside" for="contact-email">E-mail</label>
                                        <input class="form-input" id="contact-email" type="email" name="email"
                                            data-constraints="@Email @Required">
                                    </div>
                                </div>
                                <div class="col-md-6 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside" for="contact-phone">@lang('legalworld.tel')</label>
                                        <input class="form-input" id="contact-phone" type="text" name="phone"
                                            data-constraints="@PhoneNumber">
                                    </div>
                                </div>
                                <div class="col-12 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside" for="contact-message">@lang('legalworld.habar')</label>
                                        <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="group group-middle">
                                <div class="wow-outer">
                                    <button class="button button-primary button-winona wow slideInRight"
                                        type="submit">@lang('legalworld.yubor')</button>
                                </div>
                                <p>@lang('legalworld.yoki')</p>
                                <div class="wow-outer"><a
                                        class="button button-primary-outline button-icon button-icon-left button-winona wow slideInLeft"
                                        href="https://t.me/+998773011551">
                                        <span class="icon text-primary mdi mdi-telegram"></span>@lang('legalworld.telegram')</a></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="cell-xl-6 height-fill wow fadeIn">
            <img src="/legalworld/images/contact.png" alt="" style="margin: 10%">
        </div>
    </div>

    <!-- Map Section Start -->
    <div class="map-area">
        <div class="map-content">
            <div class="map-canvas" id="contact-map"></div>
        </div>
    </div>
    <!-- Map Section End -->
</section>
