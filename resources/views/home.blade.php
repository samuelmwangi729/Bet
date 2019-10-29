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
