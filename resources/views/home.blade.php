@extends('layouts.app')
<!--Start Preloader-->
<div class="preloader" id="preloader"></div>
<!--End Preloader-->

<!-- header top begin -->
<header class="header-section" id="header-section">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-end reunir-content-center">
                    <div class="header-left">
                        <ul>
                            <li class="header-left-list">
                                <p class="header-left-text">
                                    <span class="header-left-icon">
                                        <i class="icofont-headphone-alt"></i>
                                    </span><a href="#" style="color:white;">0704922042</a>
                                </p>
                            </li>
                            <li class="header-left-list">
                                <p class="header-left-text">
                                    <span class="header-left-icon">
                                        <i class="icofont-email"></i>
                                    </span><a href="#" style="color:white;">info@bettin.com</a>
                                </p>
                            </li>
                        <li class="header-left-list">
                            <p class="header-left-text">
                                <span class="header-left-icon">
                                        <i class="icofont-lock"></i>
                                        <a href="#" style="color:white;">Login/Sign Up</a>
                                </span>
                            </p>
                        </li>
                        <li class="header-left-list">
                            <p class="header-left-text">
                                <span class="header-left-icon">
                                       <form class="form-inline" style="margin-top:-25px">
                                           <input type="text" class="form-control" style="width:350px" placeholder="Search a team Here" required/>&nbsp;&nbsp;
                                           <button class="btn" style="background-color:chocolate" type="submit">Search</button>
                                       </form>
                                </span>
                            </p>
                        </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- nav top begin -->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-light reunir-navbar">
        <div class="container">

            <div class="logo-section">
            <a class="logo-title navbar-brand" href="#" title="Home">{{config('app.name')}}</a>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="icofont-navigation-menu"></i>
            </button>
            <div class="collapse navbar-collapse nav-main justify-content-end" id="navbarNav">
                <ul class="navbar-nav" id="primary-menu">
                    <li class="nav-item active">
                        <a class="nav-link active" href="#header-section" title="Available Games to Stake On">SPORT
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about-section" title="View Live Games">LIVE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#affiliate-section" title="Learn About Available Promotions">PROMO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#investment-section" title="How to Bet">BETTING</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" title="Cash Out Policy">PAYMENTS</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="#" title="Head To Head Stats on Live Games">STATISTICS</a>
                        </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact-us-section" title="Completed Match Results">RESULTS</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="#contact-us-section" title="Our Money Back Policy">RETURNS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact-us-section" title="Our Money Back Policy">SERVICES</a>
                        </li>
                    <li class="nav-item">
                            <a class="nav-link" href="#contact-us-section" title="Talk To Us">CONTACTS</a>
                        </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- nav top end -->
</header>
<!-- header top end -->

<!-- banner top begin -->
<section class="banner-section">
    <div class="overlay">
        <div class="video-overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay" muted="no" loop="loop">
            <source src="img/football.mp4" type="video/mp4">
        </video>

        <div class="container">
            <div class="total-slide">
                <div class="row text-center">
                    <div class="col-lg-12">
                        <div class="banner-text">
                            <h1 class="font-light">Take Your</h1>
                            <h1 class="font-bold">Sports Betting</h1>
                            <h2 class="font-light">Strategy to the next level</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h3 class="banner-bottom-text" style="text-decoration:underline">A Profitable platform for high-margin SPORT betting</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="get-start">
                            <a href="/getstarted">GET STARTED NOW!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner top end -->

