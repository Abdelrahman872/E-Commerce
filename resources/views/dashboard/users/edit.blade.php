@extends('dashboard.master')
@section('title', 'تعديل المستخدم')
{{-- @section('store'.$store->category->id.'-active', 'active') --}}
@section('content')



<div  style="direction: rtl;" class="container-fluid">
    <div class="container">
        <form style="direction: rtl;"  method="post" action="{{route('users.update',$user->id)}}">
            @method('PUT')
            @csrf
            <div class="mb-3 d-flex align-items-center">
                <input type="text"  name="name" value="{{$user->name}}" class="form-control" id="floatingInput" placeholder="اسم المستخدم  . . . ">
                @error("name")
                <div class="text-danger">
                    <p>{{ $message }}</p>
                </div>
            @enderror
                <!-- <label for="floatingInput">Email address</label> -->
              </div>
              <div class="mb-3 d-flex align-items-center">
                <input type="number" name="mobile" value="{{$user->mobile}}" class="form-control" id="floatingInput" placeholder="الموبايل . . . ">
                @error("mobile")
                <div class="text-danger">
                    <p>{{ $message }}</p>
                </div>
            @enderror
                <!-- <label for="floatingInput">Email address</label> -->
              </div>
              <div class="mb-3 d-flex align-items-center">
                <input type="password" name="password" value="{{$user->password}}" class="form-control" id="floatingInput" placeholder="الباسورد . . . ">
                @error("password")
                <div class="text-danger">
                    <p>{{ $message }}</p>
                </div>
            @enderror
                <!-- <label for="floatingInput">Email address</label> -->
              </div>
              {{-- <div class="mb-3 d-flex align-items-center">
                <input type="password" class="form-control" id="floatingInput" placeholder="تأكيد الباسورد . . . ">
                <!-- <label for="floatingInput">Email address</label> -->
              </div> --}}
              <button class="btn btn-sm btn-success">حفظ التغيرات</button>

        </form>
    </div>
</div>
<!-- /.container-fluid -->

<!-- End of Main Content -->


@endsection
