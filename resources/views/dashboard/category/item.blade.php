@extends('dashboard.master')
@section('title', 'الاصناف')
@section('content')




        <!-- Begin Page Content -->
        <div class="container-fluid">
            <div class="col-12">
                <a href="{{route('item.create',$cat_id)}}">
                    <button style="float: right;" class="btn btn-sm btn-primary mb-2">اضافة صنف</button>
                </a>
                {{-- <form class="d-sm-inline-block form-inline" action="" method="GET">
                    <div class="input-group">
                        <input type="text" name="query"  class="form-control bg-light border-0 small"
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
                </form> --}}
            </div>
            <table style="direction: rtl;" class="table table-bordered table-hover text-center align-middle w-100">
                <thead class="bg-dark text-white">
                    <tr>
                        <th>#</th>
                        <th>الصنف</th>
                        <th>السعر</th>
                        <th >بلد المصنع</th>
                        <th>التحكم</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $id=0; ?>
                    @forelse ($items as $item)
                    <tr>
                        <td>{{++$id}}</td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->price}}</td>
                        <td>{{$item->made_in}}</td>
                        <td>
                            <a href="{{route('item.edit' ,$item->id)}}">
                                <button class="btn btn-sm btn-primary">تعديل</button>
                            </a>
                            {{-- <button class="btn btn-sm btn-danger">حذف</button> --}}
   <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#{{$item->id}}">
    حذف
  </button>
  {{-- <a href="{{route('image_item',$item->id)}}">
    <button class="btn btn-sm btn-secondary">اضافه صور المنتج </button>
</a> --}}
               <a href="{{route('item_detalis',$item->id)}}">
                                <button class="btn btn-sm btn-success">بيانات الصنف</button>
                            </a>
                        </td>
                    </tr>
                    <div class="modal fade" id="{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                      <form action="{{ route('item.destroy', $item->id) }}" method="post">
                           @csrf
                       @method('DELETE')
                           <a style="text-decoration:none;" href="{{ route('item.destroy', $item->id) }}">
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
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Your Website 2021</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>


@endsection
