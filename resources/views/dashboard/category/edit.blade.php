@extends('dashboard.master')
@section('title', 'تعديل المنتج')
{{-- @section('store'.$store->category->id.'-active', 'active') --}}
@section('content')

<div  style="direction: rtl;" class="container-fluid">
    <div class="container">
        <form style="direction: rtl;" enctype="multipart/form-data" method="post" action="{{route('category.update',$category->id)}}">
            @method('PUT')
            @csrf
            <div class="mb-3 d-flex align-items-center">
                <input type="text" name="title" value="{{$category->title}}" class="form-control" id="floatingInput" placeholder="اسم المنتج . . . ">
                @error("title")
                <div class="text-danger">
                    <p>{{ $message }}</p>
                </div>
            @enderror
                <!-- <label for="floatingInput">Email address</label> -->
              </div>
              <div class="mb-3 d-flex align-items-center">
                <input style="height: 45px;" name='image' type="file" value="{{$category->image}}" class="form-control" id="floatingPassword">
                <img style="width: 100px;" src="{{ asset('storage/' . $category->image) }}" alt="">

                <!-- <label for="floatingPassword">Password</label> -->
              </div>
              <div class="mb-3 d-flex align-items-center">
                <textarea class="form-control"  name="discription" placeholder="الوصف . . . " id="floatingTextarea2" style="height: 100px">{{$category->discription}}</textarea>
                @error("discription")
                <div class="text-danger">
                    <p>{{ $message }}</p>
                </div>
            @enderror
                <!-- <label for="floatingTextarea2">Comments</label> -->
              </div>
              <button class="btn btn-sm btn-success">حفظ التغييرات</button>

        </form>
    </div>
</div>


@endsection
