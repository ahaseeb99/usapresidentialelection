<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height">

    <!-- META ROBOT -->
    <meta name="robots" content="index, follow" />
    <meta name="description" content="Dedmocrat or Republican? Vote to predict the winner." />
    
    
    <meta name="facebook-domain-verification" content="72tugp9hbxnu01y7d8khquyk9e0vxq" />
    
    <!-- CSRF TOKEN -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- META CONTENT -->
    <meta content="Probdone"
        name="Abdul Haseeb Q. a.k.a twistyBRAT 鬼 ]; | a.haseeb199@gmail.com | https://probdone.com" />

    <title>@lang('words.Usa Presidential Election')</title>

    <!-- FAV ICON  -->
    <link rel="shortcut icon" href="{{ asset('public/images/fav.png') }}" type="image/x-icon" />

    <!-- BOOTSTRAP V5 CDN  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    
    
    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/css/news.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/css/scenarios.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/css/scenario-1.css') }}" />

    <!-- RESPONSIVENESS STYLESHEETS -->
    <link rel="stylesheet" href="{{ asset('public/css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/css/responsive-scenarios.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/css/responsive-scenario-1.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/css/responsive-news.css') }}" />

    <!-- FONT AWESOME 6 CDN -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <!-- FONTS CDN -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />

    <!-- TOASTER CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- Cookie Script --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


        <?php $language = session()->get('locale') ?>
    @if(Auth::check())
        
            <script>
            jQuery(document).ready(function(){
        
                jQuery("a.btn.btn-vote.mb-3").text("@lang('words.choose')");
            })
            </script>
    
    @else
    <script>
    
    
    jQuery(document).ready(function(){
        
        jQuery("a.btn.btn-vote.mb-3").attr("href", "{{ route('register', ['redirect' => url()->current()]) }}");
        jQuery("a.btn.btn-vote.mb-3").text("@lang('words.choose')");
    })
    </script>
    @endif
    
     <script>


document.addEventListener("DOMContentLoaded", function() {
    var cookiePopup = document.getElementById("cookie-popup");
    var saveAcceptBtn = document.getElementById("saveAcceptBtn");
    var acceptCookiesBtn = document.getElementById("accept-cookies");
    var declineCookiesBtn = document.getElementById("decline-cookies");

    // Function to close the cookie popup
    function closeCookiePopup() {
        cookiePopup.style.display = "none";
    }

    // Check if the "acceptCookies" cookie is set
    if (getCookie("acceptCookies")) {
        // If the cookie is set, hide the cookie popup
        closeCookiePopup();
    } else {
        // If the cookie is not set, show the cookie popup
        cookiePopup.style.display = "block";

        // Add event listener to the "Save & Accept" button
        saveAcceptBtn.addEventListener("click", function() {
            // Set the "acceptCookies" cookie with a value of "true" and expiration date
            setCookie("acceptCookies", "true", 365);
            // Your save functionality here
            saveFunction();
            // Hide the cookie popup
            closeCookiePopup();
            // Close the cookie settings modal
            var modal = document.getElementById("cookieSettingPopup");
            var bootstrapModal = new bootstrap.Modal(modal);
            bootstrapModal.hide();
        });

        // Add event listener to the "Accept" button
        acceptCookiesBtn.addEventListener("click", function() {
            // Set the "acceptCookies" cookie with a value of "true" and expiration date
            setCookie("acceptCookies", "true", 365);
            // Your save functionality here
            saveFunction();
            // Hide the cookie popup
            closeCookiePopup();
        });

        // Add event listener to the "Decline" button
        declineCookiesBtn.addEventListener("click", function() {
            // Your decline functionality here (if needed)
            // Hide the cookie popup
            closeCookiePopup();
        });
    }
});
    
    
    
    

    // Generic function to save data
    function saveFunction() {
        // Your save functionality here
        console.log("Saving data...");
    }

    // Function to set a cookie
    function setCookie(name, value, days) {
        var expires = "";
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "") + expires + "; path=/";
    }

    // Function to get the value of a cookie
    function getCookie(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(";");
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == " ") c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }
    
</script>

    @stack('style')


