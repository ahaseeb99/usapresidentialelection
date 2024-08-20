@extends('layouts.app') @section('content')
<section class="main news-hero-banner-bg">
  <h1 class="pb-0 mb-0">@lang('words.companyinfo')</h1>
  <div class="biden--img d-none"></div>
</section>

<section class="presidential--election--block text-center ptb-120">
        
        <div class="container pe--inner presidential--election">
            <div class="left--block img--block">
                <img src="{{ asset('public/images/map-chutiyapa.png') }}" alt="" width="100%" />
            </div>
            <div class="right--block content--block">
                <?php $language = session()->get('locale') ?>
                @if($language == 'fr')
                    <h2 class="presidential--election-heading black-color">
                        Pour rester <span style="font-weight: 700">en contact</span>
                    </h2>
                @else
                    <h2 class="presidential--election-heading black-color">
                        Get in <span style="font-weight: 700">touch</span>
                    </h2>
                @endif
                <div class="pbd_company--info--block">
                    <div class="pbd_company--info--icon--block">
                        <i class="fa-solid fa-envelope"></i>
                        <span>
                            <a href="mailto:info@2024usaPresidentialelection.com">
                                info@2024usapresidentialelection.com
                            </a>
                        </span>
                    </div>
                    <div class="pbd_company--info--icon--block">
                        <i class="fa-solid fa-location-dot"></i>
                        <span>
                            <a href="https://maps.app.goo.gl/SRxHTSTySi6SQUdN9" target="_blank">
                                    <strong> Fields Street Analytics </strong> <br/>
                                    Fields Street, 7312 <br/>
                                    Steinsel, Luxembourg
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection