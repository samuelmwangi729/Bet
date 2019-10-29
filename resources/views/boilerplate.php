@extends('layouts.baseLayout')
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
                                    <img src="img/horse.png" height="80px" width="100px" alt="#" title="horse Racing">
                                    <span style="color:white">Horse Racing</span>
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
                            <img src="img/running.png" height="80px" width="100px" alt="#">
                            <span style="color:white">Races</span>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="single-item">
                    <div class="icon-box">
                            <img src="img/races.png" height="80px" width="100px" alt="#" title="horse Racing">
                            <span style="color:white">Car Racing</span>
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

<!-- about section begin -->
<section class="about-section navigation" id="about-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="about-left">
                    <div class="about-text">
                    <h5 class="about-title">WELCOME TO {{config('app.name')}}</h5>
                        <h2 class="about-subtitle">A few words About Us</h2>
                        <h5 class="about-details">To meet <span>today's challenges</span>, we've created a unique fund management system</h5>
                        <p class="about-description">{{config('app.name')}} - a private financial company specializing in sports betting. Our system is risk-free thanks to the development and improvement of semi-automatic system of rates. We upgraded our automatic system so that the last step before the rate is now done by our operators.</p>
                    </div>

                    <div class="about-box">
                        <div class="row text-center">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="single-about-box">
                                    <div class="icon-box-outer bg-eff">
                                        <div class="icon-box">
                                            <i class="ren-efficiency"></i>
                                        </div>
                                    </div>
                                    <h3>Efficiency</h3>
                                    <div class="hover-box hover-left">
                                        <a href="#">READ MORE<i class="ren-arrowright"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="single-about-box">
                                    <div class="icon-box-outer bg-ex">
                                        <div class="icon-box">
                                            <img src="img/expierence.svg" alt="#">
                                        </div>
                                    </div>
                                    <h3>Experience</h3>
                                    <div class="hover-box hover-top">
                                        <a href="#">READ MORE<i class="ren-arrowright"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="single-about-box">
                                    <div class="icon-box-outer bg-security">
                                        <div class="icon-box">
                                            <i class="ren-security"></i>
                                        </div>
                                    </div>
                                    <h3>Security</h3>
                                    <div class="hover-box hover-right">
                                        <a href="#">READ MORE<i class="ren-arrowright"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="single-about-box">
                                    <div class="icon-box-outer bg-trans">
                                        <div class="icon-box">
                                            <i class="ren-transparent"></i>
                                        </div>
                                    </div>
                                    <h3>Transparent</h3>
                                    <div class="hover-box hover-left">
                                        <a href="#">READ MORE<i class="ren-arrowright"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="single-about-box">
                                    <div class="icon-box-outer bg-simple">
                                        <div class="icon-box">
                                            <i class="ren-simple"></i>
                                        </div>
                                    </div>
                                    <h3>Simple</h3>
                                    <div class="hover-box hover-bottom">
                                        <a href="#">READ MORE<i class="ren-arrowright"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="single-about-box">
                                    <div class="icon-box-outer bg-com">
                                        <div class="icon-box">
                                            <i class="ren-compliant"></i>
                                        </div>
                                    </div>
                                    <h3>Compliant</h3>
                                    <div class="hover-box hover-right">
                                        <a href="#">READ MORE<i class="ren-arrowright"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="about-right">
                    <div class="video-box">
                        <img src="img/about-bg.jpg" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- choose section end -->
<!-- advantage section begin -->
<section class="advantage-section" style="background-attachment:fixed">
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

<!-- investment section begin -->
<section class="investment-section" id="investment-section">
    <div class="overlay">
        <div class="container text-center">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="investment-text">
                        <h5 class="investment-title">INVESTMENT OFFER</h5>
                        <h2 class="investment-subtitle">Our Investment Plans</h2>
                        <p class="investment-title-describe">Reunir provides a straightforward and transparent mechanism to attract investments and make more profits.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="investment-section-carousel">

                        <div class="col text-center">
                            <div class="single-item">
                                <div class="single-image">
                                    <img src="img/deposit-bg.jpg" alt="#">
                                </div>
                                <div class="icon-box">
                                    <img src="img/deposit1.svg" alt="#">
                                </div>
                                <div class="part-prize">
                                    <span class="percentage"><b>6</b>%</span>
                                    <h3>Daily For Even</h3>
                                    <h4 class="min-max">
                                        <span class="left">Min. : <b>$10</b></span>
                                        <span class="right">Max.: <b>$249</b></span>
                                    </h4>
                                </div>
                                <div class="part-cart">
                                    <a href="#">Make Deposit</a>
                                </div>
                            </div>
                        </div>

                        <div class="col text-center">
                            <div class="single-item">
                                <div class="single-image">
                                    <img src="img/deposit-bg.jpg" alt="#">
                                </div>
                                <div class="icon-box">
                                    <img src="img/deposit2.svg" alt="#">
                                </div>
                                <div class="part-prize">
                                    <span class="percentage"><b>7</b>%</span>
                                    <h3>Daily For Even</h3>
                                    <h4 class="min-max">
                                        <span class="left">Min. : <b>$250</b></span>
                                        <span class="right">Max.: <b>$9999</b></span>
                                    </h4>
                                </div>
                                <div class="part-cart">
                                    <a href="#">Make Deposit</a>
                                </div>
                            </div>
                        </div>

                        <div class="col text-center">
                            <div class="single-item">
                                <div class="single-image">
                                    <img src="img/deposit-bg.jpg" alt="#">
                                </div>
                                <div class="icon-box">
                                    <img src="img/deposit3.svg" alt="#">
                                </div>
                                <div class="part-prize">
                                    <span class="percentage"><b>8</b>%</span>
                                    <h3>Daily For Even</h3>
                                    <h4 class="min-max">
                                        <span class="left">Min. : <b>$1000</b></span>
                                        <span class="right">Max.: <b>$4999</b></span>
                                    </h4>
                                </div>
                                <div class="part-cart">
                                    <a href="#">Make Deposit</a>
                                </div>
                            </div>
                        </div>

                        <div class="col text-center">
                            <div class="single-item">
                                <div class="single-image">
                                    <img src="img/deposit-bg.jpg" alt="#">
                                </div>
                                <div class="icon-box">
                                    <img src="img/deposit4.svg" alt="#">
                                </div>
                                <div class="part-prize">
                                    <span class="percentage"><b>8</b>%</span>
                                    <h3>Daily For Even</h3>
                                    <h4 class="min-max">
                                        <span class="left">Min. : <b>$5k</b></span>
                                        <span class="right">Max.: <b>$10k</b></span>
                                    </h4>
                                </div>
                                <div class="part-cart">
                                    <a href="#">Make Deposit</a>
                                </div>
                            </div>
                        </div>

                        <div class="col text-center">
                            <div class="single-item">
                                <div class="single-image">
                                    <img src="img/deposit-bg.jpg" alt="#">
                                </div>
                                <div class="icon-box">
                                    <img src="img/deposit1.svg" alt="#">
                                </div>
                                <div class="part-prize">
                                    <span class="percentage"><b>6</b>%</span>
                                    <h3>Daily For Even</h3>
                                    <h4 class="min-max">
                                        <span class="left">Min. : <b>$10</b></span>
                                        <span class="right">Max.: <b>$249</b></span>
                                    </h4>
                                </div>
                                <div class="part-cart">
                                    <a href="#">Make Deposit</a>
                                </div>
                            </div>
                        </div>

                        <div class="col text-center">
                            <div class="single-item">
                                <div class="single-image">
                                    <img src="img/deposit-bg.jpg" alt="#">
                                </div>
                                <div class="icon-box">
                                    <img src="img/deposit2.svg" alt="#">
                                </div>
                                <div class="part-prize">
                                    <span class="percentage"><b>7</b>%</span>
                                    <h3>Daily For Even</h3>
                                    <h4 class="min-max">
                                        <span class="left">Min. : <b>$250</b></span>
                                        <span class="right">Max.: <b>$9999</b></span>
                                    </h4>
                                </div>
                                <div class="part-cart">
                                    <a href="#">Make Deposit</a>
                                </div>
                            </div>
                        </div>

                        <div class="col text-center">
                            <div class="single-item">
                                <div class="single-image">
                                    <img src="img/deposit-bg.jpg" alt="#">
                                </div>
                                <div class="icon-box">
                                    <img src="img/deposit3.svg" alt="#">
                                </div>
                                <div class="part-prize">
                                    <span class="percentage"><b>8</b>%</span>
                                    <h3>Daily For Even</h3>
                                    <h4 class="min-max">
                                        <span class="left">Min. : <b>$1000</b></span>
                                        <span class="right">Max.: <b>$4999</b></span>
                                    </h4>
                                </div>
                                <div class="part-cart">
                                    <a href="#">Make Deposit</a>
                                </div>
                            </div>
                        </div>

                        <div class="col text-center">
                            <div class="single-item">
                                <div class="single-image">
                                    <img src="img/deposit-bg.jpg" alt="#">
                                </div>
                                <div class="icon-box">
                                    <img src="img/deposit4.svg" alt="#">
                                </div>
                                <div class="part-prize">
                                    <span class="percentage"><b>8</b>%</span>
                                    <h3>Daily For Even</h3>
                                    <h4 class="min-max">
                                        <span class="left">Min. : <b>$5k</b></span>
                                        <span class="right">Max.: <b>$10k</b></span>
                                    </h4>
                                </div>
                                <div class="part-cart">
                                    <a href="#">Make Deposit</a>
                                </div>
                            </div>
                        </div>

                        <div class="col text-center">
                            <div class="single-item">
                                <div class="single-image">
                                    <img src="img/deposit-bg.jpg" alt="#">
                                </div>
                                <div class="icon-box">
                                    <img src="img/deposit1.svg" alt="#">
                                </div>
                                <div class="part-prize">
                                    <span class="percentage"><b>6</b>%</span>
                                    <h3>Daily For Even</h3>
                                    <h4 class="min-max">
                                        <span class="left">Min. : <b>$10</b></span>
                                        <span class="right">Max.: <b>$249</b></span>
                                    </h4>
                                </div>
                                <div class="part-cart">
                                    <a href="#">Make Deposit</a>
                                </div>
                            </div>
                        </div>

                        <div class="col text-center">
                            <div class="single-item">
                                <div class="single-image">
                                    <img src="img/deposit-bg.jpg" alt="#">
                                </div>
                                <div class="icon-box">
                                    <img src="img/deposit2.svg" alt="#">
                                </div>
                                <div class="part-prize">
                                    <span class="percentage"><b>7</b>%</span>
                                    <h3>Daily For Even</h3>
                                    <h4 class="min-max">
                                        <span class="left">Min. : <b>$250</b></span>
                                        <span class="right">Max.: <b>$9999</b></span>
                                    </h4>
                                </div>
                                <div class="part-cart">
                                    <a href="#">Make Deposit</a>
                                </div>
                            </div>
                        </div>

                        <div class="col text-center">
                            <div class="single-item">
                                <div class="single-image">
                                    <img src="img/deposit-bg.jpg" alt="#">
                                </div>
                                <div class="icon-box">
                                    <img src="img/deposit3.svg" alt="#">
                                </div>
                                <div class="part-prize">
                                    <span class="percentage"><b>8</b>%</span>
                                    <h3>Daily For Even</h3>
                                    <h4 class="min-max">
                                        <span class="left">Min. : <b>$1000</b></span>
                                        <span class="right">Max.: <b>$4999</b></span>
                                    </h4>
                                </div>
                                <div class="part-cart">
                                    <a href="#">Make Deposit</a>
                                </div>
                            </div>
                        </div>

                        <div class="col text-center">
                            <div class="single-item">
                                <div class="single-image">
                                    <img src="img/deposit-bg.jpg" alt="#">
                                </div>
                                <div class="icon-box">
                                    <img src="img/deposit4.svg" alt="#">
                                </div>
                                <div class="part-prize">
                                    <span class="percentage"><b>8</b>%</span>
                                    <h3>Daily For Even</h3>
                                    <h4 class="min-max">
                                        <span class="left">Min. : <b>$5k</b></span>
                                        <span class="right">Max.: <b>$10k</b></span>
                                    </h4>
                                </div>
                                <div class="part-cart">
                                    <a href="#">Make Deposit</a>
                                </div>
                            </div>
                        </div>

                        <div class="col text-center">
                            <div class="single-item">
                                <div class="single-image">
                                    <img src="img/deposit-bg.jpg" alt="#">
                                </div>
                                <div class="icon-box">
                                    <img src="img/deposit1.svg" alt="#">
                                </div>
                                <div class="part-prize">
                                    <span class="percentage"><b>6</b>%</span>
                                    <h3>Daily For Even</h3>
                                    <h4 class="min-max">
                                        <span class="left">Min. : <b>$10</b></span>
                                        <span class="right">Max.: <b>$249</b></span>
                                    </h4>
                                </div>
                                <div class="part-cart">
                                    <a href="#">Make Deposit</a>
                                </div>
                            </div>
                        </div>

                        <div class="col text-center">
                            <div class="single-item">
                                <div class="single-image">
                                    <img src="img/deposit-bg.jpg" alt="#">
                                </div>
                                <div class="icon-box">
                                    <img src="img/deposit2.svg" alt="#">
                                </div>
                                <div class="part-prize">
                                    <span class="percentage"><b>7</b>%</span>
                                    <h3>Daily For Even</h3>
                                    <h4 class="min-max">
                                        <span class="left">Min. : <b>$250</b></span>
                                        <span class="right">Max.: <b>$9999</b></span>
                                    </h4>
                                </div>
                                <div class="part-cart">
                                    <a href="#">Make Deposit</a>
                                </div>
                            </div>
                        </div>

                        <div class="col text-center">
                            <div class="single-item">
                                <div class="single-image">
                                    <img src="img/deposit-bg.jpg" alt="#">
                                </div>
                                <div class="icon-box">
                                    <img src="img/deposit3.svg" alt="#">
                                </div>
                                <div class="part-prize">
                                    <span class="percentage"><b>8</b>%</span>
                                    <h3>Daily For Even</h3>
                                    <h4 class="min-max">
                                        <span class="left">Min. : <b>$1000</b></span>
                                        <span class="right">Max.: <b>$4999</b></span>
                                    </h4>
                                </div>
                                <div class="part-cart">
                                    <a href="#">Make Deposit</a>
                                </div>
                            </div>
                        </div>

                        <div class="col text-center">
                            <div class="single-item">
                                <div class="single-image">
                                    <img src="img/deposit-bg.jpg" alt="#">
                                </div>
                                <div class="icon-box">
                                    <img src="img/deposit4.svg" alt="#">
                                </div>
                                <div class="part-prize">
                                    <span class="percentage"><b>8</b>%</span>
                                    <h3>Daily For Even</h3>
                                    <h4 class="min-max">
                                        <span class="left">Min. : <b>$5k</b></span>
                                        <span class="right">Max.: <b>$10k</b></span>
                                    </h4>
                                </div>
                                <div class="part-cart">
                                    <a href="#">Make Deposit</a>
                                </div>
                            </div>
                        </div>

                        <div class="col text-center">
                            <div class="single-item">
                                <div class="single-image">
                                    <img src="img/deposit-bg.jpg" alt="#">
                                </div>
                                <div class="icon-box">
                                    <img src="img/deposit1.svg" alt="#">
                                </div>
                                <div class="part-prize">
                                    <span class="percentage"><b>6</b>%</span>
                                    <h3>Daily For Even</h3>
                                    <h4 class="min-max">
                                        <span class="left">Min. : <b>$10</b></span>
                                        <span class="right">Max.: <b>$249</b></span>
                                    </h4>
                                </div>
                                <div class="part-cart">
                                    <a href="#">Make Deposit</a>
                                </div>
                            </div>
                        </div>

                        <div class="col text-center">
                            <div class="single-item">
                                <div class="single-image">
                                    <img src="img/deposit-bg.jpg" alt="#">
                                </div>
                                <div class="icon-box">
                                    <img src="img/deposit2.svg" alt="#">
                                </div>
                                <div class="part-prize">
                                    <span class="percentage"><b>7</b>%</span>
                                    <h3>Daily For Even</h3>
                                    <h4 class="min-max">
                                        <span class="left">Min. : <b>$250</b></span>
                                        <span class="right">Max.: <b>$9999</b></span>
                                    </h4>
                                </div>
                                <div class="part-cart">
                                    <a href="#">Make Deposit</a>
                                </div>
                            </div>
                        </div>

                        <div class="col text-center">
                            <div class="single-item">
                                <div class="single-image">
                                    <img src="img/deposit-bg.jpg" alt="#">
                                </div>
                                <div class="icon-box">
                                    <img src="img/deposit3.svg" alt="#">
                                </div>
                                <div class="part-prize">
                                    <span class="percentage"><b>8</b>%</span>
                                    <h3>Daily For Even</h3>
                                    <h4 class="min-max">
                                        <span class="left">Min. : <b>$1000</b></span>
                                        <span class="right">Max.: <b>$4999</b></span>
                                    </h4>
                                </div>
                                <div class="part-cart">
                                    <a href="#">Make Deposit</a>
                                </div>
                            </div>
                        </div>

                        <div class="col text-center">
                            <div class="single-item">
                                <div class="single-image">
                                    <img src="img/deposit-bg.jpg" alt="#">
                                </div>
                                <div class="icon-box">
                                    <img src="img/deposit4.svg" alt="#">
                                </div>
                                <div class="part-prize">
                                    <span class="percentage"><b>8</b>%</span>
                                    <h3>Daily For Even</h3>
                                    <h4 class="min-max">
                                        <span class="left">Min. : <b>$5k</b></span>
                                        <span class="right">Max.: <b>$10k</b></span>
                                    </h4>
                                </div>
                                <div class="part-cart">
                                    <a href="#">Make Deposit</a>
                                </div>
                            </div>
                        </div>

                        <div class="col text-center">
                            <div class="single-item">
                                <div class="single-image">
                                    <img src="img/deposit-bg.jpg" alt="#">
                                </div>
                                <div class="icon-box">
                                    <img src="img/deposit1.svg" alt="#">
                                </div>
                                <div class="part-prize">
                                    <span class="percentage"><b>6</b>%</span>
                                    <h3>Daily For Even</h3>
                                    <h4 class="min-max">
                                        <span class="left">Min. : <b>$10</b></span>
                                        <span class="right">Max.: <b>$249</b></span>
                                    </h4>
                                </div>
                                <div class="part-cart">
                                    <a href="#">Make Deposit</a>
                                </div>
                            </div>
                        </div>

                        <div class="col text-center">
                            <div class="single-item">
                                <div class="single-image">
                                    <img src="img/deposit-bg.jpg" alt="#">
                                </div>
                                <div class="icon-box">
                                    <img src="img/deposit2.svg" alt="#">
                                </div>
                                <div class="part-prize">
                                    <span class="percentage"><b>7</b>%</span>
                                    <h3>Daily For Even</h3>
                                    <h4 class="min-max">
                                        <span class="left">Min. : <b>$250</b></span>
                                        <span class="right">Max.: <b>$9999</b></span>
                                    </h4>
                                </div>
                                <div class="part-cart">
                                    <a href="#">Make Deposit</a>
                                </div>
                            </div>
                        </div>

                        <div class="col text-center">
                            <div class="single-item">
                                <div class="single-image">
                                    <img src="img/deposit-bg.jpg" alt="#">
                                </div>
                                <div class="icon-box">
                                    <img src="img/deposit3.svg" alt="#">
                                </div>
                                <div class="part-prize">
                                    <span class="percentage"><b>8</b>%</span>
                                    <h3>Daily For Even</h3>
                                    <h4 class="min-max">
                                        <span class="left">Min. : <b>$1000</b></span>
                                        <span class="right">Max.: <b>$4999</b></span>
                                    </h4>
                                </div>
                                <div class="part-cart">
                                    <a href="#">Make Deposit</a>
                                </div>
                            </div>
                        </div>

                        <div class="col text-center">
                            <div class="single-item">
                                <div class="single-image">
                                    <img src="img/deposit-bg.jpg" alt="#">
                                </div>
                                <div class="icon-box">
                                    <img src="img/deposit4.svg" alt="#">
                                </div>
                                <div class="part-prize">
                                    <span class="percentage"><b>8</b>%</span>
                                    <h3>Daily For Even</h3>
                                    <h4 class="min-max">
                                        <span class="left">Min. : <b>$5k</b></span>
                                        <span class="right">Max.: <b>$10k</b></span>
                                    </h4>
                                </div>
                                <div class="part-cart">
                                    <a href="#">Make Deposit</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- investment section end -->

<!-- calculator bottom begin -->
<section class="calculate-aria-second">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10">
                <div class="calculate-left">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <div class="icon-box">
                                <i class="ren-calculator"></i>
                            </div>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10">
                            <div class="form-group">
                                <h2 class="amount">Enter Investment Amount</h2>
                                <div class="input-dropdown">
                                    <input type="text" name="text" placeholder="$200" class="main-form calculator-area-invest">
                                    <div class="form-dropdown">
                                        <select class="form-btn-dropdown calculator-area-profit">
                                            <option value="1">1% Daily For Ever</option>
                                            <option value="2">2% Daily For Ever</option>
                                            <option value="3">3% Daily For Ever</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-10 text-center">
                <div class="calculate-right">
                    <div class="row justify-content-end">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="text-box">
                                <span class="counter calculator-result-area-daily">212</span>
                                <h4>Daily Profit</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="text-box">
                                <span class="counter calculator-result-area-weekly">1484</span>
                                <h4>Weekly Profit</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="text-box">
                                <span class="counter calculator-result-area-monthly">6360</span>
                                <h4>Monthly Profit</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- calculator bottom end -->

<!-- affiliate section begin -->
<section class="affiliate-section" id="affiliate-section">
    <div class="overlay">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="affiliate-text">
                        <h5 class="affiliate-title">What You’ll Get As</h5>
                        <h2 class="affiliate-subtitle">An Affiliate Partner</h2>
                        <p class="affiliate-title-describe">We give you the opportunity to earn money by recommending our website to others. You can start
                            earning money even if you do not invest. Promote our website wherever you are. Create posts on online
                            forums and social networks. Remember to use the referral link. Build your structure and receive
                            a commission from three levels whenever someone makes a deposit.
                            Earnings from the affiliate program are immediately available in the account balance. You can
                            invest or withdraw funds at any time.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="part-cart">
                        <a href="#">I want to Join</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- affiliate section end -->

<!-- referral section begin -->
<section class="referral-section">
    <div class="container">
        <div class="row referral-section-item">
            <div class="col-lg-2 col-md-2 col-sm-2">
                <div class="referral-img">
                    <img src="img/referral-img.png" alt="#">
                </div>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-10">
                <div class="referral-section-right">
                    <div class="referral-text">
                        <h5 class="referral-title">Referral commission and</h5>
                        <h2 class="referral-subtitle">Membership Level</h2>
                        <p class="referral-title-describe">Refferal Commmission and Membership Levels are of 3 levels as below</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-11 col-sm-12">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="referral-single-item">
                                        <div class="icon-box">
                                            <i class="ren-people1"></i>
                                        </div>
                                        <div class="text-box">
                                            <span class="percentage">8%</span>
                                            <h4 class="item-text">Direct Referral</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="referral-single-item">
                                        <div class="icon-box">
                                            <i class="ren-people2 bg-second"></i>
                                        </div>
                                        <div class="text-box">
                                            <span class="percentage">4%</span>
                                            <h4 class="item-text">Second Line</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="referral-single-item">
                                        <div class="icon-box">
                                            <i class="ren-people3 bg-third"></i>
                                        </div>
                                        <div class="text-box">
                                            <span class="percentage">2%</span>
                                            <h4 class="item-text">Third Line</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- referral section end -->

