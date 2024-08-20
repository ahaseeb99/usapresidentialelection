@extends('layouts.app')
<?php use App\Http\Controllers\Auth\LoginController; ?>
<?php use App\Http\Controllers\HomeController; ?>
@push('style')
    <style>
        .StripeElement {
            box-sizing: border-box;
            height: 40px;
            padding: 10px 12px;
            border: 1px solid transparent;
            border-radius: 4px;
            background-color: white;
            box-shadow: 0 1px 3px 0 #e6ebf1;
            -webkit-transition: box-shadow 150ms ease;
            transition: box-shadow 150ms ease;
            border-width: 1px;
            border-color: rgb(150, 163, 218);
            border-style: solid;
            margin-bottom: 10px;
        }

        .StripeElement--focus {
            box-shadow: 0 1px 3px 0 #cfd7df;
        }

        .StripeElement--invalid {
            border-color: #fa755a;
        }

        .StripeElement--webkit-autofill {
            background-color: #fefde5 !important;
        }

        div#card-errors {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
            display: block;
            width: 100%;
            font-size: 15px;
            padding: 5px 15px;
            border-radius: 6px;
            display: none;
            margin-bottom: 10px;
        }
    <!--Popup-->
    #popupBoxOnePosition, #popupBoxHTML{
         margin:10px 0 0 0;
         top: 0; 
         left: 0; 
         position: fixed; 
         width: 100%; 
         height: 100%;
         background:#333; 
         display: block; 
         opacity:.95; 
         z-index:100;
         widows:50%;
        
         }
        
         .popupBoxWrapper{
         width: 550px;
         margin: 
         50px auto; 
         text-align: left;
        
         }
         .popupBoxContent {
          background-color: #fff;
          padding: 15px;
          opacity: 1;
          border-radius: 15px;
          -o-box-shadow: 0 0 50px #219ab3;
          -moz-box-shadow: 0 0 50px #219ab3;
          
          -ms-box-shadow: 0 0 50px #219ab3;
          transition: ease-in;
          transition-delay: 1s;
          -webkit-transition: ease-in;
        }
        .popupBoxContent {
            text-align: center;
            padding: 6%;
             position: relative;
        }
        
        .popupBoxContent h3 {
            font-weight: 700;
            font-size: 26px;
        }
        
        .popupBoxContent p {
            font-size: 14px;
        }
        .popupBoxContent a {
            position: absolute;
            top: -10px;
            right: -10px;
            border: 2px solid red;
            border-radius: 50px;
            width: 30px;
            height: 30px;
            font-weight: 600;
            color: red;
            background-color: #fff;
        }
        
    </style>

@endpush
@section('content')
      
      <?php if(isset($_GET["r"])){ ?>
      <section id="html" class="content-section text-center">
        <div class="download-section">
          <div class="container">
              <div class="col-lg-8 col-lg-offset-2">
                  <div id="popupBoxHTML" style="display: block;">
                  <div class="popupBoxWrapper">
                      <div class="popupBoxContent">
                          <a href="javascript:void(0)"    onclick="toggle_visibility('popupBoxHTML');">x</a>
                          <h3>@lang('words.Vote Cast Successfully')</h3>
                          <?php $language = session()->get('locale'); ?>
                          @if($language == 'fr')
                            <p>@lang('words.Vote Cast Successfully:m') <span><?php  echo LoginController::scenario_number_fr(); ?></span> @lang('words.Vote Cast Successfully-m')</p>
                          @elseif($language == 'es')
                            <p>@lang('words.Vote Cast Successfully:m') <span><?php  echo LoginController::scenario_number_es(); ?></span> @lang('words.Vote Cast Successfully-m')</p>
                          @else
                            <p>@lang('words.Vote Cast Successfully:m') <span><?php  echo LoginController::scenario_number(); ?></span> @lang('words.Vote Cast Successfully-m')</p>
                          @endif 
                      </div>
                  </div>
              </div>
          </div>
       </div>
     </section>

    <script>
        function toggle_visibility(id) {
        var e = document.getElementById(id);
        if (e.style.display == 'block')
            e.style.display = 'none';
        else
            e.style.display = 'block';
        }
    </script>
      <?php } ?>

    
    <section class="main scenario--01--hero-banner-bg">
        <?php $language = session()->get('locale') ?>
        @if($language == 'fr')
            <h1>
                Résultats
                <span class="secondary-color" style="font-weight: 700">des Scénarios</span>
            </h1>
        @else
            <h1>
                @lang('words.scenarios')
                <span class="secondary-color" style="font-weight: 700">@lang('words.Results')</span>
            </h1>
        @endif
        <div class="biden--img"></div>
    </section>
 <?php

    if(isset($_GET['scenario'])){ $view=1;
    

                        
    $result_view =   Auth::user()->vote->is_result_view($view)['view_result'];
                        
    }else{ $view = '0' ;
    
        if(Auth::user()->vote != null){
            
            
             $result_view =   Auth::user()->vote->is_result_view($view);
        }else{?>
            <script>window.location = "https://2024usapresidentialelection.com/";</script>
        <?php die; }
       

                        
    }