<style>
    
    .card-header {
    border: none !important;
    padding: 10px !important;
}
.cookie-setting-dashboard-accordian .card {
    border: none;
}
.cookie-setting-dashboard-accordian .card-body {
    padding: 0 1rem;
}
.slider {
    position: absolute;
    height: 20px;
    width: 40px;
    cursor: pointer;
    top: 15px;
    
    right: 0;
    bottom: 0;
    background-color: #ccc;
    -webkit-transition: .4s;
    transition: .4s;
  }
  
  .slider:before {
    position: absolute;
    content: "";
    height: 18px;
    width: 18px;
    left: 3px;
    bottom: 1px;
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;
  }
  
  input:checked + .slider {
    background-color: #2196F3;
  }
  
  input:focus + .slider {
    box-shadow: 0 0 1px #2196F3;
  }
  
  input:checked + .slider:before {
    -webkit-transform: translateX(16px);
    -ms-transform: translateX(16px);
    transform: translateX(16px);
  }
  
  /* Rounded sliders */
  .slider.round {
    border-radius: 34px;
  }
  
  .slider.round:before {
    border-radius: 50%;
  } 
  .cookie-setting-dashboard-accordian .heading--button {
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.btn-link:hover {
    color: #000000 !important;
    text-decoration: none !important;
}
.cookie-setting-dashboard-accordian .heading--button .popup-button {
    color: #000;
    text-decoration: none !important;
    padding: 0;
    font-size: 18px;
    font-weight: 500;
}
.cookie-setting-dashboard-accordian .card-body h4 {
    font-size: 16px;
    font-weight: 500;
}
.customize-inner-info {
    padding: 0 1rem;
    overflow-y: scroll;
    height: 120px;
}
.popup-header .modal-title {
    font-size: 24px;
    text-align: center;
    width: 100%;
    font-weight: 700;
}

@media (min-width: 576px)
{
    .modal-dialog {
        max-width: 700px !important;
        margin: 1.75rem auto;
    }
}
    
</style>
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
	integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
	crossorigin="anonymous"
	referrerpolicy="no-referrer"
></script>


</head>


<body id="body">
    @if (Auth::check())
        @if (Auth::user()->hasVerifiedEmail() == false)
            <section class="top-bar secondary-bg email-verify">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="email-verify-box">
                                <p>Please Verify your Email Address</p>
                                <form action="{{ route('verification.resend') }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="d-inline btn btn-link p-0">
                                        Click here to request another
                                    </button>.
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
    @endif
    <section class="top-bar secondary-bg">
        <div class="container">
        </div>
    </section>
    <div class="multi pbd_lang-block">
    <form action="{{ route('changeLanguage') }}" method="post">
        @csrf
        <select name="locale" onchange="this.form.submit()">
            @foreach(config('app.locales') as $locale)
                <option value="{{ $locale }}" {{ app()->getLocale() == $locale ? 'selected' : '' }}>
                    {{ strtoupper($locale) }}
                </option>
            @endforeach
        </select>
    </form>

</div>
    <nav class="navbar navbar-expand-lg desktop--menu">
        <div class="container main-header">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="/">
                <img src="{{ asset('public/images/main-logo.png') }}" alt="" />
            </a>
            <div class="collapse navbar-collapse list-style" id="navbarTogglerDemo03">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">@lang('words.home')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/scenarios">@lang('words.scenarios')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/toss-up-states">@lang('words.tossup')</a>
                    </li>
                    
                    @if (Auth::check() && Auth::user()->vote_check() != null)
                        <li class="nav-item result-nav">
                            <a class="nav-link" href="/scenarios-result">@lang('words.scenarios-result')</a>
                        </li>
                    @endif

                </ul>

                @guest
                    @if (Route::has('login'))
                        <a class="btn btn-outline-success outline-secondary" href="{{ route('login') }}">@lang('words.Login')</a>
                    @endif

                    @if (Route::has('register'))
                        <a class="btn btn-outline-success primary-button" href="{{ route('register') }}">@lang('words.signup')  </a>
                    @endif
                @else
                    <a href="javascript:;" class="btn btn-outline-success outline-secondary">@lang('words.hello')
                        {{ Auth::user()->name }}</a>
                    <a class="btn btn-outline-success primary-button" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>


                    <!-- In your Blade view -->
                    <button class="open-button btn btn-danger" onclick="openForm()" data-toggle="tooltip"
                        data-placement="top" title="Delete this Account!" data-bs-toggle="modal"
                        data-bs-target="#deleteModalNotice">
                        <i class="fa-solid fa-trash"></i>
                    </button>

                    {{-- <script>
                        function openForm() {
                            document.getElementById("myForm").style.display = "block";
                        }

                        function closeForm() {
                            document.getElementById("myForm").style.display = "none";
                        }
                    </script> --}}
                @endguest
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg mobile--menu">
        <div class="container main-header">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('public/images/main-logo.png') }}" alt="" />
            </a>
            <div class="#" id="navbarTogglerDemo03">
                <span class="mobile--menu--toggle" onclick="openNav()">
                    <i class="fa-solid fa-bars"></i>
                    MENU
                </span>
            </div>
        </div>
    </nav>

    <div id="mySidenav" class="sidenav mobile--menu">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">@lang('words.home')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/scenarios">@lang('words.scenarios')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/toss-up-states">@lang('words.tossup')</a>
            </li>
            @if (Auth::check() && Auth::user()->vote_check() != null)
                <li class="nav-item">
                    <a class="nav-link" href="/scenarios-result">@lang('words.scenarios-result')</a>
                </li>
            @endif

            @guest
                @if (Route::has('login'))
                    <a class="btn btn-outline-success outline-secondary" href="{{ route('login') }}">@lang('words.Login')</a>
                @endif

                @if (Route::has('register'))
                    <a class="btn btn-outline-success primary-button" href="{{ route('register') }}">@lang('words.signup')</a>
                @endif
            @else
                <a href="javascript:;" class="btn btn-outline-success outline-secondary">@lang('words.hello')
                    {{ Auth::user()->name }}</a>
                <a class="btn btn-outline-success primary-button" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                
                <!-- In your Blade view -->
                    <button class="open-button btn btn-danger mobile-delete-button" onclick="openForm()" data-toggle="tooltip"
                        data-placement="top" title="Delete this Account!" data-bs-toggle="modal"
                        data-bs-target="#deleteModalNotice">
                        <i class="fa-solid fa-trash"></i>
                    </button>
            @endguest

        </ul>
    </div>


    @yield('content')

    <footer class="primary-bg desktop--footer">
        <div class="footer-inner container">
            <div class="logo--block">
                <div class="logo--footer">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('public/images/footer-logo.png') }}" alt="" />
                    </a>
                </div>
            </div>
            <div class="navigation--block title">
                <h3 class="footer-content--block white-color">
                    <span style="font-weight: 700">@lang('words.Navigate')</span>
                </h3>
            </div>
            <div class="newsletter--block title">
                <?php $language = session()->get('locale') ?>
                @if($language == 'fr')
                    <h3 class="footer-content--block white-color">
                        <span style="font-weight: 300">Pour rester </span><span style="font-weight: 700">en contact</span>
                    </h3>
                @else
                    <h3 class="footer-content--block white-color">
                        <span style="font-weight: 300">@lang('words.getin') </span><span style="font-weight: 700">@lang('words.Touch')</span>
                    </h3>
                @endif
            </div>
        </div>
        <div class="footer-inner container">
            <div class="logo--block">
                <div class="footer-logo-bottom">
                    <div class="footer-email">
                        <i class="fa-solid fa-envelope"></i>
                        <span><a href="mailto:info@2024usapresidentialelection.com">info@2024usapresidentialelection.com</a></span>
                    </div>
                </div>

                <div class="social-icons">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-linkedin-in"></i>
                    <i class="fa-brands fa-twitter"></i>
                </div>
            </div>
            <div class="navigation--block neg--ml--onefifty">
                <div class="footer-menu">
                    <ul class="pbd_list-privacy">
                        <li class="pbd_list-privacy"><a href="/">@lang('words.home')</a></li>
                        <li class="pbd_list-privacy"><a href="/scenarios">@lang('words.scenarios')</a></li>
                        <li class="pbd_list-privacy"><a href="/toss-up-states">@lang('words.tossup')</a></li>

                    </ul>
                </div>
            </div>
            <div class="newsletter--block">
                @guest
                    @if (Route::has('login'))
                        <a class="btn primary-outline white-color cta--btn" href="{{ route('login') }}">@lang('words.Login')</a>
                        </br></br>
                    @endif

                    @if (Route::has('register'))
                        <a class="btn primary-outline white-color cta--btn" href="{{ route('register') }}">@lang('words.signup')</a>
                    @endif
                @else
                    <a href="javascript:;" class="btn primary-outline white-color cta--btn">@lang('words.hello')
                        {{ Auth::user()->name }}</a> </br></br>
                    <a class="btn primary-outline white-color cta--btn" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endguest
            </div>
        </div>
        <div class="footer--copyright">
            <div class="container">
                <div class="pbd_footer--bottom">
                    <div class="pbd_copyright--footer">
                        <p class="m-0">
                        Copyright &copy; <strong>{{ date('Y') }} <a href="/">USA Presidential Election</a></strong>.
                        All Rights Reserved.
                        <span class="float-right" style="opacity: 0;font-size:0.1px">
                            Developed by <a href="https://probdone.com">Probdone</a>
                        </span>
                        </p>
                    </div>
                    <div class="pbd_policy--pages">
                            <li class="nav-item pbd_list-privacy">
                                <a class="nav-link" href="/privacy-policy">@lang('words.Privacy Policy')</a>
                            </li>
                            <strong>|</strong>
                            <li class="nav-item pbd_list-privacy">
                                <a class="nav-link" href="/company-information">@lang('words.Company Information')</a>
                            </li>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    {{-- MOBILE FOOTER --}}

    <footer class="primary-bg mobile--footer">
        <div class="footer-inner container">
            <div class="logo--block">
                <div class="logo--block">
                    <div class="logo--footer">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('public/images/footer-logo.png') }}" alt="" />
                        </a>
                    </div>
                </div>
                <div class="footer-logo-bottom">
                    <div class="footer-email">
                        <i class="fa-solid fa-envelope"></i>
                        <span><a href="mailto:info@2024usaPresidentialelection.com">info@2024usaPresidentialelection.com</a></span>
                    </div>
                </div>

                <div class="social-icons">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-linkedin-in"></i>
                    <i class="fa-brands fa-twitter"></i>
                </div>
            </div>
            <div class="navigation--block">
                <div class="navigation--block title">
                    <h3 class="footer-content--block white-color">
                        <span style="font-weight: 700">Navigate</span>
                    </h3>
                </div>
                <div class="footer-menu">
                    <ul>
                        <li><a href="/">@lang('words.home')</a></li>
                        <li><a href="/scenarios">@lang('words.scenarios')</a></li>
                        <li><a href="/toss-up-states">@lang('words.tossup')</a></li>
                    </ul>
                </div>
            </div>
            <div class="newsletter--block">
                <div class="newsletter--block title">
                    <?php $language = session()->get('locale') ?>
                    @if($language == 'fr')
                        <h3 class="footer-content--block white-color">
                            <span style="font-weight: 300">Pour rester </span><span style="font-weight: 700">en contact</span>
                        </h3>
                    @else
                        <h3 class="footer-content--block white-color">
                            <span style="font-weight: 300">@lang('words.getin') </span><span style="font-weight: 700">@lang('words.Touch')</span>
                        </h3>
                    @endif
                </div>
                @guest
                    @if (Route::has('login'))
                        <a class="btn primary-outline white-color cta--btn" href="{{ route('login') }}">@lang('words.Login')</a>
                    @endif

                    @if (Route::has('register'))
                        <a class="btn primary-outline white-color cta--btn" href="{{ route('register') }}">@lang('words.signup')</a>
                    @endif
                @else
                    <a href="javascript:;" class="btn primary-outline white-color cta--btn">@lang('words.hello')
                        {{ Auth::user()->name }}</a>
                    <a class="btn primary-outline white-color cta--btn" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endguest
            </div>
        </div>
        <div class="footer--copyright">
            <div class="container">
                <div class="pbd_footer--bottom">
                    <div class="pbd_copyright--footer">
                        <p class="m-0">
                        Copyright &copy; <strong>{{ date('Y') }} <a href="/">USA Presidential Election</a></strong>.
                        All rights reserved.
                        <span class="float-right" style="opacity: 0;font-size:0.1px">
                            Developed by <a href="https://probdone.com">Probdone</a>
                        </span>
                        </p>
                    </div>
                    <div class="pbd_policy--pages">
                            <li class="nav-item pbd_list-privacy">
                                <a class="nav-link" href="/privacy-policy">@lang('words.Privacy Policy')</a>
                            </li>
                            <strong>|</strong>
                            <li class="nav-item pbd_list-privacy">
                                <a class="nav-link" href="/company-information">@lang('words.Company Information')</a>
                            </li>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <div class="modal fade" id="deleteModalNotice" tabindex="-1" role="dialog"
        aria-labelledby="deleteModalNoticeLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header secondary-bg">
                    <h5 class="modal-title white-color" id="deleteModalNoticeLabel">@lang('words.Delete Account Confirmation')</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-popup" id="myForm">
                        <form method="POST" action="{{ route('account.delete.confirm') }}" class="form-container">
                            @csrf

                            <div class="notice--register mb-3">
                                <span class="secondary-color">
                                    <strong>
                                        @lang('words.Note:h')
                                    </strong>
                                </span>
                                <p class="mt-1">
                                    @lang('words.Once you') <strong>@lang('words.delete')</strong> @lang("words.this account, there is no going back! To confirm please type your account's password.")
                                </p>
                            </div>

                            <div class="form-group">
                                <label for="password">@lang('words.Password')</label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">
                        @lang('words.delete')
                    </button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">@lang('words.Close')</button>
                </div>
                </form>

            </div>
        </div>
    </div>

    <div class="modal fade" id="voteModal" tabindex="-1" role="dialog" aria-labelledby="voteModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="voteModalLabel">@lang('words.Are you Sure?')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('user.vote.post') }}" method="post">
                        @csrf
                        <input type="hidden" name="url" value="" id="vote_url">
                        <button class="btn btn-outline-success primary-button w-100" type="submit">@lang('words.Yes')</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- JQUERY SCRIPT CDN -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- BOOSTRATP V5 SCRIPT CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

    <!-- TOASTER SCRIPT CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- CUSTOM SCRIPTS -->
    <script>
        $(document).ready(function() {
            $('#btn-vote').click(function() {
                $('#voteModal #vote_url').val(window.location.href);
                $('#voteModal').modal('show');
            });
        });
    </script>

    {{-- MOBILE MENU SIDE NAV SCRIPT --}}
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "100%";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>
    @stack('script')
    @if (!empty($errors->all()))
        @foreach ($errors->all() as $error)
            <script>
                toastr.error("{{ $error }}")
            </script>
        @endforeach
    @endif
    @if (session()->has('message'))
        <script>
            toastr.success("{{ session()->get('message') }}")
        </script>
    @endif

    <!-- Cookie Popup -->
    <!--<div id="cookie-popup" class="cookie-warning">-->
    <!--    <h3 class="cookie-title">-->
    <!--        <span>-->
    <!--            🍪-->
    <!--        </span>-->
    <!--        @lang('words.This site uses cookies and gives you control over what you want to activate')-->
    <!--    </h3>-->
    <!--    <div class="cookie-text">@lang('words.We use cookies on our website to ensure you have the best browsing experience by remembering your preferences, personalizing content and ads as well as analysing our site usage')-->

        
    <!--    </div>-->
    <!--    <div class="cookie-btn-wrapper">-->
    <!--        <button id="customize-cookies" class="cookie-btn" data-toggle="modal" data-target="#cookieSettingPopup">@lang('words.Cookie Settings Dashboard')</button>-->
    <!--        <button id="accept-cookies" class="cookie-btn">@lang('words.Accept all')</button>-->
    <!--        <button id="decline-cookies" class="cookie-btn">@lang('words.Decline all')</button>-->
    <!--    </div>-->
    <!--</div>-->
    
        <!-- Cookie Popup -->
    <div id="cookie-popup" class="cookie-warning">
        <h3 class="cookie-title">
            <span>
                🍪
            </span>
            @lang('words.This site uses cookies and gives you control over what you want to activate')
        </h3>
        <div class="cookie-text">@lang('words.We use cookies on our website to ensure you have the best browsing experience by remembering your preferences, personalizing content and ads as well as analysing our site usage')
        
        </div>
        <div class="cookie-btn-wrapper">
            <button id="customize-cookies" class="cookie-btn" data-toggle="modal" data-target="#cookieSettingPopup">@lang('words.Cookie Settings')</button>
            <button id="accept-cookies" class="cookie-btn">@lang('words.Accept all')</button>
            <button id="decline-cookies" class="cookie-btn">@lang('words.Decline all')</button>
        </div>
    </div>