<!-- deposit section begin -->
<section class="deposit-section">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="deposit-text">
                    <h5 class="deposit-title">Convenient Money</h5>
                    <h2 class="deposit-subtitle">Deposit & Withdrawal</h2>
                    <p class="deposit-title-describe">Depositing or withdrawing money is simple.We support several payment methods, which depend on what country your payment account is located in.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-5 col-sm-12 reunir-content-center">
                <div class="row d-flex justify-content-start">
                    <div class="col-lg-8">
                        <div class="payment-methods-outer">
                            <div class="payment-methods">
                                <div class="icon-gallery">
                                    <div class="icon-box">
                                        <div class="icon-img">
                                            <img src="img/card-icon.png" alt="#">
                                        </div>
                                        <h5 class="icon-title">Credit Card</h5>
                                    </div>
                                    <div class="icon-box">
                                        <div class="icon-img">
                                            <img src="img/paypal.png" alt="#">
                                        </div>
                                        <h5 class="icon-title">Paypal</h5>
                                    </div>
                                    <div class="icon-box">
                                        <div class="icon-img">
                                            <img src="img/bitcoin.png" alt="#">
                                        </div>
                                        <h5 class="icon-title">Bitcoin</h5>
                                    </div>
                                </div>
                                <div class="icon-gallery">
                                    <div class="icon-box">
                                        <div class="icon-img">
                                            <img src="img/litecoin.png" alt="#">
                                        </div>
                                        <h5 class="icon-title">Litecoin</h5>
                                    </div>
                                    <div class="icon-box">
                                        <div class="icon-img">
                                            <img src="img/ethereum.png" alt="#">
                                        </div>
                                        <h5 class="icon-title">Ethereum</h5>
                                    </div>
                                    <div class="icon-box">
                                        <div class="icon-img">
                                            <img src="img/ripple.png" alt="#">
                                        </div>
                                        <h5 class="icon-title">Ripple</h5>
                                    </div>
                                </div>
                                <div class="link-box">
                                    <a href="#">View All Option</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-7 col-sm-12 mt-4">
                <div class="deposit-section-right">
                    <div class="icon-box-outer">
                        <div class="icon-box">
                            <i class="ren-withdraw2"></i>
                        </div>
                    </div>
                    <div class="icon-text">
                        <h2 class="icon-title">No Limit</h2>
                        <p class="icon-title-describe">Unlimited maximum withdrawal amount</p>
                    </div>
                </div>
                <div class="deposit-section-right">
                    <div class="icon-box-outer">
                        <div class="icon-box icon-box-orange">
                            <i class="ren-deposit5"></i>
                        </div>
                    </div>
                    <div class="icon-text">
                        <h2 class="icon-title">Withdrawal in 24 /7</h2>
                        <p class="icon-title-describe">Deposit – instantaneous</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- deposit section end -->

