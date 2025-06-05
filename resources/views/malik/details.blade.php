@extends('malik.master')
@section('title', 'تفاصيل المنتج')

@section('content')



    <div style="direction: rtl;" class="container-fluid py-5 mt-5">
        <div class="container py-5">
            <div class="row g-4 mb-5">
                <div class="col-lg-8 col-xl-9">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="border rounded">
                                <a href="#">
                                    @if ($itemImage && $itemImage->item)
                                        <img src="{{ asset('storage/' . $itemImage->item->image) }}"
                                            class="img-fluid rounded" alt="Image">
                                    @else
                                        <p>لا توجد صورة لعرضها.</p>
                                    @endif
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <h4 class="fw-bold mb-3">
                                @if ($itemImage && $itemImage->item)
                                    {{ $itemImage->item->title }}
                                @else
                                    لا يوجد عنوان
                                @endif
                            </h4>
                            <p class="mb-3">Category: @if ($itemImage && $itemImage->item)
                                    {{ $itemImage->item->category->title }}
                                @else
                                    لا يوجد عنوان
                                @endif
                            </p>

                            <h5 class="fw-bold mb-3">
                                @if ($itemImage && $itemImage->item)
                                    {{ $itemImage->item->price_disc }}
                                @else
                                    لا يوجد عنوان
                                @endif $
                            </h5>

                            <div class="d-flex mb-4">
                                <i class="fa fa-star text-secondary"></i>
                                <i class="fa fa-star text-secondary"></i>
                                <i class="fa fa-star text-secondary"></i>
                                <i class="fa fa-star text-secondary"></i>
                                <i class="fa fa-star"></i>
                            </div>

                            <p class="mb-4">

                                @if ($itemImage && $itemImage->item)
                                    {{ $itemImage->item->description }}
                                @else
                                    لا يوجد عنوان
                                @endif
                            </p>


                        </div>

                        <div class="col-lg-12">
                            <nav>
                                <div class="nav nav-tabs mb-3">
                                    <button class="nav-link active border-white border-bottom-0" type="button"
                                        role="tab" id="nav-about-tab" data-bs-toggle="tab" data-bs-target="#nav-about"
                                        aria-controls="nav-about" aria-selected="true">Description</button>

                                    {{-- <button class="nav-link border-white border-bottom-0" type="button" role="tab" id="nav-mission-tab" data-bs-toggle="tab" data-bs-target="#nav-mission" aria-controls="nav-mission" aria-selected="false">Reviews</button> --}}
                                </div>
                            </nav>

                            <div class="tab-content mb-5">
                                <div class="tab-pane active" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                                    <p>
                                        @if ($itemImage && $itemImage->item)
                                            {{ $itemImage->item->description }}
                                        @else
                                            لا يوجد عنوان
                                        @endif
                                    </p>

                                    {{-- <p>
                                    @if ($itemImage && $itemImage->item)
                                    {{ $itemImage->item->description }}
                                @else
                                لا يوجد عنوان
                                @endif                                </p> --}}
                                </div>

                                <div class="tab-pane" id="nav-mission" role="tabpanel" aria-labelledby="nav-mission-tab">
                                    <div class="d-flex">
                                        <img src="client/344b4488-5375-42c0-9f9d-75b88b3543fa.jpg"
                                            class="img-fluid rounded-circle p-3" style="width: 100px; height: 100px"
                                            alt="">

                                        <div class="">
                                            <p class="mb-2" style="font-size: 14px">April 12, 2024</p>

                                            <div class="d-flex justify-content-between">
                                                <h5>عبدالله خيري</h5>

                                                <div class="d-flex mb-3">
                                                    <i class="fa fa-star text-secondary"></i>
                                                    <i class="fa fa-star text-secondary"></i>
                                                    <i class="fa fa-star text-secondary"></i>
                                                    <i class="fa fa-star text-secondary"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>

                                            <p>
                                                The generated Lorem Ipsum is therefore always free from repetition injected
                                                humour, or non-characteristic words etc. Susp endisse ultricies nisi vel
                                                quam suscipit
                                            </p>
                                        </div>
                                    </div>

                                    <div class="d-flex">
                                        <img src="client/a63f95db-efe4-487a-a2f8-e05e2ba56f15.jpg"
                                            class="img-fluid rounded-circle p-3" style="width: 100px; height: 100px"
                                            alt="">

                                        <div class="">
                                            <p class="mb-2" style="font-size: 14px">April 12, 2024</p>

                                            <div class="d-flex justify-content-between">
                                                <h5>عبدالرحمن الحوفي</h5>

                                                <div class="d-flex mb-3">
                                                    <i class="fa fa-star text-secondary"></i>
                                                    <i class="fa fa-star text-secondary"></i>
                                                    <i class="fa fa-star text-secondary"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>

                                            <p class="text-dark">
                                                The generated Lorem Ipsum is therefore always free from repetition injected
                                                humour, or non-characteristic words etc. Susp endisse ultricies nisi vel
                                                quam suscipit
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="nav-vision" role="tabpanel">
                                    <p class="text-dark">
                                        Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                                        amet diam et eos labore. 3
                                    </p>

                                    <p class="mb-0">
                                        Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat
                                        ipsum et lorem et sit
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-xl-3">
                    <div class="row g-4 fruite">
                        <div class="col-lg-12">
                            <h4 class="mb-4">تم الطلب مع هذا المنتج :</h4>


                            @forelse ($itemImages as $itemImage)
                                <a style="color: rgb(167, 167, 167);" href="">
                                    <div class="d-flex align-items-center justify-content-start mb-2 mb-2">
                                        <div class="rounded" style="width: 100px; height: 100px">

                                            <img src="{{ asset('storage/' . $itemImage->image) }}" class="img-fluid rounded"
                                                alt="Image">
                                        </div>

                                        <div>
                                            <h6 class="mb-2">{{ $itemImage->item->title }}</h6>

                                            <div class="d-flex mb-2">
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star"></i>
                                            </div>

                                            <div class="d-flex mb-2">
                                                <h5 class="fw-bold me-2">{{'$ ' . $itemImage->item->price_disc }} </h5>

                                                <h5 class="text-secondary text-decoration-line-through">
                                            {{'$ ' . $itemImage->item->price }}
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @empty

                                <p colspan="4" class="text-center">لا توجد بيانات</p>
                            @endforelse

                        </div>
                    </div>
                </div>
            </div>

            <h1 class="fw-bold mb-2">صور المنتج :</h1>

            <div class="vesitable">
                <div class="owl-carousel vegetable-carousel justify-content-center">

                    @forelse ($itemImages as $itemImage)
                        <div class="border border-warning rounded position-relative vesitable-item">
                            <div class="vesitable-img">
                                <img src="{{ asset('storage/' . $itemImage->image) }}" class="img-fluid w-100 rounded-top"
                                    alt="">

                            </div>

                            <div class="text-white bg-success px-3 py-1 rounded position-absolute"
                                style="top: 10px; right: 10px">{{ $itemImage->item->title }}</div>
                        </div>
                    @empty

                        <p colspan="4" class="text-center">لا توجد بيانات</p>
                    @endforelse

                    {{-- <div class="border border-warning rounded position-relative vesitable-item">
                    <div class="vesitable-img">
                        <img src="img/3f4ebdf4-382f-4cbb-9d73-25f8e8a84958.jpg" class="img-fluid w-100 rounded-top" alt="">
                    </div>

                    <div class="text-white bg-success px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px">Electronic</div>
                </div> --}}
                    {{--
                <div class="border border-warning rounded position-relative vesitable-item">
                    <div class="vesitable-img">
                        <img src="img/44c96014-74c8-4fba-bbb9-e053260368a9.jpg" class="img-fluid w-100 rounded-top bg-light" alt="">
                    </div>

                    <div class="text-white bg-success px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px">Electronic</div>
                </div>

                <div class="border border-warning rounded position-relative vesitable-item">
                    <div class="vesitable-img">
                        <img src="img/56dd48c9-9700-452e-a410-d4953432fd89.jpg" class="img-fluid w-100 rounded-top" alt="">
                    </div>

                    <div class="text-white bg-success px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px">Electronic</div>
                </div>

                <div class="border border-warning rounded position-relative vesitable-item">
                    <div class="vesitable-img">
                        <img src="img/6d33faf8-6b2a-4faa-bdea-aecab64a5bc7.jpg" class="img-fluid w-100 rounded-top" alt="">
                    </div>

                    <div class="text-white bg-success px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px">Electronic</div>
                </div>

                <div class="border border-warning rounded position-relative vesitable-item">
                    <div class="vesitable-img">
                        <img src="img/7a4feb7c-13c0-4064-993e-1dc5d6b660e0.jpg" class="img-fluid w-100 rounded-top" alt="">
                    </div>

                    <div class="text-white bg-success px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px">Electronic</div>
                </div>

                <div class="border border-warning rounded position-relative vesitable-item">
                    <div class="vesitable-img">
                        <img src="img/844274d1-3f9c-4e3b-be12-2e6ca679377a.jpg" class="img-fluid w-100 rounded-top" alt="">
                    </div>

                    <div class="text-white bg-success px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px">Electronic</div>
                </div>

                <div class="border border-warning rounded position-relative vesitable-item">
                    <div class="vesitable-img">
                        <img src="img/86b1bb9c-eb3b-49f0-8a47-c90ac7e0ac1b.jpg" class="img-fluid w-100 rounded-top" alt="">
                    </div>

                    <div class="text-white bg-success px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px">Electronic</div>
                </div> --}}
                </div>
            </div>
        </div>
    </div>



    <div class="container-fluid contact py-5 mt-4">
        <div class="container py-5">
            <div class="pb-5">
                <h4 class="text-secondary sub-title fw-bold wow" data-aos="fade-up" data-wow-delay="0.1s">تواصل معنا
                </h4>
                <h1 class="display-2 mb-0 wow text-center  fadeInUp" data-wow-delay="0.3s">ابق على تواصل</h1>
            </div>
            <div class="bg-light rounded p-4 pb-0">
                <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded h-100 pb-3">
                        <iframe class="rounded w-100" style="height: 500px;"
                            src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3627.0993031514618!2d46.868914585001846!3d24.620262084167766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjTCsDM3JzEyLjkiTiA0NsKwNTInMDAuMiJF!5e0!3m2!1sar!2seg!4v1745496332839!5m2!1sar!2seg"
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>




@endsection
