@extends('../../layouts/scenario_layout_rep')
@section('section-one')
    <script src="{{ asset('public/rep-map/REP-Sc7/mapdata-REP-Sc7.js') }}"></script>
    <script src="{{ asset('public/rep-map/REP-Sc7/usmap.js') }}"></script>

    <div class="container">
        <?php $language = session()->get('locale') ?>
        @if($language == 'fr')
            <h2 class="pt-95 text-center font-48 left--block--heading" style="font-weight: 700;">
                @lang('words.scenario') 7 : <span class="secondary-color">@lang('words.Republicans')</span> <br />
            </h2>
        @elseif($language == 'es')
            <h2 class="pt-95 text-center font-48 left--block--heading" style="font-weight: 700;">
                @lang('words.scenario') 7 : <span class="secondary-color">@lang('words.Republicans')</span> <br />
            </h2>
        @else
            <h2 class="pt-95 text-center font-48 left--block--heading" style="font-weight: 700;">
                <span class="secondary-color">@lang('words.Republicans')</span> @lang('words.scenario') 7 <br />
            </h2>
        @endif
        <div class="vote--sec">
            @if($language == 'fr')
                <h2 class="pb-52 text-center font-48 vote--sec--heading--one" style="font-weight: 700;">
                    <span class="black-color" style="font-weight: 300">235</span>
                    <span class="secondary-color">
                        Votes électoraux sécurisés
                    </span>
                </h2>
            @elseif($language == 'es')
                <h2 class="pb-52 text-center font-48 vote--sec--heading--one" style="font-weight: 700;">
                    <span class="black-color" style="font-weight: 300">235</span>
                    <span class="secondary-color">
                        Votos Electorales Seguros
                    </span>
                </h2>
            @elseif($language == 'pt')
                  <h2 class="pb-52 text-center font-48 vote--sec--heading--one" style="font-weight: 700;">  
                    <span class="black-color" style="font-weight: 300">235</span>
                    <span class="primary-color">
                        Votos Eleitorais garantidos
                    </span>
                </h2>
            @else
                <h2 class="pb-52 text-center font-48 vote--sec--heading--one" style="font-weight: 700;">
                    <span class="black-color" style="font-weight: 300">235 safe</span>
                    <span class="secondary-color">
                        @lang('words.Electoral Votes')
                    </span>
                </h2>
            @endif
            <section class="retained-states container">
                <div class="countries-flags voting--states">
                    <div class="county-flag">
                        <img src="{{ asset('public/images/f-2.png') }}" alt="">
                        <h3>
                            @lang('words.georgia') <br>
                            <span class="secondary-color">GA: 16</span>
                        </h3>
                    </div>

                    <div class="county-flag">
                        <img src="{{ asset('public/images/f-3.png') }}" alt="">
                        <h3>
                            @lang('words.michigan') <br>
                            <span class="secondary-color">MI: 15</span>
                        </h3>
                    </div>

                    <div class="county-flag">
                        <img src="{{ asset('public/images/f-6.png') }}" alt="">
                        <h3>
                            @lang('words.wisconsin') <br>
                            <span class="secondary-color">WI: 10</span>
                        </h3>
                    </div>

                </div>
            </section>
            <h2 class="pb-52 text-center font-48 pt-52 vote--sec--heading--two" style="font-weight: 700;">
                <span class="black-color" style="font-weight: 300">= 276 </span>
                <span class="secondary-color">
                    @lang('words.Electoral Votes')
                </span>
            </h2>
            <h2 class="pb-52 text-center font-48 pt-52 vote--sec--heading--three">
                @if($language == 'fr')
                @lang('words.look') <br />
                <span class="secondary-color">
                    @lang('words.scenario') 7 @lang('words.for REP')
                </span>
                @lang('words.look-2')
            @elseif($language == 'es') 
                @lang('words.look') <br />
                <span class="secondary-color">
                    @lang('words.scenario') 7 @lang('words.for REP').
                </span>
                @lang('words.look-2')
            @elseif($language == 'pt')
                <h2 class="pb-52 text-center font-48 pt-52 vote--sec--heading--three">
                    @lang('words.look') <br />
                    <span class="secondary-color">
                        @lang('words.scenario') 7 para os Republicanos.
                    </span>
                    @lang('words.look-2')
                </h2>
            @else 
                @lang('words.look') <br />
                <span class="secondary-color">
                    @lang('words.scenario') 5 @lang('words.for REP').
                </span>
                @lang('words.look-2')
            @endif
            </h2>
        </div>
    </div>
@endsection
@section('section-two')
    <div class="container">
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
                <span class="secondary-color">
                    @lang('words.scenario') 7</span>,<br><a href="{{ url('/republican/scenario-8/') }}" class="result--next--oppo">@lang('words.clickhere')</a> @lang('words.to go to')
                <span class="secondary-color">
                    @lang('words.scenario') 8
                </span>
            </h3>
            <a href="{{ url('/republican/scenario-6/') }}" class="result--next">@lang('words.previous')</a>
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
