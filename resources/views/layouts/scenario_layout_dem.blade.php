@extends('../layouts/app')
@section('content')
    <section class="main scenario--01--hero-banner-bg">
        <h1>
            <?php $language = session()->get('locale') ?>
            @if($language == 'fr')
                @lang('words.democrat-1:h1') 
                <span class="primary-color" style="font-weight: 700">@lang('words.scenarios')</span> @lang('words.pour')
                <span class="primary-color" style="font-weight: 700">@lang('words.DEM')</span>
            @elseif($language == 'es')
                9 escenarios
                <span class="primary-color" style="font-weight: 700">ganadores para</span> los
                <span class="primary-color" style="font-weight: 700">Demócratas</span>
            @elseif($language == 'pt')
                9 cenários
                <span class="primary-color" style="font-weight: 700">vencedores para</span> os  
                <span class="primary-color" style="font-weight: 700">Democratas</span>
            @else
                @lang('words.democrat-1:h1') 
                <span class="primary-color" style="font-weight: 700">@lang('words.scenarios')</span> @lang('words.for')
                <span class="primary-color" style="font-weight: 700">@lang('words.DEM')</span>
            @endif
        </h1>
        @if($language == 'es')
            <p class="herp--para white-color">
                Da tu predicción después de examinar cada carta mostrando las
                <span style="color: #6ba5ff; font-weight: 600">9 combinaciones posibles</span>
            </p>
        @else
            <p class="herp--para white-color">
            @lang('words.democrat-1:h2')
            <span style="color: #6ba5ff; font-weight: 600">@lang('words.9 possible combinations')</span>
            </p>
        @endif
        <div class="biden--img"></div>
    </section>

    <section class="dem--scen--01">
        <div class="left--block">
            @yield('section-one')
        </div>
        <div class="advert--block">
            <div class="advert--block--1">
                <div class="block--title primary-bg">
                    <h3>
                        @lang('words.ads')
                    </h3>
                </div>
                <div class="advert--1 rep">
                    <img src="{{ asset('public/images/advert-1.png') }}" alt="">
                </div>
                <div class="advert--2 rep">
                    <img src="{{ asset('public/images/advert-2.png') }}" alt="">
                </div>
            </div>
            <div class="advert--block--1">
                <div class="block--title primary-bg">
                    <h3>
                        @lang('words.ads')
                    </h3>
                </div>
                <div class="advert--1 rep">
                    <img src="{{ asset('public/images/advert-3.png') }}" alt="">
                </div>
                <div class="advert--2 rep">
                    <img src="{{ asset('public/images/advert-4.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="map--div--block--dem--scen--01">
        @yield('section-two')
    </section>
@endsection
