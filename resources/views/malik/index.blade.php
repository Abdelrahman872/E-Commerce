@extends('malik.master')
@section('title', 'الرئيسيه')



@section('content')

<div class="slider" id="slider">
    <div class="slide"
        style="background-image: url('/images/club.jpg'); background-size: cover; background-position: center;">
        <div class="slide-content">
            <h3 class="fs-2 text-center service-type">تنوع خدماتنا</h3>
            <!-- <div class="contact-number">+966.56 3.6 5.515</div> -->
             <div class="text-center">
                <img height="150px" src="malikShop/images/cropped-darfawaris-3.png" alt="">
             </div>

            <p class="service-type fs-5">تتمتع منتجاتنا بأعلى درجات الجودة والأمان ومن أفضل المواصفات ونقدمها لكم بأفضل الأسعار والتي جعلتنا نحوز علي ثقتكم ورضاكم عاما بعد عام</p>

            <div class="text-center">
                <a class="contact-button " href="">
                    تواصل معنا
                </a>
            </div>
        </div>

    </div>
    <div class="slide active"
        style="background-image: url('malikShop/images/club2.jpeg'); background-size: cover; background-position: center;">
        <div class="slide-content">
            <h3 class="fs-2 text-center service-type">تنوع خدماتنا</h3>
            <!-- <div class="contact-number">+966.56 3.6 5.515</div> -->
             <div class="text-center">
                <img height="150px" src="malikShop/images/cropped-darfawaris-3.png" alt="">
             </div>

            <p class="service-type fs-5">تتمتع منتجاتنا بأعلى درجات الجودة والأمان ومن أفضل المواصفات ونقدمها لكم بأفضل الأسعار والتي جعلتنا نحوز علي ثقتكم ورضاكم عاما بعد عام</p>

            <div class="text-center">
                <a class="contact-button " href="">
                    تواصل معنا
                </a>
            </div>
        </div>

    </div>
    <div class="slide"
        style="background-image: url('malikShop/images/horse.jpg'); background-size: cover; background-position: center top;">
        <div class="slide-content">
            <h3 class="fs-2 text-center service-type">تنوع خدماتنا</h3>
            <!-- <div class="contact-number">+966.56 3.6 5.515</div> -->
             <div class="text-center">
                <img height="150px" src="malikShop/images/cropped-darfawaris-3.png" alt="">
             </div>

            <p class="service-type fs-5">تتمتع منتجاتنا بأعلى درجات الجودة والأمان ومن أفضل المواصفات ونقدمها لكم بأفضل الأسعار والتي جعلتنا نحوز علي ثقتكم ورضاكم عاما بعد عام</p>

            <div class="text-center">
                <a class="contact-button " href="">
                    تواصل معنا
                </a>
            </div>
        </div>

    </div>

    <div class="wave">
        <svg viewBox="0 0 1440 320" preserveAspectRatio="none">
            <path
                d="M0,224L30,197.3C60,171,120,117,180,117.3C240,117,300,171,360,192C420,213,480,203,540,181.3C600,160,660,128,720,112C780,96,840,96,900,112C960,128,1020,160,1080,186.7C1140,213,1200,235,1260,229.3C1320,224,1380,192,1410,176L1440,160L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z">
            </path>
        </svg>
    </div>
</div>


<!-- About Start -->
<div style="direction: rtl;" class="container-fluid py-5 mb-5 mt-5">
<div class="container py-5">
    <div class="row g-5 align-items-center">
        <div class="col-lg-5 wow fadeInRight" data-wow-delay="0.1s">
            <div class=" bg-secondary rounded">
                <img style="height: 250px;" src="malikShop/images/Dar Fawris (2).png" class="img-fluid w-100 rounded" alt="Image">
            </div>
        </div>
        <div class="col-lg-7 wow text-start fadeInLeft" data-wow-delay="0.3s">
            <h4 class="text-secondary sub-title fw-bold">شركة دار الفوارس للتجارة والمقاولات</h4>
            <h1 class="display-3 text-success text-center mb-4">دار الفوارس</h1>
            <h1 style="color: #514f4f;" class="fs-2 text-center mb-4">كراسي - ديكورات - مقاولات - تجارة - اعمدة
                انارة</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint commodi alias, eius incidunt
                similique exercitationem magni quod recusandae maiores ducimus non porro neque odio explicabo,
                doloribus deleniti rem sequi adipisci sed ab qui dolorem. Optio sint eius illum consequuntur.
                Odit.
            </p>
            <a class="btn btn-success rounded-pill text-white py-3 px-5" href="#">تواصل معنا</a>
        </div>
    </div>
</div>
</div>
<!-- About End -->


<div class="container py-5">
<!-- <h4 class="text-secondary  fw-bold wow fadeInUp" data-wow-delay="0.1s">ما تقدمة الشركة</h4> -->
<div class="text-center mb-5" data-aos="fade-up">
    <h2 class="fw-bold sub-title" style="font-size: 2rem;">اختياراتنا مصممة لتناسب كل زاوية في عالمك</h2>
    <p class="text-muted mt-2" style="font-size: 1.1rem;">من الكراسي الذكية للأعمدة المضيئة، ومن الجلسات العربية
        للحدائق الساحرة – اكتشف كل ما يليق بذوقك</p>
</div>

<div class="row g-4 mt-4">



    @foreach ($items as $item)

    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
        <a href="{{route('main.categorymalik')}}">
            <div class="card product-card h-100">
                <div class="position-relative">
                    <img src="{{ asset('storage/' . $item->image) }}"  class="card-img-top" alt="صورة المنتج">
                    <span class="badge bg-warning text-white position-absolute top-0 start-0 m-2">
                        {{$item->title}}</span>
                </div>
                <div class="card-body text-center">
                    <div class="product-info mt-4">
                        <div class="product-title"> {{$item->description}}</div>
                        <p class="card-text text-muted">{{$item->made_in}}
                        </p>
                    </div>
                </div>
            </div>
        </a>
    </div>

    @endforeach

</div>
</div>


<div class="container-fluid contact py-5 mt-4">
    <div class="container py-5">
        <div class="pb-5">
            <h4 class="text-secondary sub-title fw-bold wow" data-aos="fade-up" data-wow-delay="0.1s">تواصل معنا
            </h4>
            <h1 class="display-2 mb-0 wow text-center  fadeInUp" data-wow-delay="0.3s">ابق على تواصل</h1>
        </div>
        <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
            <div class="rounded h-100 pb-3">
                <iframe class="rounded w-100" style="height: 500px;"
                    src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3627.0993031514618!2d46.868914585001846!3d24.620262084167766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjTCsDM3JzEyLjkiTiA0NsKwNTInMDAuMiJF!5e0!3m2!1sar!2seg!4v1745496332839!5m2!1sar!2seg"
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

</div>
</div>

@endsection
