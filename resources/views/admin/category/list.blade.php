@extends('admin.layout.master')
@section('title')
    <title>Admin - List categories</title>
@endsection
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                            <h1 class="page-header">Category
                                <a href="admin/category/create" class="btn btn-primary btn-md ">Add new</a>
                            </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    @include('admin.layout.notify')
                    <table class="table table-striped table-bordered table-hover " id="table-cate" >
                        <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Alias</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($category as $cate)
                            <tr class="odd gradeX" align="center">
                                <td>{{$cate->id}}</td>
                                <td>{{$cate->name}}</td>
                                <td>{{$cate->alias}}</td>
                                <th style="text-align: center">
                                    <div class="d-inline">
                                        <img  class="img-thumbnail listimage" src="upload/images/img_category/{{$cate->image}}" >
                                    </div>
                                </th>
                                <td>
                                    <a href="{{ route('category.show',['id'=>$cate->id]) }}"
                                       class="btn btn-info btn-xs"><i class="fa fa-eye fa-fw"></i><span>View</span></a>
                                    <a href="" class="btn btn-danger btn-xs del" data-toggle="modal"
                                       data-target="#modal-del"><i class="glyphicon glyphicon-trash fa-fw"></i><span>Delete</span>
                                        <form method="post" action="{{route('category.destroy',['id'=>$cate->id]) }}">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="DELETE">
                                        </form>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <!-- /.row -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <h1 class="page-header">Sub-category
                            <a href="admin/subcategory/create" class="btn btn-primary btn-md ">Add new</a>
                        </h1>
                    </div>

                    <!-- /.col-lg-12 -->
                    @if(session('sub-success'))
                        <div class="row notify">
                            <div class="alert alert-success">{{session('sub-success')}}</div>
                        </div>
                    @endif

                    <table class="table table-striped table-bordered table-hover" id="table-sub">
                        <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Alias</th>
                            <th><select id="filter" class="form-control" style="width:100% !important;"><option value="">Category</option>@foreach($category as $cate)<option value="{{$cate->name}}">{{$cate->name}}</option>@endforeach</select></th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody id="data">
                        @foreach($subcategory as $sub)
                            <tr class="odd gradeX" align="center">
                                <td>{{$sub->id}}</td>
                                <td>{{$sub->name}}</td>
                                <td>{{$sub->alias}}</td>
                                <td>{{$sub->categories->name}}</td>
                                <td>
                                    <a href="{{ route('subcategory.show',['id'=>$sub->id]) }}"
                                       class="btn btn-info btn-xs"><i class="fa fa-eye fa-fw"></i><span>View</span></a>
                                    <a href="" class="btn btn-danger btn-xs del" data-toggle="modal"
                                       data-target="#modal-del"><i class="glyphicon glyphicon-trash fa-fw"></i><span>Delete</span>
                                        <form method="post" action="{{route('subcategory.destroy',['id'=>$sub->id]) }}">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="DELETE">
                                        </form>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <!-- /.row -->
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
    </div>
    @include('admin.layout.modal-del')
@endsection
@section("script")
    <script>

            $(document).ready(function(){
                $('#table-cate').DataTable({
                    "columnDefs": [
                        { "orderable": true, "targets": 0 },
                        { "orderable": false, "targets": [1,2,3] }
                    ]
                });
                $('#table-sub').DataTable( {
                    "columnDefs": [
                        { "orderable": true, "targets": 0 },
                        { "orderable": false, "targets": [1,2,3,4] }//disable ordering column
                    ]
                } );
                $('#filter').on('change',function() {
                    var value = this.value;
                    $('#table-sub').DataTable().column(3).search("^(?=.?(" + value + ")).?",
                        true,false).draw();//false : dont' show value on input search
                });


            });


    </script>
@endsection
