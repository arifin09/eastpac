@php
    use App\LandingPageContent;
@endphp
<!DOCTYPE html>
<html lang="en" class="js">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Softnio">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="ICO Crypto is a modern and elegant landing page, created for ICO Agencies and digital crypto currency investment website.">
	<!-- Fav Icon  -->
	<link rel="shortcut icon" href="{{asset('landingpage/images/Logo2.png')}}">
	<!-- Site Title  -->
	<title>{{ App\SiteConfig::config('SITE_TITLE') }}</title>
	<!-- Vendor Bundle CSS -->
	<link rel="stylesheet" href="{{asset('landingpage/assets/css/vendor.bundle.css?ver=142')}}">
	<!-- Custom styles for this template -->
	<link rel="stylesheet" href="{{asset('landingpage/assets/css/style.css?ver=142')}}">
    <link rel="stylesheet" href="{{asset('landingpage/assets/css/theme-orange.css?ver=142')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
    <style>
        .text-contact {
            color: #f9464a !important;
        }
        .text-section {
            color: #f9464a !important;
        }
        .flip-logo{ animation: fliplogo 3s; }
        @keyframes fliplogo{
            0%{
                transform: rotateY(0deg);
            }
            100%{
                transform: rotateY(360deg);
            }
	    }

        .info{
            border-radius: 5px;
            background-color: #ffffffcf;
            visibility: visible;
            animation-delay: 1.35s;
            color: #8c282f;
            padding: 5px 10px;

        }
        .social-bottom{
            flex-direction: row;
            display: flex;
            padding: 10px 0px;
            margin-top: 10px;
        }
    	.social-bottom li{
            display: list-item;
            margin: 0px 5px;
        }
    	.social-bottom a{
            color: #fff;
            text-align: center;
            line-height: 24px;
            width: 24px;
            display: block;
        }
        .contact-info li span{
            line-height: 15px;
            font-size: 13px;
        }
	.contact-info li{
	text-align: center;
            font-weight: 500;
            width:33.33%;
        }

        .btn-edit{
            background: #5cb85c !important;
            padding: 6px 12px;
            min-width: auto;
            line-height: 10px;
            margin-right: 0px;
            border-radius: 12px !important;
        }
        .btn-edit:hover{
            color:#FFF !important;
        }
        .btn-for-upload{
            font-size:12px;
            width:180px;
        }
    </style>
</head>

<body class="theme-dark io-zinnia" data-spy="scroll" data-target="#mainnav" data-offset="80">

	<!-- Header -->
	<header class="site-header is-sticky">

	    <!-- Place Particle Js -->
	<div id="particles-js" class="particles-container particles-js"></div>

	<!-- Navbar -->
	<div class="navbar navbar-full navbar-expand-lg is-transparent" id="mainnav">
            <a class="navbar-brand animated" data-animate="fadeInDown" data-delay=".65" href="./">
                <img class="logo logo-dark" alt="logo" src="{{asset('landingpage/images/logobaru.png')}}" >
                <img class="logo logo-light flip-logo" alt="logo" src="{{asset('landingpage/images/logo-full-white-new.png')}}">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle">
                <span class="navbar-toggler-icon">
                    <span class="ti ti-align-justify"></span>
                </span>
            </button>
