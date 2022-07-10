<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Raktapp Home Page</title>
    <link rel="shortcut icon" href="../IMAGES/favicon.ico" type="image/x-icon">

    <!-- Bootstrap core CSS -->


    <!-- Custom fonts for this template -->
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('CSSs/bootstrap-5.0.2-dist/css/bootstrap.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('CSSs/argon.css') }}">
    <style>
          .blog-header-logo {
    font-family: monospace, Georgia, "Times New Roman", serif/*rtl:Amiri, Georgia, "Times New Roman", serif*/;
    font-size: 2.0rem;
    text-decoration: none;
    color:#eeeff4;
    padding: 12px;
    margin-left: 20px;
  }
    </style>
</head>
<body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-primary fixed-top" id="mainNav">
        <div class="container">

            <div class="navbar-header">
                <a class="navbar-brand blog-header-logo" href="{{ url('/') }}">RAKTAPP</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class=" nav-link fs-6 js-scroll-trigger" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6 js-scroll-trigger" href="">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6 js-scroll-trigger" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6 js-scroll-trigger" href="login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="registration" class="btn btn-secondary btn-icon">

                            <span class="nav-link-inner--text">Try for free</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <div class="container">
            <section class="section-shaped">

                <div class="container shape-container d-flex">
                    <div class="col ">
                        <h1 class="display-2 text-center text-darker">Human Resources Planner
                            <span>Plan your team’s best work, from anywhere</span>
                        </h1>
                        <p class="lead text-center pl-5 pr-5 ml-5 mr-5 text-dark"> creates a space for every team, department, or major project to share knowledge, information and keep work organized.</p>
                        <div class="btn-wrapper  text-center">
                            <a href="registration" class="btn btn-primary btn-icon  mb-sm-0">
                                <span class="btn-inner--icon"><i class="fas fa-user-plus"></i></span>
                                <span class="btn-inner--text font-weight-900">Try for free</span>
                            </a>
                        </div>

                    </div>
                </div>
            </section>
        </div>

        <!-- 1st Hero Variation -->

        <section class="section section-lg mt--200">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="row row-grid">
                            <div class="col-lg-12">
                                <div class="card card-lift--hover shadow border-0">
                                    <img src="../IMAGES/Capture3.PNG" height="400" class="d-inline-block align-top" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="section section-lg bg-secondary ">
            <div class="container ">
                <div class="row row-grid align-items-center">
                    <div class="col-md-6 order-md-2">
                        <img src="../IMAGES/logo1.jpg" class="img-fluid floating">
                    </div>
                    <div class="col-md-6 order-md-1">
                        <div class="pr-md-5">
                            <div class="icon icon-lg icon-shape icon-shape-success shadow rounded-circle mb-5">
                                <i class="ni ni-settings-gear-65"></i>
                            </div>
                            <h3>Some features</h3>
                            <p>Having the right HR software for your business can be a game changer. But more often than not, the choices can be overwhelming--particularly for human resource teams trying to wade through tech-heavy specs and options while also managing employee relations issues, open enrollment, and everything else on your plate! Here are some of the key featuresof HR...</p>
                            <ul class="list-unstyled mt-5">
                                <li class="py-2">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="badge badge-circle badge-success mr-3">
                                                <i class="ni ni-settings-gear-65"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="mb-0">Scheduling management</h6>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="badge badge-circle badge-success mr-3">
                                                <i class="ni ni-html5"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="mb-0">Workflow monitoring</h6>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="badge badge-circle badge-success mr-3">
                                                <i class="ni ni-satisfied"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="mb-0">Performance</h6>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="badge badge-circle badge-success mr-3">
                                                <i class="ni ni-satisfied"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="mb-0">Basic profile</h6>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="badge badge-circle badge-success mr-3">
                                                <i class="ni ni-satisfied"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="mb-0">Employment history</h6>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <section class="section section-lg section-shaped overflow-hidden my-0">
            <div class="shape shape-style-1 shape-default shape-skew">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="container py-0 pb-lg">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-5 mb-5 mb-lg-0">
                        <h1 class="text-white font-weight-light">Create amazing work-life experiences for your people with Ringo HR</h1>
                        <p class="lead text-white mt-4">Make running your HR easier, more efficient and secure with Ringo HR. Spend more time doing the work you love thanks to Ringo HR Solution.</p>
                        <a href="registration" class="btn btn-white mt-4">Get Started For Free</a>
                    </div>
                    <div class="col-lg-6 mb-lg-auto">
                        <div class="rounded shadow-lg overflow-hidden transform-perspective-right">
                            <div id="carousel_example" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel_example" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel_example" data-slide-to="1"></li>
                                    <li data-target="#carousel_example" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="img-fluid" src="../IMAGES/hr4.jpeg" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="img-fluid" src="../IMAGES/hr33.jpg" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="img-fluid" src="../IMAGES/hr44.jpg" alt="Second slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carousel_example" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carousel_example" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-lg pt-lg-0 mt--100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="row row-grid">
                            <div class="col-lg-4">
                                <div class="card card-lift--hover shadow border-0">
                                    <div class="card-body py-3">
                                        <div class="icon icon-shape icon-shape-primary rounded-circle mb-3">
                                            <i class="ni ni-check-bold"></i>
                                        </div>
                                        <h6 class="text-primary text-uppercase">Ringo Hr Solution</h6>
                                        <div>
                                            <img class="img-circle" src="../IMAGES/hr.jpg" alt="Healthy Eating" width="200" height="100" />
                                        </div>
                                        <p class="description mt-3">creates a space for every team, department, or major project to share knowledge, information and keep work organized.</p>

                                        <a href="#" class="btn btn-primary mt-4">Learn more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card card-lift--hover shadow border-0">
                                    <div class="card-body py-3">
                                        <div class="icon icon-shape icon-shape-success rounded-circle mb-3">
                                            <i class="ni ni-istanbul"></i>
                                        </div>
                                        <h6 class="text-success text-uppercase">human resource department</h6>
                                        <img class="img-circle" src="../IMAGES/hr3.png" alt="Spiritual Healing" width="200" height="80" />
                                        <p class="description mt-3">it is a business unit that oversees employment-related functions, such as recruitment, payroll, compensation management, onboarding, performance management, and exit.</p>
                                        <a href="#" class="btn btn-success mt-4">Learn more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card card-lift--hover shadow border-0">
                                    <div class="card-body py-3">
                                        <div class="icon icon-shape icon-shape-warning rounded-circle mb-3">
                                            <i class="ni ni-planet"></i>
                                        </div>
                                        <h6 class="text-warning text-uppercase">Report</h6>
                                        <img class="img=circle" src="../IMAGES/hr4.jpeg" alt="Herbal Remedies" width="200" height="120" />
                                        <p class="description mt-3">Improve team performance based on real-time, visual data that your team can put to use.</p>

                                        <a href="#" class="btn btn-warning mt-4">Learn more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-lg" style="background-color: #fff;">
            <div class="container">
                <div class="row row-grid justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="display-3">Managing Business Has Never Been so Easy.</h2>
                        <p class="lead">Don't hesitate, Our experts will show you how Ringo can streamline the way your team works.</p>
                        <div class="btn-wrapper">
                            <a href="register.php" class="btn btn-primary mb-3 mb-sm-0">Get Started For free</a>
                        </div>

                    </div>
                </div>
            </div>
            </div>
            </div>
        </section>
    </main>
    <!-- Footer -->
    <footer class="footer has-cards">
        <div class="container">
            <div class="row row-grid align-items-center my-md">
                <div class="col-lg-6">
                    <h3 class="text-primary font-weight-light mb-2">Thank you for supporting us!</h3>
                    <h4 class="mb-0 font-weight-light">Let's get in touch on any of these platforms.</h4>
                </div>
                <div class="col-lg-6 text-lg-center btn-wrapper">
                    <a target="_blank" href="https://twitter.com" class="btn btn-neutral btn-icon-only btn-twitter btn-round btn-lg" data-toggle="tooltip" data-original-title="Follow us">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a target="_blank" href="https://www.facebook.com" class="btn btn-neutral btn-icon-only btn-facebook btn-round btn-lg" data-toggle="tooltip" data-original-title="Like us">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a target="_blank" href="https://linkedIn.com" class="btn btn-neutral btn-icon-only btn-dribbble btn-lg btn-round" data-toggle="tooltip" data-original-title="Follow us">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a target="_blank" href="https://github.com" class="btn btn-neutral btn-icon-only btn-github btn-round btn-lg" data-toggle="tooltip" data-original-title="Star on Github">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
            </div>
            <hr>
            <div class="row align-items-center justify-content-md-between">
                <div class="col-md-12">
                    <p class="copyright text-center text-muted">Copyright &copy; My Website 2021</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('JSs/bootstrap.min.js') }}"></script>
    <script src="{{ asset('JSs/jquery.min.js') }}"></script>
    <script src="{{ asset('JSs/popper.js') }}"></script>

    <!-- Argon JS -->
 <script src="{{ asset('JSs/argon.js') }}"></script>

</body>
</html>
