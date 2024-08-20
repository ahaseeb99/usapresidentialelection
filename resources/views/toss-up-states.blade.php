@extends('layouts.app')
@section('content')
    <script src="{{ asset('public/draw-map/toss-up-state/mapdata.js') }}"></script>
    <script src="{{ asset('public/draw-map/toss-up-state/usmap.js') }}"></script>

    <section class="main news-hero-banner-bg">
        <?php $language = session()->get('locale') ?>
        @if($language == 'fr')
            <h1>
                <span style="font-weight: 700">Etats indécis </span><br>
                <span class="secondary-color" style="font-weight: 700">Election</span>
                Présidentielle américaine
                <span style="color: #6ba5ff; font-weight: 700">de 2024</span>
            </h1>
        @elseif($language == 'es')
            <h1>
                <span style="font-weight: 700">Estados indecisos </span><br>
                <span class="secondary-color" style="font-weight: 700">Elecciones</span>
                presidenciales de EE. UU.
                <span style="color: #6ba5ff; font-weight: 700">de 2024</span>
            </h1>
        @else
            <h1>
                <span style="font-weight: 700">@lang('words.Toss-up') </span>
                @lang('words.States')<br>
                2024
                <span class="secondary-color" style="font-weight: 700">USA</span>
                Presidential
                <span style="color: #6ba5ff; font-weight: 700">Election</span>
            </h1>
        @endif
        <div class="biden--img"></div>
    </section>

    <section class="retained-states container ptb-80">
        <?php $language = session()->get('locale') ?>
        @if($language == 'fr')
            <h2 class="primary-color toss--up--h2">
                @lang('words.As per our analysis'), <span class="black-color">les Etats <br /> américains </span>
                <span class="secondary-color">indécis</span>
                <span class="black-color" style="font-weight: 300"> sont :</span>
            </h2>
        @elseif($language == 'es')
            <h2 class="primary-color toss--up--h2">
                De acuerdo con nuestro análisis, <span class="black-color">los Estados <br /> Los estadounidenses </span>
                <span class="secondary-color">indecisos</span>
                <span class="black-color" style="font-weight: 300"> son :</span>
            </h2>
        @else
            <h2 class="primary-color toss--up--h2">
                @lang('words.As per our analysis') <span class="black-color">the U.S. States <br /> @lang('defined as') </span>
                <span class="secondary-color">Toss-Up</span>
                <span class="black-color" style="font-weight: 300"> States are:</span>
            </h2>
        @endif
        <div class="countries-flags ptb-40">
            <div class="county-flag">
                <img src="public/images/f-1.png" alt="">
                <h3>
                    @lang('words.arizona') <br>
                    <span>AZ: 11</span>
                </h3>
            </div>

            <div class="county-flag">
                <img src="public/images/f-2.png" alt="">
                <h3>
                    @lang('words.georgia') <br>
                    <span>GA: 16</span>
                </h3>
            </div>

            <div class="county-flag">
                <img src="public/images/f-3.png" alt="">
                <h3>
                    @lang('words.michigan') <br>
                    <span>MI: 15</span>
                </h3>
            </div>
        </div>

        <div class="countries-flags">
            <div class="county-flag">
                <img src="public/images/f-4.png" alt="">
                <h3>
                    @lang('words.nevada') <br>
                    <span>NV: 6</span>
                </h3>
            </div>

            <div class="county-flag">
                <img src="public/images/f-5.png" alt="">
                <h3>
                    @lang('words.pennsylvania') <br>
                    <span>PA: 19</span>
                </h3>
            </div>

            <div class="county-flag">
                <img src="public/images/f-6.png" alt="">
                <h3>
                    @lang('words.wisconsin') <br>
                    <span>WI: 10</span>
                </h3>
            </div>
        </div>
    </section>

    <section class="pb-40 pt-120 toss--up--map--div--block">
        <div class="container">
            <div class="progress--bar--div">
                <div class="progress--bar--block toss--up--state">
                    <div id="legend-container"></div>
                </div>
            </div>

            <div class="map--states">
                <div id="map-container"></div>
                <div id="map"></div>
            </div>
        </div>
    </section>

    <section class="three-logos" style="margin-top: 0;">
        <div class="container">
            <?php $language = session()->get('locale') ?>
            @if($language == 'fr')
                <p class="herp--para black-color text-center">
                    <span style="font-weight: 600">@lang('words.scenario:h') :</span>
                    @lang('words.please choose one of the following options regarding') </br>
                    <span style="font-weight: 600; color: #dc0b10">@lang('words.the most probable scenario')</span>
                    @lang('words.in terms of electoral votes per')
                    <span style="color: #6ba5ff; font-weight: 700">Etat américain.</span>
                </p>
            @elseif($language == 'es')
                <p class="herp--para black-color text-center">
                    <span style="font-weight: 600">Seleccione su escenario preferido:</span>
                    elija una de las siguientes opciones con respecto a el escenario </br>
                    <span style="font-weight: 600; color: #dc0b10">más probable en términos de</span>
                    votos electorales por estado de
                    <span style="color: #6ba5ff; font-weight: 700">EE. UU.</span>
                </p>
            @else
                <p class="herp--para black-color text-center">
                    <span style="font-weight: 600">@lang('words.scenario:h')</span>
                    @lang('words.please choose one of the following options regarding') </br>
                    <span style="font-weight: 600; color: #dc0b10">@lang('words.the most probable scenario')</span>
                    @lang('words.in terms of electoral votes per')
                    <span style="color: #6ba5ff; font-weight: 700">U.S. State.</span>
                </p>
            @endif
        </div>
        <div class="inner-container">
            <div class="left-arrow"></div>
            <div class="remocan">
                <a href="/democrat/scenario-1">
                    <div class="democrat">
                        <img src="public/images/democrat.png" alt="">
                        <h3>@lang('words.Democrats')</h3>
                    </div>
                </a>
                <a href="/draw">
                    <div class="democrat">
                        <img src="public/images/draw-b.png" alt="">
                        <h3>@lang('words.draw')</h3>
                    </div>
                </a>
                <a href="/republican/scenario-1">
                    <div class="democrat">
                        <img src="public/images/republic.png" alt="">
                        <h3>@lang('words.Republicans')</h3>
                    </div>
                </a>
            </div>
            <div class="right-arrow"></div>
        </div>
        <div class="container">
            <p class="herp--para black-color text-center" style="padding-top:20px;">
                <span class="note" style="font-weight: 700; font-size: 24px;">
                    @lang('words.scenario:v')
                </span>
            </p>
        </div>
    </section>


    <script>
        function createLegend() {
            var legendContainer = document.getElementById('legend-container');

            var legendItemDemocrats = createLegendItem('Democrats:', '#033A90', democratsVotes);
            var legendItemDraw = createLegendItem('Draw:', 'grey', drawVotes);
            var legendItemRepublicans = createLegendItem('Republicans:', '#DC0B10', republicansVotes);

            legendContainer.appendChild(legendItemDemocrats);
            legendContainer.appendChild(legendItemDraw);
            legendContainer.appendChild(legendItemRepublicans);
        }

        function createLegendItem(party, color, votes) {
            var legendItem = document.createElement('div');
            legendItem.className = 'legend-item';



            var legendBarContainer = document.createElement('div');
            legendBarContainer.className = 'legend-bar-container';

            var legendBar = document.createElement('div');
            legendBar.className = 'legend-bar';
            legendBar.style.backgroundColor = color;

            var scalingFactor = 1;
            legendBar.style.width = votes * scalingFactor + 'px';

            legendBarContainer.appendChild(legendBar);

            var connector = document.createElement('div');
            connector.className = 'legend-connector';
            legendBarContainer.appendChild(connector);

            var label = document.createElement('span');
            label.className = 'legend-label';
            label.textContent = party;

            var text = document.createTextNode(votes);
            legendItem.appendChild(legendBarContainer);
            legendItem.appendChild(label);
            legendItem.appendChild(text);

            return legendItem;
        }

        createLegend();
    </script>
@endsection
