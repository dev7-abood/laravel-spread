<!DOCTYPE html>
<html lang="ar">

<head>
    @include('home.layouts.head')
</head>

<body>

@include('home.layouts.header')

<!-- ======= Hero Section ======= -->



<section id="hero" class="hero d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">
                    احصل على خدمة مقيم لمنشأتك
                </h1>
                <div class="intro-form" data-aos="fade-up" data-aos-delay="500">
{{--                    @livewire('home.send-business-email-form')--}}
                    @include('home.form-send-mail.create')
                </div>
            </div>
            <div class="col-lg-6 hero-img mt-5" data-aos="zoom-out" data-aos-delay="200">
                <img src="/assets/img/hero.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>

</section><!-- End Hero -->


<section id="pricing" class="pricing-table d-flex align-items-center justify-content-center text-center"
         data-aos="fade-up">
    <div class="container table-responsive">
        <table class="table table-bordered ">
            <thead>
            <tr>
                <th scope="col">الشريحة</th>
                <th scope="col">الاولي</th>
                <th scope="col">الثانية</th>
                <th scope="col">الثالثة</th>
                <th scope="col">الرابعة</th>
                <th scope="col">الخامسة</th>
                <th scope="col">السادسة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">عدد المقيمين</th>
                <td>0-9</td>
                <td>10-49</td>
                <td>50-99</td>
                <td>100-199</td>
                <td>200-800</td>
                <td>801 فأكثر</td>

            </tr>
            <tr>
                <th scope="row">قيمة الاشتراك</th>
                <td>1,100</td>
                <td>2,300</td>
                <td>3,600</td>
                <td>5,600</td>
                <td>7,500</td>
                <td>11 لكل مقيم</td>
            </tr>
            </tbody>
        </table>
    </div>
</section>

<main id="main">

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <p>
                    تمكنك بوابة مقيم الإلكترونية ربط منشأتك إلكترونياً بالمديرية العامة للجوازات وتسهل عليك عمليات
                    الجوازات من
                    خلال نظام مقيم حيث تتيح لك
                </p>
            </header>

            <div class="row">

                <div class="col-lg-6">
                    <img src="/assets/img/feature.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
                    <div class="row align-self-center gy-4">

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>
                                    إصدار تأشيرة الخروج والعودة
                                </h3>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>
                                    تمديد تأشيرة الخروج والعودة أو إلغائها
                                </h3>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>
                                    وإصدار تأشيرة الخروج النهائي
                                </h3>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>
                                    لاطلاع على المعلومات المحدثة الخاصة بالمكفولين لدى شركتك
                                </h3>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>
                                    والتأكد من أوضاعهم والكثير غيرها من الخدمات
                                </h3>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>
                                    يمكنك القيام بهذه الخدمات من خلال جهازك وفي اي وقت
                                </h3>
                            </div>
                        </div>

                    </div>
                </div>

            </div> <!-- / row -->


        </div>

    </section><!-- End Features Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">

        <div class="container" data-aos="fade-up">
            <div class="row gx-0">

                <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="content">
                        <h2>
                            شريك معتمد من شركة علم
                        </h2>
                        <p>
                            لتقديم برنامج إدارة خدمات الجوازات للمقيمين من خلال منصة مقيم
                        </p>
                        <span>
                يمكنكم الاشتراك في خدمة مقيم عبر شركة انتشار والي تعتبر
                <br>
                <a href="https://elm.sa/ar/about/pages/our-partners.aspx">
                  شريك استراتيجي معتمد من علم
                </a>
              </span>
                    </div>
                </div>

                <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                    <img src="/assets/img/about.jpg" class="img-fluid" alt="">
                </div>

            </div>
        </div>

    </section><!-- End About Section -->

    <!-- ======= Values Section ======= -->
    <section id="values" class="values">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>
                    مميزات مقيم
                </h2>
                <p>
                    تستطيع من خلال برنامج مقيم القيام بجميع إجراءات المقيمين لديك في منشأتك
                </p>
                <p>
                    من إدارة الجوازات واستكمال العديد من معاملاتهم بطريقة سهلة وسريعة وفي أي وقت ومن أي مكان
                </p>
            </header>

            <div class="row">

                <div class=" col-md-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                    <div class="box">
                        <img src="/assets/img/values-1.png" class="img-fluid" alt="">
                        <h3>
                            احترافية عالية في إنجاز المعاملات وإتمامها
                        </h3>
                    </div>
                </div>

                <div class="col-md-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
                    <div class="box">
                        <img src="/assets/img/values-2.png" class="img-fluid" alt="">
                        <h3>
                            تحديث البيانات بشكل دائم ومستمر
                        </h3>
                    </div>
                </div>

                <div class="col-md-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
                    <div class="box">
                        <img src="/assets/img/values-3.png" class="img-fluid" alt="">
                        <h3>سرعة وأمان وسرية تامة في المعلومات </h3>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- End Values Section -->
</main><!-- End #main -->


@include('home.layouts.footer')
@include('home.layouts.scripts')
</body>
</html>