<!--Navbar section-->
            <div class="collapse navbar-collapse justify-content-between" id="navbarToggle">
                <ul class="navbar-nav animated remove-animation" data-animate="fadeInDown" data-delay=".75">
                    <li class="nav-item"><a class="nav-link menu-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link menu-link" href="#benifits">Benefits</a></li>
                    <li class="nav-item"><a class="nav-link menu-link" href="#tokenSale">Token Sale</a></li>
                    <li class="nav-item"><a class="nav-link menu-link" href="#roadmap">Roadmap</a></li>
                    <li class="nav-item"><a class="nav-link menu-link" href="#team">Team</a></li>
                    <li class="nav-item"><a class="nav-link menu-link" href="#faq">FAQs</a></li>
                    <li class="nav-item"><a class="nav-link menu-link" href="#contact">Contact</a></li>
                </ul>
                <ul class="navbar-btns animated remove-animation" data-animate="fadeInDown" data-delay=".85">
                    <li class="nav-item lang-switch">
                        <a class="" href="#" data-toggle="dropdown">English <em class="ti ti-angle-down"></em></a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">French</a>
                            <a class="dropdown-item" href="#">Chinese</a>
                            <a class="dropdown-item" href="#">Hindi</a>
                        </div>
                    </li>
                    @if(Auth::guest())
                    <li class="nav-item"><a class="nav-link btn btn-sm btn-outline menu-link" href="{{ route('register') }}">Register</a></li>
                    <li class="nav-item"><a class="nav-link btn btn-sm btn-outline menu-link" href="{{ route('login') }}">Log In</a></li>
                    @else
                    <li class="nav-item"><a class="nav-link btn btn-sm btn-outline menu-link" href="{{ route('home') }}">Dashboard</a></li>
                    @endif
                </ul>
            </div>
	</div>
	<!-- End Navbar -->

	<!-- Banner/Slider -->
	<div id="header" class="banner banner-zinnia">
            <div class="ui-shape ui-shape-light ui-shape-header"></div>
	<div class="container">
	<div class="banner-content">
	<div class="row align-items-center text-center justify-content-center">
	<div class="col-sm-10 col-md-12 col-lg-10">
	<div class="header-txt tab-center mobile-center">
                                @role('administrator')
                                <h1 class="animated" data-animate="fadeInUp" data-delay="1.25" id="txt-banner-1">{!!LandingPageContent::getJsonData('banner_1', 'banner_1', 'txt')!!}<br class="d-none d-xl-block"></h1>
                                <div class="row" id="txt-banner-1-ctrl" style="display:none">
                                    <div class="col-md-12 text-center">
                                        <a href="#" id="txt-banner-1-cancel" class="btn btn-success btn-edit"> <i class="fas fa-times"> </i> cancel </a>&nbsp;
                                        <a href="#" id="txt-banner-1-save" class="btn btn-success btn-edit"> <i class="fas fa-save"> </i> save </a>
                                    </div>
                                </div>
                                @else
                                <h1 class="animated" data-animate="fadeInUp" data-delay="1.25">
                                    {!!
                                        LandingPageContent::getJsonData('banner_1', 'banner_1', 'txt')
                                    !!}
                                    <br class="d-none d-xl-block">
                                </h1>
                                @endrole
                                @role('administrator')
                                <h3 id="txt-banner-2">{!!
                                        LandingPageContent::getJsonData('banner_2', 'banner_2', 'txt')
                                    !!}</h3>
                                <div class="row" id="txt-banner-2-ctrl" style="display:none">
                                    <div class="col-md-12">
                                        <a href="#" id="txt-banner-2-cancel" class="btn btn-success btn-edit pull-right" style="color:white;"> <i class="fas fa-times"> </i> cancel </a>&nbsp;
                                        <a href="#" id="txt-banner-2-save" class="btn btn-success btn-edit pull-right" style="color:white;"> <i class="fas fa-save"> </i> save </a>
                                    </div>
                                </div>
                                @else
                                <h3 id="txt-banner-2">{!!
                                        LandingPageContent::getJsonData('banner_2', 'banner_2', 'txt')
                                    !!}</h3>
                                @endrole
    <h3>900,000 TAKENS ALREADY SOLD OUT</h3>
	<div class="gaps size-1x d-none d-md-block"></div>
	<p class="lead animated" data-animate="fadeInUp" data-delay="1.35"><span class="info ">next offer will start again at 21:30 (+8 GMT)</span> </p>
	<div class="gaps size-1x d-none d-md-block"></div>
	<ul class="btns animated" data-animate="fadeInUp" data-delay="1.45">
                                    <li><a href="{{route('register')}}" class="btn btn-icon-s3">JOIN PRE-SALE <i class="fas fa-angle-double-right"></i></a></li>
	<li><a href="#" class="btn btn-icon-s3">WHITE PAPER <i class="fas fa-angle-double-right"></i></a></li>
	</ul>
	</div>
	</div><!-- .col  -->
	</div><!-- .row  -->
	</div><!-- .banner-content  -->
	</div><!-- .container  -->
	</div>
	<!-- End Banner/Slider -->
	<div class="presale-box animated" data-animate="fadeIn" data-delay="1.65">
            <div class="container">
                <div class="row no-gutters justify-content-center mid-box">
                    <div class="col-xl-4 col-md-5">
                        <div class="presale-countdown">
                            <h5>Pre-sale start in</h5>
	<div class="token-countdown" data-date="2018/12/05">
	<div id="clockdiv">
	<div>
	<span class="days"></span>
	<div class="smalltext">Days</div>
	</div>
	<div>
	<span class="hours"></span>
	<div class="smalltext">Hours</div>
	</div>
	<div>
	<span class="minutes"></span>
	<div class="smalltext">Minutes</div>
	</div>
	<div>
	<span class="seconds"></span>
	<div class="smalltext">Seconds</div>
	</div>
	</div></div>
                        </div>
                    </div><!-- .col  -->
                    <div class="col-xl-6 col-md-7">
                        <div class="presale-status">
                            <h5>Pre Sale</h5>
                            <div class="presale-bar">
                                {{-- <div class="presale-bar-percent" style="width:35%"></div> --}}
                                {{-- 50000/200000*100 --}}
                                <div class="presale-bar-percent"
                                    style="width:{{ $dshare_persentase_progress_bar }}%;color:#444;">
                                </div>
                            </div>
                            <div class="presale-points d-flex justify-content-between">
                                <span>{{ number_format($dshare_sold) }} EAST ({{ $dshare_persentase_progress_bar }}%)
                                </span>
                                <span>{{ number_format($dshare_target) }} EAST (100%)</span>
                            </div>
                        </div>
                    </div><!-- .col  -->
                </div><!-- .row  -->
            </div><!-- .container  -->
	</div><!-- .presale-box  -->
	</header>
	<div class="gaps size-6x d-md-none"></div>
    <div class="gaps size-3x"></div>
	<!-- End Header -->


    <!-- About EASTPAC -->
    <div class="section section-pad about-section no-pb section-bg" id="about">
        <div class="container">
            <div class="row justify-content-center text-center">
	<div class="col-md-10">
	<div class="section-head-s7" id="txt-about-1">
                        <h2 class="section-title-s7 animated" data-animate="fadeInUp" data-delay=".1">          {!!LandingPageContent::getJsonData('about_1', 'about_1', 'title')!!}
                        </h2>
                        <p class="lead animated" data-animate="fadeInUp" data-delay=".2">
                            {!!LandingPageContent::getJsonData('about_1', 'about_1', 'content')!!}
                        </p>
                    </div>
                    @role('administrator')
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <a href="#" class="btn btn-success btn-edit" style="" id="edit-about-1" onclick="return false;"><i class="fa fa-pencil"> Edit</i></a>
                            <a href="#" class="btn btn-success btn-edit" style="display:none;" id="save-about-1" onclick="return false;"><i class="fa fa-save"> Save</i></a>
                            <a href="#" class="btn btn-success btn-edit" style="display:none;" id="cancel-about-1" onclick="return false;"><i class="fa fa-times"> Cancel</i></a>
                        </div>
                    </div>
                    @endrole
	</div>
	</div>
        </div>
    </div>
    <!-- End Section -->


    <!-- Start Section -->
    <div class="section section-pad section-bg" id="why">
        <div class="ui-shape ui-shape-s1"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 order-last">
                    <div class="animated" data-animate="fadeInUp" data-delay=".5">
    <img id="file-img-1" src="{{asset('landingpage/images/zinnia/graph-zinnia-a.png')}}" alt="graph" style="max-height:430px;">
    <input type="hidden" id="path-img-1" value="{{asset('landingpage/images/zinnia/graph-zinnia-a.png')}}">
    @role('administrator')
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <input type="file" id="upload-img-1" style="display:none;" class="btn-for-upload">
                        </div>
                        <div class="col-md-12 text-center">
                            <a href="#" class="btn btn-success btn-edit" style="" id="edit-img-1" onclick="return false;"><i class="fa fa-pencil"> Edit</i></a>
                            <a href="#" class="btn btn-success btn-edit" style="display:none;" id="save-img-1" onclick="return false;"><i class="fa fa-save"> Save </i> </a>
                            <a href="#" class="btn btn-success btn-edit" style="display:none;" id="cancel-img-1" onclick="return false;"><i class="fa fa-times" style=""> Cancel</i> </a>
                        </div>
                    </div>
                    @endrole
	</div>
                </div>
                <div class="col-lg-5 text-center text-lg-left res-m-bttm">
                    <div class="text-block" id="txt-about-2">
                        <h2 class="animated" data-animate="fadeInUp" data-delay=".1">
                            {!!
                                LandingPageContent::getJsonData('about_2', 'about_2', 'title')
                            !!}
                        </h2>

                        <p class="lead animated" data-animate="fadeInUp" data-delay=".2">
                            <strong>
                                {!!
                                    LandingPageContent::getJsonData('about_2', 'about_2', 'content_0')
                                !!}
                            </strong>
                        </p>

                        <p class="animated" data-animate="fadeInUp" data-delay=".3">
                            {!!
                                LandingPageContent::getJsonData('about_2', 'about_2', 'content_1')
                            !!}
                        </p>
                        <p class="animated" data-animate="fadeInUp" data-delay=".4">
                            {!!
                                LandingPageContent::getJsonData('about_2', 'about_2', 'content_2')
                            !!}
                        </p>
                    </div>
                    @role('administrator')
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <a href="#" class="btn btn-success btn-edit" style="" id="edit-about-2" onclick="return false;"><i class="fa fa-pencil"> Edit</i></a>
                            <a href="#" class="btn btn-success btn-edit" style="display:none;" id="save-about-2" onclick="return false;"><i class="fa fa-save"> Save </i> </a>
                            <a href="#" class="btn btn-success btn-edit" style="display:none;" id="cancel-about-2" onclick="return false;"><i class="fa fa-times" style=""> Cancel</i> </a>
                        </div>
                    </div>
                    @endrole
                </div>
            </div>
        </div>
    </div>
    <!-- End Section -->


    <!-- Problem & solution Section -->
    <div class="section section-pad prblmsltn-section section-bg-alt" id="benifits">
        <div class="ui-shape ui-shape-s2"></div>
        <div class="container">
            <div class="row justify-content-center text-center">
	<div class="col-md-6 col-sm-8">
	<div class="section-head-s7" id="txt-beneffit">
	<h2 class="section-title-s7 animated" data-animate="fadeInUp" data-delay=".1">
                            {!!
                                LandingPageContent::getJsonData('beneffit', 'beneffit', 'title')
                            !!}
                        </h2>
	<p class="animated" data-animate="fadeInUp" data-delay=".2">
                            {!!
                                LandingPageContent::getJsonData('beneffit', 'beneffit', 'content')
                            !!}
                        </p>
                    </div>
                    @role('administrator')
                    <div class="row">
                        <div class="col-md-12 text-center" style="margin-bottom:20px;">
                            <a href="#" class="btn btn-success btn-edit" style="" id="edit-beneffit" onclick="return false;"><i class="fa fa-pencil"> Edit</i></a>
                            <a href="#" class="btn btn-success btn-edit" style="display:none;" id="save-beneffit" onclick="return false;"><i class="fa fa-save"> Save </i> </a>
                            <a href="#" class="btn btn-success btn-edit" style="display:none;" id="cancel-beneffit" onclick="return false;"><i class="fa fa-times" style=""> Cancel</i> </a>
                        </div>
                    </div>
                    @endrole
	</div>
	</div>
            <div class="prblmsltn-list">
                <div class="prblmsltn-item">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 animate-left delay-5ms">
                            <div class="prblm-item">
                                <h2 class="prblm-title">Problem</h2>
                                <h5 class="prblm-subtitle">Centralize Network</h5>
                                <ul class="prblm-points">
                                    <li>What is the crypto tech? Lorem ipsum dolor sit amet, consectetur.</li>
                                    <li>Natural Language Understanding</li>
                                    <li>How to network with other investors / like-minded people?</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 animate-right delay-7ms">
                            <div class="sltn-item">
                                <h2 class="sltn-title">Solution</h2>
                                <h5 class="sltn-subtitle">Decentralize Network</h5>
                                <ul class="sltn-points">
                                    <li>What is the crypto tech? Lorem ipsum dolor sit amet, consectetur.</li>
                                    <li>Natural Language Understanding</li>
                                    <li>How to network with other investors / like-minded people?</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="prblmsltn-item">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 animate-left delay-5ms">
                            <div class="prblm-item">
                                <h2 class="prblm-title">Problem</h2>
                                <h5 class="prblm-subtitle">Centralize Network</h5>
                                <ul class="prblm-points">
                                    <li>What is the crypto tech? Lorem ipsum dolor sit amet, consectetur.</li>
                                    <li>Natural Language Understanding</li>
                                    <li>How to network with other investors / like-minded people?</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 animate-right delay-7ms">
                            <div class="sltn-item">
                                <h2 class="sltn-title">Solution</h2>
                                <h5 class="sltn-subtitle">Decentralize Network</h5>
                                <ul class="sltn-points">
                                    <li>What is the crypto tech? Lorem ipsum dolor sit amet, consectetur.</li>
                                    <li>Natural Language Understanding</li>
                                    <li>How to network with other investors / like-minded people?</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Section -->


    <!-- Start Section -->
	<div class="section section-pad token-sale-section section-bg-zinnia" id="tokenSale">
	    <div class="container">
            <div class="row justify-content-center text-center">
	<div class="col-md-6">
	<div class="section-head-s7">
	<h2 class="section-title-s7 animated" data-animate="fadeInUp" data-delay=".1">EAST Tokens Details</h2>
	</div>
	</div>
	</div>
        </div>

        <div class="container">
            <div class="tokdis-list">
                <div class="row text-center text-lg-left">
                    <div class="col-md">
                        <div class="tokdis-item animated" id="txt-token-1" data-animate="fadeInUp" data-delay=".2">
                            <span>
                                {!!
                                    LandingPageContent::getJsonData('token_1', 'token_1', 'txt_2')
                                !!}
                            </span>
                            <h5>{!!
                                LandingPageContent::getJsonData('token_1', 'token_1', 'txt_1')
                            !!}</h5>
                        </div>
                        @role('administrator')
                        <div class="row">
                            <div class="col-md-12">
                                <a href="#" class="btn btn-success btn-edit" style="" id="edit-token-1" onclick="return false;"><i class="fa fa-pencil"> Edit</i></a>
                                <a href="#" class="btn btn-success btn-edit" style="display:none;" id="save-token-1" onclick="return false;"><i class="fa fa-save"> Save </i> </a>
                                <a href="#" class="btn btn-success btn-edit" style="display:none;" id="cancel-token-1" onclick="return false;"><i class="fa fa-times" style=""> Cancel</i> </a>
                            </div>
                        </div>
                        @endrole
                    </div><!-- .col -->
                    <div class="col-md">
                        <div class="tokdis-item animated" id="txt-token-2" data-animate="fadeInUp" data-delay=".3">
                            <span>
                                {!!
                                    LandingPageContent::getJsonData('token_2', 'token_2', 'txt_2')
                                !!}
                            </span>
                            <h5>{!!
                                LandingPageContent::getJsonData('token_2', 'token_2', 'txt_1')
                            !!}</h5>
                        </div>
                        @role('administrator')
                        <div class="row">
                            <div class="col-md-12">
                                <a href="#" class="btn btn-success btn-edit" style="" id="edit-token-2" onclick="return false;"><i class="fa fa-pencil"> Edit</i></a>
                                <a href="#" class="btn btn-success btn-edit" style="display:none;" id="save-token-2" onclick="return false;"><i class="fa fa-save"> Save </i> </a>
                                <a href="#" class="btn btn-success btn-edit" style="display:none;" id="cancel-token-2" onclick="return false;"><i class="fa fa-times" style=""> Cancel</i> </a>
                            </div>
                        </div>
                        @endrole
                    </div><!-- .col -->
                    <div class="col-md">
                        <div class="tokdis-item animated" id="txt-token-3" data-animate="fadeInUp" data-delay=".4">
                            <span>
                                {!!
                                    LandingPageContent::getJsonData('token_3', 'token_3', 'txt_2')
                                !!}
                            </span>
                            <h5>{!!
                                LandingPageContent::getJsonData('token_3', 'token_3', 'txt_1')
                            !!}</h5>
                        </div>
                        @role('administrator')
                        <div class="row">
                            <div class="col-md-12">
                                <a href="#" class="btn btn-success btn-edit" style="" id="edit-token-3" onclick="return false;"><i class="fa fa-pencil"> Edit</i></a>
                                <a href="#" class="btn btn-success btn-edit" style="display:none;" id="save-token-3" onclick="return false;"><i class="fa fa-save"> Save </i> </a>
                                <a href="#" class="btn btn-success btn-edit" style="display:none;" id="cancel-token-3" onclick="return false;"><i class="fa fa-times" style=""> Cancel</i> </a>
                            </div>
                        </div>
                        @endrole
                    </div><!-- .col -->
                    <div class="col-lg-4">
                        <div class="tokdis-item animated" id="txt-token-4" data-animate="fadeInUp" data-delay=".5">
                            <span>
                                {!!
                                    LandingPageContent::getJsonData('token_4', 'token_4', 'txt_2')
                                !!}
                            </span>
                            <h5>{!!
                                LandingPageContent::getJsonData('token_4', 'token_4', 'txt_1')
                            !!}</h5>
                        </div>
                        @role('administrator')
                        <div class="row">
                            <div class="col-md-12">
                                <a href="#" class="btn btn-success btn-edit" style="" id="edit-token-4" onclick="return false;"><i class="fa fa-pencil"> Edit</i></a>
                                <a href="#" class="btn btn-success btn-edit" style="display:none;" id="save-token-4" onclick="return false;"><i class="fa fa-save"> Save </i> </a>
                                <a href="#" class="btn btn-success btn-edit" style="display:none;" id="cancel-token-4" onclick="return false;"><i class="fa fa-times" style=""> Cancel</i> </a>
                            </div>
                        </div>
                        @endrole
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .tokdis-list -->
        </div><!-- .container -->
        <div class="gaps size-2x d-none d-md-block"></div>
        <div class="gaps size-2x"></div>
        <div class="toktmln-list">
            <div class="container">
                <div class="row">
                    <div class="col-lg">
                        <div class="toktmln-item animated" data-animate="fadeInUp" data-delay=".6">
                            <div>
                                <span>Token Sale I</span>
                                <span>January 15- February 15</span>
                            </div>
                            <div>
                                <span>67% Bonus</span>
                                <span>$0.354344/token</span>
                            </div>
                        </div>
                    </div><!-- .col -->
                    <div class="col-lg">
                        <div class="toktmln-item animated" data-animate="fadeInUp" data-delay=".7">
                            <div>
                                <span>Token Sale II</span>
                                <span>March 01 - March 15</span>
                            </div>
                            <div>
                                <span>40% Bonus</span>
                                <span>$0.354344/token</span>
                            </div>
                        </div>
                    </div><!-- .col -->
                    <div class="col-lg">
                        <div class="toktmln-item animated" data-animate="fadeInUp" data-delay=".8">
                            <div>
                                <span>Token Sale III</span>
                                <span>March 25- April 15</span>
                            </div>
                            <div>
                                <span>20% Bonus</span>
                                <span>$0.354344/token</span>
                            </div>
                        </div>
                    </div><!-- .col -->
                    <div class="col-lg">
                        <div class="toktmln-item animated" data-animate="fadeInUp" data-delay=".9">
                            <div>
                                <span>Token Sale VI</span>
                                <span>April 20- May 20</span>
                            </div>
                            <div>
                                <span>50% Bonus</span>
                                <span>$0.304344/token</span>
                            </div>
                        </div>
                    </div><!-- .col -->
                    <div class="col-lg">
                        <div class="toktmln-item animated" data-animate="fadeInUp" data-delay="1">
                            <div>
                                <span>Token Sale V</span>
                                <span>June 01 - July 30</span>
                            </div>
                            <div>
                                <span>30% Bonus</span>
                                <span>$0.354344/token</span>
                            </div>
                            </div>
                            <div>
                        </div>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .toktmln -->

    </div>
	<!-- End Section -->


    <!-- Start Section -->
	<div class="section section-pad token-alocate-section section-bg" id="tokenAlocate">
        <div class="ui-shape ui-shape-s3"></div>
	    <div class="container">
            <div class="row justify-content-center text-center">
	<div class="col-md-6">
	<div class="section-head-s7">
	<h2 class="section-title-s7 animated" data-animate="fadeInUp" data-delay=".1">Token Allocation Forecast</h2>
	</div>
	</div>
	</div>
            <div class="tab-s4">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs text-center animated" data-animate="fadeInUp" data-delay=".2">
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tab-dist">Distribution </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#tab-fund">Funding Allocation</a>
                    </li>
                </ul>
                <div class="gaps size-2x"></div>
                <div class="gaps size-3x d-none d-xl-block"></div>
                <!-- Tab panes -->
                <div class="tab-content animated" data-animate="fadeInUp" data-delay=".3">
                    <div class="tab-pane animate" id="tab-dist">
                        <div class="tkn-crt">
                            <div class="tkn-crt-img">
                                <img src="{{asset('landingpage/images/zinnia/chart-zinnia-a.png')}}" alt="chart">
                            </div>
                            <ul class="tkn-crt-lst">
                                <li class="tkn-crt-itm">
                                    <span class="tkn-crt-prcnt one"><span>60%</span></span><span class="tkn-crt-ttl">Token Sale Program</span>
                                </li>
                                <li class="tkn-crt-itm">
                                    <span class="tkn-crt-prcnt two"><span>8%</span></span><span class="tkn-crt-ttl">Reserve Fund</span>
                                </li>
                                <li class="tkn-crt-itm">
                                    <span class="tkn-crt-prcnt three"><span>15%</span></span><span class="tkn-crt-ttl">Team and Founders</span>
                                </li>
                                <li class="tkn-crt-itm">
                                    <span class="tkn-crt-prcnt four"><span>4%</span></span><span class="tkn-crt-ttl">Board Advisors</span>
                                </li>
                                <li class="tkn-crt-itm">
                                    <span class="tkn-crt-prcnt five"><span>7%</span></span><span class="tkn-crt-ttl">Ecosystem Development</span>
                                </li>
                                <li class="tkn-crt-itm">
                                    <span class="tkn-crt-prcnt five"><span>6%</span></span><span class="tkn-crt-ttl">Marketing and Bounty</span>
                                </li>
                            </ul>
                        </div>
                    </div><!-- End tab-pane -->
                    <div class="tab-pane animate active show" id="tab-fund">
                        <div class="tkn-crt">
                            <div class="tkn-crt-img">
                                <img src="{{asset('landingpage/images/zinnia/chart-zinnia-b.png')}}" alt="chart">
                            </div>
                            <ul class="tkn-crt-lst">
                                <li class="tkn-crt-itm">
                                    <span class="tkn-crt-prcnt one"><span>40%</span></span><span class="tkn-crt-ttl">Product Develoment</span>
                                </li>
                                <li class="tkn-crt-itm">
                                    <span class="tkn-crt-prcnt two"><span>12%</span></span><span class="tkn-crt-ttl">Business Development</span>
                                </li>
                                <li class="tkn-crt-itm">
                                    <span class="tkn-crt-prcnt three"><span>20%</span></span><span class="tkn-crt-ttl">Marketing</span>
                                </li>
                                <li class="tkn-crt-itm">
                                    <span class="tkn-crt-prcnt four"><span>10%</span></span><span class="tkn-crt-ttl">Legal &amp; Regulation</span>
                                </li>
                                <li class="tkn-crt-itm">
                                    <span class="tkn-crt-prcnt five"><span>6%</span></span><span class="tkn-crt-ttl">Partner/Investor</span>
                                </li>
                                <li class="tkn-crt-itm">
                                    <span class="tkn-crt-prcnt six"><span>8%</span></span><span class="tkn-crt-ttl">Operational</span>
                                </li>
                                <li class="tkn-crt-itm">
                                    <span class="tkn-crt-prcnt seven"><span>4%</span></span><span class="tkn-crt-ttl">Contingency</span>
                                </li>
                            </ul>
                        </div>
                    </div><!-- End tab-pane -->
                </div><!-- .tab-content -->
            </div><!-- .tab-custom-s4 -->
        </div><!-- .container -->
    </div>
	<!-- End Section -->


	<!-- WhitePaper Section -->
	<div class="section section-pad document-section section-bg-zinnia" id="documents">
	    <div class="container">
	        <div class="row justify-content-between align-items-center">
	            <div class="col-lg-5 res-m-bttm">
	                <div class="document-img-s3 animated" data-animate="fadeInUp" data-delay=".1">
	                    <img src="{{asset('landingpage/images/zinnia/documents-cover.png')}}" alt="documents">
	                </div>
	            </div><!-- .col -->
	            <div class="col-lg-7 text-center text-lg-left">
	                <div class="section-head-s7">
	<h2 class="section-title-s7 animated" data-animate="fadeInUp" data-delay=".2">Read Our Documents</h2>
	<p class="animated" data-animate="fadeInUp" data-delay=".3">Here is our full documents that help you to understand about us.</p>
	</div>
                    <ul class="document-list">
                        <li class="animated" data-animate="fadeInUp" data-delay=".4">
                            <a href="#" class="btn btn-outline btn-dropdown" data-toggle="dropdown">White Paper <i class="fas fa-caret-down"></i></a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="#">English</a></li>
                                <li><a href="#">Bahasa</a></li>
                                <li><a href="#">Russian</a></li>
                                <li><a href="#">Korea</a></li>
                            </ul>
                        </li>
                        <li class="animated" data-animate="fadeInUp" data-delay=".5">
                            <a href="#" class="btn btn-outline btn-dropdown" data-toggle="dropdown">One Pager <i class="fas fa-caret-down"></i></a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="#">English</a></li>
                                <li><a href="#">Bahasa</a></li>
                                <li><a href="#">Russian</a></li>
                                <li><a href="#">Korea</a></li>
                            </ul>
                        </li>
