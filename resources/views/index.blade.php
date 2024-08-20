@extends('layouts.app')
<?php 

use App\Http\Controllers\Auth\LoginController;


 if(isset($_GET["a"])){
     $user_id = Auth::user()->id;
  $result =  LoginController::checkvote($user_id);
  
  if($result == '1'){ ?>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

      <script>
          
          jQuery(document).ready(function(){
              
             window.location.href = 'https://2024usapresidentialelection.com/scenarios-result?r=seccess';

          })
      </script>
  <?php }

 }



?>
@section('content')
    <section class="main hero-banner-bg">
        <h1>
            @lang('words.Who Will Be The')
            <span class="secondary-color" style="font-weight: 700">@lang('words.Next')</span>
            <span style="font-weight: 700">@lang('words.US')</span>
            <span style="color: #6ba5ff; font-weight: 700">@lang('words.PRESIDENT')</span>
        </h1>
        <div class="remocan">
            <?php $language = session()->get('locale') ?>
            @if($language == 'fr')
                <div class="democrat">
                    <a href="{{ url('scenarios') }}">
                        <img src="{{ asset('public/images/democrat.webp') }}" alt="" />
                        <h3>@lang('words.democrats')</h3>
                    </a>
                </div>
            @elseif($language == 'es')
                <div class="democrat">
                    <a href="{{ url('scenarios') }}">
                        <img src="{{ asset('public/images/democrat.web') }}" alt="" />
                        <h3>¿Un Demócrata?</h3>
                    </a>
                </div>
            @elseif($language == 'pt')
                <div class="democrat">
                    <a href="{{ url('scenarios') }}">
                        <img src="{{ asset('public/images/democrat.webp') }}" alt="" />
                        <h3>Um Democrata?</h3>
                    </a>
                </div>
            @elseif($language == 'en')
                <div class="democrat">
                    <a href="{{ url('scenarios') }}">
                        <img src="{{ asset('public/images/democrat.webp') }}" alt="" />
                        <h3>A Democrat?</h3>
                    </a>
                </div>
            @else
                <div class="democrat">
                    <a href="{{ url('scenarios') }}">
                        <img src="{{ asset('public/images/democrat.webp') }}" alt="" />
                        <h3>@lang('words.democrats')</h3>
                    </a>
                </div>
            @endif
                @if($language == 'fr')
                    <h2>ou</h2>
                @else
                    <h2>or</h2>
                @endif
            @if($language == 'fr')
                <div class="democrat">
                <a href="{{ url('scenarios') }}">
                    <img src="{{ asset('public/images/republic.webp') }}" alt="" />
                    <h3>@lang('words.republicans')</h3>
                </a>
                </div>
            @elseif($language == 'en')
                <div class="democrat">
                <a href="{{ url('scenarios') }}">
                    <img src="{{ asset('public/images/republic.webp') }}" alt="" />
                    <h3>A Republican?</h3>
                </a>
                </div>
            @elseif($language == 'es')
                <div class="democrat">
                <a href="{{ url('scenarios') }}">
                    <img src="{{ asset('public/images/republic.webp') }}" alt="" />
                    <h3>¿Un Republicano?</h3>
                </a>
                </div>
            @elseif($language == 'pt')
                <div class="democrat">
                    <a href="{{ url('scenarios') }}">
                        <img src="{{ asset('public/images/republic.webp') }}" alt="" />
                        <h3>Um Republicano?</h3>
                    </a>
                </div>
            @else
                <div class="democrat">
                <a href="{{ url('scenarios') }}">
                    <img src="{{ asset('public/images/republic.webp') }}" alt="" />
                    <h3>@lang('words.republicans')</h3>
                </a>
                </div>
            @endif
            <div class="biden--img"></div>
            <div class="trump--img"></div>
        </div>
        <h4 class="white-color">
        <?php $language = session()->get('locale') ?> 
            @if($language == 'fr')  
                <span class="primary-color">@lang('words.vote')</span>
                <span class="secondary-color">@lang('words.predict')</span> @lang('words.the winner')
            @elseif($language == 'es')  
                <span class="primary-color">@lang('words.vote')</span>
                <span class="secondary-color">@lang('words.predict')</span> @lang('words.the winner')
            @else
                <span class="primary-color">@lang('words.vote')</span> @lang('words.to')
                <span class="secondary-color">@lang('words.predict')</span> @lang('words.the winner')
            @endif
        </h4>
        <div class="cta--block">
            <a href="{{ url('scenarios') }}" class="primary-outline white-color cta--btn vote-now-btn">@lang('words.vote:button')</a>
        </div>
        <p class="white-color home-first-banner-para">@lang('words.free')</p>
    </section>

    <section class="candidates--2 primary-bg">
        <div class="container">
            <div class="candidates--2--block">
                <div class="img--block">
                    <img class="candidate--img" src="{{ asset('public/images/candidatess-1.png') }}" alt="" />
                    <h6 style="margin: 10px 5px; color: #fff; font-weight: 600; line-height: 22px;">
                        Franklin D. Roosevelt
                        <span style="font-size: 13px; font-weight: 300; display: block;">
                            @lang('words.franklin:p')
                        </span>
                    </h6>
                </div>
                <div class="img--block">
                    <img class="candidate--img" src="{{ asset('public/images/candidatess-2.png') }}" alt="" />
                    <h6 style="margin: 10px 5px; color: #fff; font-weight: 600; line-height: 22px;">
                        John F. Kennedy
                        <span style="font-size: 13px; font-weight: 300; display: block;">
                            @lang('words.john:p')
                        </span>
                    </h6>
                </div>
                <div class="img--block">
                    <img class="candidate--img" src="{{ asset('public/images/candidatess-3.png') }}" alt="" />
                    <h6 style="margin: 10px 5px; color: #fff; font-weight: 600; line-height: 22px;">
                        Barack Obama
                        <span style="font-size: 13px; font-weight: 300; display: block;">
                            @lang('words.Barack:p')
                        </span>
                    </h6>
                </div>

                <div class="spacing"></div>

                <div class="img--block">
                    <img class="candidate--img" src="{{ asset('public/images/candidatess-4.png') }}" alt="" />
                    <h6 style="margin: 10px 5px; color: #fff; font-weight: 600; line-height: 22px;">
                        Dwight D. EisenHower
                        <span style="font-size: 13px; font-weight: 300; display: block;">
                            @lang('words.Dwight:p')
                        </span>
                    </h6>
                </div>
                <div class="img--block">
                    <img class="candidate--img" src="{{ asset('public/images/candidatess-5.png') }}" alt="" />
                    <h6 style="margin: 10px 5px; color: #fff; font-weight: 600; line-height: 22px;">
                        Richard M. Nixon
                        <span style="font-size: 13px; font-weight: 300; display: block;">
                            @lang('words.Richard:p')
                        </span>
                    </h6>
                </div>
                <div class="img--block">
                    <img class="candidate--img" src="{{ asset('public/images/candidatess-6.png') }}" alt="" />
                    <h6 style="margin: 10px 5px; color: #fff; font-weight: 600; line-height: 22px;">
                        Ronald Reagon
                        <span style="font-size: 13px; font-weight: 300; display: block;">
                            @lang('words.Ronald:p')
                        </span>
                    </h6>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="icon--boxes">

                <a href="#Primaries-popup" data-bs-toggle="modal" data-bs-target="#primaryParagraphs">
                    <div class="icon--box--1">
                        <div class="img--block">
                            <img src="{{ asset('public/images/icon-box-1.png') }}" alt="">
                        </div>
                        <div class="content--block">
                            <h4>@lang('words.Primaries:h')</h4>
                            <p>@lang('words.Primaries:p')</p>
                        </div>
                    </div>
                </a>


                <a href="#national-popup" data-bs-toggle="modal" data-bs-target="#nationalParagraphs">
                    <div class="icon--box--2">
                        <div class="img--block">
                            <img src="{{ asset('public/images/icon-box-2.png') }}" alt="">
                        </div>
                        <div class="content--block">
                            <h4>@lang('words.National:h')</h4>
                            <p>@lang('words.National:p')</p>
                        </div>
                    </div>
                </a>


                <a href="#general-popup" data-bs-toggle="modal" data-bs-target="#generalParagraphs">
                    <div class="icon--box--3">
                        <div class="img--block">
                            <img src="{{ asset('public/images/icon-box-3.png') }}" alt="">
                        </div>
                        <div class="content--block">
                            <h4>@lang('words.General:h')</h4>
                            <p>@lang('words.General:p')</p>
                        </div>
                    </div>
                </a>


            </div>
        </div>
    </section>

    <section class="candidates--block ptb-120">
        <div class="democrat--block container">
            <h2 class="democrat primary-color">@lang('words.Democrats')</h2>
            <div class="image-boxes democrat-boxes">

                <div class="democrat-box">
                    <div class="democrat-box-img">
                        <div class="democrat-box-img-wrapper">
                            <img src="{{ asset('public/images/demo-1.png') }}" class="pbd--img--effect--hover"
                                alt="Demo 2" />
                            <img src="{{ asset('public/images/democrat.png') }}"
                                class="pbd--img--effect--hover pbd--img--effect--hover--back" alt="Demo 2" />
                        </div>
                        <div class="popup-text mobile--align--left">@lang('words.Joe Biden is the 46th President of the United States')
                        </div>
                    </div>
                    <h4 class="black-color">Biden</h4>
                </div>

                <div class="democrat-box">
                    <div class="democrat-box-img">
                        <div class="democrat-box-img-wrapper">
                            <img src="{{ asset('public/images/demo-3.png') }}" class="pbd--img--effect--hover"
                                alt="Demo 2" />
                            <img src="{{ asset('public/images/democrat.png') }}"
                                class="pbd--img--effect--hover pbd--img--effect--hover--back" alt="Demo 2" />
                        </div>
                        <div class="popup-text mobile--align--center">@lang('words.Dean Phillips is a three-term Democratic congressman from Minnesota')</div>
                    </div>
                    <h4 class="black-color">Phillips</h4>
                </div>

                <div class="democrat-box">
                    <?php $language = session()->get('locale') ?>
                    @if($language == 'fr')
                        <div class="democrat-box-img dropout-list-fr">
                        <div class="democrat-box-img-wrapper">
                            <img src="{{ asset('public/images/demo-2.png') }}" class="pbd--img--effect--hover"
                                alt="Demo 2" />
                            <img src="{{ asset('public/images/democrat.png') }}"
                                class="pbd--img--effect--hover pbd--img--effect--hover--back" alt="Demo 2" />
                        </div>
                        <div class="popup-text mobile--align--right">@lang('words.Marianne Williamson is an author of self-help books')</div>
                    </div>
                    @elseif($language == 'es')
                        <div class="democrat-box-img dropout-list-es">
                        <div class="democrat-box-img-wrapper">
                            <img src="{{ asset('public/images/demo-2.png') }}" class="pbd--img--effect--hover"
                                alt="Demo 2" />
                            <img src="{{ asset('public/images/democrat.png') }}"
                                class="pbd--img--effect--hover pbd--img--effect--hover--back" alt="Demo 2" />
                        </div>
                        <div class="popup-text mobile--align--right">@lang('words.Marianne Williamson is an author of self-help books')</div>
                    </div>
                    @elseif($language == 'pt')
                        <div class="democrat-box-img dropout-list-pt">
                        <div class="democrat-box-img-wrapper">
                            <img src="{{ asset('public/images/demo-2.png') }}" class="pbd--img--effect--hover"
                                alt="Demo 2" />
                            <img src="{{ asset('public/images/democrat.png') }}"
                                class="pbd--img--effect--hover pbd--img--effect--hover--back" alt="Demo 2" />
                        </div>
                        <div class="popup-text mobile--align--right">@lang('words.Marianne Williamson is an author of self-help books')</div>
                    </div>
                    @else
                        <div class="democrat-box-img dropout-list">
                        <div class="democrat-box-img-wrapper">
                            <img src="{{ asset('public/images/demo-2.png') }}" class="pbd--img--effect--hover"
                                alt="Demo 2" />
                            <img src="{{ asset('public/images/democrat.png') }}"
                                class="pbd--img--effect--hover pbd--img--effect--hover--back" alt="Demo 2" />
                        </div>
                        <div class="popup-text mobile--align--right">@lang('words.Marianne Williamson is an author of self-help books')</div>
                    </div>
                    @endif
                    <h4 class="black-color">Williamson</h4>
                </div>

            </div>
        </div>
        <div class="republic--block container">
            <h2 class="republic secondary-color">@lang('words.Republicans')</h2>
            <div class="image-boxes republic-boxes">
                <div class="republic-box">
                    @if($language == 'fr')
                        <div class="republic-box-img dropout-list-fr">
                        <div class="democrat-box-img-wrapper">
                            <img src="{{ asset('public/images/re-6.png') }}" class="pbd--img--effect--hover dropout" alt="Demo 2" />
                            <img src="{{ asset('public/images/republic.png') }}"
                                class="pbd--img--effect--hover pbd--img--effect--hover--back" alt="Demo 2" />
                        </div>
                        <div class="popup-text mobile--align--left">@lang('words.Ryan Binkley, a Texas businessman, is a long-shot candidate who is also a pastor at Create church')</div>
                    </div>
                    @elseif($language == 'pt')
                        <div class="republic-box-img dropout-list-pt">
                        <div class="democrat-box-img-wrapper">
                            <img src="{{ asset('public/images/re-6.png') }}" class="pbd--img--effect--hover dropout" alt="Demo 2" />
                            <img src="{{ asset('public/images/republic.png') }}"
                                class="pbd--img--effect--hover pbd--img--effect--hover--back" alt="Demo 2" />
                        </div>
                        <div class="popup-text mobile--align--left">@lang('words.Ryan Binkley, a Texas businessman, is a long-shot candidate who is also a pastor at Create church')</div>
                    </div>
                    @elseif($language == 'es')
                        <div class="republic-box-img dropout-list-es">
                        <div class="democrat-box-img-wrapper">
                            <img src="{{ asset('public/images/re-6.png') }}" class="pbd--img--effect--hover dropout" alt="Demo 2" />
                            <img src="{{ asset('public/images/republic.png') }}"
                                class="pbd--img--effect--hover pbd--img--effect--hover--back" alt="Demo 2" />
                        </div>
                        <div class="popup-text mobile--align--left">@lang('words.Ryan Binkley, a Texas businessman, is a long-shot candidate who is also a pastor at Create church')</div>
                    </div>
                    @else
                        <div class="republic-box-img dropout-list">
                        <div class="democrat-box-img-wrapper">
                            <img src="{{ asset('public/images/re-6.png') }}" class="pbd--img--effect--hover dropout" alt="Demo 2" />
                            <img src="{{ asset('public/images/republic.png') }}"
                                class="pbd--img--effect--hover pbd--img--effect--hover--back" alt="Demo 2" />
                        </div>
                        <div class="popup-text mobile--align--left">@lang('words.Ryan Binkley, a Texas businessman, is a long-shot candidate who is also a pastor at Create church')</div>
                    </div>
                    @endif
                    <h4 class="black-color">Binkley</h4>
                </div>

                {{-- <div class="republic-box">
                    <div class="republic-box-img">
                        <img src="{{ asset('public/images/re-5.png') }}" alt="Demo 1" />
                    </div>
                    <h4 class="black-color">Christie</h4>
                </div> --}}

                <div class="republic-box">
                    @if($language == 'fr')
                        <div class="republic-box-img dropout-list-fr">
                        <div class="democrat-box-img-wrapper">
                            <img src="{{ asset('public/images/re-7.png') }}" class="pbd--img--effect--hover" alt="Demo 2" />
                            <img src="{{ asset('public/images/republic.png') }}"
                                class="pbd--img--effect--hover pbd--img--effect--hover--back" alt="Demo 2" />
                        </div>
                        <div class="popup-text mobile--align--center">@lang('words.Ron DeSantis is the Governor of Florida')</div>
                    </div>
                    @elseif($language == 'pt')
                        <div class="republic-box-img dropout-list-pt">
                        <div class="democrat-box-img-wrapper">
                            <img src="{{ asset('public/images/re-7.png') }}" class="pbd--img--effect--hover" alt="Demo 2" />
                            <img src="{{ asset('public/images/republic.png') }}"
                                class="pbd--img--effect--hover pbd--img--effect--hover--back" alt="Demo 2" />
                        </div>
                        <div class="popup-text mobile--align--center">@lang('words.Ron DeSantis is the Governor of Florida')</div>
                    </div>
                    @elseif($language == 'es')
                        <div class="republic-box-img dropout-list-es">
                        <div class="democrat-box-img-wrapper">
                            <img src="{{ asset('public/images/re-7.png') }}" class="pbd--img--effect--hover" alt="Demo 2" />
                            <img src="{{ asset('public/images/republic.png') }}"
                                class="pbd--img--effect--hover pbd--img--effect--hover--back" alt="Demo 2" />
                        </div>
                        <div class="popup-text mobile--align--center">@lang('words.Ron DeSantis is the Governor of Florida')</div>
                    </div>
                    @else
                        <div class="republic-box-img dropout-list">
                        <div class="democrat-box-img-wrapper">
                            <img src="{{ asset('public/images/re-7.png') }}" class="pbd--img--effect--hover dropout" alt="Demo 2" />
                            <img src="{{ asset('public/images/republic.png') }}"
                                class="pbd--img--effect--hover pbd--img--effect--hover--back" alt="Demo 2" />
                        </div>
                        <div class="popup-text mobile--align--left">@lang('words.Ryan Binkley, a Texas businessman, is a long-shot candidate who is also a pastor at Create church')</div>
                    </div>
                    @endif
                    <h4 class="black-color">DeSantis</h4>
                </div>

                <div class="republic-box">
                    @if($language == 'fr')
                        <div class="republic-box-img dropout-list-fr">
                        <div class="democrat-box-img-wrapper">
                            <img src="{{ asset('public/images/re-2.png') }}" class="pbd--img--effect--hover" alt="Demo 2" />
                            <img src="{{ asset('public/images/republic.png') }}"
                                class="pbd--img--effect--hover pbd--img--effect--hover--back" alt="Demo 2" />
                        </div>
                        <div class="popup-text mobile--align--right">@lang('words.Nikki Haley is a former US ambassador to the United Nations and was previously Governor of South Carolina')</div>
                    </div>
                    @elseif($language == 'es')
                        <div class="republic-box-img dropout-list-es">
                        <div class="democrat-box-img-wrapper">
                            <img src="{{ asset('public/images/re-2.png') }}" class="pbd--img--effect--hover" alt="Demo 2" />
                            <img src="{{ asset('public/images/republic.png') }}"
                                class="pbd--img--effect--hover pbd--img--effect--hover--back" alt="Demo 2" />
                        </div>
                        <div class="popup-text mobile--align--right">@lang('words.Nikki Haley is a former US ambassador to the United Nations and was previously Governor of South Carolina')</div>
                    </div>
                    @elseif($language == 'pt')
                        <div class="republic-box-img dropout-list-pt">
                        <div class="democrat-box-img-wrapper">
                            <img src="{{ asset('public/images/re-2.png') }}" class="pbd--img--effect--hover" alt="Demo 2" />
                            <img src="{{ asset('public/images/republic.png') }}"
                                class="pbd--img--effect--hover pbd--img--effect--hover--back" alt="Demo 2" />
                        </div>
                        <div class="popup-text mobile--align--right">@lang('words.Nikki Haley is a former US ambassador to the United Nations and was previously Governor of South Carolina')</div>
                    </div>
                    @else
                        <div class="republic-box-img dropout-list">
                        <div class="democrat-box-img-wrapper">
                            <img src="{{ asset('public/images/re-2.png') }}" class="pbd--img--effect--hover dropout" alt="Demo 2" />
                            <img src="{{ asset('public/images/republic.png') }}"
                                class="pbd--img--effect--hover pbd--img--effect--hover--back" alt="Demo 2" />
                        </div>
                        <div class="popup-text mobile--align--right">@lang('words.Nikki Haley is a former US ambassador to the United Nations and was previously Governor of South Carolina')</div>
                    </div>
                    @endif
                    <h4 class="black-color">Haley</h4>
                </div>

            </div>

            <div class="image-boxes republic-boxes">

                <div class="republic-box">
                    @if($language == 'fr')
                        <div class="republic-box-img dropout-list-fr">
                        <div class="democrat-box-img-wrapper">
                            <img src="{{ asset('public/images/re-4.png') }}" class="pbd--img--effect--hover" alt="Demo 2" />
                            <img src="{{ asset('public/images/republic.png') }}"
                                class="pbd--img--effect--hover pbd--img--effect--hover--back" alt="Demo 2" />
                        </div>
                        <div class="popup-text mobile--align--left">@lang('words.Asa Hutchinson is the former Governor of Arkansas')</div>
                    </div>
                    @elseif($language == 'es')
                        <div class="republic-box-img dropout-list-es">
                        <div class="democrat-box-img-wrapper">
                            <img src="{{ asset('public/images/re-4.png') }}" class="pbd--img--effect--hover" alt="Demo 2" />
                            <img src="{{ asset('public/images/republic.png') }}"
                                class="pbd--img--effect--hover pbd--img--effect--hover--back" alt="Demo 2" />
                        </div>
                        <div class="popup-text mobile--align--left">@lang('words.Asa Hutchinson is the former Governor of Arkansas')</div>
                    </div>
                    @elseif($language == 'pt')
                        <div class="republic-box-img dropout-list-pt">
                        <div class="democrat-box-img-wrapper">
                            <img src="{{ asset('public/images/re-4.png') }}" class="pbd--img--effect--hover" alt="Demo 2" />
                            <img src="{{ asset('public/images/republic.png') }}"
                                class="pbd--img--effect--hover pbd--img--effect--hover--back" alt="Demo 2" />
                        </div>
                        <div class="popup-text mobile--align--left">@lang('words.Asa Hutchinson is the former Governor of Arkansas')</div>
                    </div>
                    @else
                        <div class="republic-box-img dropout-list">
                        <div class="democrat-box-img-wrapper">
                            <img src="{{ asset('public/images/re-4.png') }}" class="pbd--img--effect--hover" alt="Demo 2" />
                            <img src="{{ asset('public/images/republic.png') }}"
                                class="pbd--img--effect--hover pbd--img--effect--hover--back" alt="Demo 2" />
                        </div>
                        <div class="popup-text mobile--align--left">@lang('words.Asa Hutchinson is the former Governor of Arkansas')</div>
                    </div>
                    @endif
                    <h4 class="black-color">Hutchinson</h4>
                </div>

                

                <div class="republic-box">
                    @if($language == 'fr')
                        <div class="republic-box-img dropout-list-fr">
                        <div class="democrat-box-img-wrapper">
                            <img src="{{ asset('public/images/re-3.png') }}" class="pbd--img--effect--hover" alt="Demo 2" />
                            <img src="{{ asset('public/images/republic.png') }}"
                                class="pbd--img--effect--hover pbd--img--effect--hover--back" alt="Demo 2" />
                        </div>
                        <div class="popup-text mobile--align--center">@lang('words.Vivek Ramaswamy is a successful biotech entrepreneur and an author')</div>
                    </div>
                    @elseif($language == 'es')
                        <div class="republic-box-img dropout-list-es">
                        <div class="democrat-box-img-wrapper">
                            <img src="{{ asset('public/images/re-3.png') }}" class="pbd--img--effect--hover" alt="Demo 2" />
                            <img src="{{ asset('public/images/republic.png') }}"
                                class="pbd--img--effect--hover pbd--img--effect--hover--back" alt="Demo 2" />
                        </div>
                        <div class="popup-text mobile--align--center">@lang('words.Vivek Ramaswamy is a successful biotech entrepreneur and an author')</div>
                        </div>
                    @elseif($language == 'pt')
                        <div class="republic-box-img dropout-list-pt">
                        <div class="democrat-box-img-wrapper">
                            <img src="{{ asset('public/images/re-3.png') }}" class="pbd--img--effect--hover" alt="Demo 2" />
                            <img src="{{ asset('public/images/republic.png') }}"
                                class="pbd--img--effect--hover pbd--img--effect--hover--back" alt="Demo 2" />
                        </div>
                        <div class="popup-text mobile--align--center">@lang('words.Vivek Ramaswamy is a successful biotech entrepreneur and an author')</div>
                        </div>
                    @else
                        <div class="republic-box-img dropout-list">
                        <div class="democrat-box-img-wrapper">
                            <img src="{{ asset('public/images/re-3.png') }}" class="pbd--img--effect--hover" alt="Demo 2" />
                            <img src="{{ asset('public/images/republic.png') }}"
                                class="pbd--img--effect--hover pbd--img--effect--hover--back" alt="Demo 2" />
                        </div>
                        <div class="popup-text mobile--align--center">@lang('words.Vivek Ramaswamy is a successful biotech entrepreneur and an author')</div>
                    </div>
                    @endif
                    <h4 class="black-color">Ramaswamy</h4>
                </div>

                

                <div class="republic-box">
                    <div class="republic-box-img ">
                        <div class="democrat-box-img-wrapper">
                            <img src="{{ asset('public/images/re-1.png') }}" class="pbd--img--effect--hover" alt="Demo 2" />
                            <img src="{{ asset('public/images/republic.png') }}"
                                class="pbd--img--effect--hover pbd--img--effect--hover--back" alt="Demo 2" />
                        </div>
                        <div class="popup-text mobile--align--right">@lang('words.Donald Trump was the 45th President of the United States')</div>
                    </div>
                    <h4 class="black-color">Trump</h4>
                </div>

            </div>
        </div>
        <div class="independent--block container">
            @if($language == 'es')
                <h2 class="independent black-color">@lang('words.Independent')</h2>
            @else
                <h2 class="independent black-color">@lang('words.Independent and third-party')</h2>
            @endif
            <div class="image-boxes independent-boxes">

                <div class="independent-box">
                    <div class="independent-box-img">
                        <img src="{{ asset('public/images/in-1.png') }}" alt="Demo 1" />
                        <div class="popup-text mobile--align--left">@lang('words.Robert F. Kennedy Jr is known for his work as an environmental lawyer and his anti-vaccine views')</div>
                    </div>
                    <h4 class="black-color">Kennedy</h4>
                </div>

                <div class="independent-box">
                    <div class="independent-box-img">
                        <img src="{{ asset('public/images/in-3.png') }}" alt="Demo 3" />
                        <div class="popup-text mobile--align--center">@lang('words.Jill Stein is a doctor and activist who previously ran for President in the 2012 and 2016 Presidential elections, and will again seek the Green Party’s nomination in the 2024 Presidential election')</div>
                    </div>
                    <h4 class="black-color">Stein</h4>
                </div>

                <div class="independent-box">
                    <div class="independent-box-img">
                        <img src="{{ asset('public/images/in-2.png') }}" alt="Demo 2" />
                        <div class="popup-text mobile--align--right">@lang('words.Cornel West is a professor of philosophy and a progressive activist and he is running for president as a member of the People’s party, a third party headed by a former campaign staffer for Bernie Sanders') </div>
                    </div>
                    <h4 class="black-color">West</h4>
                </div>

            </div>
        </div>
    </section>

    <section class="about--block">
        <div class="content--block primary-bg ptb-55">
            @if($language == 'es')
                <h2 class="white-color about--block-heading">
                    Votos <span style="color: #dc0b10; font-weight: 700">électorales</span>
                </h2>
            @else
                <h2 class="white-color about--block-heading">
                    @lang('words.Electoral') <span style="color: #dc0b10; font-weight: 700">@lang('words.Votes')</span>
                </h2>
            @endif
            <p class="about-p white-color">
                @lang('words.Electoral:p')
            </p>
        </div>
        <div class="img--block"></div>
    </section>

    <section class="main hero-banner-bg mobile--padding">
        <h1>
            @lang('words.Who Will Be The')
            <span class="secondary-color" style="font-weight: 700">@lang('words.Next')</span>
            <span style="font-weight: 700">@lang('words.US')</span>
            <span style="color: #6ba5ff; font-weight: 700">@lang('words.PRESIDENT')</span>
        </h1>
        <div class="remocan">
            <?php $language = session()->get('locale') ?>
            @if($language == 'fr')
                <div class="democrat">
                    <a href="{{ url('scenarios') }}">
                        <img src="{{ asset('public/images/democrat.png') }}" alt="" />
                        <h3>@lang('words.democrats')</h3>
                    </a>
                </div>
            @elseif($language == 'es')
                <div class="democrat">
                    <a href="{{ url('scenarios') }}">
                        <img src="{{ asset('public/images/democrat.png') }}" alt="" />
                        <h3>¿Un Demócrata?</h3>
                    </a>
                </div>
            @elseif($language == 'en')
                <div class="democrat">
                    <a href="{{ url('scenarios') }}">
                        <img src="{{ asset('public/images/democrat.png') }}" alt="" />
                        <h3>A Democrat?</h3>
                    </a>
                </div>
            @elseif($language == 'pt')
                <div class="democrat">
                    <a href="{{ url('scenarios') }}">
                        <img src="{{ asset('public/images/democrat.png') }}" alt="" />
                        <h3>Um Democrata?</h3>
                    </a>
                </div>
            @else
                <div class="democrat">
                    <a href="{{ url('scenarios') }}">
                        <img src="{{ asset('public/images/democrat.png') }}" alt="" />
                        <h3>@lang('words.democrats')</h3>
                    </a>
                </div>
            @endif
                @if($language == 'fr')
                    <h2>ou</h2>
                @else
                    <h2>or</h2>
                @endif
            @if($language == 'fr')
                <div class="democrat">
                <a href="{{ url('scenarios') }}">
                    <img src="{{ asset('public/images/republic.png') }}" alt="" />
                    <h3>@lang('words.republicans')</h3>
                </a>
                </div>
            @elseif($language == 'en')
                <div class="democrat">
                <a href="{{ url('scenarios') }}">
                    <img src="{{ asset('public/images/republic.png') }}" alt="" />
                    <h3>A Republican?</h3>
                </a>
                </div>
            @elseif($language == 'es')
                <div class="democrat">
                <a href="{{ url('scenarios') }}">
                    <img src="{{ asset('public/images/republic.png') }}" alt="" />
                    <h3>¿Un Republicano?</h3>
                </a>
                </div>
            @elseif($language == 'pt')
                <div class="democrat">
                    <a href="{{ url('scenarios') }}">
                        <img src="{{ asset('public/images/republic.png') }}" alt="" />
                        <h3>Um Republicano?</h3>
                    </a>
                </div>
            @else
                <div class="democrat">
                <a href="{{ url('scenarios') }}">
                    <img src="{{ asset('public/images/republic.png') }}" alt="" />
                    <h3>@lang('words.republicans')</h3>
                </a>
                </div>
            @endif
            <div class="biden--img"></div>
            <div class="trump--img"></div>
        </div>
        <h4 class="white-color">
        <?php $language = session()->get('locale') ?> 
            @if($language == 'fr')  
                <span class="primary-color">@lang('words.vote')</span>
                <span class="secondary-color">@lang('words.predict')</span> @lang('words.the winner')
            @elseif($language == 'es')  
                <span class="primary-color">@lang('words.vote')</span>
                <span class="secondary-color">@lang('words.predict')</span> @lang('words.the winner')
            @else
                <span class="primary-color">@lang('words.vote')</span> @lang('words.to')
                <span class="secondary-color">@lang('words.predict')</span> @lang('words.the winner')
            @endif
        </h4>
        <div class="cta--block">
            <a href="{{ url('scenarios') }}" class="primary-outline white-color cta--btn">@lang('words.vote:button')</a>
            
        </div>
        <p class="white-color home-second-banner-para">@lang('words.free')</p>
    </section>

    <section class="presidential--election--block text-center ptb-120">
        {{-- <h2 class="pb-40">
            <span class="secondary-color" style="font-weight: 700">2024</span>
            <span style="font-weight: 300">Presidential</span>
            <span style="color: #6ba5ff; font-weight: 700">Election</span>
        </h2> --}}
        <div class="container pe--inner presidential--election">
            <div class="left--block img--block"></div>
            <div class="right--block content--block">
                <?php $language = session()->get('locale') ?>
                <h2 class="presidential--election-heading black-color">
                    @if($language == 'fr')
                        <span style="font-weight: 700">L'élection</span>
                        <span style="color: #6ba5ff; font-size: 48px; font-weight: 700">présidentielle</span>
                        <span style="color: #dc0b10; font-size: 48px; font-weight: 700">américaine</span>
                    @elseif ($language == 'en')
                        <span style="font-size: 40px; font-weight: 700">The U.S.</span>
                        <span style="color: #6ba5ff; font-size: 48px; font-weight: 700">Presidential</span> <span style="color: #dc0b10; font-size: 48px; font-weight: 700">Election</span>
                    @elseif($language == 'es')
                        <span style="font-size: 40px; font-weight: 700">Las Elecciones</span>
                        <span style="color: #6ba5ff; font-size: 48px; font-weight: 700">Presidenciales</span> <span style="color: #dc0b10; font-size: 48px; font-weight: 700">de EE. UU.</span>
                    @elseif($language == 'pt')
                        <span style="font-size: 40px; font-weight: 700">A eleição</span>
                        <span style="color: #6ba5ff; font-size: 48px; font-weight: 700">presidencial</span> <span style="color: #dc0b10; font-size: 48px; font-weight: 700">americana</span>
                    @else 
                        @lang('words.Presidential:h')
                        <span style="font-weight: 700">@lang('words.presidentialelection')</span>
                        <span style="font-size: 48px">@lang('words.In The')</span>
                        <span style="color: #6ba5ff; font-size: 48px; font-weight: 700">@lang('words.United')</span><span style="color: #dc0b10; font-size: 48px; font-weight: 700">@lang('words.States')</span>+
                    @endif
                </h2>
                <p class="presidential--election-para">
                    @lang('words.Presidential:p')
                </p>
                <button class="presidential--election-button primary-gradient" data-bs-toggle="modal" data-bs-target="#multipleParagraphs">
                    @lang('words.Presidential:b')
                </button>

                <div class="modal fade" id="multipleParagraphs" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered multiple-popup">
                        <div class="modal-content">
                            <div class="modal-header">

                                <img src="public/images/modal-logo.png" style="width: 150px;">

                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <div class="Primaries--popup-paragraphs">
                                    <ul>
                                        <li class="Primaries--popup-para">
                                            @lang('words.Primaries:popup')
                                        </li>
                                        <li class="national--popup-para">
                                                @lang('words.National:popup')
                                        </li>
                                        <li class="general--popup-para">
                                            @lang('words.General Election: The general election is held on the first Tuesday after the first Monday in November. 2024 Presidential Election will be held on November 5, 2024. Voters cast their ballots to choose their preferred candidate from the nominated party candidates. The Electoral College, a system in which electors representing each state vote for the President, is used to determine the winner')
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="modal fade" id="primaryParagraphs" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered multiple-popup">
                        <div class="modal-content">
                            <div class="modal-header">

                                <img src="public/images/modal-logo.png" style="width: 150px;">

                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <div class="Primaries--popup-paragraphs">
                                    <ul>
                                        <li class="Primaries--popup-para">
                                            @lang('words.Primaries:popup')
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="modal fade" id="nationalParagraphs" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered multiple-popup">
                        <div class="modal-content">
                            <div class="modal-header">

                                <img src="public/images/modal-logo.png" style="width: 150px;">

                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <div class="Primaries--popup-paragraphs">
                                    <ul>
                                        <li class="Primaries--popup-para">
                                            @lang('words.National:popup')
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="modal fade" id="generalParagraphs" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered multiple-popup">
                        <div class="modal-content">
                            <div class="modal-header">

                                <img src="public/images/modal-logo.png" style="width: 150px;">

                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <div class="Primaries--popup-paragraphs">
                                    <ul>
                                        <li class="Primaries--popup-para">
                                            @lang('words.General Election: The general election is held on the first Tuesday after the first Monday in November. 2024 Presidential Election will be held on November 5, 2024. Voters cast their ballots to choose their preferred candidate from the nominated party candidates. The Electoral College, a system in which electors representing each state vote for the President, is used to determine the winner')
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