<!-- transaction section begin -->
<section class="transaction-section">
    <div class="right-img">
        <img class="right-ellipse1" src="img/transaction-bg-ellipse-01.png" alt="#">
        <img class="right-shape1" src="img/transaction-bg-shape-01.png" alt="#">
        <img class="right-shape2" src="img/transaction-bg-shape-01.png" alt="#">
        <img class="right-ellipse2" src="img/transaction-bg-ellipse-02.png" alt="#">
    </div>
    <div class="left-img">
        <img class="left-ellipse1" src="img/transaction-bg-ellipse-03.png" alt="#">
        <img class="left-ellipse2" src="img/transaction-bg-ellipse-03.png" alt="#">
        <img class="left-ellipse3" src="img/transaction-bg-ellipse-03.png" alt="#">
        <img class="left-shape1" src="img/transaction-bg-shape-01.png" alt="#">
        <img class="left-shape2" src="img/transaction-bg-shape-01.png" alt="#">
        <img class="left-shape3" src="img/transaction-bg-shape-01.png" alt="#">
        <img class="left-shape4" src="img/transaction-bg-shape-01.png" alt="#">
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <div class="transaction-text text-center">
                    <h5 class="transaction-title">User Statistics</h5>
                    <h2 class="transaction-subtitle">Latest Transaction</h2>
                    <p class="transaction-title-describe">Our goal is to simplify investing so that anyone can be an investor.Withthis in mind, we hand-pick the investments we offer on our platform.</p>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-7 col-md-11">

                <ul class="nav nav-pills mb-3 justify-content-center transaction-bnt-outline" id="transaction-pills-tab" role="tablist">
                    <li class="nav-item transaction-nav-item">
                        <a class="nav-link transaction-nav-link active" id="transaction-pills-deposits-tab" data-toggle="pill" href="#pills-deposits" role="tab" aria-controls="pills-deposits" aria-selected="true">
                            <span class="d-flex align-items-center"><i class="ren-deposits d-flex align-items-center"></i>LAST<br>DEPOSITS</span>
                        </a>
                    </li>
                    <li class="nav-item transaction-nav-item">
                        <a class="nav-link transaction-nav-link" id="transaction-pills-withdrawal-tab" data-toggle="pill" href="#pills-withdrawals" role="tab" aria-controls="pills-withdrawal" aria-selected="false">
                            <span class="d-flex align-items-center"><i class="ren-investo d-flex align-items-center"></i>TOP<br>WITHDRAWALS</span>
                        </a>
                    </li>
                    <li class="nav-item transaction-nav-item">
                        <a class="nav-link transaction-nav-link" id="transaction-pills-investing-tab" data-toggle="pill" href="#pills-invest" role="tab" aria-controls="pills-invest" aria-selected="false">
                            <span class="d-flex align-items-center"><i class="ren-people3 d-flex align-items-center"></i>LAST<br>INVESTORS</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="tab-content transaction-tab-content" id="transaction-pills-tabContent">
                    <div class="tab-pane fade show active transaction-tab-pane" id="pills-deposits" role="tabpanel" aria-labelledby="transaction-pills-deposits-tab">
                        <table class="table table-responsive transaction-table">
                            <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Daily Dividend</th>
                                <th scope="col">Amounts</th>
                                <th scope="col">Deposit By</th>
                                <th scope="col">Currency</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row" class="d-flex">
                                    <div class="user-img">
                                        <img src="img/table-img1.png" alt="#">
                                    </div>
                                    <span>Jim Adams</span>
                                </th>
                                <td>$10.50</td>
                                <td>$0.05</td>
                                <td>$718</td>
                                <td>21 DAYS</td>
                                <td><i class="ren-bitcoins"></i></td>
                            </tr>
                            <tr>
                                <th scope="row" class="d-flex">
                                    <div class="user-img">
                                        <img src="img/table-img2.png" alt="#">
                                    </div>
                                    <span>Willie Barton</span>
                                </th>
                                <td>$10.50</td>
                                <td>$0.05</td>
                                <td>$718</td>
                                <td>21 DAYS</td>
                                <td><i class="ren-ethereum1"></i></td>
                            </tr>
                            <tr>
                                <th scope="row" class="d-flex">
                                    <div class="user-img">
                                        <img src="img/table-img3.png" alt="#">
                                    </div>
                                    <span>Kim Mccoy</span>
                                </th>
                                <td>$10.50</td>
                                <td>$0.05</td>
                                <td>$718</td>
                                <td>21 DAYS</td>
                                <td><i class="ren-bitcoins"></i></td>
                            </tr>
                            <tr>
                                <th scope="row" class="d-flex">
                                    <div class="user-img">
                                        <img src="img/table-img4.png" alt="#">
                                    </div>
                                    <span>Sheryl Tran</span>
                                </th>
                                <td>$10.50</td>
                                <td>$0.05</td>
                                <td>$718</td>
                                <td>21 DAYS</td>
                                <td><i class="ren-ripple"></i></td>
                            </tr>
                            <tr>
                                <th scope="row" class="d-flex">
                                    <div class="user-img">
                                        <img src="img/table-img5.png" alt="#">
                                    </div>
                                    <span>Toby Davis</span>
                                </th>
                                <td>$10.50</td>
                                <td>$0.05</td>
                                <td>$718</td>
                                <td>21 DAYS</td>
                                <td><i class="ren-dollar"></i></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="tab-pane fade transaction-tab-pane" id="pills-withdrawals" role="tabpanel" aria-labelledby="transaction-pills-withdrawal-tab">
                        <table class="table table-responsive transaction-table">
                            <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Daily Dividend</th>
                                <th scope="col">Amounts</th>
                                <th scope="col">Deposit By</th>
                                <th scope="col">Currency</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row" class="d-flex">
                                    <div class="user-img">
                                        <img src="img/table-img1.png" alt="#">
                                    </div>
                                    <span>Jim Adams</span>
                                </th>
                                <td>$10.50</td>
                                <td>$0.05</td>
                                <td>$718</td>
                                <td>21 DAYS</td>
                                <td><i class="ren-bitcoins"></i></td>
                            </tr>
                            <tr>
                                <th scope="row" class="d-flex">
                                    <div class="user-img">
                                        <img src="img/table-img2.png" alt="#">
                                    </div>
                                    <span>Willie Barton</span>
                                </th>
                                <td>$10.50</td>
                                <td>$0.05</td>
                                <td>$718</td>
                                <td>21 DAYS</td>
                                <td><i class="ren-ethereum1"></i></td>
                            </tr>
                            <tr>
                                <th scope="row" class="d-flex">
                                    <div class="user-img">
                                        <img src="img/table-img3.png" alt="#">
                                    </div>
                                    <span>Kim Mccoy</span>
                                </th>
                                <td>$10.50</td>
                                <td>$0.05</td>
                                <td>$718</td>
                                <td>21 DAYS</td>
                                <td><i class="ren-bitcoins"></i></td>
                            </tr>
                            <tr>
                                <th scope="row" class="d-flex">
                                    <div class="user-img">
                                        <img src="img/table-img4.png" alt="#">
                                    </div>
                                    <span>Sheryl Tran</span>
                                </th>
                                <td>$10.50</td>
                                <td>$0.05</td>
                                <td>$718</td>
                                <td>21 DAYS</td>
                                <td><i class="ren-ripple"></i></td>
                            </tr>
                            <tr>
                                <th scope="row" class="d-flex">
                                    <div class="user-img">
                                        <img src="img/table-img5.png" alt="#">
                                    </div>
                                    <span>Toby Davis</span>
                                </th>
                                <td>$10.50</td>
                                <td>$0.05</td>
                                <td>$718</td>
                                <td>21 DAYS</td>
                                <td><i class="ren-dollar"></i></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="tab-pane fade transaction-tab-pane" id="pills-invest" role="tabpanel" aria-labelledby="transaction-pills-investing-tab">
                        <table class="table table-responsive transaction-table">
                            <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Daily Dividend</th>
                                <th scope="col">Amounts</th>
                                <th scope="col">Deposit By</th>
                                <th scope="col">Currency</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row" class="d-flex">
                                    <div class="user-img">
                                        <img src="img/table-img1.png" alt="#">
                                    </div>
                                    <span>Jim Adams</span>
                                </th>
                                <td>$10.50</td>
                                <td>$0.05</td>
                                <td>$718</td>
                                <td>21 DAYS</td>
                                <td><i class="ren-bitcoins"></i></td>
                            </tr>
                            <tr>
                                <th scope="row" class="d-flex">
                                    <div class="user-img">
                                        <img src="img/table-img2.png" alt="#">
                                    </div>
                                    <span>Willie Barton</span>
                                </th>
                                <td>$10.50</td>
                                <td>$0.05</td>
                                <td>$718</td>
                                <td>21 DAYS</td>
                                <td><i class="ren-ethereum1"></i></td>
                            </tr>
                            <tr>
                                <th scope="row" class="d-flex">
                                    <div class="user-img">
                                        <img src="img/table-img3.png" alt="#">
                                    </div>
                                    <span>Kim Mccoy</span>
                                </th>
                                <td>$10.50</td>
                                <td>$0.05</td>
                                <td>$718</td>
                                <td>21 DAYS</td>
                                <td><i class="ren-bitcoins"></i></td>
                            </tr>
                            <tr>
                                <th scope="row" class="d-flex">
                                    <div class="user-img">
                                        <img src="img/table-img4.png" alt="#">
                                    </div>
                                    <span>Sheryl Tran</span>
                                </th>
                                <td>$10.50</td>
                                <td>$0.05</td>
                                <td>$718</td>
                                <td>21 DAYS</td>
                                <td><i class="ren-ripple"></i></td>
                            </tr>
                            <tr>
                                <th scope="row" class="d-flex">
                                    <div class="user-img">
                                        <img src="img/table-img5.png" alt="#">
                                    </div>
                                    <span>Toby Davis</span>
                                </th>
                                <td>$10.50</td>
                                <td>$0.05</td>
                                <td>$718</td>
                                <td>21 DAYS</td>
                                <td><i class="ren-dollar"></i></td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="part-cart">
                    <a href="#">Browse More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- transaction section end -->

