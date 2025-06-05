@extends('dashboard.master')
@section('title', 'اضافه صور')
{{-- @section('store'.$store->category->id.'-active', 'active') --}}
@section('content')
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div  style="direction: rtl;" class="container-fluid">
    <div class="container">
  <form style="direction: rtl;" enctype="multipart/form-data" method="POST" action="{{route('item_photo')}}">
    @csrf
    <div class="mb-3 d-flex align-items-center">
        <input style="height: 45px;" name="images[]" multiple type="file" class="form-control" id="floatingPassword">

        @error("images")
        <div class="text-danger">
            <p>{{ $message }}</p>
        </div>
        @enderror

        <input type="hidden" name='item_id' value="{{$item_id}}">
    </div>

    <div class="text-end">
        <button style="margin-top: 10px;" class="btn btn-sm btn-primary">
            اضافه صور <i class="fa fa-plus"></i>
        </button>
    </div>
</form>
</div>

</div>

@endsection


