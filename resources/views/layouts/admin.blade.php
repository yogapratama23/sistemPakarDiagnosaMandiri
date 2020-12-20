<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    

    <title>Sistem Pakar | Diagnosa Mandiri</title>

    <!-- Bootstrap -->
    <link href="{{ asset ('/assets/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset ('/assets/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset ('/assets/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset ('/assets/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="{{ asset ('/assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset ('/assets/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset ('/assets/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset ('/assets/build/css/custom.min.css')}}" rel="stylesheet">

     <link href="{{ asset ('/assets/build/css/style.css')}}" rel="stylesheet">
  </head>

  <body class="nav-md" style="background: #FFF">

    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col" >
          <div class="left_col scroll-view" style="background: #fff">

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="https://scontent.fcgk3-2.fna.fbcdn.net/v/t1.0-1/p240x240/51241372_103390730800254_6267916478251532288_n.jpg?_nc_cat=102&ccb=2&_nc_sid=dbb9e7&_nc_ohc=57oOALjDHGsAX9nVkyR&_nc_ht=scontent.fcgk3-2.fna&tp=6&oh=934b5e84376ec4b95d59746b4b0dfff6&oe=5FF57C27" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span style="color: #4B6277">SISTEM PAKAR</span>
                <h2 style="color: #4B6277">Diagnosa Mandiri</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">

                  <li><a href="/" style="color: #2F4356"><i class="fa fa-laptop"></i> Halaman Depan </a></li>

                  <li><a href="/admindashboard" style="color: #2F4356"><i class="fa fa-dashboard"></i> Dashboard </a></li>

                  <li><a href="/penyakit" style="color: #2F4356"><i class="fa fa-medkit"></i> Data Penyakit </a></li>

                  <li><a style="color: #2F4356"><i class="fa fa-list"></i> Data Gejala <span class="fa fa-chevron-down" style="color: #2F4356"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/gejala" style="color: #2F4356">Gejala</a></li>
                      <li><a href="/nilaicf" style="color: #2F4356">Nilai CF</a></li>
                    </ul>
                  </li>

                 <!--  <li><a href="/riwayat" style="color: #2F4356"><i class="fa fa-clipboard"></i> Riwayat Diagnosa </a></li> -->

                  {{-- <li><a style="color: #2F4356"><i class="fa fa-cogs"></i> Pengaturan <span class="fa fa-chevron-down" style="color: #2F4356"></span></a>
                    <ul class="nav child_menu">
                      <li ><a href="#" style="color: #2F4356">Pengguna</a></li>
                    </ul>
                  </li> --}}
                  {{-- <li><a style="color: #2F4356"><i class="fa fa-question-circle"></i> Tentang </a></li> --}}

              </div>
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" style="padding: 12px 28px 12px" data-toggle="dropdown" aria-expanded="false">
                    {{ Auth::user()->name }}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right" style="width: 160px;">
                  <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out pull-right"></i> Logout </a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->



        <div class="right_col" role="main">
          @yield('content')
        </div>




<!-- footer content -->
        <footer>
          <div class="pull-right text" style="bottom : 0px; right : 20px; position : fixed; height : 40px; margin-right : 0px;">
            &copy 2020 Sistem Pakar Diagnosa Mandiri
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset ('/assets/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset ('/assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{ asset ('/assets/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{ asset ('/assets/vendors/nprogress/nprogress.js')}}"></script>
    <!-- Chart.js -->
    <script src="{{ asset ('/assets/vendors/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- gauge.js -->
    <script src="{{ asset ('/assets/vendors/gauge.js/dist/gauge.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{ asset ('/assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{ asset ('/assets/vendors/iCheck/icheck.min.js')}}"></script>
    <!-- Skycons -->
    <script src="{{ asset ('/assets/vendors/skycons/skycons.js')}}')}}"></script>
    <!-- Flot -->
    <script src="{{ asset ('/assets/vendors/Flot/jquery.flot.js')}}')}}"></script>
    <script src="{{ asset ('/assets/vendors/Flot/jquery.flot.pie.js')}}')}}"></script>
    <script src="{{ asset ('/assets/vendors/Flot/jquery.flot.time.js')}}')}}"></script>
    <script src="{{ asset ('/assets/vendors/Flot/jquery.flot.stack.js')}}')}}"></script>
    <script src="{{ asset ('/assets/vendors/Flot/jquery.flot.resize.js')}}')}}"></script>
    <!-- Flot plugins -->
    <script src="{{ asset ('/assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{ asset ('/assets/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{ asset ('/assets/vendors/flot.curvedlines/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{ asset ('/assets/vendors/DateJS/build/date.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{ asset ('/assets/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
    <script src="{{ asset ('/assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{ asset ('/assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ asset ('/assets/vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{ asset ('/assets/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset ('/assets/build/js/custom.min.js')}}"></script>
    
    
  </body>
</html>
