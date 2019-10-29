@extends('layouts.Account')
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
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
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar" style="margin-top:-60px;background-color:#1b1829">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="/">
              <i class="mdi mdi-home menu-icon" style="color:white;font-weight:bold;"></i>
              <span class="menu-title" style="color:white;font-weight:bold;">Home</span>
            </a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-circle-outline menu-icon"></i>
              <span class="menu-title">UI Elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
              </ul>
            </div>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link" href="pages/forms/basic_elements.html">
              <i class="mdi mdi-view-headline menu-icon" style="color:white;font-weight:bold;" ></i>
            <span class="menu-title" style="color:white;font-weight:bold;">{{config('app.name')}} Affiliate</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/charts/chartjs.html">
              <i class="mdi mdi-wallet menu-icon" style="color:white;font-weight:bold;"></i>
              <span class="menu-title" style="color:white;font-weight:bold;">Cash Withdrawals</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
              <i class="mdi mdi-chart-gantt menu-icon" style="color:white;font-weight:bold;"></i>
              <span class="menu-title" style="color:white;font-weight:bold;">All Bets</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="mdi mdi-settings menu-icon" style="color:white;font-weight:bold;"></i>
              <span class="menu-title" style="color:white;font-weight:bold;">Settings</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu" style="none">
                <li class="nav-item"> <a class="nav-link" style="color:white;font-weight:bold;" href="pages/samples/login.html"> Transactions History </a></li>
                <li class="nav-item"> <a class="nav-link" style="color:white;font-weight:bold;" href="pages/samples/login-2.html">Update Details </a></li>
                <li class="nav-item"> <a class="nav-link"  style="color:white;font-weight:bold;"href="pages/samples/register.html"> Manage Password </a></li>
                <li class="nav-item"> <a class="nav-link" style="color:white;font-weight:bold;" href="pages/samples/register-2.html">Messages </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="documentation/documentation.html">
              <i class="mdi mdi-close menu-icon" style="color:white;font-weight:bold;"></i>
              <span class="menu-title" style="color:white;font-weight:bold;">Delete Account</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel" style="margin-top:-60px">
        <div class="content-wrapper">
          <div class="row">
                <h2>Welcome back, {{ Auth::user()->name }}</h2>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body dashboard-tabs p-0">
                  <ul class="nav nav-tabs px-4" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Account Overview</a>
                    </li>
                  </ul>
                  <div class="tab-content py-0 px-0">
                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                      <div class="d-flex flex-wrap justify-content-xl-between">
                        <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-calendar-heart icon-lg mr-3 text-primary"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Date Created  <h5 class="mb-0 d-inline-block">26 Jul 2018</h5></small>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-currency-usd mr-3 icon-lg text-danger"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Earned</small>
                            <h5 class="mr-2 mb-0">$577</h5>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-credit-card icon-lg text-success"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Total Paid</small>
                            <h5 class="mr-2 mb-0">$50</h5>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-cash mr-3 icon-lg text-warning"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Vouchers </small>
                            <h5 class="mr-2 mb-0">$10</h5>
                          </div>
                        </div>
                        <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-flag mr-3 icon-lg text-danger"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Running Bets<sup><span class="badge badge-success" style="border-radius:20px">2</span></sup></small>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Cash Statistics</p>
                  <p class="mb-4">Below Is An Analysis Of How You have Topped Up Your Account</p>
                  <div id="cash-deposits-chart-legend" class="d-flex justify-content-center pt-3"></div>
                  <canvas id="cash-deposits-chart"></canvas>
                </div>
              </div>
            </div>
            <div class="col-md-5 grid-margin stretch-card offset-md-4">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Total Amount</p>
                  <h1>$ 28835</h1>
                  <h4>Gross Amount over the years</h4>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Recent Bets</p>
                  <div class="table-responsive">
                    <table id="recent-purchases-listing" class="table">
                      <thead>
                        <tr>
                            <th>BetId</th>
                            <th>Status report</th>
                            <th>Bet Amount</th>
                            <th>Date</th>
                            <th>Returns</th>
                            <th>Outcome</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td>#78458</td>
                            <td><span class="badge badge-success" style="border-radius:20px">Completed</span></td>
                            <td>$790</td>
                            <td>06 Jan 2018</td>
                            <td>$2274253</td>
                            <td><span class="badge badge-danger" style="border-radius:20px">Lost</span></td>
                        </tr>
                        <tr>
                            <td>#7hs86</td>
                            <td><span class="badge badge-danger" style="border-radius:20px">Pending</span></td>
                            <td>$23230</td>
                            <td>18 Jul 2018</td>
                            <td>$83127</td>
                            <td><span class="badge badge-danger" style="border-radius:20px">Pending</span></td>
                        </tr>
                        <tr>
                            <td>#70937</td>
                            <td><span class="badge badge-success" style="border-radius:20px">Completed</span></td>
                            <td>$939</td>
                            <td>16 Jul 2018</td>
                            <td>$29177</td>
                            <td><span class="badge badge-success" style="border-radius:20px">Won</span></td>
                        </tr>
                        <tr>
                            <td>#94uhid9</td>
                            <td><span class="badge badge-danger" style="border-radius:20px">Pending</span></td>
                            <td>$30</td>
                            <td>30 Apr 2018</td>
                            <td>$44617</td>
                            <td><span class="badge badge-warning" style="border-radius:20px">PostPoned</span></td>
                        </tr>
                        <tr>
                            <td>#78sdb84</td>
                            <td><span class="badge badge-danger" style="border-radius:20px">Pending</span></td>
                            <td>$571</td>
                            <td>25 Jun 2018</td>
                            <td>$78952</td>
                            <td><span class="badge badge-danger" style="border-radius:20px">Pending</span></td>
                        </tr>
                        <tr>
                            <td>#ms9897893</td>
                            <td><span class="badge badge-success" style="border-radius:20px">Completed</span></td>
                            <td>$36</td>
                            <td>05 Nov 2018</td>
                            <td>$36422</td>
                            <td><span class="badge badge-success" style="border-radius:20px">Won</span></td>
                        </tr>
                        <tr>
                            <td>#8978sd4</td>
                            <td><span class="badge badge-danger" style="border-radius:20px">Pending</span></td>
                            <td>$314</td>
                            <td>12 Jul 2018</td>
                            <td>$34167</td>
                            <td><span class="badge badge-danger" style="border-radius:20px">Pending</span></td>
                        </tr>
                        <tr>
                            <td>#hjdsh87</td>
                            <td><span class="badge badge-success" style="border-radius:20px">Completed</span></td>
                            <td>$484</td>
                            <td>08 Sep 2018</td>
                            <td>$50862</td>
                            <td><span class="badge badge-danger" style="border-radius:20px">Lost</span></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="/" target="_blank">{{config('app.name')}}</a>. All rights reserved.</span>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- End custom js for this page-->
</body>

</html>
