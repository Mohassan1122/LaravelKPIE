<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Raktapp Home Page</title>
    <link rel="shortcut icon" href="../IMAGES/favicon.ico" type="image/x-icon">

    <!-- Bootstrap core CSS -->


    <!-- Custom fonts for this template -->

    <link rel="stylesheet" href="{{asset('CSSs/fontawesome.css')}}"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">



    <!-- Bootstrap core CSS -->

    <link rel="stylesheet" href="{{ asset('CSSs/bootstrap-5.0.2-dist/css/bootstrap.min.css') }} ">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        .blog-header-logo {
            font-family: monospace, Georgia, "Times New Roman", serif
                /*rtl:Amiri, Georgia, "Times New Roman", serif*/
            ;
            font-size: 2.0rem;
            text-decoration: none;
            color: #eeeff4;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('CSSs/dashboard.css') }} ">
</head>
<body>
    <header class="navbar navbar-dark sticky-top bg-info flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-5 fs-4 blog-header-logo"
            href="{{ url('/dashboard') }}">RAKTAPP</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="dropdown px-5">
            <a class="nav-link px-5 fw-bold fs-6 text-light dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                {{$data->name}}
            </a>
            <ul class="dropdown-menu dropdown-menu-info" aria-labelledby="dropdownMenuButton2">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="logout">Logout</a></li>
            </ul>

        </div>

    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active fs-6 px-5" aria-current="page" href="#">

                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-6 px-5" href="#">
                                Orders
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-6 px-5" href="#">
                                Products
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-6 px-5" href="#">
                                Customers
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-6 px-5" href="#">
                                Reports
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-6 px-5" href="#">
                                Integrations
                            </a>
                        </li>
                        <hr class="sidebar-divider d-none d-md-block">
                        <li class="nav-item ">
                            <a class="nav-link fs-6 px-5 text-dark" href="../login.php">
                                <span>Logout</span></a>
                        </li>
                        <!-- Sidebar Toggler (Sidebar) -->
                        <div class="text-center d-none d-md-inline">
                            <button class="rounded-circle border-0" id="sidebarToggle"></button>
                        </div>
                    </ul>
                </div>
            </nav>
            @yield('content')
            <script src="{{ asset('CSSs/bootstrap-5.0.2-dist/js/bootstrap.bundle.js') }}"></script>

            <script src="{{ asset('JSs/dashboard.js') }}"></script>
</body>
</html>
