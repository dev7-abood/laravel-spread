<!DOCTYPE html>
<html lang="ar">

<head>
    @include('home.layouts.head')
</head>

<body>

<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="/" class="logo d-flex align-items-center">
            <img src="/assets/img/logo-transparent.png" alt="">

        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="{{route('home.index').'#pricing'}}">اسعار الشرائح</a></li>
                <li><a class="nav-link scrollto" href="{{route('home.index').'#features'}}">الخدمات</a></li>
                <li><a class="nav-link scrollto" href="{{route('home.index').'#values'}}">المميزات</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>



<!-- ======= Hero Section ======= -->

<section id="hero" class="hero d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">
                    احصل على خدمة مقيم لمنشأتك
                </h1>
                <div class="intro-form alert alert-success" data-aos="fade-up" data-aos-delay="500">
                    شكراََ لتواصلك معنا 😊
                </div>
            </div>
            <div class="col-lg-6 hero-img mt-5" data-aos="zoom-out" data-aos-delay="200">
                <img src="/assets/img/hero.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>

</section><!-- End Hero -->

@include('home.layouts.footer')
@include('home.layouts.scripts')
</body>
</html>
