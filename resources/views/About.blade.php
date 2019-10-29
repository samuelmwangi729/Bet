@extends('layouts.baseLayout')
<section class="about-section navigation" id="about-section">
        <div class="container" style="padding-top:90px">
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
