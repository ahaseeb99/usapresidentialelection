@extends('../layouts/app')
@section('content')
    <section class="main scenario--01--hero-banner-bg">
        <h1>
            <?php $language = session()->get('locale') ?>
            @if($language == 'fr')
                @lang('words.12 Combination')
                <span class="secondary-color" style="font-weight: 700">@lang('words.scenarios')</span>
                @lang('words.pour')
                <span class="secondary-color" style="font-weight: 700">@lang('words.REP')</span>
            @elseif($language == 'es') 
                12 escenarios ganadores para
                <!--<span class="secondary-color" style="font-weight: 700">ganadores para</span>-->
                <span class="secondary-color" style="font-weight: 700">los Republicanos</span>
            @elseif($language == 'pt') 
                12 cenários vencedores para
                <!--<span class="secondary-color" style="font-weight: 700">ganadores para</span>-->
                <span class="secondary-color" style="font-weight: 700">os Republicanos</span>
            @else
                @lang('words.12 Combination')
                <span class="secondary-color" style="font-weight: 700">@lang('words.scenarios')</span>
                @lang('words.for')
                <span class="secondary-color" style="font-weight: 700">@lang('words.REP')</span>
            @endif
        </h1>
        <p class="herp--para white-color">
            @lang('words.republican:h2')
            <span style="color: #DC0B10; font-weight: 600">@lang('words.12 possible combinations')</span>
        </p>
        <div class="biden--img"></div>
    </section>

    <section class="dem--scen--01">
        <div class="left--block">
            @yield('section-one')
        </div>
        <div class="advert--block">
            <div class="advert--block--1">
                <div class="block--title secondary-bg">
                    <h3>
                        @lang('words.ads')
                    </h3>
                </div>
                <div class="advert--1 dem">
                    <img src="{{ asset('public/images/advert-1.png') }}" alt="">
                </div>
                <div class="advert--2 dem">
                    <img src="{{ asset('public/images/advert-2.png') }}" alt="">
                </div>
            </div>
            <div class="advert--block--1">
                <div class="block--title secondary-bg">
                    <h3>
                        @lang('words.ads')
                    </h3>
                </div>
                <div class="advert--1 dem">
                    <img src="{{ asset('public/images/advert-3.png') }}" alt="">
                </div>
                <div class="advert--2 dem">
                    <img src="{{ asset('public/images/advert-4.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>


    <section class="map--div--block--dem--scen--01">
        @yield('section-two')
    </section>
@endsection
