@extends('../../layouts/scenario_layout_draw')
@section('section-one')
    <script src="{{ asset('public/draw-map/DRAW-Sc/mapdata-DRAW.js') }}"></script>
    <script src="{{ asset('public/draw-map/DRAW-Sc/usmap.js') }}"></script>

    <div class="container">
        <div class="vote--sec">
            <h2 class="pb-52 pt-95 text-center font-48 vote--sec--heading--one" style="font-weight: 700;">
                <?php $language = session()->get('locale') ?>
                @if($language == 'fr')
                    <span class="black-color" style="font-weight: 300">226</span>
                    <span class="primary-color">
                        Votes électoraux sécurisés pour les Démocrates
                    </span>
                @elseif($language == 'es')
                    <span class="black-color" style="font-weight: 300">226</span>
                    <span class="primary-color">
                        votos electorales asegurados para los Demócratas
                    </span>
                @elseif($language == 'pt')
                    <span class="black-color" style="font-weight: 300">226</span>
                    <span class="primary-color">
                        votos eleitorais garantidos para os Democratas
                    </span>
                @else
                    <span class="black-color" style="font-weight: 300">@lang('words.226 safe')</span>
                    <span class="primary-color">
                        @lang('words.Electoral Votes') @lang('words.for DEM')
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
                        <img src="{{ asset('public/images/f-1.png') }}" alt="">
                        <h3>
                            @lang('words.arizona') <br>
                            <span class="primary-color">AZ: 11</span>
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
                            @lang('words.nevada') <br>
                            <span class="primary-color">NV: 6</span>
                        </h3>
                    </div>
                </div>
            </section>
            <h2 class="pb-52 text-center font-48 pt-52 vote--sec--heading--two" style="font-weight: 700;">
                <span class="black-color" style="font-weight: 300">= 269</span>
                <span class="primary-color">
                    @lang('words.Electoral Votes')
                </span>
            </h2>
        </div>

        <div class="vote--sec pb-5">
            <h2 class="pb-52 text-center font-48 vote--sec--heading--one" style="font-weight: 700;">
                @if($language == 'fr')
                    <span class="black-color" style="font-weight: 300">235</span>
                    <span class="secondary-color">
                        Votes électoraux sécurisés pour les Républicains
                    </span>
                @elseif($language == 'es')
                    <span class="black-color" style="font-weight: 300">235</span>
                    <span class="secondary-color">
                        votos electorales seguros para los Republicanos
                    </span>
                @elseif($language == 'pt')
                    <span class="black-color" style="font-weight: 300">235</span>
                    <span class="secondary-color">
                        votos eleitorais garantidos para os republicanos
                    </span>
                @else
                    <span class="black-color" style="font-weight: 300">235 safe</span>
                    <span class="secondary-color">
                        @lang('words.Electoral Votes') @lang('words.for REP')
                    </span>
                @endif
            </h2>
            <section class="retained-states container">
                <div class="countries-flags two-cols voting--states">
                    <div class="county-flag">
                        <img src="{{ asset('public/images/f-5.png') }}" alt="">
                        <h3>
                            Pennsylvania <br>
                            <span class="secondary-color">PA: 19</span>
                        </h3>
                    </div>

                    <div class="county-flag">
                        <img src="{{ asset('public/images/f-3.png') }}" alt="">
                        <h3>
                            Michigan <br>
                            <span class="secondary-color">MI: 15</span>
                        </h3>
                    </div>
                </div>
            </section>
            <h2 class="pb-52 text-center font-48 pt-52 vote--sec--heading--two" style="font-weight: 700;">
                <span class="black-color" style="font-weight: 300">= 269</span>
                <span class="secondary-color">
                    @lang('words.Electoral Votes')
                </span>
            </h2>
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
                <a href="{{ route('register', ['redirect' => url()->current()]) }}" class="btn btn-vote mb-40">@lang('words.choose')</a>
            @else
                @if (Auth::user()->hasVerifiedEmail() != false)
                @if (Auth::user()->vote)
                    <a href="javascript:;" class="btn btn-vote mb-3">{{ Auth::user()->vote->scenario }} ></a>
                @else
                    <a href="javascript:;" class="btn btn-vote mb-3" id="btn-vote">@lang('words.vote')</a>
                @endif
                @else
                <a href="javascript:;" class="btn btn-vote mb-3">@lang('words.Please Verify Your Email')</a>
                @endif
            @endguest


            <h3 class="text-center">
                <?php $language = session()->get('locale') ?>
                @if($language == 'fr')
                    Retour au menu
                    <span class="primary-color">
                        @lang('words.scenario')s
                    </span>
                @elseif($language == 'es')
                    Volver al menú
                    <span class="primary-color">
                        @lang('words.scenario')s
                    </span>
                @elseif($language == 'pt')
                    Retorne ao menu
                    <span class="primary-color">
                        @lang('words.scenario')s
                    </span>
                @else
                    To go back to
                    <span class="primary-color">
                        @lang('words.scenario')s
                    </span>
                @endif
            </h3>
            <a href="/scenarios" class="result--next">@lang('words.clickhere')</a>
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
