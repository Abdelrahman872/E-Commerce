@extends('dashboard.master')
@section('title', 'تعديل منتج')
{{-- @section('store'.$store->category->id.'-active', 'active') --}}
@section('content')



<div  style="direction: rtl;" class="container-fluid">
    <div class="container">
        <form style="direction: rtl;" enctype="multipart/form-data" method="post" action="{{route('item.update',$items->id)}}">
            @method('PUT')
            @csrf
            <div class="mb-3 d-flex align-items-center">
                <input type="text" name='title' value="{{$items->title}}" class="form-control" id="floatingInput" placeholder="اسم المنتج . . . ">
                @error("title")
                <div class="text-danger">
                    <p>{{ $message }}</p>
                </div>
            @enderror
                <!-- <label for="floatingInput">Email address</label> -->
              </div>
              <div class="mb-3 d-flex align-items-center">
                <input  name='image' style="height: 45px;" type="file" class="form-control" id="floatingPassword">
                @error("image")
                <div class="text-danger">
                    <p>{{ $message }}</p>
                </div>
                @enderror
            </div>
            <img style="width: 100px;"  src="{{ asset('storage/' . $items->image) }}" alt="" ><br><br>
              <div class="mb-3 d-flex align-items-center">
                <textarea name='description'  class="form-control" placeholder="الوصف . . . " id="floatingTextarea2" style="height: 100px">{{$items->description}}</textarea>
                <!-- <label for="floatingTextarea2">Comments</label> -->
                @error("description")
                <div class="text-danger">
                    <p>{{ $message }}</p>
                </div>
            @enderror
              </div>
              <button class="btn btn-sm btn-success">حفظ التغييرات</button>

        </form>
    </div>
</div>

@endsection
