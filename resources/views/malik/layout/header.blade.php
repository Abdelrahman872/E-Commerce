<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Yantramanav:wght@400;500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('malikShop/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('malikShop/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('malikShop/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('malikShop/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('malikShop/css/style.css') }}" rel="stylesheet">
</head>

<body>



    <!-- Topbar Start -->
    <div id="head" class="container-fluid bg-success px-5 d-none d-lg-block">
        <div class="row gx-0 align-items-center" style="height: 45px;">
            <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                <div class="d-flex flex-wrap">
                    <a href="#" class="text-light me-4"><i class="fas fa-map-marker-alt text-primary me-2"></i>Find A
                        Location</a>
                    <a href="#" class="text-light me-4"><i
                            class="fas fa-phone-alt text-primary me-2"></i>+966563455515</a>
                    <a href="#" class="text-light me-0"><i
                            class="fas fa-envelope text-primary me-2"></i>Example@gmail.com</a>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-flex justify-content-end">
                    <div class="border-end border-start py-1">
                        <a href="#" class="btn text-primary"><i class="fab fa-facebook-f"></i></a>
                    </div>
                    <div class="border-end py-1">
                        <a href="#" class="btn text-primary"><i class="fab fa-twitter"></i></a>
                    </div>
                    <div class="border-end py-1">
                        <a href="#" class="btn text-primary"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="border-end py-1">
                        <a href="#" class="btn text-primary"><i class="fab fa-snapchat"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Hero Start -->
    <div style="direction: rtl;" class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
            <a href="#" class="navbar-brand p-0">
                <h1 class="text-primary m-0"><i class="fas fa-chair ms-3"></i> دار الفوارس</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto  py-0">
                    <a href="{{route('main.index')}}" class="nav-item nav-link active">الرئيسية</a>
                    <a href="" class="nav-item nav-link">شركتنا</a>
                    <a href="" class="nav-item nav-link">الاحدث</a>
                    <a href="" class="nav-item nav-link">العروض</a>
                    {{-- <a href="{{route('catalog')}}" class="nav-item nav-link">الكاتالوج</a> --}}

                </div>
                <a  onclick="window.location.href='https://wa.me/+966563455515';" class="btn btn-success rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0"><i
                        class="fab fa-whatsapp ms-2"></i> تواصل معنا</a>
            </div>
        </nav>
    </div>
    <!-- Navbar & Hero End -->
