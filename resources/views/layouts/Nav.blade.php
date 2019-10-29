<header class="header-section" id="header-section" style="background-color:#1b1829">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-end reunir-content-center">
                        <div class="header-left">
                            <ul>
                                <li class="header-left-list">
                                    <p class="header-left-text">
                                        <span class="header-left-icon">
                                        </span><a href="javascript:void()" style="color:white;text-decoration:none" class="inactive">Date: <?php echo date('Y-m-D');?></a>
                                    </p>
                                </li>
                                <li class="header-left-list">
                                    <p class="header-left-text">
                                        <span class="header-left-icon">
                                            <i class="icofont-headphone-alt"></i>
                                        </span><a href="javascript:void()" style="color:white;text-decoration:none" class="inactive">0704922042</a>
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
                                            <a href="/login" style="color:white;">Login</a>
                                    </span>
                                </p>
                            </li>
                            <li class="header-left-list" class="contact-form">
                                    <span class="header-left-icon" style="padding-top:-20px">
                                        {{Form::open(['action'=>'SearchController@store','method'=>'POST','class'=>'form-inline contact-form-aqua','id'=>'contactForm'])}}
                                            {{Form::text('search','',['class' => 'form-control contact-frm active','placeholder'=> 'Enter Your Query Here'])}}&nbsp;&nbsp;&nbsp;
                                            {{Form::submit('Search',['class' => 'btn btn-success btn-md'])}}
                                        {{Form::close()}}
                                    </span>
                            </li>
                            @guest
                            @else
                            <li class="header-left-list">
                                    <span class="header-left-icon" style="padding-top:-20px">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                    {{ Auth::user()->name }} <span class="caret"></span>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                                                        document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>
                                                    <a class="dropdown-item" href="/Account">My Account
                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                </div>
                                    </span>
                            </li>
                            @endguest
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- nav top begin -->
        <nav id="navbar" class="navbar navbar-expand-lg  reunir-navbar" style="background-color:#1b1829">
            <div class="container">

                <div class="logo-section">
                <a class="logo-title navbar-brand" href="/" title="Home">{{config('app.name')}}</a>
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
                                <a class="nav-link" href="/About" title="About Us">ABOUT</a>
                            </li>
                        <li class="nav-item">
                                <a class="nav-link" href="/Contact" title="Talk To Us">CONTACTS</a>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- nav top end -->
    </header>