?>
    <section class="dem--scen--01">
        <div class="left--block scenarios--result pt-95 pb-95">
            <?php if(isset($_GET['scenario'])){ ?>
             @if($result_view == 0)
             
                <div class="container">
                <div class="row">
                    
                <p class="alert alert-danger text-center">
                   @lang('words.You have already avail this one time offer')
                </p>
                
                </div></div>
             @endif
             <?php } ?>
            <h2 class="" style="font-size: 30px;">
                
                 
                <span class="secondary-color">@lang('words.Vote Cast Successfully')</span><br>
                <span class="primary-color">@lang('words.Your Opinion is')</span>
                @lang('words.Now Part of the Poll')
            </h2>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        @if (Auth::user()->subscribe == null )
                            <div class="disclaimer-wrapper">
                                @if (\Session::has('stripe_error'))
                                    <div class="alert alert-danger">
                                        {!! \Session::get('stripe_error') !!}
                                    </div>
                                @endif
                                <?php $language = session()->get('locale'); ?>
                                @if($language == 'fr')
                                    <p>
                                        @lang('words.We confirm your vote for') <strong><?php  echo LoginController::scenario_number_fr(); ?></strong>  @lang('words.successfull-message')
                                    </p>
                                @elseif($language == 'es')
                                    <p>
                                        @lang('words.We confirm your vote for') <strong><?php  echo LoginController::scenario_number_es(); ?></strong>  @lang('words.successfull-message')
                                    </p>
                                @elseif($language == 'pt')
                                    <p>
                                        @lang('words.We confirm your vote for') <strong><?php  echo LoginController::scenario_number_pt(); ?></strong>  @lang('words.successfull-message')
                                    </p>
                                @else
                                    <p>
                                        @lang('words.We confirm your vote for') <strong><?php  echo LoginController::scenario_number(); ?></strong>  @lang('words.successfull-message')
                                    </p>
                                @endif
                                <p class="alert alert-info">
                                    @lang('words.success')
                                </p>
                                
                                 <?php $loc_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip_address));
                                //      $countryCode = $loc_data->geoplugin_countryCode;?>
                                
                                <div class="scenerio-result-four-btns">
                                    <a href="https://2024usapresidentialelection.com/scenarios-result?user=true" class="result--next">
                                        @lang('words.I want to see the results of the Scenario I have chosen') <br><span class="rectangle-txt"> @lang('words.Unlimited free access') </span>
                                    </a>
                                    <a href="https://2024usapresidentialelection.com/scenarios-result?scenario=1" class="result--next ">
                                        @lang('words.I want to see the results of all Scenarios') <br><span class="rectangle-txt">@lang('words.One time access for free')</span> 
                                    </a>
                                    <a id="payment--form--hideShow" class="result--next payment--form--hideShow">
                                        @lang('words.I want to see the results of all Scenarios')<br> 
                                        <span class="rectangle-txt">
                                            
                                            
                                           
                                                @lang('words.Unlimited access for $10')
                                           
                                        </span> 
                                    </a>
                                    <a href="https://2024usapresidentialelection.com/" class="not-interested-btn">@lang('words.Not interested to see all results')</a>
                                </div>
                                
                                
                                <div class="payment--form--div--form" style="display: none;">
                                    <!--<img src="{{ asset('public/images/Coming-Soon.png') }}" alt="" style="padding-top: 40px;max-width: 300px;width: 100%;">-->
                                    <!--<form action="{{ route('user.subscribe') }}" method="post" id="order-place">-->
                                    <!--    @csrf-->
                                    <!--    <div class="stripe-form-wrapper require-validation"-->
                                    <!--        data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" data-cc-on-file="false">-->
                                    <!--        <div id="card-element"></div>-->
                                    <!--        <div id="card-errors" role="alert"></div>-->
                                    <!--        <div class="form-group">-->
                                    <!--            <button class="btn btn-outline-success primary-button" type="button" data-bs-toggle="modal" data-bs-target="#PaymentSubmitModal">Subscribe</button>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</form>-->
                                    
                                    
                                    <form action="{{ route('user.subscribe') }}" method="post" id="order-place">
                                        @csrf
                                        <div class="stripe-form-wrapper require-validation"
                                            data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" data-cc-on-file="false">
                                            <div id="card-element"></div>
                                            <div id="card-errors" role="alert"></div>
                                            <div class="form-group">
                                                
                                            </div>
                                            <div class="card-image">
                                                <img src="{{ asset('public/images/visa.svg')}}" width="100%">
                                                <img src="{{ asset('public/images/mastercard.svg')}}" width="100%">
                                                <img src="{{ asset('public/images/amex.svg')}}" width="100%">
                                                <img src="{{ asset('public/images/discover.svg')}}" width="100%">
                                                <img src="{{ asset('public/images/unionpay-svg.svg')}}" width="100%">
                                                <img src="{{ asset('public/images/jcb.svg')}}" width="100%">
                                                <img src="{{ asset('public/images/diners.svg')}}" width="100%">
                                                <img src="{{ asset('public/images/applepay-svg.svg')}}" width="100%">
                                                <img src="{{ asset('public/images/googlepay-svg.svg')}}" width="100%">
                                                <img src="{{ asset('public/images/linkpay-svg.svg')}}" width="100%">
                                                <img src="{{ asset('public/images/wechat-pay-svg.svg')}}" width="100%">
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-outline-success primary-button" type="button" data-bs-toggle="modal" data-bs-target="#PaymentSubmitModal">Subscribe</button>
                                            </div>
                                        </div>
                                    </form>
            
            




                                </div>
                                
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            
            
            <div class="modal fade" id="PaymentSubmitModal" tabindex="-1" role="dialog" aria-labelledby="PaymentSubmitModal" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header secondary-bg">
                            <h5 class="modal-title white-color" id="deleteModalNoticeLabel">@lang('words.Are you sure?')</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-center">
                            <div class="form-popup" id="myForm">
                                <button class="btn btn-outline-success primary-button" type="button"
                                                    id="stripe-submit">@lang('words.Subscribe')</button>
                            </div>
                        </div>
                        </form>

                    </div>
                </div>
            </div>

            <div class="scene--list--block">
                <div class="container">
                

                    @if (Auth::user()->subscribe != null || $result_view == 1 )
                 
                    <style>
                        .scenerio-result-four-btns , p.alert.alert-info{ display : none !important;}
                    </style>
                    
                        <div class="title">
                            @if($language == 'fr')
                                <h4 class="title--1">
                                    @lang('words.scenarios')
                                </h4>
                                <h4 class="title--2 primary-color">
                                    <span style="color: #232323">Votes pour :</span> Démocrates
                                </h4>
                            @elseif($language == 'es')
                                <h4 class="title--1">
                                    @lang('words.scenarios')
                                </h4>
                                <h4 class="title--2 primary-color">
                                    <span style="color: #232323">Votos a favor:</span> Démocrates
                                </h4>
                            @else
                                <h4 class="title--1">
                                    @lang('words.scenarios')
                                </h4>
                                <h4 class="title--2 primary-color">
                                    <span style="color: #232323">@lang('words.Votes for'):</span> @lang('words.Democrats')
                                </h4>
                            @endif
                        </div>

                        <!-- Democrat Result List -->
                        <div class="scene--list">
                            @foreach (Auth::user()->vote->democrat()['democrat_scenarios_array'] as $key => $scenario)
                                <div class="scene--list--title 1">
                                    @if($language == 'fr')
                                        <span class="primary-color">{{$scenario}} : Démocrates</span>
                                    @elseif($language == 'es')
                                            <span class="primary-color">{{$scenario}} : Démocrates</span>
                                    @elseif($language == 'pt')
                                            <span class="primary-color">{{$scenario}} : Democratas</span>
                                    @else
                                        <span class="primary-color">Democrats-{{ $scenario }}</span>
                                    @endif
                                </div>
                                <div class="dem percent">
                                    <div class="progress" role="progressbar" aria-label="Basic example"
                                        aria-valuenow="{{ Auth::user()->vote->democrat()['democrat_scenarios_votes_percentage_array'][$scenario] }}"
                                        aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar"
                                            style="width:{{ Auth::user()->vote->democrat()['democrat_scenarios_votes_percentage_array'][$scenario] }}%">
                                            
                                        </div>
                                    </div>
                                    <div class="vote--count">
                                        {{ number_format((float) Auth::user()->vote->democrat()['democrat_scenarios_votes_percentage_array'][$scenario], 2, '.', '') }}%
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="title">
                            <h4 class="title--1">
                                @lang('words.scenarios')
                            </h4>
                            @if($language == 'fr')
                                <h4 class="title--2 secondary-color">
                                <span style="color: #232323">Votes pour :</span> Républicains
                                </h4>
                            @elseif($language == 'es')
                                <h4 class="title--2 secondary-color">
                                <span style="color: #232323">Votos a favor:</span> Republicanos
                                </h4>
                            @elseif($language == 'pt')
                                <h4 class="title--2 secondary-color">
                                <span style="color: #232323">Votos para:</span> Republicanos votação
                                </h4>
                            @else
                                <h4 class="title--2 secondary-color">
                                <span style="color: #232323">@lang('words.Votes for')</span> @lang('words.Republicans')
                                </h4>
                            @endif
                        </div>

                        <div class="scene--list">
                            @foreach (Auth::user()->vote->total_republican()['republican_scenarios_array'] as $key => $scenario)
                                <div class="scene--list--title 2">
                                    @if($language == 'fr')
                                        <span class="secondary-color">{{$scenario}} : Républicains</span>
                                    @elseif($language == 'es')
                                        <span class="secondary-color">{{$scenario}} : Republicanos</span>
                                    @elseif($language == 'pt')
                                        <span class="secondary-color">{{$scenario}} : Republicanos</span>
                                    @else
                                        <span class="secondary-color">Republicans-{{ $scenario }}</span>
                                    @endif
                                </div>
                                <div class="rep percent">
                                    <div class="progress" role="progressbar" aria-label="Basic example"
                                        aria-valuenow="{{ Auth::user()->vote->total_republican()['republican_scenarios_votes_percentage_array'][$scenario] }}"
                                        aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar"
                                            style="width:{{ Auth::user()->vote->total_republican()['republican_scenarios_votes_percentage_array'][$scenario] }}%">
                                            
                                        </div>
                                    </div>
                                    <div class="vote--count">
                                        {{ number_format((float) Auth::user()->vote->total_republican()['republican_scenarios_votes_percentage_array'][$scenario], 2, '.', '') }}%
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="title">
                            <?php $language = session()->get('locale') ?>
                            @if($language == 'fr')
                                <h4 class="title--1">
                                @lang('words.scenarios')
                                </h4>
                                <h4 class="title--2 grey-color">
                                    <span style="color: #232323">@lang('words.Votes for')</span>
                                    @lang('words.draw') entre Démocrates et Républicains
                                </h4>
                            @elseif($language == 'es')
                                <h4 class="title--1">
                                @lang('words.scenarios')
                                </h4>
                                <h4 class="title--2 grey-color">
                                    <span style="color: #232323">Votos por la</span>
                                    igualdad entre Demócratas y Republicanos
                                </h4>
                            @elseif($language == 'pt')
                                <h4 class="title--1">
                                @lang('words.scenarios')
                                </h4>
                                <h4 class="title--2 grey-color">
                                    <span style="color: #232323">Votos de</span>
                                    igualdade entre Democratas e Republicanos
                                </h4>
                            @else
                                <h4 class="title--1">
                                    @lang('words.scenarios')
                                </h4>
                                <h4 class="title--2 grey-color">
                                    <span style="color: #232323">@lang('words.Votes for')</span>
                                    @lang('words.draw') 
                                </h4>
                            @endif
                        </div>
                        <div class="scene--list">
                            @foreach (Auth::user()->vote->total_draw() as $key => $value)
                                @if ($key == 'draw_percentage')
                                    <div class="scene--list--title 3">
                                        <span class="grey-color">@lang('words.draw')
                                    </div>
                                    <div class="draw percent">
                                        <div class="progress" role="progressbar" aria-label="Basic example"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar" style="width:{{ $value }}%">
                                                
                                            </div>
                                        </div>
                                        <div class="vote--count">
                                            {{ number_format((float) $value, 2, '.', '') }}%</div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    @else
                        <?php
                            if(isset($_GET['user'])){
                           
                            ?>
                                <style>
                                    .scenerio-result-four-btns , p.alert.alert-info{ display : none !important;}
                                </style>
                                <div class="scene--list">
                                    <div class="scene--list--title 4">
                                        <span class="{{Auth::user()->vote->particular_result()['color']['first']}}"><?php  echo LoginController::scenario_number(); ?>
                                    </div>
                                    <div class="{{Auth::user()->vote->particular_result()['color']['second']}} percent">
                                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="{{Auth::user()->vote->particular_result()['$total_percent_on_particular_scenarios']}}" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar" style="width:{{Auth::user()->vote->particular_result()['$total_percent_on_particular_scenarios']}}%">
                                                {{-- {{Auth::user()->vote->particular_result()['$total_votes_on_particular_scenarios']}} -- }}  --{{ if you want to show total number of votes just un-comment this line --}} 
                                            </div>
                                        </div>
                                        <div class="vote--count">{{ number_format((float) Auth::user()->vote->particular_result()['$total_percent_on_particular_scenarios'], 2, '.', '') }}%</div>
                                    </div>
                                </div>
                             <?php 
                                
                            }
                        ?>
                    @endif
                </div>
            </div>

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


