@extends('malik.master')
@section('title', 'الفئه')

@section('content')




<div class="container-fluid bg-breadcrumb headre1">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-light display-3 wow fadeInDown" data-wow-delay="0.1s">Category</h1>
            <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="index.html" class="text-dark">Home</a></li>
                <li class="breadcrumb-item"><a href="#" class="text-dark">Pages</a></li>
                <li class="breadcrumb-item active text-primary">Category</li>
            </ol>
    </div>
</div>


<div class="container mt-5">
    <div class="pb-5">
        <h4 class="text-secondary sub-title fw-bold wow" data-aos="fade-up" data-wow-delay="0.1s"> مرحبًا بك في عالمنا المميز
        </h4>
        <h1 class="sub-title mb-0 wow text-center fadeInUp" data-wow-delay="0.3s">هنا تجد كل ما تبحث عنه وأكثر، بعناية اخترنا لك هذه المجموعة لتلبي ذوقك وتناسب احتياجاتك. تصفّح الفئات واستكشف التميز في كل اختيار. نحن هنا لنقدّم لك الأفضل دائمًا.

        </h1>
    </div>
    <div class="row g-4 portfolio-container mt-5 mb-4">

        @foreach ($categorys as $category)
        <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInDown" data-wow-delay="0.1s">
            <a href="{{route('main.allproduct')}}">
                <div class="portfolio-inner cat1 rounded"
                    style="background-image: url({{'storage/' . $category->image}});
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;">
                    <div class="portfolio-text">
                        <h4 class="text-white mb-4">
                  {{$category->title}}
                        </h4>

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
