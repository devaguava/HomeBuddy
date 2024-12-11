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
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap"
        rel="stylesheet">

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
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
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
            <h1 class="display-3 text-white mb-3 animated slideInDown">Our Workers</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Our Workers</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary">Worker</h6>
                <h1 class="mb-4">Experienced Workers</h1>
            </div>
            <div class="row g-4 mb-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="container-fluid p-0">
                        <img class="img-fluid" src="{{ asset('assets') }}/img/jasa pembersihan.jpg" alt=""
                            style="width: 100%; height: 350px; object-fit: cover;">
                    </div>
                    <div class="team-item rounded overflow-hidden">
                        <div class="d-flex">
                            {{-- <img class="img-fluid w-75" src="{{ asset('assets') }}/img/perbaikan7.jpg" alt=""
                                style="width: 100%; height: 350px; object-fit: cover;">
                            <div class="team-social w-25">
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3"
                                    href="https://wa.me/+6285846590304" target="_blank">
                                    <i class="fab fa-whatsapp"></i></a>
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3"
                                    href="{{ route('quote') }}"><i class="fa fa-plus"></i></a>
                            </div> --}}
                        </div>
                        <div class="p-4">
                            <h5>Anto</h5>
                            <h3 style="color:lightsalmon">Rp60.000</h3>
                            <span style="display: block; margin-bottom: 10px;">House Cleaning Expert</span>
                            <a href="https://wa.me/+6285846590304" target="_blank">
                                <button class="btn btn-primary mt-1" style="margin-top: 20px;">Contact Now</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="container-fluid p-0">
                        <img class="img-fluid" src="{{ asset('assets') }}/img/pembersihan6.jpg" alt=""
                            style="width: 100%; height: 350px; object-fit: cover;">
                    </div>
                    <div class="team-item rounded overflow-hidden">
                        <div class="d-flex">
                            <div class="team-social w-25">
                                {{-- <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3"
                                    href="https://wa.me/+6285846590304" target="_blank">
                                    <i class="fab fa-whatsapp"></i></a> --}}
                                {{-- <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3"
                                    href="{{ route('quote') }}"><i class="fa fa-plus"></i></a> --}}
                                {{-- <a class="small fw-medium" href="https://wa.me/+6285846590304" target="_blank">Contact Now<i class=""></i></a> --}}
                            </div>
                        </div>
                        <div class="p-4">
                            <h5>Anna</h5>
                            <h3 style="color:lightsalmon">Rp78.000</h3>
                            <span style="display: block; margin-bottom: 10px;">House Cleaning Expert</span>
                            <a href="https://wa.me/+6285846590304" target="_blank">
                                <button class="btn btn-primary mt-1" style="margin-top: 20px;">Contact Now</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="container-fluid p-0">
                        <img class="img-fluid" src="{{ asset('assets') }}/img/pembersihan5.jpg" alt=""
                            style="width: 100%; height: 350px; object-fit: cover;">
                    </div>
                    <div class="team-item rounded overflow-hidden">
                        <div class="d-flex">
                            {{-- <div class="team-social w-25">
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3"
                                    href="https://wa.me/+6285846590304" target="_blank">
                                    <i class="fab fa-whatsapp"></i></a>
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3"
                                    href="{{ route('quote') }}"><i class="fa fa-plus"></i></a>
                            </div> --}}
                        </div>
                        <div class="p-4">
                            <h5>Wenny</h5>
                            <h3 style="color:lightsalmon">Rp150.000</h3>
                            <span style="display: block; margin-bottom: 10px;">House Cleaning Expert</span>
                            <a href="https://wa.me/+6285846590304" target="_blank">
                                <button class="btn btn-primary mt-1" style="margin-top: 20px;">Contact Now</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Footer Start -->
    @include('user_view.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


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