<!--
                        <li class="animated" data-animate="fadeInUp" data-delay=".6"><a href="#" class="btn btn-outline">Privacy &amp; Policy</a></li>
                        <li class="animated" data-animate="fadeInUp" data-delay=".7"><a href="#" class="btn btn-outline">Terms of Coin Sale</a></li>
-->
                    </ul>
	            </div><!-- .col -->
	        </div><!-- .row -->
	    </div><!-- .container -->
	</div>
	<!-- End Section -->


	<!-- Technology Service Section -->
	<div class="section section-pad services-section section-bg" id="services">
        <div class="ui-shape ui-shape-s4"></div>
	    <div class="container">
            <div class="row justify-content-center text-center">
	<div class="col-lg-6 col-sm-8">
	<div class="section-head-s7" id="txt-token-11">
	<h2 class="section-title-s7 animated" data-animate="fadeInUp" data-delay=".1">{!!
                            LandingPageContent::getJsonData('token_11', 'token_11', 'title')
                        !!}</h2>
	<p class="animated" data-animate="fadeInUp" data-delay=".2">{!!
                            LandingPageContent::getJsonData('token_11', 'token_11', 'content')
                        !!}</p>
                    </div>
                    @role('administrator')
                    <div class="row">
                        <div class="col-md-12 text-center" style="margin-bottom:20px;">
                            <a href="#" class="btn btn-success btn-edit" style="" id="edit-token-11" onclick="return false;"><i class="fa fa-pencil"> Edit</i></a>
                            <a href="#" class="btn btn-success btn-edit" style="display:none;" id="save-token-11" onclick="return false;"><i class="fa fa-save"> Save </i> </a>
                            <a href="#" class="btn btn-success btn-edit" style="display:none;" id="cancel-token-11" onclick="return false;"><i class="fa fa-times" style=""> Cancel</i> </a>
                        </div>
                    </div>
                    @endrole
                </div>
	</div>
	        <div class="row align-items-center">
	            <div class="col-lg-7 res-m-bttm">
	                <div class="row justify-content-between text-center text-lg-left">
	                    <div class="col-xl-5 col-md-6">
	                        <div class="service-item animated" data-animate="fadeInUp" data-delay=".4" id="txt-token-21">
	                            <div class="service-icon mx-auto mx-lg-0">
	                                <img src="{{asset('landingpage/images/zinnia/service-icon-a.png')}}" alt="icon">
	                            </div>
	                            <h5 class="service-title">{!!
                                    LandingPageContent::getJsonData('token_21', 'token_21', 'title')
                                !!}</h5>
	                            <p>{!!
                                    LandingPageContent::getJsonData('token_21', 'token_21', 'content')
                                !!}</p>
                            </div>
                            @role('administrator')
                            <div class="row">
                                <div class="col-md-12 text-center" style="margin-bottom:30px;">
                                    <a href="#" class="btn btn-success btn-edit" style="" id="edit-token-21" onclick="return false;"><i class="fa fa-pencil"> Edit</i></a>
                                    <a href="#" class="btn btn-success btn-edit" style="display:none;" id="save-token-21" onclick="return false;"><i class="fa fa-save"> Save </i> </a>
                                    <a href="#" class="btn btn-success btn-edit" style="display:none;" id="cancel-token-21" onclick="return false;"><i class="fa fa-times" style=""> Cancel</i> </a>
                                </div>
                            </div>
                            @endrole
	                    </div><!-- .col -->
	                    <div class="col-xl-5 col-md-6">
	                        <div class="service-item animated" data-animate="fadeInUp" data-delay=".5" id="txt-token-22">
	                            <div class="service-icon mx-auto mx-lg-0">
	                                <img src="{{asset('landingpage/images/zinnia/service-icon-b.png')}}" alt="icon">
	                            </div>
	                            <h5 class="service-title">{!!
                                    LandingPageContent::getJsonData('token_22', 'token_22', 'title')
                                !!}</h5>
	                            <p>{!!
                                    LandingPageContent::getJsonData('token_22', 'token_22', 'content')
                                !!}</p>
                            </div>
                            @role('administrator')
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <a href="#" class="btn btn-success btn-edit" style="" id="edit-token-22" onclick="return false;"><i class="fa fa-pencil"> Edit</i></a>
                                    <a href="#" class="btn btn-success btn-edit" style="display:none;" id="save-token-22" onclick="return false;"><i class="fa fa-save"> Save </i> </a>
                                    <a href="#" class="btn btn-success btn-edit" style="display:none;" id="cancel-token-22" onclick="return false;"><i class="fa fa-times" style=""> Cancel</i> </a>
                                </div>
                            </div>
                            @endrole
	                    </div><!-- .col -->
	                    <div class="col-xl-5 col-md-6">
	                        <div class="service-item animated" data-animate="fadeInUp" data-delay=".6" id="txt-token-23">
	                            <div class="service-icon mx-auto mx-lg-0">
	                                <img src="{{asset('landingpage/images/zinnia/service-icon-c.png')}}" alt="icon">
	                            </div>
	                            <h5 class="service-title">{!!
                                    LandingPageContent::getJsonData('token_23', 'token_23', 'title')
                                !!}</h5>
	                            <p>{!!
                                    LandingPageContent::getJsonData('token_23', 'token_23', 'content')
                                !!}</p>
                            </div>
                            @role('administrator')
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <a href="#" class="btn btn-success btn-edit" style="" id="edit-token-23" onclick="return false;"><i class="fa fa-pencil"> Edit</i></a>
                                    <a href="#" class="btn btn-success btn-edit" style="display:none;" id="save-token-23" onclick="return false;"><i class="fa fa-save"> Save </i> </a>
                                    <a href="#" class="btn btn-success btn-edit" style="display:none;" id="cancel-token-23" onclick="return false;"><i class="fa fa-times" style=""> Cancel</i> </a>
                                </div>
                            </div>
                            @endrole
	                    </div><!-- .col -->
	                    <div class="col-xl-5 col-md-6">
	                        <div class="service-item animated" data-animate="fadeInUp" data-delay=".7" id="txt-token-24">
	                            <div class="service-icon mx-auto mx-lg-0">
	                                <img src="{{asset('landingpage/images/zinnia/service-icon-d.png')}}" alt="icon">
	                            </div>
	                            <h5 class="service-title">{!!
                                    LandingPageContent::getJsonData('token_24', 'token_24', 'title')
                                !!}</h5>
	                            <p>{!!
                                    LandingPageContent::getJsonData('token_24', 'token_24', 'content')
                                !!}</p>
                            </div>
                            @role('administrator')
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <a href="#" class="btn btn-success btn-edit" style="" id="edit-token-24" onclick="return false;"><i class="fa fa-pencil"> Edit</i></a>
                                    <a href="#" class="btn btn-success btn-edit" style="display:none;" id="save-token-24" onclick="return false;"><i class="fa fa-save"> Save </i> </a>
                                    <a href="#" class="btn btn-success btn-edit" style="display:none;" id="cancel-token-24" onclick="return false;"><i class="fa fa-times" style=""> Cancel</i> </a>
                                </div>
                            </div>
                            @endrole
	                    </div><!-- .col -->
	                </div><!-- .row -->
	                <ul class="btns text-center text-lg-left animated" data-animate="fadeInUp" data-delay=".8">
                        <li><a href="#" class="btn btn-sm">Download Now</a></li>
                        <li>
                            <a href="#"><em class="fab fa-apple"></em></a>
                            <a href="#"><em class="fab fa-android"></em></a>
                            <a href="#"><em class="fab fa-windows"></em></a>
                        </li>
                    </ul>
	            </div><!-- .col -->
	            <div class="col-lg-5 order-first order-lg-last res-m-bttm">
	                <div class="service-img animated" data-animate="fadeInUp" data-delay=".3">
	                    <img src="{{asset('landingpage/images/zinnia/app-screen2.png')}}" alt="app-screen">
	                </div>
	            </div><!-- .col -->
	        </div><!-- .row -->
	    </div><!-- .container -->
	</div>
	<!-- End Section -->


	<!-- Roadmap Section -->
	<div class="section section-pad roadmap-section section-bg-zinnia" id="roadmap">
	<div class="container">
          <div class="row justify-content-center text-center">
	<div class="col-md-6">
	<div class="section-head-s7">
	<h2 class="section-title-s7 animated" data-animate="fadeInUp" data-delay=".1">Roadmap</h2>
	<p class="animated" data-animate="fadeInUp" data-delay=".2">Our team working hardly to make archive lorem ipsum dolor sit amet, consectetur amet, consectetur adipiscing elit.</p>
	</div>
	</div>
	</div>
           <div class="timeline-row timeline-row-odd timeline-row-done animated" data-animate="fadeInUp" data-delay=".3">
               <div class="row no-gutters text-left text-lg-center justify-content-center">
                   <div class="col-lg">
                       <div class="timeline-item timeline-done">
                           <span class="timeline-date">2017 Q1</span>
                           <h6 class="timeline-title">Concept</h6>
                           <ul class="timeline-info">
                               <li>Concept Generation</li>
                               <li>Team Assemble</li>
                           </ul>
                       </div>
                   </div><!-- .col -->
                   <div class="col-lg">
                       <div class="timeline-item timeline-done">
                           <span class="timeline-date">2017 Q2</span>
                           <h6 class="timeline-title">Research</h6>
                           <ul class="timeline-info">
                               <li>Proving the concept can work</li>
                               <li>Strategic Plan</li>
                               <li>White paper conpletion</li>
                           </ul>
                       </div>
                   </div><!-- .col -->
                   <div class="col-lg">
                       <div class="timeline-item timeline-done">
                           <span class="timeline-date">2018 Q1</span>
                           <h6 class="timeline-title">Design</h6>
                           <ul class="timeline-info">
                               <li>Platform design and technical demonstration</li>
                               <li>Building the MVP</li>
                           </ul>
                       </div>
                   </div><!-- .col -->
                   <div class="col-lg">
                       <div class="timeline-item timeline-done">
                           <span class="timeline-date">2018 Q2</span>
                           <h6 class="timeline-title">Pre-Sale</h6>
                           <ul class="timeline-info">
                               <li>Public financing &amp; Seed funding raised</li>
                           </ul>
                       </div>
                   </div><!-- .col -->
               </div><!-- .row -->
           </div><!-- .timeline-row -->
           <div class="timeline-row timeline-row-even animated" data-animate="fadeInUp" data-delay=".4">
               <div class="row no-gutters text-left text-lg-center justify-content-center flex-row-reverse">
                   <div class="col-lg">
                       <div class="timeline-item timeline-current">
                           <span class="timeline-date">2018 Q3</span>
                           <h6 class="timeline-title">Alpha Test</h6>
                           <ul class="timeline-info">
                               <li>In-house testing of functional</li>
                               <li>Prototype published and linked to Ethereum blockchain with real-time scanning</li>
                           </ul>
                       </div>
                   </div><!-- .col -->
                   <div class="col-lg">
                       <div class="timeline-item">
                           <span class="timeline-date">2018 Q4</span>
                           <h6 class="timeline-title">Token Sale</h6>
                           <ul class="timeline-info">
                               <li>ICO Press Tour</li>
                               <li>Open global sales of ICOblock token</li>
                           </ul>
                       </div>
                   </div><!-- .col -->
                   <div class="col-lg">
                       <div class="timeline-item">
                           <span class="timeline-date">2019 Q1</span>
                           <h6 class="timeline-title">App Beta Test</h6>
                           <ul class="timeline-info">
                               <li>Private closed beta</li>
                               <li>Open beta launched to public and improvement the app</li>
                           </ul>
                       </div>
                   </div><!-- .col -->
               </div><!-- .row -->
           </div><!-- .timeline-row -->
           <div class="timeline-row timeline-row-odd timeline-row-last mb--x5 animated" data-animate="fadeInUp" data-delay=".5">
               <div class="row no-gutters text-left text-lg-center justify-content-center">
                   <div class="col-lg">
                       <div class="timeline-item">
                           <span class="timeline-date">2019 Q2</span>
                           <h6 class="timeline-title">Crowdfunding Integration</h6>
                           <ul class="timeline-info">
                               <li>Smart contracts support creators</li>
                               <li>Ethereum tokens support</li>
                           </ul>
                       </div>
                   </div><!-- .col -->
                   <div class="col-lg">
                       <div class="timeline-item">
                           <span class="timeline-date">2019 Q3</span>
                           <h6 class="timeline-title">Community Benefits</h6>
                           <ul class="timeline-info">
                               <li>Establishing global user base</li>
                               <li>US start retailer selection</li>
                           </ul>
                       </div>
                   </div><!-- .col -->
                   <div class="col-lg">
                       <div class="timeline-item">
                           <span class="timeline-date">2019 Q4</span>
                           <h6 class="timeline-title">Hardware things</h6>
                           <ul class="timeline-info">
                               <li>Integration of third party controllers</li>
                               <li>Marketplace cooperative module</li>
                           </ul>
                       </div>
                   </div><!-- .col -->
                   <div class="col-lg">
                       <div class="timeline-item">
                           <span class="timeline-date">2020 Q1</span>
                           <h6 class="timeline-title">More Operational</h6>
                           <ul class="timeline-info">
                               <li>Integration with Private Chains, More Coin in Wallet</li>
                               <li>New services offered by members or business</li>
                           </ul>
                       </div>
                   </div><!-- .col -->
               </div><!-- .row -->
           </div><!-- .timeline-row -->
           <div class="gaps size-2x d-lg-none"></div>
        </div><!-- .container -->
    </div>
    <!-- End Section -->

    <!-- Team Section -->
	<!-- Team Section -->
	<div class="section section-pad section-bg" id="team">
            <div class="ui-shape ui-shape-s5"></div>
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-head-s7" id="txt-team">
                            <h2 class="section-title-s7 animated" data-animate="fadeInUp" data-delay=".1">{!!
                                LandingPageContent::getJsonData('team', 'team', 'title')
                            !!}</h2>
                            <p class="animated" data-animate="fadeInUp" data-delay=".2">{!!
                                LandingPageContent::getJsonData('team', 'team', 'content')
                            !!}</p>
                        </div>
                        @role('administrator')
                        <div class="row" style="">
                            <div class="col-md-12 text-center" style="margin-bottom:40px;">
                                <a href="#" class="btn btn-success btn-edit" style="" id="edit-team" onclick="return false;"><i class="fa fa-pencil"> Edit</i></a>
                                <a href="#" class="btn btn-success btn-edit" style="display:none;" id="save-team" onclick="return false;"><i class="fa fa-save"> Save </i> </a>
                                <a href="#" class="btn btn-success btn-edit" style="display:none;" id="cancel-team" onclick="return false;"><i class="fa fa-times" style=""> Cancel</i> </a>
                            </div>
                        </div>
                        @endrole
                    </div>
                </div>
                <div class="row justify-content-center text-center">
                    <div class="col-sm-6 col-lg-3">
                        <div class="team-circle animated" data-animate="fadeInUp" data-delay=".3">
                            <div class="team-photo">
                                <img src="{{asset('landingpage/images/team-walter.jpg')}}" alt="" />
                                <a href="#team-profile-1" class="expand-trigger content-popup"></a>
                            </div>
                            <div class="team-info">
                                <h5 class="team-name">Walter Kaminski</h5>
                                <span class="team-title">CEO</span>
                                <ul class="team-social">
                                    <li><a href=""><em class="fab fa-facebook-f"></em></a></li>
                                    <li><a href=""><em class="fab fa-linkedin-in"></em></a></li>
                                    <li><a href=""><em class="fab fa-twitter"></em></a></li>
                                </ul>
                            </div>

                            <!-- Start .team-profile  -->
                            <div id="team-profile-1" class="team-profile mfp-hide">
                                <button title="Close" type="button" class="mfp-close">×</button>
                                <div class="container-fluid">
                                    <div class="row no-mg">
                                        <div class="col-md-6">
                                            <div class="team-profile-photo">
                                                <img src="{{asset('landingpage/images/team-walter.jpg')}}" alt="" />
                                            </div>
                                        </div><!-- .col  -->

                                        <div class="col-md-6">
                                            <div class="team-profile-info">
                                                <h3 class="name">Walter Kaminski</h3>
                                                <p class="sub-title">CEO</p>
                                                <ul class="tpi-social">
                                                    <li><a href=""><em class="fab fa-facebook-f"></em></a></li>
                                                    <li><a href=""><em class="fab fa-linkedin-in"></em></a></li>
                                                    <li><a href=""><em class="fab fa-twitter"></em></a></li>
                                                </ul>
                                                <p>is a career professional who brings a wealth of experience in Medical & Healthcare, Leisure & Lifestyle including Gaming and Casinos, Commercial Agriculture Mainly Crude Palm Oil, Livestock Breeding and Aqt1aculture. Transport Logistic both Freight and Passengers (Ground and Aviation), Mining and Mineral processing, IT Solutions including Financial Technology,Block-chain and Crypto tokens, Telecom munication and Media, Capital Markets. Infrastructure including Toll Roads, Airports and Power Generations (Coal Fire Gas Turbine and Renew-ables) Oil & Gas and Property Development  & Construction.
                                                </p>
                                                <p>He has successfully managed, advised and directed public and private companies on debt and equity financing, mergers and acquisitions and corporate restructuring. </p>
                                            </div>
                                        </div><!-- .col  -->

                                    </div><!-- .row  -->
                                </div><!-- .container  -->
                            </div><!-- .team-profile  -->

                        </div>
                    </div><!-- .col  -->

                    <div class="col-sm-6 col-lg-3">
                        <div class="team-circle animated" data-animate="fadeInUp" data-delay=".4">
                            <div class="team-photo">
                                <img src="{{asset('landingpage/images/team-iliya.jpeg')}}" alt="team">
                                <a href="#team-profile-2" class="expand-trigger content-popup"></a>
                            </div>
                            <div class="team-info">
                                <h5 class="team-name">Iliya Bugaev</h5>
                                <span class="team-title">CTO</span>
                                <ul class="team-social">
                                    <li><a href=""><em class="fab fa-facebook-f"></em></a></li>
                                    <li><a href=""><em class="fab fa-linkedin-in"></em></a></li>
                                    <li><a href=""><em class="fab fa-twitter"></em></a></li>
                                </ul>
                            </div>

                            <!-- Start .team-profile  -->
                            <div id="team-profile-2" class="team-profile mfp-hide">
                                <button title="Close" type="button" class="mfp-close">×</button>
                                <div class="container-fluid">
                                    <div class="row no-mg">
                                        <div class="col-md-6">
                                            <div class="team-profile-photo">
                                                <img src="{{asset('landingpage/images/team-iliya.jpeg')}}" alt="team" />
                                            </div>
                                        </div><!-- .col  -->

                                        <div class="col-md-6">
                                            <div class="team-profile-info">
                                                <h3 class="name">Iliya Bugaev</h3>
                                                <p class="sub-title">CTO</p>
                                                <ul class="tpi-social">
                                                    <li><a href=""><em class="fab fa-facebook-f"></em></a></li>
                                                    <li><a href=""><em class="fab fa-linkedin-in"></em></a></li>
                                                    <li><a href=""><em class="fab fa-twitter"></em></a></li>
                                                </ul>
                                                <p>One of the pioneers and core leaders of blockchain technology and manage the economics/valuation models for various real estate and travel/leisure industries. Drove the blockchain to Rusia Blockchain Association. Versed team development BS, Econimics & Cybernetics, top 5 student nationwide.</p>
                                                <p>Tenetur quos facere magnam volupt ates quas esse Sedrep ell endus mole stiae tates quas esse Sed repell endus molesti aela uda ntium quis quam iusto minima thanks.</p>

                                            </div>
                                        </div><!-- .col  -->

                                    </div><!-- .row  -->
                                </div><!-- .container  -->
                            </div><!-- .team-profile  -->

                        </div>
                    </div><!-- .col  -->

                    <div class="col-sm-6 col-lg-3">
                        <div class="team-circle animated" data-animate="fadeInUp" data-delay=".5">
                            <div class="team-photo">
                                <img src="{{asset('landingpage/images/team-ruslana.jpeg')}}" alt="team">
                                <a href="#team-profile-3" class="expand-trigger content-popup"></a>
                            </div>
                            <div class="team-info">
                                <h5 class="team-name">Ruslana Golunova</h5>
                                <span class="team-title">Team</span>
                                <ul class="team-social">
                                    <li><a href=""><em class="fab fa-facebook-f"></em></a></li>
                                    <li><a href=""><em class="fab fa-linkedin-in"></em></a></li>
                                    <li><a href=""><em class="fab fa-twitter"></em></a></li>
                                </ul>
                            </div>

                            <!-- Start .team-profile  -->
                            <div id="team-profile-3" class="team-profile mfp-hide">
                                <button title="Close" type="button" class="mfp-close">×</button>
                                <div class="container-fluid">
                                    <div class="row no-mg">
                                        <div class="col-md-6">
                                            <div class="team-profile-photo">
                                                <img src="{{asset('landingpage/images/team-ruslana.jpeg')}}" alt="team" />
                                            </div>
                                        </div><!-- .col  -->

                                        <div class="col-md-6">
                                            <div class="team-profile-info">
                                                <h3 class="name">Ruslana Golunova</h3>
                                                <p class="sub-title">Team</p>
                                                <ul class="tpi-social">
                                                    <li><a href=""><em class="fab fa-facebook-f"></em></a></li>
                                                    <li><a href=""><em class="fab fa-linkedin-in"></em></a></li>
                                                    <li><a href=""><em class="fab fa-twitter"></em></a></li>
                                                </ul>
                                                <p>Seasoned operation management and global product development and service delivery operation and Russia specializing in the field of software application, focus on blockchain. MA, Advance Project Management, Khabarovsk State University, Standford Center for Professional Development.</p>

                                            </div>
                                        </div><!-- .col  -->

                                    </div><!-- .row  -->
                                </div><!-- .container  -->
                            </div><!-- .team-profile  -->

                        </div>
                    </div><!-- .col  -->
                </div><!-- .row  -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="gaps size-2x"></div>
                        <h3 class="sub-heading ucap animated" data-animate="fadeInUp" data-delay=".7">Advisors</h3>
                        <div class="gaps size-2x"></div>
                    </div>
                </div>
                <div class="row justify-content-center text-center">
                    <div class="col-lg-3 col-sm-6">
                        <div class="team-circle animated" data-animate="fadeInUp" data-delay=".8">
                            <div class="team-photo">
                                <img src="{{asset('landingpage/images/team-alex.jpeg')}}" alt="team">
                                <a href="#team-profile-5" class="expand-trigger content-popup"></a>
                            </div>
                            <div class="team-info">
                                <h5 class="team-name">Alex Caracao</h5>
                                <span class="team-title">Board Advisor</span>
                                <ul class="team-social">
                                    <li><a href=""><em class="fab fa-facebook-f"></em></a></li>
                                    <li><a href=""><em class="fab fa-linkedin-in"></em></a></li>
                                    <li><a href=""><em class="fab fa-twitter"></em></a></li>
                                </ul>
                            </div>

                            <!-- Start .team-profile  -->
                            <div id="team-profile-5" class="team-profile mfp-hide">
                                <button title="Close" type="button" class="mfp-close">×</button>
                                <div class="container-fluid">
                                    <div class="row no-mg">
                                        <div class="col-md-6">
                                            <div class="team-profile-photo">
                                                <img src="{{asset('landingpage/images/team-alex.jpeg')}}" alt="team" />
                                            </div>
                                        </div><!-- .col  -->

                                        <div class="col-md-6">
                                            <div class="team-profile-info">
                                                <h3 class="name">Alex Caracao</h3>
                                                <p class="sub-title">Board Advisor</p>
                                                <ul class="tpi-social">
                                                    <li><a href=""><em class="fab fa-facebook-f"></em></a></li>
                                                    <li><a href=""><em class="fab fa-linkedin-in"></em></a></li>
                                                    <li><a href=""><em class="fab fa-twitter"></em></a></li>
                                                </ul>
                                                <p>Highly passionate, strategical-focused professional, who has acquired extensive domestic and international knowledge by actively working in Australia and China. With over thirty-eight years of experience in the Real Estate Industry, and a proven track record of success, I have positively contributed to the commercial strategies of multi-national organisations while also establishing and driving the success of my own real estate agencies and that of others nationally. </p>
                                                <p>As an energetic, motivational leader, I am able to lead and empower a high-performing team while driving the development and execution of Sale Strategies to propel performance, profitability and return on investments. Additionally, I can provide advice, expertise, and support in the following area's</p>

                                                <ul>Skills:
                                                     <li>-Strategic and Operational Planning</li>
                                                     <li>-ASX Managing Director & CEO -2010-2011 & 2017-2018</li>
                                                     <li>-Sale of Mining Resource Mandate</li>
                                                     <li>-Property Management</li>
                                                     <li>-Commercial Real Estate</li>
                                                     <li>-Residential Real Estate</li>
                                                     <li>-International Real Estate</li>
                                                     <li>-Project Management</li>
                                                     <li>-Concrete Construction </li>
                                                     <li>-Land Subdivision </li>
                                                     <li>-Site Amalgamation </li>
                                                     <li>-Real Estate Economics </li>
                                                     <li>-Business Analysis </li>
                                                     <li>-Contract Management</li>
                                                     <li>-Buyer Representation</li>
                                                     <li>-Sales Management</li>
                                                     <li>-Executive Leadership</li>
                                                     <li>-Franchising</li>
                                                </ul>


                                            </div>
                                        </div><!-- .col  -->

                                    </div><!-- .row  -->
                                </div><!-- .container  -->
                            </div><!-- .team-profile  -->

                        </div>
                    </div><!-- .col  -->

                    <div class="col-lg-3 col-sm-6">
                        <div class="team-circle animated" data-animate="fadeInUp" data-delay=".9">
                            <div class="team-photo">
                                <img src="{{asset('landingpage/images/team-yamaji.jpeg')}}" alt="team">
                                <a href="#team-profile-6" class="expand-trigger content-popup"></a>
                            </div>
                            <div class="team-info">
                                <h5 class="team-name">Steven Yamaji</h5>
                                <span class="team-title">Board Advisor</span>
                                <ul class="team-social">
                                    <li><a href=""><em class="fab fa-facebook-f"></em></a></li>
                                    <li><a href=""><em class="fab fa-linkedin-in"></em></a></li>
                                    <li><a href=""><em class="fab fa-twitter"></em></a></li>
                                </ul>
                            </div>

                            <!-- Start .team-profile  -->
                            <div id="team-profile-6" class="team-profile mfp-hide">
                                <button title="Close" type="button" class="mfp-close">×</button>
                                <div class="container-fluid">
                                    <div class="row no-mg">

                                        <div class="col-md-6">
                                            <div class="team-profile-photo">
                                                <img src="{{asset('landingpage/images/team-yamaji.jpeg')}}" alt="team" />
                                            </div>
                                        </div><!-- .col  -->

                                        <div class="col-md-6">
                                            <div class="team-profile-info">
                                                <h3 class="name">Steven Yamaji</h3>
                                                <p class="sub-title">Board Advisor</p>
                                                <ul class="tpi-social">
                                                    <li><a href=""><em class="fab fa-facebook-f"></em></a></li>
                                                    <li><a href=""><em class="fab fa-linkedin-in"></em></a></li>
                                                    <li><a href=""><em class="fab fa-twitter"></em></a></li>
                                                </ul>
                                                <p>Enterpreneur and market marker 0f +25 years with +10 countries bussiness leadership experiences. Industry focus on blockchain, software, apps, internet, telecom, and PBO. Successfully executed a number of global partnership and M&A transaction. </p>
                                                <p>MBA, Standford University, Graduate School of Bussiness, Palo Alto, California, USA BA, International Studies, Sophia University, Tokyo, Japan </p>
                                            </div>
                                        </div><!-- .col  -->

                                    </div><!-- .row  -->
                                </div><!-- .container  -->
                            </div><!-- .team-profile  -->
                        </div>
                    </div><!-- .col  -->


                </div><!-- .row  -->
            </div>
        </div>
	<!-- Section Products -->
	<div class="section section-pad section-bg-zinnia" id="partners" style="padding-bottom: 0px !important">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6 offset-md-3">
                    <div class="section-head">
                        <h3 class="section-title-md animated" data-animate="fadeInUp" data-delay=".1">Our Products</h3>
                    </div>
                </div>
            </div>
            <div class="partner-list">
                <div class="row text-center">
                        <div class="col-sm col-6"></div>
                    <div class="col-sm col-6">
                        <div class="single-partner animated" data-animate="fadeInUp" data-delay=".2">
                            <img src="{{asset('landingpage/images/1.png')}}" alt="partner">
                        </div>
                    </div>
                    <div class="col-sm col-6">
                        <div class="single-partner animated" data-animate="fadeInUp" data-delay=".3">
                            <img src="{{asset('landingpage/images/2.png')}}" alt="partner">
                        </div>
                    </div>
                    <div class="col-sm col-6">
                        <div class="single-partner animated" data-animate="fadeInUp" data-delay=".4">
                            <img src="{{asset('landingpage/images/3.png')}}" alt="partner">
                        </div>
                    </div>
                    <div class="col-sm col-6">
                        <div class="single-partner animated" data-animate="fadeInUp" data-delay=".5">
                            <img src="{{asset('landingpage/images/4.png')}}" alt="partner">
                        </div>
                    </div>
                    <div class="col-sm col-6"></div>
                    <div class="row text-center">
                            <div class="col-sm col-6"></div>
                    <div class="col-sm col-6">
                        <div class="single-partner animated" data-animate="fadeInUp" data-delay=".6">
                            <img src="{{asset('landingpage/images/5.png')}}" alt="partner">
                        </div>
                    </div>
                    <div class="col-sm col-6">
                        <div class="single-partner animated" data-animate="fadeInUp" data-delay=".7">
                            <img src="{{asset('landingpage/images/6.png')}}" alt="partner">
                        </div>
                    </div>
                    <div class="col-sm col-6">
                            <div class="single-partner animated" data-animate="fadeInUp" data-delay=".8">
                                <img src="{{asset('landingpage/images/7.png')}}" alt="partner">
                            </div>
                    </div>
                    <div class="col-sm col-6">
                            <div class="single-partner animated" data-animate="fadeInUp" data-delay=".9">
                                <img src="{{asset('landingpage/images/8.png')}}" alt="partner">
                            </div>
                        </div>
                        <div class="col-sm col-6"></div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Section -->


	<!-- Start Section -->
	<div class="section section-pad-md section-bg" id="faq">
	    <div class="ui-shape ui-shape-s6"></div>
	<div class="container">
	<div class="row justify-content-center text-center">
	<div class="col-md-7">
	<div class="section-head-s7" id="txt-faq">
	<h2 class="section-title-s7 animated text-section" data-animate="fadeInUp" data-delay=".1">{!!
                            LandingPageContent::getJsonData('faq', 'faq', 'title')
                        !!}</h2>
	<p class="animated text-section" data-animate="fadeInUp" data-delay=".2">{!!
                            LandingPageContent::getJsonData('faq', 'faq', 'content')
                        !!}</p>
                    </div>
                    @role('administrator')
                    <div class="row" style="">
                        <div class="col-md-12 text-center" style="margin-bottom:40px;">
                            <a href="#" class="btn btn-success btn-edit" style="" id="edit-faq" onclick="return false;"><i class="fa fa-pencil"> Edit</i></a>
                            <a href="#" class="btn btn-success btn-edit" style="display:none;" id="save-faq" onclick="return false;"><i class="fa fa-save"> Save </i> </a>
                            <a href="#" class="btn btn-success btn-edit" style="display:none;" id="cancel-faq" onclick="return false;"><i class="fa fa-times" style=""> Cancel</i> </a>
                        </div>
                    </div>
                    @endrole
	</div>
	</div>
	<div class="row align-items-center justify-content-center">
	<div class="col-md-10">
	<div class="tab-custom-s3">
	<!-- Nav tabs -->
	<ul class="nav nav-tabs text-center justify-content-center animated" data-animate="fadeInUp" data-delay=".1">
	<li class="nav-item">
	<a class="nav-link active" data-toggle="tab" href="#tab-1">General</a>
	</li>
	<li class="nav-item">
	<a class="nav-link" data-toggle="tab" href="#tab-2">Pre-ICO &amp; ICO</a>
	</li>
	<li class="nav-item">
	<a class="nav-link" data-toggle="tab" href="#tab-3">Tokens</a>
	</li>
	</ul>
	<div class="gaps size-1x"></div>
	<!-- Tab panes -->
	<div class="tab-content animated" data-animate="fadeInUp" data-delay=".2">
                                <div class="tab-pane fade show active" id="tab-1">
                                        <div class="accordion-s2" id="accordion-1">
                                            <div class="card active">
                                                <div class="card-header">
                                                    <h5>
                                                        <a data-toggle="collapse" data-target="#collapse-1-1">
                                                            What is EAST COIN?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapse-1-1" class="collapse show" data-parent="#accordion-1">
                                                    <div class="card-body">
                                                        <p style="color:#fe4350">ICO Crypto - is unique blockchain platform; that is secure, smart and easy-to-use platform, and completely disrupting the way businesses raise capital,  and the way investors buy and sell. </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>
                                                        <a class="collapsed" data-toggle="collapse" data-target="#collapse-1-2">
                                                          What cryptocurrencies can I use to purchase?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapse-1-2" class="collapse" data-parent="#accordion-1">
                                                    <div class="card-body">
                                                        <p style="color:#fe4350">ICO Crypto - is unique platform; that is secure, smart and easy-to-use platform, and completely disrupting the way businesses raise capital.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>
                                                        <a class="collapsed" data-toggle="collapse" data-target="#collapse-1-3">
                                                          How can I participate in the EAST Token sale?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapse-1-3" class="collapse" data-parent="#accordion-1">
                                                    <div class="card-body">
                                                        <p style="color:#fe4350">ICO Crypto - is unique platform; that is secure, smart and easy-to-use platform, and completely disrupting the way businesses raise capital.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>
                                                        <a class="collapsed" data-toggle="collapse" data-target="#collapse-1-4">
                                                          How do I benefit from the EAST Token?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapse-1-4" class="collapse" data-parent="#accordion-1">
                                                    <div class="card-body">
                                                        <p style="color:#fe4350">ICO Crypto - is unique platform; that is secure, smart and easy-to-use platform, and completely disrupting the way businesses raise capital.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End tab-pane -->
                                    <div class="tab-pane fade" id="tab-2">
                                        <div class="accordion-s2" id="accordion-2">
                                            <div class="card active">
                                                <div class="card-header">
                                                    <h5>
                                                        <a data-toggle="collapse" data-target="#collapse-2-1">
                                                          Which of us ever undertakes laborious?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapse-2-1" class="collapse show" data-parent="#accordion-2">
                                                    <div class="card-body">
                                                        <p style="color:#fe4350">ICO Crypto - is unique platform; that is secure, smart and easy-to-use platform, and completely disrupting the way businesses raise capital.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>
                                                        <a class="collapsed" data-toggle="collapse" data-target="#collapse-2-2">
                                                            Who do not know how to pursue rationally?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapse-2-2" class="collapse" data-parent="#accordion-2">
                                                    <div class="card-body">
                                                        <p style="color:#fe4350">ICO Crypto - is unique platform; that is secure, smart and easy-to-use platform, and completely disrupting the way businesses raise capital.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>
                                                        <a class="collapsed" data-toggle="collapse" data-target="#collapse-2-4">
                                                           Their separate existence is a myth?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapse-2-4" class="collapse" data-parent="#accordion-2">
                                                    <div class="card-body">
                                                        <p style="color:#fe4350">ICO Crypto - is unique platform; that is secure, smart and easy-to-use platform, and completely disrupting the way businesses raise capital.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>
                                                        <a class="collapsed" data-toggle="collapse" data-target="#collapse-2-3">
                                                          Pityful a rethoric question ran over her cheek?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapse-2-3" class="collapse" data-parent="#accordion-2">
                                                    <div class="card-body">
                                                        <p style="color:#fe4350">ICO Crypto - is unique platform; that is secure, smart and easy-to-use platform, and completely disrupting the way businesses raise capital.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End tab-pane -->
                                    <div class="tab-pane fade" id="tab-3">
                                        <div class="accordion-s2" id="accordion-3">
                                            <div class="card active">
                                                <div class="card-header">
                                                    <h5>
                                                        <a data-toggle="collapse" data-target="#collapse-3-1">
                                                            When she reached the first hills?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapse-3-1" class="collapse show" data-parent="#accordion-3">
                                                    <div class="card-body">
                                                        <p style="color:#fe4350">ICO Crypto - is unique platform; that is secure, smart and easy-to-use platform, and completely disrupting the way businesses raise capital.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>
                                                        <a class="collapsed" data-toggle="collapse" data-target="#collapse-3-2">
                                                          Big Oxmox advised her not to do?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapse-3-2" class="collapse" data-parent="#accordion-3">
                                                    <div class="card-body">
                                                        <p style="color:#fe4350">ICO Crypto - is unique platform; that is secure, smart and easy-to-use platform, and completely disrupting the way businesses raise capital.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>
                                                        <a class="collapsed" data-toggle="collapse" data-target="#collapse-3-3">
                                                          Which roasted parts of sentences fly into your mouth?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapse-3-3" class="collapse" data-parent="#accordion-3">
                                                    <div class="card-body">
                                                        <p style="color:#fe4350">ICO Crypto - is unique platform; that is secure, smart and easy-to-use platform, and completely disrupting the way businesses raise capital.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>
                                                        <a class="collapsed" data-toggle="collapse" data-target="#collapse-3-4">
                                                          Vokalia and Consonantia, there live?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapse-3-4" class="collapse" data-parent="#accordion-3">
                                                    <div class="card-body">
                                                        <p style="color:#fe4350">ICO Crypto - is unique platform; that is secure, smart and easy-to-use platform, and completely disrupting the way businesses raise capital.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .tab-pane -->
	</div><!-- .tab-content -->
	</div><!-- .tab-custom -->
	</div><!-- .col -->
	</div><!-- .row -->
	</div><!-- .container -->
	</div>
	<!-- End Section -->


	<!-- Start Section -->
	<div class="section section-pad-md section-bg-alt" id="contact">
	    <div class="ui-shape ui-shape-s7"></div>
	<div class="container">
	<div class="row text-center">
	<div class="col">
	<div class="section-head-s7">
	<h2 class="section-title-s7 animated text-contact" data-animate="fadeInUp" data-delay=".1">Contact EASTERN PACIFIC</h2>
	<p class="animated text-contact" data-animate="fadeInUp" data-delay=".2">Any question? Reach out to us and we’ll get back to you shortly.</p>
	</div>
	</div><!-- .col -->
	</div><!-- .row -->
	<div class="row justify-content-center">
	<div class="col-lg-8">
	<ul class="contact-info">
	<li class="animated" data-animate="fadeInUp" data-delay=".3"><em class="fa fa-phone"></em><br><span>{!! App\SiteConfig::config('CONTACT_PHONE_NUMBER') !!}</span></li>
	<li class="animated" data-animate="fadeInUp" data-delay=".4"><em class="fa fa-envelope"></em><br><span> {!! App\SiteConfig::config('CONTACT_EMAIL') !!}</span></li>
	<li class="animated" data-animate="fadeInUp" data-delay=".5"><em class="fa fa-building"></em><br><span>{!! App\SiteConfig::config('CONTACT_ADDRESS') !!}</span></li>
	</ul>
	</div><!-- .col -->
	</div><!-- .row -->
	<div class="row justify-content-center">
	<div class="col-lg-8">
	<form id="contact-form" class="form-message text-center show-error-hint" action="form/contact.php" method="post">
	<div class="form-results"></div>
	<div class="input-field animated" data-animate="fadeInUp" data-delay=".6">
	<input name="contact-name" type="text" class="input-line required">
	<label class="input-title">Your Name</label>
	</div>
	<div class="input-field animated" data-animate="fadeInUp" data-delay=".7">
	<input name="contact-email" type="email" class="input-line required email">
	<label class="input-title">Your Email</label>
	</div>
	<div class="input-field animated" data-animate="fadeInUp" data-delay=".8">
	<textarea name="contact-message" class="txtarea input-line required"></textarea>
	<label class="input-title">Your Message</label>
	</div>
	<input type="text" class="d-none" name="form-anti-honeypot" value="">
	<div class="input-field animated" data-animate="fadeInUp" data-delay=".9">
	<button type="submit" class="btn">Submit</button>
	</div>
                    </form>
	</div><!-- .col -->
	</div><!-- .row -->
	</div><!-- .container -->
	</div>
	<!-- End Section -->


	<!-- Start Section -->
	<div class="section footer-section section-pad-md no-pb">
        <div class="ui-shape ui-shape-light ui-shape-footer"></div>
	    <div class="container">
	        <div class="row">
	            <!-- .col -->
	            <div class="col-lg-3 col-sm">
	                <div class="widget-item">
	                    <h5 class="widget-title">RESOURCES</h5>
	                    <ul class="widget-links">
	                        <li><a href="#">Watch Demo</a></li>
	                        <li><a href="#">Whitepaper</a></li>
	                        <li><a href="#">Integration &amp; API</a></li>
	                        <li><a href="#">Privacy &amp; policy</a></li>
	                    </ul>
	                </div>
	            </div><!-- .col -->
	            <div class="col-lg-3 col-sm">
	                <div class="widget-item">
	                    <h5 class="widget-title">Company</h5>
	                    <ul class="widget-links">
                            <li class="nav-item"></li>
	                        <li><a href="#">Home</a></li>
	                        <li><a href="#about">About</a></li>
	                        <li><a href="#benifits">Benefit</a></li>
	                        <li><a href="#tokenSale">Token Sale</a></li>
	                        <li><a href="#roadmap">Roadmap</a></li>
                            <li><a href="#team">Team</a></li>
                            <li><a href="#faq">FAQs</a></li>
                            <li><a href="#contact">Contact</a></li>
	                    </ul>
	                </div>
	            </div><!-- .col -->
	            <div class="col-lg-3">
	                <div class="widget-item">
	                    <h5 class="widget-title widget-title-ncap">NewsLetter</h5>
	                    <div class="widget-subsctibe">
	                        <p>Lorem ipsum dolor sit amet, cons ectetur adipiscing elit, sed</p>
	                        <form id="subscribe-form" action="form/subscribe.php" method="post" class="subscription-form subscription-form-sm">
                                <input type="text" name="youremail" class="input-round required email" placeholder="Enter mail" >
                                <input type="text" class="d-none" name="form-anti-honeypot" value="">
                                <button type="submit" class="btn btn-plane"><i class="fas fa-paper-plane"></i></button>
                                <div class="subscribe-results"></div>
                            </form>
                            <ul class="social-bottom" data-animate="fadeIn" data-delay="1.55" style="z-index:999;">
                                <li><a href="#"><em class="fab fa-facebook-f"></em></a></li>
                                <li><a href="#"><em class="fab fa-twitter"></em></a></li>
                                <li><a href="#"><em class="fab fa-youtube"></em></a></li>
                                <li><a href="#"><em class="fab fa-github"></em></a></li>
                                <li><a href="#"><em class="fab fa-bitcoin"></em></a></li>
                                <li><a href="#"><em class="fab fa-medium-m"></em></a></li>
                            </ul>
	                    </div>
	                </div>
	            </div><!-- .col -->
	        </div><!-- .row -->
	        <div class="footer-bottom">
                <div class="row align-items-center">
                    <div class="col-sm-6 res-m-bttm">
                        <a class="footer-brand" href="./">
                            <img class="logo logo-light" alt="logo" src="{{asset('landingpage/images/logo-full-white.png')}}" srcset="images/logo-full-white2x.png 2x" style="height: 50px; width:150px;">
                        </a>
                    </div>
                    <div class="col-sm-6 text-sm-right">
                        <span class="copyright-text"> &copy; EASTERN PACIFIC, 2019</span>
                    </div>
                </div>
	        </div>
	    </div><!-- .container -->
	</div>
	<!-- End Section -->
    </div>

	<!-- Preloader !remove please if you do not want -->
	<div id="preloader">
            <div id="loader"><img src="{{asset('landingpage/images/Logo2.png')}}" width="100%" height="100%"></div>
            <div class="loader-section loader-top"></div>
            <div class="loader-section loader-bottom"></div>
    </div>
	<!-- Preloader End -->

	<!-- JavaScript (include all script here) -->
	<script>
	function getTimeRemaining(endtime) {
	var t = Date.parse(endtime) - Date.parse(new Date());
	var seconds = Math.floor((t / 1000) % 60);
	var minutes = Math.floor((t / 1000 / 60) % 60);
	var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
	var days = Math.floor(t / (1000 * 60 * 60 * 24));
	return {
	'total': t,
	'days': days,
	'hours': hours,
	'minutes': minutes,
	'seconds': seconds
	};
	}
	function initializeClock(id, endtime) {
	var clock = document.getElementById(id);
	var daysSpan = clock.querySelector('.days');
	var hoursSpan = clock.querySelector('.hours');
	var minutesSpan = clock.querySelector('.minutes');
	var secondsSpan = clock.querySelector('.seconds');
	function updateClock() {
	var t = getTimeRemaining(endtime);
	daysSpan.innerHTML = t.days;
	hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
	minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
	secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);
	if (t.total <= 0) {
	clearInterval(timeinterval);
	}
	}
	updateClock();
	var timeinterval = setInterval(updateClock, 1000);
	}
	var deadline = new Date(Date.parse(new Date()) + 15 * 24 * 60 * 60 * 1000);
	initializeClock('clockdiv', deadline);
	</script>
	<script src="{{asset('landingpage/assets/js/jquery.bundle.js?ver=142')}}"></script>
    <script src="{{asset('landingpage/assets/js/script.js?ver=142')}}"></script>

    @role('administrator')
    <script src="{{asset('dist/js/sweetalert/sweetalert.min.js')}}"></script>
    <script>
        // Edit About
        var about_1_temp = "";
        $('#edit-about-1').click(function(){
            $('#txt-about-1 h2').attr('contenteditable', 'true');
            $('#txt-about-1 p').attr('contenteditable', 'true');
            $('#txt-about-1').css('border','1px solid blue');
            $('#txt-about-1').focus();
            $(this).hide();
            $('#save-about-1').show();
            $('#cancel-about-1').show();
            about_1_temp = $('#txt-about-1').html();
        });

        $('#save-about-1').click(function(){
            $.ajax({
                method: "put",
                url: '{{route('editcontent.update')}}',
                data: {
                    _token: '{{csrf_token()}}',
                    key: 'about_1',
                    jdata: { "about_1": { "title": $('#txt-about-1 h2').text(), "content" : $('#txt-about-1 p').text() } }
                },
            }).done(function(res) {
                swal({
                    title: res.title,
                    text: res.msg,
                    icon: res.icon,
                    type: res.type
                }).then(function(){
                    $('#txt-about-1').show();
                    $('#txt-about-1').html($('#txt-about-1').html());
                    $('#txt-about-1 h2').attr('contenteditable', 'false');
                    $('#txt-about-1 p').attr('contenteditable', 'false');
                    $('#edit-about-1').show();
                    $('#save-about-1').hide();
                    $('#cancel-about-1').hide();
                    $('#txt-about-1').css('border','none');
                })

            });

        });

        $('#cancel-about-1').click(function(){
            $('#txt-about-1').show();
            $('#txt-about-1').html(about_1_temp);
            $('#txt-about-1 h2').attr('contenteditable', 'false');
            $('#txt-about-1 p').attr('contenteditable', 'false');
            $('#edit-about-1').show();
            $('#save-about-1').hide();
            $('#cancel-about-1').hide();
            $('#txt-about-1').css('border','none');
        });

        // End Edit About


        // Edit About 2
        var about_2_temp = "";
        $('#edit-about-2').click(function(){
            $('#txt-about-2 h2').attr('contenteditable', 'true');
            $('#txt-about-2 p').attr('contenteditable', 'true');
            $('#txt-about-2').css('border','1px solid blue');
            $('#txt-about-2').focus();
            $(this).hide();
            $('#save-about-2').show();
            $('#cancel-about-2').show();
            about_2_temp = $('#txt-about-2').html();
        });

        $('#save-about-2').click(function(){
            $.ajax({
                method: "put",
                url: '{{route('editcontent.update')}}',
                data: {
                    _token: '{{csrf_token()}}',
                    key: 'about_2',
                    jdata: {
                        "about_2": {
                                "title": $('#txt-about-2 h2').text(),
                                "content_0" : $('#txt-about-2').children().eq(1).text(),
                                "content_1" : $('#txt-about-2').children().eq(2).text(),
                                "content_2" : $('#txt-about-2').children().eq(3).text()
                            }
                    }
                },
            }).done(function(res) {
                swal({
                    title: res.title,
                    text: res.msg,
                    icon: res.icon,
                    type: res.type
                }).then(function(){
                    $('#txt-about-2').show();
                    $('#txt-about-2').html($('#txt-about-2').html());
                    $('#txt-about-2 h2').attr('contenteditable', 'false');
                    $('#txt-about-2 p').attr('contenteditable', 'false');
                    $('#edit-about-2').show();
                    $('#save-about-2').hide();
                    $('#cancel-about-2').hide();
                    $('#txt-about-2').css('border','none');
                })

            });

        });

        $('#cancel-about-2').click(function(){
            $('#txt-about-2').show();
            $('#txt-about-2').html(about_2_temp);
            $('#txt-about-2 h2').attr('contenteditable', 'false');
            $('#txt-about-2 p').attr('contenteditable', 'false');
            $('#edit-about-2').show();
            $('#save-about-2').hide();
            $('#cancel-about-2').hide();
            $('#txt-about-2').css('border','none');
        });

        // End Edit About 2

        // Function upload base64
        function encodeImageFileAsURL(cb) {
            return function(){
                var file = this.files[0];
                var reader  = new FileReader();
                reader.onloadend = function () {
                    cb(reader.result);
                }
                reader.readAsDataURL(file);
            }
        }
        //

        // Edit img-1

        $('#edit-img-1').click(function(){
            $(this).hide();
            $('#save-img-1').show();
            $('#cancel-img-1').show();
            $('#upload-img-1').show();

        });

        $('#upload-img-1').change(encodeImageFileAsURL(function(base64Img){
            $('#file-img-1').attr('src', base64Img);
        }));

        $('#cancel-img-1').click(function(){
            $(this).hide();
            var pathImage= $('#path-img-1').val();
            $('#edit-img-1').show();
            $('#save-img-1').hide();
            $('#upload-img-1').hide();
            $('#file-img-1').attr('src', pathImage);
        });


        // End Edit img-1

        // Beneffit
        var beneffit_temp = "";
        $('#edit-beneffit').click(function(){
            $('#txt-beneffit h2').attr('contenteditable', 'true');
            $('#txt-beneffit p').attr('contenteditable', 'true');
            $('#txt-beneffit').css('border','1px solid blue');
            $('#txt-beneffit').focus();
            $(this).hide();
            $('#save-beneffit').show();
            $('#cancel-beneffit').show();
            beneffit_temp = $('#txt-beneffit').html();
        });

        $('#save-beneffit').click(function(){
            $.ajax({
                method: "put",
                url: '{{route('editcontent.update')}}',
                data: {
                    _token: '{{csrf_token()}}',
                    key: 'beneffit',
                    jdata: { "beneffit": { "title": $('#txt-beneffit h2').text(), "content" : $('#txt-beneffit p').text() } }
                },
            }).done(function(res) {
                swal({
                    title: res.title,
                    text: res.msg,
                    icon: res.icon,
                    type: res.type
                }).then(function(){
                    $('#txt-beneffit').show();
                    $('#txt-beneffit').html($('#txt-beneffit').html());
                    $('#txt-beneffit h2').attr('contenteditable', 'false');
                    $('#txt-beneffit p').attr('contenteditable', 'false');
                    $('#edit-beneffit').show();
                    $('#save-beneffit').hide();
                    $('#cancel-beneffit').hide();
                    $('#txt-beneffit').css('border','none');
                })

            });

        });

        $('#cancel-beneffit').click(function(){
            $('#txt-beneffit').show();
            $('#txt-beneffit').html(beneffit_temp);
            $('#txt-beneffit h2').attr('contenteditable', 'false');
            $('#txt-beneffit p').attr('contenteditable', 'false');
            $('#edit-beneffit').show();
            $('#save-beneffit').hide();
            $('#cancel-beneffit').hide();
            $('#txt-beneffit').css('border','none');
        });

        // End Beneffit

        // banner

        var txt_banner_1_temp = "";
        $('#txt-banner-1').click(function() {
            txt_banner_1_temp = $('#txt-banner-1').html();
            $(this).css('border', '1px solid yellow');
            $(this).attr('contenteditable', 'true');
            $(this).focus();
            $('#txt-banner-1-ctrl').show();
        });

        $('#txt-banner-1-cancel').click(function() {
            $('#txt-banner-1').css('border', 'none');
            $('#txt-banner-1').attr('contenteditable', 'false');
            $('#txt-banner-1-ctrl').hide();
            $('#txt-banner-1').html(txt_banner_1_temp);
        });

        $('#txt-banner-1-save').click(function() {
            $.ajax({
                method: "put",
                url: '{{route('editcontent.update')}}',
                data: {
                    _token: '{{csrf_token()}}',
                    key: 'banner_1',
                    jdata: {
                        "banner_1": {
                                "txt" : $('#txt-banner-1').text()
                            }
                    }
                }
            }).done(function(res) {
                swal({
                    title: res.title,
                    text: res.msg,
                    icon: res.icon,
                    type: res.type
                }).then(function(){
                    $('#txt-banner-1').css('border', 'none');
                    $('#txt-banner-1').attr('contenteditable', 'false');
                    $('#txt-banner-1-ctrl').hide();
                    if(res.type == 'error') {
                        $('#txt-banner-1').html(txt_banner_1_temp);
                    } else {
                        $('#txt-banner-1').html($('#txt-banner-1').html());
                    }

                })

            });
        });
        // End Text Banner 1

        // Token 1
        var token_1_temp = ""
        $('#edit-token-1').click(function() {
            $('#edit-token-1').hide();
            $('#txt-token-1 h5').attr('contenteditable', 'true');
            $('#txt-token-1 span').attr('contenteditable', 'true');
            $('#txt-token-1').css('border','1px solid yellow');
            $('#txt-token-1').focus();
            $('#save-token-1').show();
            $('#cancel-token-1').show();
            token_1_temp = $('#txt-token-1').html();
        });

        $('#cancel-token-1').click(function() {
            $('#edit-token-1').show();
            $('#txt-token-1').html(token_1_temp);
            $('#txt-token-1 h5').attr('contenteditable', 'false');
            $('#txt-token-1 span').attr('contenteditable', 'false');
            $('#txt-token-1').css('border','none');
            $('#save-token-1').hide();
            $('#cancel-token-1').hide();
        });

        $('#save-token-1').click(function() {
            $.ajax({
                method: "put",
                url: '{{route('editcontent.update')}}',
                data: {
                    _token: '{{csrf_token()}}',
                    key: 'token_1',
                    jdata: {
                        "token_1": {
                                "txt_1" : $('#txt-token-1 h5').text(),
                                "txt_2" : $('#txt-token-1 span').text(),
                            }
                    }
                }
            }).done(function(res) {
                swal({
                    title: res.title,
                    text: res.msg,
                    icon: res.icon,
                    type: res.type
                }).then(function(){
                    $('#txt-token-1').css('border', 'none');
                    $('#save-token-1').hide();
                    $('#cancel-token-1').hide();
                    $('#edit-token-1').show();
                    if(res.type == 'error') {
                        $('#txt-token-1').html(token_1_temp);
                        $('#txt-token-1 h5').attr('contenteditable', 'false');
                        $('#txt-token-1 span').attr('contenteditable', 'false');
                    } else {
                        $('#txt-token-1').html($('#txt-token-1').html());
                        $('#txt-token-1 h5').attr('contenteditable', 'false');
                        $('#txt-token-1 span').attr('contenteditable', 'false');

                    }

                })

            });
        });
        // End Token 1

        // Token 2
        var token_2_temp = ""
        $('#edit-token-2').click(function() {
            $('#edit-token-2').hide();
            token_2_temp = $('#txt-token-2').html();
            $('#txt-token-2 h5').attr('contenteditable', 'true');
            $('#txt-token-2 span').attr('contenteditable', 'true');
            $('#txt-token-2').css('border','1px solid yellow');
            $('#txt-token-2').focus();
            $('#save-token-2').show();
            $('#cancel-token-2').show();
        });

        $('#cancel-token-2').click(function() {
            $('#edit-token-2').show();
            $('#txt-token-2').html(token_2_temp);
            $('#txt-token-2 h5').attr('contenteditable', 'false');
            $('#txt-token-2 span').attr('contenteditable', 'false');
            $('#txt-token-2').css('border','none');
            $('#save-token-2').hide();
            $('#cancel-token-2').hide();
        });

        $('#save-token-2').click(function() {
            $.ajax({
                method: "put",
                url: '{{route('editcontent.update')}}',
                data: {
                    _token: '{{csrf_token()}}',
                    key: 'token_2',
                    jdata: {
                        "token_2": {
                                "txt_1" : $('#txt-token-2 h5').text(),
                                "txt_2" : $('#txt-token-2 span').text(),
                            }
                    }
                }
            }).done(function(res) {
                swal({
                    title: res.title,
                    text: res.msg,
                    icon: res.icon,
                    type: res.type
                }).then(function(){
                    $('#txt-token-2').css('border', 'none');
                    $('#save-token-2').hide();
                    $('#cancel-token-2').hide();
                    $('#edit-token-2').show();
                    if(res.type == 'error') {
                        $('#txt-token-2').html(token_2_temp);
                        $('#txt-token-2 h5').attr('contenteditable', 'false');
                        $('#txt-token-2 span').attr('contenteditable', 'false');
                    } else {
                        $('#txt-token-2').html($('#txt-token-2').html());
                        $('#txt-token-2 h5').attr('contenteditable', 'false');
                        $('#txt-token-2 span').attr('contenteditable', 'false');

                    }

                })

            });
        });
        // End Token 2

        // Token 3
        var token_3_temp = ""
        $('#edit-token-3').click(function() {
            $('#edit-token-3').hide();
            $('#txt-token-3 h5').attr('contenteditable', 'true');
            $('#txt-token-3 span').attr('contenteditable', 'true');
            $('#txt-token-3').css('border','1px solid yellow');
            $('#txt-token-3').focus();
            $('#save-token-3').show();
            $('#cancel-token-3').show();
            token_3_temp = $('#txt-token-3').html();
        });

        $('#cancel-token-3').click(function() {
            $('#edit-token-3').show();
            $('#txt-token-3 h5').attr('contenteditable', 'false');
            $('#txt-token-3 span').attr('contenteditable', 'false');
            $('#txt-token-3').css('border','none');
            $('#save-token-3').hide();
            $('#cancel-token-3').hide();
            $('#txt-token-3').html(token_3_temp);
        });

        $('#save-token-3').click(function() {
            $.ajax({
                method: "put",
                url: '{{route('editcontent.update')}}',
                data: {
                    _token: '{{csrf_token()}}',
                    key: 'token_3',
                    jdata: {
                        "token_3": {
                                "txt_1" : $('#txt-token-3 h5').text(),
                                "txt_2" : $('#txt-token-3 span').text(),
                            }
                    }
                }
            }).done(function(res) {
                swal({
                    title: res.title,
                    text: res.msg,
                    icon: res.icon,
                    type: res.type
                }).then(function(){
                    $('#txt-token-3').css('border', 'none');
                    $('#save-token-3').hide();
                    $('#cancel-token-3').hide();
                    $('#edit-token-3').show();
                    if(res.type == 'error') {
                        $('#txt-token-3').html(token_3_temp);
                        $('#txt-token-3 h5').attr('contenteditable', 'false');
                        $('#txt-token-3 span').attr('contenteditable', 'false');
                    } else {
                        $('#txt-token-3').html($('#txt-token-3').html());
                        $('#txt-token-3 h5').attr('contenteditable', 'false');
                        $('#txt-token-3 span').attr('contenteditable', 'false');

                    }

                })

            });
        });
        // End Token 3

        // Token 4
        var token_4_temp = ""
        $('#edit-token-4').click(function() {
            $('#edit-token-4').hide();
            $('#txt-token-4 h5').attr('contenteditable', 'true');
            $('#txt-token-4 span').attr('contenteditable', 'true');
            $('#txt-token-4').css('border','1px solid yellow');
            $('#txt-token-4').focus();
            $('#save-token-4').show();
            $('#cancel-token-4').show();
            token_4_temp = $('#txt-token-4').html();
        });

        $('#cancel-token-4').click(function() {
            $('#edit-token-4').show();
            $('#txt-token-4 h5').attr('contenteditable', 'false');
            $('#txt-token-4 span').attr('contenteditable', 'false');
            $('#txt-token-4').css('border','none');
            $('#save-token-4').hide();
            $('#cancel-token-4').hide();
            $('#txt-token-4').html(token_4_temp);
        });

        $('#save-token-4').click(function() {
            $.ajax({
                method: "put",
                url: '{{route('editcontent.update')}}',
                data: {
                    _token: '{{csrf_token()}}',
                    key: 'token_4',
                    jdata: {
                        "token_4": {
                                "txt_1" : $('#txt-token-4 h5').text(),
                                "txt_2" : $('#txt-token-4 span').text(),
                            }
                    }
                }
            }).done(function(res) {
                swal({
                    title: res.title,
                    text: res.msg,
                    icon: res.icon,
                    type: res.type
                }).then(function(){
                    $('#txt-token-4').css('border', 'none');
                    $('#save-token-4').hide();
                    $('#cancel-token-4').hide();
                    $('#edit-token-4').show();
                    if(res.type == 'error') {
                        $('#txt-token-4').html(token_4_temp);
                        $('#txt-token-4 h5').attr('contenteditable', 'false');
                        $('#txt-token-4 span').attr('contenteditable', 'false');
                    } else {
                        $('#txt-token-4').html($('#txt-token-4').html());
                        $('#txt-token-4 h5').attr('contenteditable', 'false');
                        $('#txt-token-4 span').attr('contenteditable', 'false');

                    }

                })

            });
        });
        // End Token 4

        // Token 11
        var token_11_temp = ""
        $('#edit-token-11').click(function() {
            $('#edit-token-11').hide();
            token_11_temp = $('#txt-token-11').html();
            $('#txt-token-11 h2').attr('contenteditable', 'true');
            $('#txt-token-11 p').attr('contenteditable', 'true');
            $('#txt-token-11').css('border','1px solid yellow');
            $('#txt-token-11').focus();
            $('#save-token-11').show();
            $('#cancel-token-11').show();

        });

        $('#cancel-token-11').click(function() {
            $('#edit-token-11').show();
            $('#txt-token-11').html(token_11_temp);
            $('#txt-token-11 h2').attr('contenteditable', 'false');
            $('#txt-token-11 p').attr('contenteditable', 'false');
            $('#txt-token-11').css('border','none');
            $('#save-token-11').hide();
            $('#cancel-token-11').hide();
        });

        $('#save-token-11').click(function() {
            $.ajax({
                method: "put",
                url: '{{route('editcontent.update')}}',
                data: {
                    _token: '{{csrf_token()}}',
                    key: 'token_11',
                    jdata: {
                        "token_11": {
                                "title" : $('#txt-token-11 h2').text(),
                                "content" : $('#txt-token-11 p').text(),
                            }
                    }
                }
            }).done(function(res) {
                swal({
                    title: res.title,
                    text: res.msg,
                    icon: res.icon,
                    type: res.type
                }).then(function(){
                    $('#txt-token-11').css('border', 'none');
                    $('#save-token-11').hide();
                    $('#cancel-token-11').hide();
                    $('#edit-token-11').show();
                    if(res.type == 'error') {
                        $('#txt-token-11').html(token_11_temp);
                        $('#txt-token-11 h2').attr('contenteditable', 'false');
                        $('#txt-token-11 p').attr('contenteditable', 'false');
                    } else {
                        $('#txt-token-11').html($('#txt-token-11').html());
                        $('#txt-token-11 h2').attr('contenteditable', 'false');
                        $('#txt-token-11 p').attr('contenteditable', 'false');

                    }

                })

            });
        });
        // End Token 11

        // Token 21
        var token_21_temp = ""
        $('#edit-token-21').click(function() {
            $('#edit-token-21').hide();
            token_21_temp = $('#txt-token-21').html();
            $('#txt-token-21 h5').attr('contenteditable', 'true');
            $('#txt-token-21 p').attr('contenteditable', 'true');
            $('#txt-token-21').css('border','1px solid yellow');
            $('#txt-token-21').focus();
            $('#save-token-21').show();
            $('#cancel-token-21').show();
        });

        $('#cancel-token-21').click(function() {
            $('#edit-token-21').show();
            $('#txt-token-21').html(token_21_temp);
            $('#txt-token-21 h5').attr('contenteditable', 'false');
            $('#txt-token-21 p').attr('contenteditable', 'false');
            $('#txt-token-21').css('border','none');
            $('#save-token-21').hide();
            $('#cancel-token-21').hide();
        });

        $('#save-token-21').click(function() {
            $.ajax({
                method: "put",
                url: '{{route('editcontent.update')}}',
                data: {
                    _token: '{{csrf_token()}}',
                    key: 'token_21',
                    jdata: {
                        "token_21": {
                                "title" : $('#txt-token-21 h5').text(),
                                "content" : $('#txt-token-21 p').text(),
                            }
                    }
                }
            }).done(function(res) {
                swal({
                    title: res.title,
                    text: res.msg,
                    icon: res.icon,
                    type: res.type
                }).then(function(){
                    $('#txt-token-21').css('border', 'none');
                    $('#save-token-21').hide();
                    $('#cancel-token-21').hide();
                    $('#edit-token-21').show();
                    if(res.type == 'error') {
                        $('#txt-token-21').html(token_21_temp);
                        $('#txt-token-21 h5').attr('contenteditable', 'false');
                        $('#txt-token-21 p').attr('contenteditable', 'false');
                    } else {
                        $('#txt-token-21').html($('#txt-token-21').html());
                        $('#txt-token-21 h5').attr('contenteditable', 'false');
                        $('#txt-token-21 p').attr('contenteditable', 'false');
                    }

                })

            });
        });
        // End Token 21

        // Token 22
        var token_21_temp = ""
        $('#edit-token-22').click(function() {
            $('#edit-token-22').hide();
            token_22_temp = $('#txt-token-22').html();
            $('#txt-token-22 h5').attr('contenteditable', 'true');
            $('#txt-token-22 p').attr('contenteditable', 'true');
            $('#txt-token-22').css('border','1px solid yellow');
            $('#txt-token-22').focus();
            $('#save-token-22').show();
            $('#cancel-token-22').show();
        });

        $('#cancel-token-22').click(function() {
            $('#edit-token-22').show();
            $('#txt-token-22').html(token_22_temp);
            $('#txt-token-22 h5').attr('contenteditable', 'false');
            $('#txt-token-22 p').attr('contenteditable', 'false');
            $('#txt-token-22').css('border','none');
            $('#save-token-22').hide();
            $('#cancel-token-22').hide();
        });

        $('#save-token-22').click(function() {
            $.ajax({
                method: "put",
                url: '{{route('editcontent.update')}}',
                data: {
                    _token: '{{csrf_token()}}',
                    key: 'token_22',
                    jdata: {
                        "token_22": {
                                "title" : $('#txt-token-22 h5').text(),
                                "content" : $('#txt-token-22 p').text(),
                            }
                    }
                }
            }).done(function(res) {
                swal({
                    title: res.title,
                    text: res.msg,
                    icon: res.icon,
                    type: res.type
                }).then(function(){
                    $('#txt-token-22').css('border', 'none');
                    $('#save-token-22').hide();
                    $('#cancel-token-22').hide();
                    $('#edit-token-22').show();
                    if(res.type == 'error') {
                        $('#txt-token-22').html(token_22_temp);
                        $('#txt-token-22 h5').attr('contenteditable', 'false');
                        $('#txt-token-22 p').attr('contenteditable', 'false');
                    } else {
                        $('#txt-token-22').html($('#txt-token-22').html());
                        $('#txt-token-22 h5').attr('contenteditable', 'false');
                        $('#txt-token-22 p').attr('contenteditable', 'false');
                    }

                })

            });
        });
        // End Token 22

        // Token 23
        var token_21_temp = ""
        $('#edit-token-23').click(function() {
            $('#edit-token-23').hide();
            token_23_temp = $('#txt-token-23').html();
            $('#txt-token-23 h5').attr('contenteditable', 'true');
            $('#txt-token-23 p').attr('contenteditable', 'true');
            $('#txt-token-23').css('border','1px solid yellow');
            $('#txt-token-23').focus();
            $('#save-token-23').show();
            $('#cancel-token-23').show();
        });

        $('#cancel-token-23').click(function() {
            $('#edit-token-23').show();
            $('#txt-token-23').html(token_23_temp);
            $('#txt-token-23 h5').attr('contenteditable', 'false');
            $('#txt-token-23 p').attr('contenteditable', 'false');
            $('#txt-token-23').css('border','none');
            $('#save-token-23').hide();
            $('#cancel-token-23').hide();
        });

        $('#save-token-23').click(function() {
            $.ajax({
                method: "put",
                url: '{{route('editcontent.update')}}',
                data: {
                    _token: '{{csrf_token()}}',
                    key: 'token_23',
                    jdata: {
                        "token_23": {
                                "title" : $('#txt-token-23 h5').text(),
                                "content" : $('#txt-token-23 p').text(),
                            }
                    }
                }
            }).done(function(res) {
                swal({
                    title: res.title,
                    text: res.msg,
                    icon: res.icon,
                    type: res.type
                }).then(function(){
                    $('#txt-token-23').css('border', 'none');
                    $('#save-token-23').hide();
                    $('#cancel-token-23').hide();
                    $('#edit-token-23').show();
                    if(res.type == 'error') {
                        $('#txt-token-23').html(token_23_temp);
                        $('#txt-token-23 h5').attr('contenteditable', 'false');
                        $('#txt-token-23 p').attr('contenteditable', 'false');
                    } else {
                        $('#txt-token-23').html($('#txt-token-23').html());
                        $('#txt-token-23 h5').attr('contenteditable', 'false');
                        $('#txt-token-23 p').attr('contenteditable', 'false');
                    }

                })

            });
        });
        // End Token 23

        // Token 24
        var token_24_temp = ""
        $('#edit-token-24').click(function() {
            $('#edit-token-24').hide();
            token_24_temp = $('#txt-token-24').html();
            $('#txt-token-24 h5').attr('contenteditable', 'true');
            $('#txt-token-24 p').attr('contenteditable', 'true');
            $('#txt-token-24').css('border','1px solid yellow');
            $('#txt-token-24').focus();
            $('#save-token-24').show();
            $('#cancel-token-24').show();
        });

        $('#cancel-token-24').click(function() {
            $('#edit-token-24').show();
            $('#txt-token-24').html(token_24_temp);
            $('#txt-token-24 h5').attr('contenteditable', 'false');
            $('#txt-token-24 p').attr('contenteditable', 'false');
            $('#txt-token-24').css('border','none');
            $('#save-token-24').hide();
            $('#cancel-token-24').hide();
        });

        $('#save-token-24').click(function() {
            $.ajax({
                method: "put",
                url: '{{route('editcontent.update')}}',
                data: {
                    _token: '{{csrf_token()}}',
                    key: 'token_24',
                    jdata: {
                        "token_24": {
                                "title" : $('#txt-token-24 h5').text(),
                                "content" : $('#txt-token-24 p').text(),
                            }
                    }
                }
            }).done(function(res) {
                swal({
                    title: res.title,
                    text: res.msg,
                    icon: res.icon,
                    type: res.type
                }).then(function(){
                    $('#txt-token-24').css('border', 'none');
                    $('#save-token-24').hide();
                    $('#cancel-token-24').hide();
                    $('#edit-token-24').show();
                    if(res.type == 'error') {
                        $('#txt-token-24').html(token_24_temp);
                        $('#txt-token-24 h5').attr('contenteditable', 'false');
                        $('#txt-token-24 p').attr('contenteditable', 'false');
                    } else {
                        $('#txt-token-24').html($('#txt-token-24').html());
                        $('#txt-token-24 h5').attr('contenteditable', 'false');
                        $('#txt-token-24 p').attr('contenteditable', 'false');
                    }

                })

            });
        });
        // End Token 24

        // Team
        var team_temp = ""
        $('#edit-team').click(function() {
            $('#edit-team').hide();
            team_temp = $('#txt-team').html();
            $('#txt-team h2').attr('contenteditable', 'true');
            $('#txt-team p').attr('contenteditable', 'true');
            $('#txt-team').css('border','1px solid yellow');
            $('#txt-team').focus();
            $('#save-team').show();
            $('#cancel-team').show();
        });

        $('#cancel-team').click(function() {
            $('#edit-team').show();
            $('#txt-team').html(team_temp);
            $('#txt-team h2').attr('contenteditable', 'false');
            $('#txt-team p').attr('contenteditable', 'false');
            $('#txt-team').css('border','none');
            $('#save-team').hide();
            $('#cancel-team').hide();
        });

        $('#save-team').click(function() {
            $.ajax({
                method: "put",
                url: '{{route('editcontent.update')}}',
                data: {
                    _token: '{{csrf_token()}}',
                    key: 'team',
                    jdata: {
                        "team": {
                                "title" : $('#txt-team h2').text(),
                                "content" : $('#txt-team p').text(),
                            }
                    }
                }
            }).done(function(res) {
                swal({
                    title: res.title,
                    text: res.msg,
                    icon: res.icon,
                    type: res.type
                }).then(function(){
                    $('#txt-team').css('border', 'none');
                    $('#save-team').hide();
                    $('#cancel-team').hide();
                    $('#edit-team').show();
                    if(res.type == 'error') {
                        $('#txt-team').html(team_temp);
                        $('#txt-team h2').attr('contenteditable', 'false');
                        $('#txt-team p').attr('contenteditable', 'false');
                    } else {
                        $('#txt-team').html($('#txt-team').html());
                        $('#txt-team h2').attr('contenteditable', 'false');
                        $('#txt-team p').attr('contenteditable', 'false');
                    }

                })

            });
        });
        // End Team

        // Faq
        var team_temp = ""
        $('#edit-faq').click(function() {
            $('#edit-faq').hide();
            faq_temp = $('#txt-faq').html();
            $('#txt-faq h2').attr('contenteditable', 'true');
            $('#txt-faq p').attr('contenteditable', 'true');
            $('#txt-faq').css('border','1px solid yellow');
            $('#txt-faq').focus();
            $('#save-faq').show();
            $('#cancel-faq').show();
        });

        $('#cancel-faq').click(function() {
            $('#edit-faq').show();
            $('#txt-faq').html(faq_temp);
            $('#txt-faq h2').attr('contenteditable', 'false');
            $('#txt-faq p').attr('contenteditable', 'false');
            $('#txt-faq').css('border','none');
            $('#save-faq').hide();
            $('#cancel-faq').hide();
        });

        $('#save-faq').click(function() {
            $.ajax({
                method: "put",
                url: '{{route('editcontent.update')}}',
                data: {
                    _token: '{{csrf_token()}}',
                    key: 'faq',
                    jdata: {
                        "faq": {
                                "title" : $('#txt-faq h2').text(),
                                "content" : $('#txt-faq p').text(),
                            }
                    }
                }
            }).done(function(res) {
                swal({
                    title: res.title,
                    text: res.msg,
                    icon: res.icon,
                    type: res.type
                }).then(function(){
                    $('#txt-faq').css('border', 'none');
                    $('#save-faq').hide();
                    $('#cancel-faq').hide();
                    $('#edit-faq').show();
                    if(res.type == 'error') {
                        $('#txt-faq').html(faq_temp);
                        $('#txt-faq h2').attr('contenteditable', 'false');
                        $('#txt-faq p').attr('contenteditable', 'false');
                    } else {
                        $('#txt-faq').html($('#txt-faq').html());
                        $('#txt-faq h2').attr('contenteditable', 'false');
                        $('#txt-faq p').attr('contenteditable', 'false');
                    }

                })

            });
        });
        // End Faq

        // Banner 2
        var banner_2_temp = "";
        $('#txt-banner-2').click(function() {
            banner_2_temp = $(this).html();
            $(this).attr('contenteditable', 'true');
            $(this).css('border', '1px solid yellow');
            $('#txt-banner-2-ctrl').show();
        });

        $('#txt-banner-2-cancel').click(function() {
            $('#txt-banner-2-ctrl').hide();
            $('#txt-banner-2').css('border', 'none');
            $('#txt-banner-2').html(banner_2_temp);
            $('#txt-banner-2').attr('contenteditable', 'false');
        });

        $('#txt-banner-2-save').click(function() {
            $.ajax({
                method: "put",
                url: '{{route('editcontent.update')}}',
                data: {
                    _token: '{{csrf_token()}}',
                    key: 'banner_2',
                    jdata: {
                        "banner_2": {
                                "txt" : $('#txt-banner-2').text(),
                            }
                    }
                }
            }).done(function(res) {
                swal({
                    title: res.title,
                    text: res.msg,
                    icon: res.icon,
                    type: res.type
                }).then(function(){
                    $('#txt-banner-2-ctrl').hide();
                    $('#txt-banner-2').css('border', 'none');
                    $('#txt-banner-2').attr('contenteditable', 'false');
                    if(res.type == 'error') {
                        $('#txt-banner-2').html(faq_temp);
                    } else {
                        $('#txt-banner-2').html($('#txt-banner-2').html());
                    }

                })

            });
        });
        // End Banner 2


    </script>
    @endrole

</body>
</html>
