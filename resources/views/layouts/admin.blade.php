<!DOCTYPE html>
<html lang="en">
 <head>
      <meta charset="utf-8">
      <meta name="description" content="Code written by bazimya  safan or saphani yanjye.com@gmail.com">
      <link rel="shortcut icon" type="image/ico" href="../asset/favicon.ico">


      <title>
        @yield('title')
      </title>
      <!-- =============== VENDOR STYLES ===============-->
      <!-- FONT AWESOME-->
      <link rel="stylesheet" href="{{ url('asset/admin/vendor/%40fortawesome/fontawesome-free-webfonts/css/fa-brands.css')}}">
      <link rel="stylesheet" href="{{ url('asset/admin/vendor/%40fortawesome/fontawesome-free-webfonts/css/fa-regular.css')}}">
      <link rel="stylesheet" href="{{ url('asset/admin/vendor/%40fortawesome/fontawesome-free-webfonts/css/fa-solid.css')}}">
      <link rel="stylesheet" href="{{ url('asset/admin/vendor/%40fortawesome/fontawesome-free-webfonts/css/fontawesome.css')}}">
      <!-- SIMPLE LINE ICONS-->
      <link rel="stylesheet" href="{{ url('asset/admin/vendor/simple-line-icons/css/simple-line-icons.css')}}">
      <!-- ANIMATE.CSS-->
      <link rel="stylesheet" href="{{ url('asset/admin/vendor/animate.css/animate.css')}}">
      <!-- WHIRL (spinners)-->
      <link rel="stylesheet" href="{{ url('asset/admin/vendor/whirl/dist/whirl.css')}}">
      <!-- =============== PAGE VENDOR STYLES ===============-->
      <!-- WEATHER ICONS-->
      <link rel="stylesheet" href="{{ url('asset/admin/vendor/weather-icons/css/weather-icons.css')}}">
      <!-- =============== BOOTSTRAP STYLES ===============-->
      <link rel="stylesheet" href="{{ url('asset/admin/css/bootstrap.css')}}" id="bscss">
      <!-- =============== APP STYLES ===============-->
      <link rel="stylesheet" href="{{ url('asset/admin/css/app.css')}}" id="maincss">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" />
      <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.bootstrap4.min.css" />
      <link rel="stylesheet" href="http://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"  crossorigin="anonymous"></script>
      <Script src="http://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></Script>
      <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>



   </head>

   <body>
    <div class="wrapper">
        <!-- top navbar-->
        <header class="topnavbar-wrapper">
           <!-- START Top Navbar-->
           <nav class="navbar topnavbar">
              <!-- START navbar header-->
              <div class="navbar-header">
                 <a class="navbar-brand" href="#/">
                    <div class="brand-logo">
                       <img class="img-fluid" src="../asset/katorike.png" style="background: #cbcccf ;border-radius: 15%;" alt="App Logo" width="66px">
                    </div>
                    <div class="brand-logo-collapsed">
                       <img class="img-fluid" src="../asset/katorike.png" style="background: #cbcccf ;border-radius: 15%;" alt="App Logo">
                    </div>
                 </a>
              </div>
              <!-- END navbar header-->
              <!-- START Left navbar-->
              <ul class="navbar-nav mr-auto flex-row">
                 <li class="nav-item">
                    <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
                    <a class="nav-link d-none d-md-block d-lg-block d-xl-block" href="#" data-trigger-resize="" data-toggle-state="aside-collapsed">
                       <em class="fas fa-bars"></em>
                    </a>
                    <!-- Button to show/hide the sidebar on mobile. Visible on mobile only.-->
                    <a class="nav-link sidebar-toggle d-md-none" href="#" data-toggle-state="aside-toggled" data-no-persist="true">
                       <em class="fas fa-bars"></em>
                    </a>
                 </li>
                 <!-- START User avatar toggle-->
                 <li class="nav-item d-none d-md-block">
                    <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
                    <a class="nav-link" id="user-block-toggle" href="#user-block" data-toggle="collapse">
                       <em class="icon-user"></em>
                    </a>
                 </li>
                 <!-- END User avatar toggle-->
                 <!-- START lock screen-->
                 <li class="nav-item d-none d-md-block">
                    <a class="nav-link" href="{{ route('logout') }}" title="Lock screen" onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                        <em class="icon-lock"></em>
                    </a>

                 </li>

                 <!-- END lock screen-->
              </ul>
              <!-- END Left navbar-->
              <!-- START Right Navbar-->
              <ul class="navbar-nav flex-row">
                 <!-- Search icon-->

                 <!-- Fullscreen (only desktops)-->
                 <li class="nav-item d-none d-md-block">
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" data-toggle-fullscreen="">

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                       <em class="fas fa-expand"></em> <span class="user-block-name">{{ Auth::user()->name }}</span>
                    </a>
                 </li>


              </ul>

           </nav>
           <!-- END Top Navbar-->
        </header>
        <!-- sidebar-->
        <aside class="aside-container">
           <!-- START Sidebar (left)-->
           <div class="aside-inner">
              <nav class="sidebar" data-sidebar-anyclick-close="">
                 <!-- START sidebar nav-->
                 <ul class="sidebar-nav">
                    <!-- START user info-->
                    <li class="has-user-block">
                       <div class="collapse" id="user-block">
                          <div class="item user-block">
                             <!-- User picture-->
                             <div class="user-block-picture">
                                <div class="user-block-status">
                                   {{-- <img class="img-thumbnail rounded-circle" src="asset/admin/img/user/02.jpg" alt="Avatar" width="60" height="60"> --}}
                                   <div class="circle bg-success circle-lg"></div>
                                </div>
                             </div>
                             <!-- Name and Job-->
                             <div class="user-block-info" style="margin-top:20px">
                                <span class="user-block-name">{{ Auth::user()->name }}</span>

                                 <span class="user-block-name">{{ Auth::user()->email }}</span>

                             </div>
                          </div>
                       </div>
                    </li>
                    <!-- END user info-->
                    <!-- Iterates over all sidebar items-->
                    <li class="nav-heading ">
                       <span data-localize="sidebar.heading.HEADER">Main Navigation</span>
                    </li>
                    <li class=" ">
                       <a href="/home" title="Dashboard" data-toggle="collapse">
                          {{-- <div class="float-right badge badge-success">3</div> --}}
                          <a href="/home"> <em class="icon-speedometer"></em>
                            <span data-localize="sidebar.nav.DASHBOARD">Incamacye</span></a>

                       </a>
                       <ul class="sidebar-nav sidebar-subnav collapse" id="dashboard">
                          <li class="sidebar-subnav-header">Incamacye</li>
                          <li class=" ">
                             <a href="/home" title="Dashboard">
                                <span>Incamacye</span>
                             </a>
                          </li>


                       </ul>
                    </li>
                    <li class=" ">
                           <a href="/Attended">
                            <i class="fa fa-list-alt" aria-hidden="true"></i>
                            <span data-localize="sidebar.nav.DASHBOARD">Urutonde</span></a>

                        <ul class="sidebar-nav sidebar-subnav collapse">
                           <li class="sidebar-subnav-header">Urutonde</li>
                        </ul>
                     </li>

                    <li class="">
                            <a href="/Insertchurch"> <i class="fa fa-home" aria-hidden="true"></i>
                            <span data-localize="sidebar.nav.DASHBOARD">Consertation</span></a>
                            <ul class="sidebar-nav sidebar-subnav collapse">
                                <li class="sidebar-subnav-header">Consertation</li>
                            </ul>
                    </li>

                    <li class="">
                        <a href="/creareuser"> <i class="fa fa-home" aria-hidden="true"></i>
                        <span data-localize="sidebar.nav.DASHBOARD">Shiramo umuntu mushya</span></a>
                        <ul class="sidebar-nav sidebar-subnav collapse">
                            <li class="sidebar-subnav-header">Shiramo umuntu mushya</li>
                        </ul>
                </li>


                    {{-- <li class="">
                        <a href="/InserHall"> <i class="fa fa-home" aria-hidden="true"></i>
                        <span data-localize="sidebar.nav.DASHBOARD">Shyiramo ahasengerwa</span></a>
                        <ul class="sidebar-nav sidebar-subnav collapse">
                            <li class="sidebar-subnav-header">Shyiramo ahasengerwa</li>
                        </ul>
                </li> --}}
                    <li class=" ">
                        <a href="/InsertMess"> <i class="fa fa-users" aria-hidden="true"></i><span data-localize="sidebar.nav.DASHBOARD">Lab</span></a>
                        <ul class="sidebar-nav sidebar-subnav collapse">
                            <li class="sidebar-subnav-header">Lab</li>
                        </ul>
                    </li>

                    <li class=" ">
                        <a href="/checkcode"> <i class="fa fa-check" aria-hidden="true"></i>
                            <span data-localize="sidebar.nav.DASHBOARD">Reba code yumuntu uje</span></a>
                        <ul class="sidebar-nav sidebar-subnav collapse">
                            <li class="sidebar-subnav-header">Reba code yumuntu uje</li>
                        </ul>
                    </li>

                 </ul>
                 <!-- END sidebar nav-->
              </nav>
           </div>
           <!-- END Sidebar (left)-->
        </aside>


        <!-- Main section-->
