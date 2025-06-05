@extends('dashboard.master')
@section('title', 'الرئيسيه')
{{-- @section('store'.$store->category->id.'-active', 'active') --}}
@section('content')

<div class="container-fluid">
    <div class="col-12">
        <a href="{{route('category.create')}}">
            <button style="float: right;" class="btn btn-sm btn-primary mb-2">اضافة منتج</button>
        </a>
        <form class="d-sm-inline-block form-inline">
            <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small"
                    placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <table style="direction: rtl;"
        class="table table-bordered table-hover text-center align-middle w-100">
        <thead class="bg-dark text-white">
            <tr>
                <th>#</th>
                <th>المنتج</th>
                <th>الصورة</th>
                <th>الوصف</th>
                <th>التحكم</th>
            </tr>
        </thead>
        <tbody>
<?php $id=0; ?>
            @forelse ($categorys as $category)
            <tr>
                <td>{{++$id}}</td>
                <td>{{$category->title}}</td>
                <td>
                    {{-- <img src="{{ asset('storage/' . $post->image) }}" alt="Uploaded Image"> --}}
                    <img style="width: 100px;" src="{{ asset('storage/' . $category->image) }}" alt="">
                </td>
                <td style="width: 40%;">{{$category->discription}}</td>
                <td>
                    <a href="{{route('category.edit',$category->id)}}">
                        <button class="btn btn-sm btn-primary">تعديل</button>
                    </a>
                    {{-- <button class="btn btn-sm btn-danger">حذف</button> --}}
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#del{{$category->id}}">
                        حذف
                      </button>

                    <a href="{{route('category.item' ,$category->id)}}">
                        <button class="btn btn-sm btn-warning">الاصناف</button>
                    </a>

                </td>
            </tr>
            <div class="modal fade" id="del{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                 <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">الحذف</h5>
                </div>
              <div class="modal-body">
              هل انت متاكد من حذف
                  </div>
              <div class="modal-footer">

              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">لا</button>
              <form action="{{ route('category.destroy', $category->id) }}" method="post">
                   @csrf
               @method('DELETE')
                   <a style="text-decoration:none;" href="">
                    <button class="btn btn-outline-danger btn-sm m-1">حذف</button>
                   </a>
            </form>
                 </div>
                   </div>
                       </div>
                 </div>
            @empty

     <tr>
    <td colspan="4" class="text-center">لا توجد بيانات</td>
        </tr>


            @endforelse


        </tbody>
    </table>



@endsection