<!-- calculator top begin -->
<section class="choose-section" style="background-attachment:fixed;height:140px;padding-bottom:10px;margin-top:-150px">
    <div class="container-fruit text-center">
        <div class="choose-section-carousel">
            <div class="col">
                <div class="single-item">
                    <div class="icon-box">
                            <img src="img/soccer.png" height="80px" width="100px" alt="#" title="horse Racing">
                            <span style="color:white">Soccer Leagues</span>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="single-item">
                        <img src="img/football.png" height="80px" width="100px" alt="#">
                       <span style="color:white"> American Football</span>
                </div>
            </div>
            <div class="col">
                <div class="single-item">
                    <div class="icon-box">
                            <img src="img/hockey.png" height="80px" width="100px" alt="#">
                            <span style="color:white">Hockey</span>
                    </div>
                </div>
            </div>
            <div class="col">
                    <div class="single-item">
                        <div class="icon-box">
                                <img src="img/basketball.png" height="80px" width="100px" alt="#" title="horse Racing">
                                <span style="color:white">Basket Ball</span>
                        </div>
                    </div>
                </div>
                <div class="col">
                        <div class="single-item">
                            <div class="icon-box">
                                    <img src="img/tennis.png" height="80px" width="100px" alt="#" title="horse Racing">
                                    <span style="color:white">Tennis</span>
                            </div>
                        </div>
                    </div>
            <div class="col">
                <div class="single-item">
                    <div class="icon-box">
                            <img src="img/volleyball.png" height="80px" width="100px" alt="#">
                            <span style="color:white">VolleyBall</span>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="single-item">
                    <div class="icon-box">
                            <img src="img/rugby.png" height="80px" width="100px" alt="#">
                            <span style="color:white">Rugby</span>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="single-item">
                    <div class="icon-box">
                            <img src="img/baseball.png" height="80px" width="100px" alt="#" title="horse Racing">
                            <span style="color:white">Baseball</span>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="single-item">
                    <div class="icon-box">
                            <img src="img/cricket.png" height="80px" width="100px" alt="#" title="horse Racing">
                            <span style="color:white">Cricket</span>
                    </div>
                </div>
            </div>
            <div class="col">
                    <div class="single-item">
                        <div class="icon-box">
                                <img src="img/soccer.png" height="80px" width="100px" alt="#" title="horse Racing">
                                <span style="color:white">Soccer Leagues</span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="single-item">
                            <img src="img/football.png" height="80px" width="100px" alt="#">
                           <span style="color:white"> American Football</span>
                    </div>
                </div>
                <div class="col">
                    <div class="single-item">
                        <div class="icon-box">
                                <img src="img/hockey.png" height="80px" width="100px" alt="#">
                                <span style="color:white">Hockey</span>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</section>
<!-- calculator top end -->
<!-- advantage section begin -->
<section class="advantage-section" style="background-attachment:fixed;margin-top:30px">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="advantage-text">
                        <h5 class="advantage-title">Our Biggest</h5>
                        <h2 class="advantage-subtitle">Advantage</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 text-center">
                    <div class="single-box">
                        <div class="icon-box">
                            <i class="ren-team"></i>
                        </div>
                        <div class="text-box"><br>
                            <h2>PROFESSIONAL SUPPORT TEAM</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 text-center">
                    <div class="single-box">
                        <div class="icon-box">
                            <i class="ren-profitable-plan"></i>
                        </div>
                        <div class="text-box"><br>
                            <h2>PROFITABLE PLANS</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 text-center">
                    <div class="single-box">
                        <div class="icon-box">
                            <i class="ren-control-panel"></i>
                        </div>
                        <div class="text-box">
                        <br>
                            <h2>Secured User Data</h2>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- advantage section end -->

<!-- signup section begin -->
<section class="signup-section">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8">
                    <div class="signup-text">
                        <h5 class="signup-title">CREATE YOUR PERSONAL ACCOUNT</h5>
                        <h2 class="signup-subtitle">Get Started Now</h2>
                        <p class="signup-title-describe">Get Started Now,Create your personal account as a first step to become a sucessfull investor.Are you ready to start earning with us?</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 d-flex justify-content-end align-items-center reunir-content-center">
                    <div class="signup-right-text">
                        <a href="/register">Signup Now<i class="ren-arrowright"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- signup section end -->
<!-- contact-us section end -->