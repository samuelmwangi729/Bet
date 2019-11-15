@extends('layouts.app')
<!--Start Preloader-->
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
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
      <img class="d-block w-100" src="{{asset('images/index.jpg')}}" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <h1 style="color:red;margin-top:-100px">Soccer</h1>
      <p>Share the Thrill Of Betting with {{config('app.name')}}</p>
      </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{asset('images/football.jpg')}}" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
            <h1 style="color:red;margin-top:-50px">American Football</h1>
          <p>Share the Thrill Of Betting with {{config('app.name')}}</p>
          </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{asset('images/volleyball.jpg')}}" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
            <h1 style="color:red;margin-top:-50px">VolleyBall</h1>
          <p>Share the Thrill Of Betting with {{config('app.name')}}</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{asset('images/tennis.jpg')}}" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
            <h1 style="color:red;margin-top:-50px">Tennis</h1>
          <p>Share the Thrill Of Betting with {{config('app.name')}}</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{asset('images/run.jpg')}}" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
            <h1 style="color:red;margin-top:-50px">Athletics</h1>
          <p>Share the Thrill Of Betting with {{config('app.name')}}</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
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