<!-- download section begin -->
<section class="download-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-7">
                <div class="download-text">
                    <h5 class="download-title">Learn, Plan, Invest in our app</h5>
                    <h2 class="download-subtitle">Our Smart App</h2>
                    <p class="download-title-describe">Our application is a set of tools designed to facilitate making money.</p>
                </div>
                <div class="app-features">
                    <div class="single-features">
                        <div class="icon-box-outer">
                            <div class="icon-box">
                                <i class="ren-calculator1"></i>
                            </div>
                        </div>
                        <h3 class="single-features-text">Calculators to plan your investments</h3>
                    </div>
                    <div class="single-features">
                        <div class="icon-box-outer">
                            <div class="icon-box">
                                <i class="ren-paperless"></i>
                            </div>
                        </div>
                        <h3 class="single-features-text">100% paperless process to invest in the best funds</h3>
                    </div>
                    <div class="single-features">
                        <div class="icon-box-outer">
                            <div class="icon-box">
                                <i class="ren-dashboard"></i>
                            </div>
                        </div>
                        <h3 class="single-features-text">Dashboard to track your progress</h3>
                    </div>
                </div>
                <div class="download-buttons">
                    <div class="group-btn">
                        <a href="#" class="btn"><i class="ren-google-play"></i>GET IT ON <br><b>GOOGLE PLAY</b></a>
                        <a href="#" class="btn">DOWNLOAD ON THE <br><b>APP STORE</b><i class="ren-apple-store"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5">
                <div class="right-area">
                    <img class="ellipse-01" src="img/download-bg-ellipse-01.png" alt="#">
                    <img class="ellipse-02" src="img/download-bg-ellipse-02.png" alt="#">
                    <img class="ellipse-03" src="img/download-bg-ellipse-03.png" alt="#">
                    <img class="ellipse-04" src="img/download-bg-ellipse-04.png" alt="#">
                    <img class="smart-phone" src="img/download-smart-phone.png" alt="#">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- download section end -->
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
                        <a href="#">Signup Now<i class="ren-arrowright"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- signup section end -->

