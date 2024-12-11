<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HomeBuddy</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('assets') }}/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets') }}/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets') }}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets') }}/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    @include('user_view.header')
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary">Our Services</h6>
                <h2 class="mb-4">"We Are Pioneers in Reliable Home Cleaning, Repairs, and Goods Transportation Services"</h2>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="{{ asset('assets') }}/img/perbaikan.png" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fa-wrench fa-3x"></i>
                            </div>
                            <h4 class="mb-3">House Refinement</h4>
                            <p>Entrust repairs to refrigerators, ACs and other household appliances to our professional team. High quality service at competitive prices!</p>
                            <a class="small fw-medium" href="{{ route('service-refinement')}}">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="{{ asset('assets') }}/img/pembersihan.png" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fa-broom fa-3x"></i>
                            </div>
                            <h4 class="mb-3">House Cleaning</h4>
                            <p>Easy and Affordable Cleaning Services. Make your home and office more comfortable with our fast and affordable cleaning services!</p>
                            <a class="small fw-medium" href="{{ route('service-cleaning')}}">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="{{ asset('assets') }}/img/pengangkutan.png" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fa-car fa-3x"></i>
                            </div>
                            <h4 class="mb-3">Transportation of Goods</h4>
                            <p>Fast and Safe Goods Transport Services. Trust us to move your goods safely, quickly and efficiently to their destination.</p>
                            <a class="small fw-medium" href="{{ route('service-transport')}}">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Projects Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary">Our Projects</h6>
                <h1 class="mb-4">What We Have Done</h1>
            </div>
            <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-12 text-center">
                    <ul class="list-inline mb-5" id="portfolio-flters">
                        <li class="mx-2 active" data-filter="*">All</li>
                        <li class="mx-2" data-filter=".first">House Refinement</li>
                        <li class="mx-2" data-filter=".second">House Cleaning</li>
                        <li class="mx-2" data-filter=".third">Goods Transportation</li>
                    </ul>
                </div>
            </div>
            <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.5s">
                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="">
                        <img class="img-fluid" src="{{ asset('assets') }}/img/perbaikan1.jpg" alt="" style="width: 100%; height: 250px; object-fit: cover;">
                    </div>
                    <div class="pt-3">
                        <p class="text-primary mb-0">House Refinement</p>
                        <hr class="text-primary w-25 my-2">
                        <h5 class="lh-base">Home Maintainance</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <div class="">
                        <img class="img-fluid" src="{{ asset('assets') }}/img/pembersihan1.webp" alt="" style="width: 100%; height: 250px; object-fit: cover;">
                    </div>
                    <div class="pt-3">
                        <p class="text-primary mb-0">House Cleaning</p>
                        <hr class="text-primary w-25 my-2">
                        <h5 class="lh-base">Rug Cleaning</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item third">
                    <div class="">
                        <img class="img-fluid" src="{{ asset('assets') }}/img/angkut1.jpg" alt="" style="width: 100%; height: 250px; object-fit: cover;">
                    </div>
                    <div class="pt-3">
                        <p class="text-primary mb-0">Goods Transportation</p>
                        <hr class="text-primary w-25 my-2">
                        <h5 class="lh-base">Transportation of Goods for House Moving</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="">
                        <img class="img-fluid" src="{{ asset('assets') }}/img/perbaikan3.jpg" alt="" style="width: 100%; height: 250px; object-fit: cover;">
                    </div>
                    <div class="pt-3">
                        <p class="text-primary mb-0">House Refinement</p>
                        <hr class="text-primary w-25 my-2">
                        <h5 class="lh-base">Tiling and Painting</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <div class="">
                        <img class="img-fluid" src="{{ asset('assets') }}/img/pembersihan2.webp" alt="" style="width: 100%; height: 250px; object-fit: cover;">
                    </div>
                    <div class="pt-3">
                        <p class="text-primary mb-0">House Cleaning</p>
                        <hr class="text-primary w-25 my-2">
                        <h5 class="lh-base">Bathroom Cleaning</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item third">
                    <div class="">
                        <img class="img-fluid" src="{{ asset('assets') }}/img/angkut2.jpg" alt="" style="width: 100%; height: 250px; object-fit: cover;">
                    </div>
                    <div class="pt-3">
                        <p class="text-primary mb-0">Goods Transportation</p>
                        <hr class="text-primary w-25 my-2">
                        <h5 class="lh-base">Transportation of Goods</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Projects End -->

    <div class="col-12 text-center mt-4 mb-5">
        <a href="{{ route('worker') }}" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Hire a worker now!</a>
    </div>

    <!-- Footer Start -->
    @include('user_view.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets') }}/lib/wow/wow.min.js"></script>
    <script src="{{ asset('assets') }}/lib/easing/easing.min.js"></script>
    <script src="{{ asset('assets') }}/lib/waypoints/waypoints.min.js"></script>
    <script src="{{ asset('assets') }}/lib/counterup/counterup.min.js"></script>
    <script src="{{ asset('assets') }}/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="{{ asset('assets') }}/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="{{ asset('assets') }}/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets') }}/js/main.js"></script>
</body>

</html>
