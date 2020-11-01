<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" /> <!-- https://fonts.google.com/ -->

    <link href="homepage/fontawesome/css/all.min.css" rel="stylesheet" /> <!-- https://fontawesome.com/ -->
    <link href="homepage/css/templatemo-diagoona.css" rel="stylesheet" />
    <!-- MDBootstrap flags -->
    <link href="css/addons/flag.min.css" rel="stylesheet">

    <link href="homepage/css/bootstrap.min.css" rel="stylesheet" /> <!-- https://getbootstrap.com/ -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>

<body>
    <div class="tm-container">
        <div>
            <div class="tm-row pt-4">
                <div class="tm-col-left">
                    <div class="tm-site-header media">
                        <div class="brand-logo">
                            <img class="img-fluid tm-logo" src="../asset/katorike.png" style="background: #cbcccf ;border-radius: 15%;" alt="App Logo" width="66px">
                         </div>

                        <div class="media-body">
                            <h1 class="tm-sitename text-uppercase" style="color: #cbcccf">Hospital system</h1>

                        </div>
                    </div>
                </div>
                <div class="tm-col-right">
                    <nav class="navbar navbar-expand-sm" id="tm-main-nav">
                        <button class="navbar-toggler toggler-example mr-0 ml-auto" type="button"
                            data-toggle="collapse" data-target="#navbar-nav"
                            aria-controls="navbar-nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span><i class="fas fa-bars"></i></span>
                        </button>
                        <div class="collapse navbar-collapse " id="navbar-nav">
                            <ul class="navbar-nav text-uppercase">
                                <li class="nav-item active">
                                    <a class="nav-link tm-nav-link"  href="/">{{__('welcomepage.home')}} <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link tm-nav-link" style="color:#ffff !important" href="/">{{__('welcomepage.about')}}</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" style="size: 12px !important" href="/">{{__('welcomepage.contact')}}</a>
                                </li >

                                <li class="nav-item">
                                    <div class="btn-group">
                                        <button type="button" style="color: aliceblue !important" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Kinyarwanda
                                        </button>
                                        <div class="dropdown-menu">

                                          <a class="dropdown-item" href="{{ url('/rw') }}">Kinyarwanda</a>
                                          <a class="dropdown-item" href="{{ url('/fr') }}">English</a>
                                          {{-- <a class="dropdown-item" href="{{ url('/sw') }}">Swahili</a> --}}
                                          <div class="dropdown-divider"></div>

                                        </div>
                                      </div>
                                </li>

                                <!-- Example single danger button -->

                              <!-- Example single danger button -->

                            </ul>
                        </div>
                    </nav>
                </div>

            </div>


        </div>
        <div class="content" >
            @yield('content')
    </div>
    </div>

    <script src="homepage/js/bootstrap.min.js"></script>
    <script src="homepage/js/jquery.backstretch.min.js"></script>
    <script src="homepage/js/templatemo-script.js"></script>
    <script src="homepage/js/js.js"></script>
        @yield('script')
    </body>
    </html>
