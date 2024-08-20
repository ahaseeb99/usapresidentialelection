@extends('../../layouts/scenario_layout_dem')
@section('section-one')
    <script src="{{ asset('public/dem-map/DEM-Sc8/mapdata-DEM-Sc8.js') }}"></script>
    <script src="{{ asset('public/dem-map/DEM-Sc8/usmap.js') }}"></script>
    
    <div class="container">
        <?php $language = session()->get('locale') ?>
        @if($language == 'fr')
            <h2 class="pt-95 text-center font-48 left--block--heading" style="font-weight: 700;">
                <span class="primary-color">Scénario 8</span> : Démocrates  <br />
            </h2>
        @elseif($language == 'es')
            <h2 class="pt-95 text-center font-48 left--block--heading" style="font-weight: 700;">
                <span class="primary-color">Escenario 8</span> : Demócratas  <br />
            </h2>
        @else
            <h2 class="pt-95 text-center font-48 left--block--heading" style="font-weight: 700;">
                <span class="primary-color">@lang('words.Democrats')</span> @lang('words.scenario') 8 <br />
            </h2>
        @endif
        <div class="vote--sec">
            <h2 class="pb-52 text-center font-48 vote--sec--heading--one" style="font-weight: 700;">
                <?php $language = session()->get('locale') ?>
                @if($language == 'fr')
                    <span class="black-color" style="font-weight: 300">226</span>
                    <span class="primary-color">
                        Votes électoraux sécurisés
                    </span>
                @elseif($language == 'es')
                    <span class="black-color" style="font-weight: 300">226</span>
                    <span class="primary-color">
                        Votos Electorales Seguros
                    </span>
                @elseif($language == 'pt')
                    <span class="black-color" style="font-weight: 300">226</span>
                    <span class="primary-color">
                        Votos Eleitorais garantidos
                    </span>
                @else
                    <span class="black-color" style="font-weight: 300">226 safe</span>
                    <span class="primary-color">
                        @lang('words.Electoral Votes')
                    </span>
                @endif
            </h2>
            <section class="retained-states container">
                <div class="countries-flags voting--states two-cols">
                    <div class="county-flag">
                        <img src="{{ asset('public/images/f-2.png') }}" alt="">
                        <h3>
                            @lang('words.georgia') <br>
                            <span class="primary-color">GA: 16</span>
                        </h3>
                    </div>
                    <div class="county-flag">
                        <img src="{{ asset('public/images/f-3.png') }}" alt="">
                        <h3>
                            @lang('words.michigan') <br>
                            <span class="primary-color">MI: 15</span>
                        </h3>
                    </div>
                </div>
                <div class="countries-flags voting--states two-cols">

                    <div class="county-flag">
                        <img src="{{ asset('public/images/f-6.png') }}" alt="">
                        <h3>
                            @lang('words.wisconsin') <br>
                            <span class="primary-color">WI: 10</span>
                        </h3>
                    </div>


                    <div class="county-flag">
                        <img src="{{ asset('public/images/f-4.png') }}" alt="">
                        <h3>
                            @lang('words.Nevada') <br>
                            <span class="primary-color">NV: 6</span>
                        </h3>
                    </div>
                </div>
            </section>
            <h2 class="pb-52 text-center font-48 pt-52 vote--sec--heading--two" style="font-weight: 700;">
                <span class="black-color" style="font-weight: 300">= 273</span>
                <span class="primary-color">
                    @lang('words.Electoral Votes')
                </span>
            </h2>
            @if($language == 'es')
                <h2 class="pb-52 text-center font-48 pt-52 vote--sec--heading--three">
                    @lang('words.look') <br />
                    <span class="primary-color">
                        @lang('words.scenario') 8 para los Demócratas.
                    </span>
                    @lang('words.look-2')
                </h2>
            @elseif($language == 'pt')
                <h2 class="pb-52 text-center font-48 pt-52 vote--sec--heading--three">
                    @lang('words.look') <br />
                    <span class="primary-color">
                        @lang('words.scenario') 8 para os Democratas.
                    </span>
                    @lang('words.look-2')
                </h2>
            @else
                <h2 class="pb-52 text-center font-48 pt-52 vote--sec--heading--three">
                @lang('words.look') <br />
                <span class="primary-color">
                    @lang('words.scenario') 8 @lang('words.for DEM').
                </span>
                @lang('words.look-2')
                </h2>
            @endif
        </div>
    </div>
@endsection
@section('section-two')
    <div class="container">
        <div class="progress--bar--div">
            <div class="progress--bar--block">
                <div id="legend-container"></div>
            </div>
        </div>
        <div class="map--states">
            <div id="map-container"></div>
            <div id="map"></div>
        </div>
        <div class="result--notice pb-120">
            <h2>
                @lang('words.prediction')
            </h2>
            @guest
                <a href="{{ route('login', ['redirect' => url()->current()]) }}" class="btn btn-vote mb-3">@lang('words.Login to Vote')</a>
            @else
                @if (Auth::user()->hasVerifiedEmail() != false)
                @if (Auth::user()->vote)
                    <a href="javascript:;" class="btn btn-vote mb-3">{{ Auth::user()->vote->scenario }} >
                        {{ Auth::user()->vote->scenario_number }}</a>
                @else
                    <a href="javascript:;" class="btn btn-vote mb-3" id="btn-vote">@lang('words.vote')</a>
                @endif
                @else
                <a href="javascript:;" class="btn btn-vote mb-3">@lang('words.Please Verify Your Email')</a>
                @endif
            @endguest
            <h3 class="text-center">
                @lang('words.vote:h1')
                <span class="primary-color">
                    
                    @lang('words.Scenario 8')</span>,<br>
                    <a href="{{ url('/democrat/scenario-9/') }}" class="result--next">@lang('words.clickhere')</a>
                    @lang('words.to go to')
                <span class="primary-color">
                    @lang('words.Scenario 9')
                </span>
            </h3>
            <a href="{{ url('/democrat/scenario-7/') }}" class="result--next--oppo">@lang('words.previous')</a>
        </div>
    </div>
    </div>

    <script>
        function createLegend() {
            var legendContainer = document.getElementById('legend-container');

            var legendItemDemocrats = createLegendItem('Democrats:', '#033A90', democratsVotes);
            var legendItemRepublicans = createLegendItem('Republicans:', '#DC0B10', republicansVotes);

            legendContainer.appendChild(legendItemDemocrats);
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

            var scalingFactor = 0.8;
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