@yield('contain')
        <!-- Page footer-->
        <footer class="footer-container">
           <span>&copy; 2020 chulch</span>
        </footer>
     </div>
      <!-- =============== VENDOR SCRIPTS ===============-->
      <!-- MODERNIZR-->
      <script src="{{ url('asset/admin/vendor/modernizr/modernizr.custom.js')}}"></script>
      <!-- JQUERY-->
      <script src="{{ url('asset/admin/vendor/jquery/dist/jquery.js')}}"></script>
      <!-- BOOTSTRAP-->
      <script src="{{ url('asset/admin/vendor/popper.js/dist/umd/popper.js')}}"></script>
      <script src="{{ url('asset/admin/vendor/bootstrap/dist/js/bootstrap.js')}}"></script>
      <!-- STORAGE API-->
      <script src="{{ url('asset/admin/vendor/js-storage/js.storage.js')}}"></script>
      <!-- JQUERY EASING-->
      <script src="{{ url('asset/admin/vendor/jquery.easing/jquery.easing.js')}}"></script>
      <!-- ANIMO-->
      <script src="{{ url('asset/admin/vendor/animo/animo.js')}}"></script>
      <!-- SCREENFULL-->
      <script src="{{ url('asset/admin/vendor/screenfull/dist/screenfull.js')}}"></script>
      <!-- LOCALIZE-->
      <script src="{{ url('asset/admin/vendor/jquery-localize/dist/jquery.localize.js')}}"></script>
      <!-- =============== PAGE VENDOR SCRIPTS ===============-->
      <!-- SPARKLINE-->
      <script src="{{ url('asset/admin/vendor/jquery-sparkline/jquery.sparkline.js')}}"></script>

      <script src="{{ url('asset/admin/vendor/easy-pie-chart/dist/jquery.easypiechart.js')}}"></script>
      <!-- MOMENT JS-->
      <script src="{{ url('asset/admin/vendor/moment/min/moment-with-locales.js')}}"></script>
      <!-- =============== APP SCRIPTS ===============-->
      <script src="{{ url('asset/admin/js/app.js')}}"></script>
      <script src="{{ url('asset/admin/js/datatable.js')}}"></script>

      <script src="{{ url('asset/admin/vendor/datatables.net/js/jquery.dataTables.js')}}"></script>
      <script src="{{ url('asset/admin/vendor/datatables.net-bs4/js/dataTables.bootstrap4.js')}}"></script>
      <script src="{{ url('asset/admin/vendor/easy-pie-chart/dist/jquery.easypiechart.js')}}"></script>


   </body>


   <!-- Mirrored from themicon.co/theme/angle/v4.0/static-html/app/dashboard_v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Nov 2018 12:42:18 GMT -->
   </html>
