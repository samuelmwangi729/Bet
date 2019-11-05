<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" style="background-color:#1b1829 !important">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}" style="color:white;font-weight:bold;font-family:Arial, Helvetica, sans-serif">
                {{ config('app.name', 'Betstar.pro') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon" style="background-color:white"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                    @else
                        <li class="nav-item mt-2">
                            <a class="nav-link btn btn-success" style="color:white;font-weight:bold;font-family:Arial, Helvetica, sans-serif" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                               Deposit
                            </a>
                        </li>&nbsp;&nbsp;&nbsp;
                        <li class="nav-item mt-2">
                            <a class="nav-link btn btn-success" style="color:white;font-weight:bold;font-family:Arial, Helvetica, sans-serif" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Cash: $45.00
                            </a>
                        </li>&nbsp;&nbsp;&nbsp;
                        <li class="nav-item mt-2">
                            <a class="nav-link btn btn-success" style="color:white;font-weight:bold;font-family:Arial, Helvetica, sans-serif" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Free Bet: $0.00
                            </a>
                        </li>&nbsp;&nbsp;&nbsp;
                        <li class="nav-item mt-2">
                            <a class="nav-link btn btn-warning" style="color:white;font-weight:bold;font-family:Arial, Helvetica, sans-serif" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                            </a>
                        </li>&nbsp;&nbsp;&nbsp;
                        <li class="nav-item mt-2">
                            <a class="nav-link btn btn-danger" style="color:white;font-weight:bold;font-family:Arial, Helvetica, sans-serif" href="{{ route('logout') }}"onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                 @csrf
                             </form>
                        </li>&nbsp;&nbsp;&nbsp;
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
<!-- partial -->
