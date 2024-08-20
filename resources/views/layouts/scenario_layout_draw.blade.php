@extends('../layouts/app')
@section('content')
    <section class="main scenario--01--hero-banner-bg">
        <h1>
            <?php $language = session()->get('locale') ?>
            @if($language == 'fr') 
                Egalité
                <span class="white-color" style="font-weight: 700">entre</span><br>
                <span class="primary-color" style="font-weight: 700">les Démocrates</span>
                 &
                <span class="secondary-color" style="font-weight: 700">les Républicains</span>
            @elseif($language == 'es')
                Igualdad
                <span class="white-color" style="font-weight: 700">entre</span><br>
                <span class="primary-color" style="font-weight: 700">Demócratas</span>
                 y
                <span class="secondary-color" style="font-weight: 700">Republicanos</span>
            @elseif($language == 'pt')
                Igualdade
                <span class="white-color" style="font-weight: 700">entre</span><br>
                <span class="primary-color" style="font-weight: 700">Democratas</span>
                 e
                <span class="secondary-color" style="font-weight: 700">Republicanos</span>
            @else
                @lang('words.draw')
                <span class="white-color" style="font-weight: 700">@lang('words.scenario')</span>
                @lang('words.for')
                <span class="primary-color" style="font-weight: 700">@lang('words.DEM')</span> &
                <span class="secondary-color" style="font-weight: 700">@lang('words.REP')</span>
            @endif
            
        </h1>
        @if($language == 'es')
            <p class="herp--para white-color">
            Igual número de votos electorales para
            <span style="color: #6ba5ff; font-weight: 600">Demócratas</span> y
            <span class="secondary-color" style="font-weight: 600">Republicanos</span>
            </p>
        @elseif($language == 'pt')
            <p class="herp--para white-color">
            @lang('words.Equal number of electoral votes for')
            <span style="color: #6ba5ff; font-weight: 600">@lang('words.DEM')</span> e
            <span class="secondary-color" style="font-weight: 600">@lang('words.REP')</span>
            </p>
        @else
            <p class="herp--para white-color">
            @lang('words.Equal number of electoral votes for')
            <span style="color: #6ba5ff; font-weight: 600">@lang('words.DEM')</span> &
            <span class="secondary-color" style="font-weight: 600">@lang('words.REP')</span>
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
