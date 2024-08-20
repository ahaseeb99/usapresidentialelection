@extends('layouts.app')
@section('content')
    <section class="main scenario--01--hero-banner-bg">
        <h1>
            <?php $language = session()->get('locale')?>
            @if($language == 'fr')
                @lang('words.Click To')
                <span class="secondary-color" style="font-weight: 700"> @lang('words.Your')</span>
                <span style="color: #6ba5ff; font-weight: 700">@lang('words.scenario')</span>
                <span style="font-weight: 700">@lang('words.Preferred')</span>
            @elseif($language == 'es')
                <!--@lang('words.Click To')-->
                <span class="secondary-color" style="font-weight: 700"> Seleccione</span>
                <span style="color: #6ba5ff; font-weight: 700">su escenario</span>
                <span style="font-weight: 700">preferido</span>
            @elseif($language == 'pt')
                <!--@lang('words.Click To')-->
                <span class="secondary-color" style="font-weight: 700">Selecione</span>
                <span style="color: #6ba5ff; font-weight: 700">seu cenário</span>
                <span style="font-weight: 700">favorito</span>
            @else
                @lang('words.Click To')
                <span class="secondary-color" style="font-weight: 700">@lang('words.vote') @lang('words.On') @lang('words.Your')</span>
                <span style="color: #6ba5ff; font-weight: 700">@lang('words.Preferred')</span>
                <span style="font-weight: 700">@lang('words.scenario')</span>
            @endif
        </h1>
        @if($language == 'es')
            <p class="herp--para white-color">
            <span style="font-weight: 600">Para validar su predicción,</span>
            elija una de las siguientes opciones con respecto al
            <span style="font-weight: 600; color: #dc0b10">escenario más</span>
            probable en términos de
            <span style="color: #6ba5ff; font-weight: 700">votos electorales por estado de EE. UU.</span>
            </p>
        @elseif($language == 'pt')
            <p class="herp--para white-color">
            <span style="font-weight: 600">Para validar sua previsão,</span>
            escolha uma das seguintes opções para o
            <span style="font-weight: 600; color: #dc0b10">cenário mais</span>
            provável em termos de
            <span style="color: #6ba5ff; font-weight: 700">votos eleitorais por estado dos EUA</span>
            </p>
        @else
            <p class="herp--para white-color">
            <span style="font-weight: 600">@lang('words.To validate your prediction,')</span>
            @lang('words.please choose')
            <span style="font-weight: 600; color: #dc0b10">@lang('words.the most')</span>
            @lang('words.in terms')
            <span style="color: #6ba5ff; font-weight: 700">@lang('words.U.S. State.')</span>
            </p>
        @endif
        <p class="herp--para white-color mt-3">
            <span style="font-weight: 600;font-size:24px;">
                @lang('words.scenario:v')
            </span>
        </p>
        <div class="biden--img"></div>
    </section>

    <section class="three-logos" id="threelog">
        <div class="inner-container">
            <div class="left-arrow"></div>
            <div class="remocan">
                <a href="/democrat/scenario-1">
                    <div class="democrat">
                        <img src="{{ asset('public/images/democrat.png') }}" alt="" />
                        <h3>@lang('words.Democrats')</h3>
                    </div>
                </a>
                <a href="/draw">
                    <div class="democrat">
                        <img src="{{ asset('public/images/draw.png') }}" alt="" />
                        <h3>@lang('words.draw')</h3>
                    </div>
                </a>
                <a href="/republican/scenario-1">
                    <div class="democrat">
                        <img src="{{ asset('public/images/republic.png') }}" alt="" />
                        <h3>@lang('words.Republicans')</h3>
                    </div>
                </a>
            </div>
            <div class="right-arrow"></div>
        </div>
    </section>

    <section class="retained-states container ptb-80">
        <?php $language = session()->get('locale') ?>
        @if($language == 'fr')
            <h2 class="black-color">
                Les Etats indécis qui peuvent basculer<span class="primary-color"> côté Démocrates</span>
                ou
                <span class="secondary-color">côté Républicains</span>
                <!--<span>@lang('words.Republicans')</span>-->
                <span class="black-color" style="font-weight: 300">sont:</span>
            </h2>
        @elseif($language == 'es')
            <h2 class="black-color">
                Los estados indecisos que pueden inclinarse hacia<span class="primary-color"> los Demócratas</span>
                o
                <span class="secondary-color">los Republicanos</span>
                <!--<span>@lang('words.Republicans')</span>-->
                <span class="black-color" style="font-weight: 300">son :</span>
            </h2>
        @elseif($language == 'pt')
            <h2 class="black-color">
                Os estados indecisos que podem mudar para o<span class="primary-color"> lado Democrata</span>
                ou
                <span class="secondary-color">Republicano</span>
                <!--<span>@lang('words.Republicans')</span>-->
                <span class="black-color" style="font-weight: 300">são:</span>
            </h2>
        @else
            <h2 class="primary-color">
                @lang('words.The Retained')<span class="black-color"> @lang('words.6')</span>
                <span class="secondary-color">@lang('words.toss')</span>
                <!--<span>@lang('words.Republicans')</span>-->
                <span class="black-color" style="font-weight: 300"> @lang('words.States are')</span>
            </h2>
        @endif
        
        <?php $language = session()->get('locale') ?>
        @if($language == 'fr')
            <p class="text-center">
                Si vous voulez voir la carte des États américains définis comme indécis <br /> lors de l’Élection présidentielle de 2024
                @lang('words.Presidential Election, click on one of the U.S. States flags')
            </p>
        @elseif($language == 'es')
            <p class="text-center">
                Si quieres ver el mapa de los estados de EE.UU. <br /> definidos como indecisos en las Elecciones Presidenciales de 2024,
                haga clic en una de las banderas de los estados americanos
            </p>
        @elseif($language == 'pt')
            <p class="text-center">
                Se você quiser ver o mapa dos estados dos EUA definidos como indecisos <br /> durante as eleições presidenciais de 2024 clique em uma das bandeiras dos estados americanos
            </p>
        @else
            <p class="text-center">
                @lang('words.If you want to see the map of the U.S. States which have been defined as Toss-Up States') <br /> @lang('words.in the 2024')
                @lang('words.Presidential Election, click on one of the U.S. States flags')
            </p>
        @endif
        <div class="countries-flags ptb-40">
            <div class="county-flag">
                <a href="{{ url('/toss-up-states') }}">
                    <img src="{{ asset('public/images/f-1.png') }}" alt="" />
                    <h3>
                        @lang('words.arizona') <br />
                        <span>AZ: 11</span>
                    </h3>
                </a>
            </div>

            <div class="county-flag">
                <a href="{{ url('/toss-up-states') }}">
                    <img src="{{ asset('public/images/f-2.png') }}" alt="" />
                    <h3>
                        @lang('words.georgia') <br />
                        <span>GA: 16</span>
                    </h3>
                </a>
            </div>

            <div class="county-flag">
                <a href="{{ url('/toss-up-states') }}">
                    <img src="{{ asset('public/images/f-3.png') }}" alt="" />
                    <h3>
                        @lang('words.michigan') <br />
                        <span>MI: 15</span>
                    </h3>
                </a>
            </div>
        </div>

        <div class="countries-flags">
            <div class="county-flag">
                <a href="{{ url('/toss-up-states') }}">
                    <img src="{{ asset('public/images/f-4.png') }}" alt="" />
                    <h3>
                        @lang('words.nevada') <br />
                        <span>NV: 6</span>
                    </h3>
                </a>
            </div>

            <div class="county-flag">
                <a href="{{ url('/toss-up-states') }}">
                    <img src="{{ asset('public/images/f-5.png') }}" alt="" />
                    <h3>
                        @lang('words.pennsylvania') <br />
                        <span>PA: 19</span>
                    </h3>
                </a>
            </div>

            <div class="county-flag">
                <a href="{{ url('/toss-up-states') }}">
                    <img src="{{ asset('public/images/f-6.png') }}" alt="" />
                    <h3>
                        @lang('words.wisconsin')<br />
                        <span>WI: 10</span>
                    </h3>
                </a>
            </div>
        </div>
    </section>
@endsection