<!-- contact-us section begin -->
<section class="contact-us-section" id="contact-us-section">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="contact-us-text">
                    <h5 class="contact-us-title">Contact Us</h5>
                    <h2 class="contact-us-subtitle">Get in Touch</h2>
                    <p class="contact-us-title-describe">Please feel free to contact us through our support center. Simply choose the appropriate support options to send us your questions, concerns and/or feedback.Our customer service team is ready to overcome any issues that might occur.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-img">
                    <img src="img/contact-us.jpg" alt="#">
                </div>
            </div>
            <div class="col-lg-5">
                <div class="contact-form">
                    <form id="contactForm" method="post" class="contact-form-aqua">
                        <h2 class="contact-head">Send Us a Massage</h2>
                        <input type="text" name="name" required="" placeholder="Name *" class="contact-frm active">
                        <input type="email" name="email" required="" placeholder="Email *" class="contact-frm">
                        <textarea name="message" id="message" placeholder="Message *" class="contact-msg"></textarea>
                        <input id="form-submit" type="submit" value="SUBMIT NOW" class="contact-btn">
                        <br>
                        <br>
                        <span class="msgSubmit"></span>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-us section end -->

<!-- footer section begin -->
<footer class="footer-section">
    <div class="overlay">

        <div class="waveWrapper waveAnimation">
            <div class="waveWrapperInner bgTop">
                <div class="wave waveTop"></div>
            </div>
            <div class="waveWrapperInner bgMiddle">
                <div class="wave waveMiddle"></div>
            </div>
            <div class="waveWrapperInner bgBottom">
                <div class="wave waveBottom"></div>
            </div>
        </div>

        <div class="footer-content">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-12">
                        <div class="social-icon">
                            <ul class="icon-area">
                                <li class="social-nav">
                                    <a href="#"><i class="icofont-facebook"></i></a>
                                </li>
                                <li class="social-nav">
                                    <a href="#"><i class="icofont-twitter"></i></a>
                                </li>
                                <li class="social-nav">
                                    <a href="#"><i class="icofont-pinterest"></i></a>
                                </li>
                                <li class="social-nav">
                                    <a href="#"><i class="icofont-rss"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-text">
                        <h5 class="footer-title">Subscribe to {{config('app.name')}}</h5>
                            <h2 class="footer-subtitle">To Get Exclusive benefits</h2>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-7">
                        <div class="subscribe">
                            <input type="email" name="email" placeholder="Your Email Address" class="input-subscribe">
                            <button class="subscribe-btn">Subscribe</button>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-5 col-md-12 d-flex justify-content-start reunir-content-center">
                            <div class="footer-bottom-left">
                                <p>Copyright © 2019.All Rights Reserved By <a href="#">{{config('app.name')}}</a></p>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12 d-flex justify-content-end reunir-content-center">
                            <div class="footer-bottom-right">
                                <ul>
                                    <li>
                                        <a href="#">Privacy & Policy</a>
                                    </li>
                                    <li>
                                        <a href="#">Term Of Service</a>
                                    </li>
                                    <li>
                                        <a href="#">Affilate</a>
                                    </li>
                                    <li>
                                        <a href="#">About Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer section end -->
