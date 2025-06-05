@extends('dashboard.master')
@section('title', 'المستخدمين')
{{-- @section('store'.$store->category->id.'-active', 'active') --}}
@section('content')

<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <div class="col-12">
                <a href="{{route('users.create')}}">
                    <button style="float: right;" class="btn btn-sm btn-primary mb-2">اضافة مستخدم</button>
                </a>
                <form class="d-sm-inline-block form-inline"  action="{{ route('users.search') }}" method="GET">
                    <div class="input-group">
                        <input type="text" name="query" class="form-control bg-light border-0 small"
                            placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                            <button style="margin-left: 2px" class="btn btn-primary refresh-btn" onclick="location.reload();">
                                <i class="fas fa-sync-alt"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <table style="direction: rtl;" class="table table-bordered table-hover text-center align-middle w-100">
                <thead class="bg-dark text-white">
                    <tr>
                        <th>#</th>
                        <th>الاسم</th>
                        <th>الموبايل</th>
                        <th>التحكم</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $id=0; ?>
                    @forelse ($users as $user)
                    <tr>
                        <td>{{++$id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->mobile}}</td>
                        <td>
                            <a href="{{route('users.edit',$user->id)}}">
                                <button class="btn btn-sm btn-primary">تعديل</button>
                            </a>
                            {{-- <button class="btn btn-sm btn-danger">حذف</button> --}}
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#del{{$user->id}}">
                                حذف
                              </button>

                        </td>
                    </tr>
                    <div class="modal fade" id="del{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                      <form action="{{ route('users.destroy', $user->id) }}" method="post">
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
        </div>
    </div>
</div>

        <!-- /.container-fluid -->

    {{-- </div> --}}
    <!-- End of Main Content -->


@endsection

{{-- https://otl.magpro-lc.com/public/api/customer/cart_check?customer_id=0&unit_id=47 --}}