@endsection

@push('script')
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        var stripe = Stripe('{{ env('STRIPE_KEY') }}');


        var elements = stripe.elements();
        var style = {
            base: {
                color: '#32325d',
                lineHeight: '18px',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                    color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
        };
        var card = elements.create('card', {
            style: style
        });
        card.mount('#card-element');

        card.addEventListener('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                $(displayError).show();
                displayError.textContent = event.error.message;
            } else {
                $(displayError).hide();
                displayError.textContent = '';
            }
        });

        var form = document.getElementById('order-place');

        $('#stripe-submit').click(function() {
            stripe.createToken(card).then(function(result) {
                var errorCount = checkEmptyFileds();
                if ((result.error) || (errorCount == 1)) {
                    
                    if (result.error) {
                        var errorElement = document.getElementById('card-errors');
                        $(errorElement).show();
                        errorElement.textContent = result.error.message;
                    } else {
                        $.toast({
                            heading: 'Alert!',
                            position: 'bottom-right',
                            text: 'Please fill the required fields before proceeding to pay',
                            loaderBg: '#ff6849',
                            icon: 'error',
                            hideAfter: 5000,
                            stack: 6
                        });
                    }
                } else {
                    
                    stripeTokenHandler(result.token);
                }
            });
        });

        function stripeTokenHandler(token) {
            
            var form = document.getElementById('order-place');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);
            form.submit();
        }


        function checkEmptyFileds() {
            var errorCount = 0;
            $('form#order-place').find('.form-control').each(function() {
                if ($(this).prop('required')) {
                    if (!$(this).val()) {
                        $(this).parent().find('.invalid-feedback').addClass('d-block');
                        $(this).parent().find('.invalid-feedback strong').html('Field is Required');
                        errorCount = 1;
                    }
                }
            });
            return errorCount;
        }
    </script>
    
    
<script>
    $(document).ready(function () {
        $("#payment--form--hideShow").click(function () {
            $(".payment--form--div--form").toggle();
        });
    });
</script>

@endpush
