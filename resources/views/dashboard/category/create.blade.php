@extends('dashboard.master')
@section('title', 'اضافه منتج')
{{-- @section('store'.$store->category->id.'-active', 'active') --}}
@section('content')


<div  style="direction: rtl;" class="container-fluid">
    <div class="container">
        <form style="direction: rtl;" enctype="multipart/form-data" method="POST" action="{{route('category.store')}}">
            @csrf
            <div class="form-floating mb-3">
                {{-- <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInput" name="title" placeholder="اسم المنتج . . .">
                    <label  for="floatingInput">اسم المنتج</label>
                  </div> --}}
                  <div class="mb-3 d-flex align-items-center">
                    {{-- <label for="title" class="me-2" style="white-space: nowrap;">اسم المنتج:</label> --}}
                    <input type="text" class="form-control" id="title" name="title" placeholder="اسم المنتج . . .">
                  </div>
                @error("title")
                <div class="text-danger">
                    <p>{{ $message }}</p>
                </div>
            @enderror
                <!-- <label for="floatingInput">Email address</label> -->
              </div>
              <div class="mb-3 d-flex align-items-center">
                <input style="height: 45px;" name="image" type="file" class="form-control" id="floatingPassword">
                @error("image")
                <div class="text-danger">
                    <p>{{ $message }}</p>
                </div>
            @enderror
                <!-- <label for="floatingPassword">Password</label> -->
              </div>
              <div class="mb-3 d-flex align-items-center">
                <textarea class="form-control" name="discription" placeholder="الوصف . . . " id="floatingTextarea2" style="height: 100px"></textarea>
                @error("discription")
                <div class="text-danger">
                    <p>{{ $message }}</p>
                </div>
            @enderror
                {{-- <label for="floatingTextarea2">الوصف</label> --}}
              </div>
              <button class="btn btn-sm btn-primary">حفظ المنتج <i class="fa fa-plus"></i></button>

        </form>
    </div>
</div>

@endsection
