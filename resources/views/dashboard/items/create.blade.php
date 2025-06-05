@extends('dashboard.master')
@section('title', 'اضافه منتج')
{{-- @section('store'.$store->category->id.'-active', 'active') --}}
@section('content')


<div id="content">

    <!-- Topbar -->

    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <div  style="direction: rtl;" class="container-fluid">
        <div class="container">
            <form style="direction: rtl;" enctype="multipart/form-data" method="POST" action="{{route('item.store')}}">
                @csrf
                <div class="mb-3 d-flex align-items-center">
                    <input type="text" name="title" class="form-control" id="floatingInput" placeholder="اسم الصنف . . . ">
                    @error("title")
                    <div class="text-danger">
                        <p>{{ $message }}</p>
                    </div>
                @enderror
                    <!-- <label for="floatingInput">Email address</label> -->
                  </div>
                  <div class="mb-3 d-flex align-items-center">
                    <input type="number" name="price" class="form-control" id="floatingInput" placeholder="سعر الصنف . . . ">
                    @error("price")
                    <div class="text-danger">
                        <p>{{ $message }}</p>
                    </div>
                @enderror
                    <!-- <label for="floatingInput">Email address</label> -->
                  </div>
                  <div class="mb-3 d-flex align-items-center">
                    <input type="number" name='discount' class="form-control" id="floatingInput" placeholder="قيمة الخصم . . . ">
                    @error("discount")
                    <div class="text-danger">
                        <p>{{ $message }}</p>
                    </div>
                @enderror
                    <!-- <label for="floatingInput">Email address</label> -->
                  </div>
                  <div class="mb-3 d-flex align-items-center">
                    <input type="number" name='price_disc' class="form-control" id="floatingInput" placeholder="السعر بعد الخصم . . . ">
                    @error("price_disc")
                    <div class="text-danger">
                        <p>{{ $message }}</p>
                    </div>
                @enderror
                    <!-- <label for="floatingInput">Email address</label> -->
                  </div>
                  <div class="mb-3 d-flex align-items-center">
                    <input type="text" class="form-control" name="made_in" id="floatingInput" placeholder="بلد المصنع . . . ">
                    @error("made_in")
                    <div class="text-danger">
                        <p>{{ $message }}</p>
                    </div>
                @enderror
                    <!-- <label for="floatingInput">Email address</label> -->
                  </div>
                  <div class="mb-3 d-flex align-items-center">
                    <input type="text" class="form-control" name="details" id="floatingInput" placeholder="بيانات اخري. . . ">
                    @error("details")
                    <div class="text-danger">
                        <p>{{ $message }}</p>
                    </div>
                @enderror
                    <!-- <label for="floatingInput">Email address</label> -->
                  </div>

                  <div class="mb-3 d-flex align-items-center">
                    <textarea class="form-control" name="description"  placeholder="الوصف . . . " id="floatingTextarea2" style="height: 100px"></textarea>
                    @error("description")
                    <div class="text-danger">
                        <p>{{ $message }}</p>
                    </div>
                @enderror
                    <input type="hidden" name='cat_id' value="{{$cat_id}}" >
                    <!-- <label for="floatingTextarea2">Comments</label> -->
                  </div>
                  <div class="mb-3 d-flex align-items-center">
                    <input style="height: 45px;" name="images[]"  multiple   type="file" class="form-control" id="floatingPassword">
                    @error("image")
                    <div class="text-danger">
                        <p>{{ $message }}</p>
                    </div>
                @enderror
                    <!-- <label for="floatingPassword">Password</label> -->
                  </div>
                  <button class="btn btn-sm btn-primary">اضافة الصنف <i class="fa fa-plus"></i></button>

            </form>
        </div>
    </div>
    <!-- /.container-fluid -->

</div>

@endsection
