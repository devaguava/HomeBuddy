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


    <!-- Topbar Start -->
    {{-- <div class="container-fluid bg-dark p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>123 Street, New York, USA</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Mon - Fri : 09.00 AM - 09.00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+012 345 6789</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-square btn-link rounded-0" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Topbar End -->


    <!-- Navbar Start -->
    @include('user_view.header')
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative" data-dot="<img src='{{ asset('assets') }}/img/carousel-31.jpg'>">
                <img class="img-fluid" src="{{ asset('assets') }}/img/carousel-31.jpg" alt="" style="height: 700px; object-fit: cover;">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-2 text-white animated slideInDown">It's Easy to Hire Professionals for Your Everyday Tasks!</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">Hire professionals for everyday tasks and enjoy a smooth and enjoyable experience.</p>
                                <a href="{{ route('service') }}" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Hire Now!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative" data-dot="<img src='{{ asset('assets') }}/img/carousel-21.jpg'>">
                <img class="img-fluid" src="{{ asset('assets') }}/img/carousel-21.jpg" alt="" style="height: 700px; object-fit: cover;">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-2 text-white animated slideInDown">It's Easy to Hire Professionals for Your Everyday Tasks!</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">Hire professionals for everyday tasks and enjoy a smooth and enjoyable experience.</p>
                                <a href="{{ route('service') }}" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Hire Now!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative" data-dot="<img src='{{ asset('assets') }}/img/carousel-11.jpg'>">
                <img class="img-fluid" src="{{ asset('assets') }}/img/carousel-11.jpg" alt="" style="height: 700px; object-fit: cover;">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-2 text-white animated slideInDown">It's Easy to Hire Professionals for Your Everyday Tasks!</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">Hire professionals for everyday tasks and enjoy a smooth and enjoyable experience.</p>
                                <a href="{{ route('service') }}" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Hire Now!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Feature Start -->
    {{-- <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <!-- Kolom pertama -->
                <div class="col d-flex justify-content-center align-items-center wow fadeIn" data-wow-delay="0.1s">
                    <div class="text-center">
                        <!-- Gambar/logo berada di atas teks, diatur dengan d-flex dan align-items-center -->
                        <div class="d-flex flex-column align-items-center mb-4">
                            <h1 class="mb-0" data-toggle="counter-up">360</h1>
                        </div>
                        <h5 class="mb-3">Happy Customers</h5>
                    </div>
                </div>

                <!-- Kolom kedua -->
                <div class="col d-flex justify-content-center align-items-center wow fadeIn" data-wow-delay="0.3s">
                    <div class="text-center">
                        <div class="d-flex flex-column align-items-center mb-4">
                            <h1 class="mb-0" data-toggle="counter-up">365</h1>
                        </div>
                        <h5 class="mb-3">Completed Work</h5>
                    </div>
                </div>

                <!-- Kolom ketiga -->
                <div class="col d-flex justify-content-center align-items-center wow fadeIn" data-wow-delay="0.7s">
                    <div class="text-center">
                        <div class="d-flex flex-column align-items-center mb-4">
                            <h1 class="mb-0" data-toggle="counter-up">153</h1>
                        </div>
                        <h5 class="mb-3">Expert Workers</h5>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Feature Start -->


    <!-- About Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container about px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('assets') }}/img/about3.png" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <h6 class="text-primary">About Us</h6>
                        <h1 class="mb-4">We serve in Jakarta, Bandung, Surabaya, Medan and surrounding areas.</h1>
                        <p>Enjoy our services that will leave your home clean and comfortable!</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>House Refinement</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>House Cleaning</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Transportation of Goods</p>
                        {{-- <a href="" class="btn btn-primary rounded-pill py-3 px-5 mt-3">Explore More</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


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


    <!-- Feature Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-lg-5 ps-lg-0">
                        <h6 class="text-primary">Why Choose Us!</h6>
                        <h1 class="mb-4">Comprehensive Home Cleaning, Repair, and Goods Transportation Services</h1>
                        <p class="mb-4 pb-2">We provide house cleaning, repair and hauling services with professionalism and reliability to meet your household needs.</p>
                        <div class="row g-4">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="btn-lg-square bg-primary rounded-circle">
                                        <i class="fa fa-check text-white"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-0">Quality</p>
                                        <h5 class="mb-0">Services</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="btn-lg-square bg-primary rounded-circle">
                                        <i class="fa fa-user-check text-white"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-0">Expert</p>
                                        <h5 class="mb-0">Workers</h5>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('assets') }}/img/carousel-31.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Projects Start -->
    {{-- <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary">Our Projects</h6>
                <h1 class="mb-4">Visit Our Latest Solar And Renewable Energy Projects</h1>
            </div>
            <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-12 text-center">
                    <ul class="list-inline mb-5" id="portfolio-flters">
                        <li class="mx-2 active" data-filter="*">All</li>
                        <li class="mx-2" data-filter=".first">Solar Panels</li>
                        <li class="mx-2" data-filter=".second">Wind Turbines</li>
                        <li class="mx-2" data-filter=".third">Hydropower Plants</li>
                    </ul>
                </div>
            </div>
            <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.5s">
                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="{{ asset('assets') }}/img/img-600x400-6.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="img/img-600x400-6.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <p class="text-primary mb-0">Solar Panels</p>
                        <hr class="text-primary w-25 my-2">
                        <h5 class="lh-base">We Are pioneers of solar & renewable energy industry</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="{{ asset('assets') }}/img/img-600x400-5.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="img/img-600x400-5.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <p class="text-primary mb-0">Wind Turbines</p>
                        <hr class="text-primary w-25 my-2">
                        <h5 class="lh-base">We Are pioneers of solar & renewable energy industry</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item third">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="{{ asset('assets') }}/img/img-600x400-4.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="img/img-600x400-4.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <p class="text-primary mb-0">Hydropower Plants</p>
                        <hr class="text-primary w-25 my-2">
                        <h5 class="lh-base">We Are pioneers of solar & renewable energy industry</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="{{ asset('assets') }}/img/img-600x400-3.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="img/img-600x400-3.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <p class="text-primary mb-0">Solar Panels</p>
                        <hr class="text-primary w-25 my-2">
                        <h5 class="lh-base">We Are pioneers of solar & renewable energy industry</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="{{ asset('assets') }}/img/img-600x400-2.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="img/img-600x400-2.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <p class="text-primary mb-0">Wind Turbines</p>
                        <hr class="text-primary w-25 my-2">
                        <h5 class="lh-base">We Are pioneers of solar & renewable energy industry</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item third">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="{{ asset('assets') }}/img/img-600x400-1.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="img/img-600x400-1.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <p class="text-primary mb-0">Hydropower Plants</p>
                        <hr class="text-primary w-25 my-2">
                        <h5 class="lh-base">We Are pioneers of solar & renewable energy industry</h5>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Projects End -->


    <!-- Quote Start -->
    {{-- <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container quote px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('assets') }}/img/img-600x400-5.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 quote-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <h6 class="text-primary">Quote</h6>
                        <h1 class="mb-4">Get A Quote</h1>
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Mobile" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" style="height: 55px;">
                                        <option selected>Select A Service</option>
                                        <option value="1">House Refinement</option>
                                        <option value="2">House Cleaning</option>
                                        <option value="3">Transportation of Goods</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" placeholder="Describe Your Problem"></textarea>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" placeholder="Your Address"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Quote End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary">Worker</h6>
                <h1 class="mb-4">Experienced Workers</h1>
            </div>
            <div class="row g-4 mb-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="d-flex">
                            <img class="img-fluid w-75" src="{{ asset('assets') }}/img/team-1.jpg" alt=""
                                style="width: 100%; height: 350px; object-fit: cover;">
                            <div class="team-social w-25">
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3"
                                    href="https://wa.me/+6285846590304" target="_blank">
                                    <i class="fab fa-whatsapp"></i></a>
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3"
                                    href="{{ route('quote') }}"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="p-4">
                            <h5>Anto</h5>
                            <span>House Refinement Expert</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="d-flex">
                            <img class="img-fluid w-75" src="{{ asset('assets') }}/img/jasa pembersihan.jpg"
                                alt="" style="width: 100%; height: 350px; object-fit: cover;">
                            <div class="team-social w-25">
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3"
                                    href="https://wa.me/+6285846590304" target="_blank">
                                    <i class="fab fa-whatsapp"></i></a>
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3"
                                    href="{{ route('quote') }}"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="p-4">
                            <h5>Nini</h5>
                            <span>House Cleaning Expert</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="d-flex">
                            <img class="img-fluid w-75" src="{{ asset('assets') }}/img/jasa pengangkutan.jpeg"
                                alt="" style="width: 100%; height: 350px; object-fit: cover;">
                            <div class="team-social w-25">
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3"
                                    href="https://wa.me/+6285846590304" target="_blank">
                                    <i class="fab fa-whatsapp"></i></a>
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3"
                                    href="{{ route('quote') }}"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="p-4">
                            <h5>Rino</h5>
                            <span>Goods Transportation Expert</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary">Testimonial</h6>
                <h1 class="mb-4">What Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="{{ asset('assets') }}/img/testimonial-1.jpg">
                        <div class="btn-square bg-primary rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                    <div class="testimonial-text text-center rounded p-4">
                        <p>Pelayanan Mantap, pekerjanya juga ramah.</p>
                        <h5 class="mb-1">Tina</h5>
                        <span class="fst-italic">Fashion Designer</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="{{ asset('assets') }}/img/testimonial-2.jpg">
                        <div class="btn-square bg-primary rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                    <div class="testimonial-text text-center rounded p-4">
                        <p>Saya sangat puas, pekerjanya handal dan bekerja dengan cepat, terima kasih HomeBuddy telah membantu saya dalam mencari pekerja yang sesuai dan handal.</p>
                        <h5 class="mb-1">Saka</h5>
                        <span class="fst-italic">Business Director</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="{{ asset('assets') }}/img/testimonial-3.jpg">
                        <div class="btn-square bg-primary rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                    <div class="testimonial-text text-center rounded p-4">
                        <p>Website ini sangat keren dengan menyediakan berbagai macam pekerja. Pekerjanya pun bekerja dengan lihai dan cepat. Terima kasih HomeBuddy!</p>
                        <h5 class="mb-1">Agas</h5>
                        <span class="fst-italic">Businessman</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


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
