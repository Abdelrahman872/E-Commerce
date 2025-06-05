@extends('dashboard.master')
@section('title', 'المستخدمين')
{{-- @section('store'.$store->category->id.'-active', 'active') --}}
@section('content')


<div id="content">


    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <div  style="direction: rtl;" class="container-fluid">
        <div class="container">
            <form style="direction: rtl;"  method="POST" action="{{route('users.store')}}">
                @csrf
                <div class="mb-3 d-flex align-items-center">
                    <input type="text"  name='name'   class="form-control" id="floatingInput" placeholder="اسم المستخدم  . . . ">
                    @error("name")
                    <div class="text-danger">
                        <p>{{ $message }}</p>
                    </div>
                @enderror
                    <!-- <label for="floatingInput">Email address</label> -->
                  </div>
                  <div class="mb-3 d-flex align-items-center">
                    <input type="number" name='mobile'  class="form-control" id="floatingInput" placeholder="الموبايل . . . ">
                    @error("mobile")
                    <div class="text-danger">
                        <p>{{ $message }}</p>
                    </div>
                @enderror
                    <!-- <label for="floatingInput">Email address</label> -->
                  </div>
                  <div class="mb-3 d-flex align-items-center">
                    <input type="password"  name='password' class="form-control" id="floatingInput" placeholder="الباسورد . . . ">
                    @error("password")
                    <div class="text-danger">
                        <p>{{ $message }}</p>
                    </div>
                @enderror
                    <!-- <label for="floatingInput">Email address</label> -->
                  </div>
                  {{-- <div class="mb-3 d-flex align-items-center">
                    <input type="password" name=''  class="form-control" id="floatingInput" placeholder="تأكيد الباسورد . . . ">
                    <!-- <label for="floatingInput">Email address</label> -->
                  </div> --}}
                  <button class="btn btn-sm btn-primary">اضافة مستخدم <i class="fa fa-plus"></i></button>

            </form>
        </div>
    </div>
    <!-- /.container-fluid -->

</div>



@endsection