<!-- CUSTOMIZE POPUP Modal START -->
  <div class="modal fade" id="cookieSettingPopup" tabindex="-1" role="dialog" aria-labelledby="cookieSettingPopup" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header popup-header cookie-setting-popup-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">@lang('words.Cookie Settings Dashboard') </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body cookie-setting-dashboard">
            <h1 class="cookie-setting-dashboard-heading"></h1>
            <div class="accordion cookie-setting-dashboard-accordian" id="accordionExample">
                <div class="card necessary-popup">
                  <div class="card-header" id="headingOne">
                    <div class="heading--button">
                        <h5 class="mb-0">
                            <button class="btn btn-link popup-button" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                @lang('words.Strictly necessary') 
                            </button>
                          </h5>
                          <label class="nototot">
                            <span class="disabled"> <sub>@lang('words.Always Enabled')</sub></span>
                          </label>
                    </div>
                  </div>
              
                  <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body customize-inner-info">
                        <p>
                            @lang('words.somecookies')
                        </p>
                        <h4>@lang('words.Authentication')</h4>
                        <p>
                            @lang("words.To remember your login state so you don't have to log in as you navigate through our Site and dashboard.")
                        </p>
                        <h4>@lang('words.Fraud Prevention and Detection')</h4>
                        <p>
                            @lang('words.cookiesandsimilar')
                        </p>
                        <h4>@lang('words.Security')</h4>
                        <p>
                            @lang('words.To protect user data from unauthorized access.')
                        </p>
                        <h4>@lang('words.Functionality') </h4>
                        <p>
                            @lang('words.To keep our Site and Services working correctly, like showing you the right information for your selected location.')
                        </p>
                    </div>

                    
                  </div>
                </div>

                <div class="card necessary-popup">
                    <div class="card-header" id="headingFour">
                      <div class="heading--button">
                          <h5 class="mb-0">
                              <button class="btn btn-link popup-button" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                @lang('words.Functional')  
                              </button>
                            </h5>
                            <div class="form-check form-switch byfault">
                              <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" checked>
                            </div>
                      </div>
                    </div>
                
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                      <div class="card-body customize-inner-info">
                          <p>
                            @lang('words.functional:p')
                        </p>
                      </div>
                    </div>
                </div>
                
                
                <div class="card necessary-popup">
                    <div class="card-header" id="headingFive">
                      <div class="heading--button">
                          <h5 class="mb-0">
                              <button class="btn btn-link popup-button" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Performance  
                              </button>
                            </h5>
                            <div class="form-check form-switch">
                              <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" checked>
                            </div>
                      </div>
                    </div>
                
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                      <div class="card-body customize-inner-info">
                          <p>
                            @lang('words.Performance:p')

                        </p>
                      </div>
                    </div>
                </div>
                
                
                <div class="card necessary-popup">
                    <div class="card-header" id="headingTwo">
                      <div class="heading--button">
                          <h5 class="mb-0">
                              <button class="btn btn-link popup-button" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                @lang('words.Statistics') 
                              </button>
                            </h5>
                            <div class="form-check form-switch">
                              <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            </div>
                      </div>
                    </div>
                
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="card-body customize-inner-info">
                          <p>
                            @lang('words.Statistics:p')
  
                        </p>
                          <h4>@lang('words.Site Features and Services')</h4>
                          <p>
                            @lang('words.Site Features and Services:p') 
                        </p>
                          <h4>@lang('words.To Analyze and Improve Our Services')</h4>
                          <p>
                            @lang('words.To Analyze and Improve Our Services:p')
                          </p>
                          <h4>Pixel tags (also known as web beacons and clear GIFs)</h4>
                          <p>
                            May be used in connection with some Services to, among other things, track the actions of Users (such as email recipients), measure the success of our marketing campaigns and compile statistics about usage of the Services and response rates.
                        </p>
                      </div>
  
                      
                    </div>
                </div>

                <div class="card necessary-popup">
                    <div class="card-header" id="headingSix">
                      <div class="heading--button">
                          <h5 class="mb-0">
                              <button class="btn btn-link popup-button" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                @lang('words.Marketing')   
                              </button>
                            </h5>
                            <div class="form-check form-switch">
                              <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            </div>
                      </div>
                    </div>
                
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                      <div class="card-body customize-inner-info">
                          <p>
                            @lang('words.Marketing:p')
                        </p>
                      </div>
                    </div>
                </div>

                <div class="card necessary-popup">
                    <div class="card-header" id="headingSeven">
                      <div class="heading--button">
                          <h5 class="mb-0">
                              <button class="btn btn-link popup-button" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                @lang('words.Unclassified')    
                              </button>
                            </h5>
                            <div class="form-check form-switch">
                              <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            </div>
                      </div>
                    </div>
                
                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                      <div class="card-body customize-inner-info">
                          <p>
                            @lang('words.Unclassified:p') 

                        </p>
                      </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="modal-footer">
          <button type="button" id="saveAcceptBtn" class="btn btn-primary" data-dismiss="modal" aria-label="Close">@lang('words.Save & Accept')</button>
        </div>
      </div>
    </div>
  </div>

<!-- CUSTOMIZE POPUP BOOTSTRAP SCRIPt -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
