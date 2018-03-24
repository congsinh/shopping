@extends('admin.layout.master')
@section('title')
    <title>Admin - List product</title>
@endsection
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <h1 class="page-header">Product
                        <small>List</small>
                    </h1>
                </div>
                @include('admin.layout.notify')
            </div>
            <!-- /.col-lg-12 -->
            <div class="form-group">
                <div class="row">

                    <div class="col-sm-3 form-group">
                        <select id="filter-subcate" class="form-control" style="width:100% !important;"><option value="">Sub Category</option>@foreach($subcategory as $subcate)<option value="{{$subcate->name}}">{{$subcate->name}}</option>@endforeach</select>
                    </div>
                    <div class="col-sm-3 form-group">
                        <select id="filter-provider" class="form-control" style="width:100% !important;"><option value="">Provider</option>@foreach($providers as $provider)<option value="{{$provider->name}}">{{$provider->name}}</option>@endforeach</select>
                    </div>

                    <div class="col-sm-3 form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar">
                                </i>
                            </div>
                            <input id='filter-date' class="form-control" id="date" name="date" placeholder="Created_at" type="text">
                        </div>
                    </div>
                    <div class="col-sm-3 form-group">
                        {{--<select id="filter-provider" class="form-control" style="width:100% !important;"><option value="">Provider</option>@foreach($providers as $provider)<option value="{{$provider->name}}">{{$provider->name}}</option>@endforeach</select>--}}
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="checkbox_discount">
                            <label class="form-check-label" for="checkbox_discount">
                                SaleOff
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                <tr align="center">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Discount</th>
                    <th>Sales</th>
                    <th>Sub category</th>
                    <th>Created_at</th>
                    <th>Action</th>
                    <th>Provider</th>
                    <th>Saleoff</th>

                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                <tr class="odd gradeX" align="center">
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td><div class="d-inline">@foreach($product->listimage as $image) <img  class="img-thumbnail listimage" src="upload/images/products/{{$image->name}}" > @endforeach</div></td>
                    <td>{{number_format($product->price)}}đ</td>
                    <td>{{number_format($product->discount)}}đ</td>
                    <td>{{$product->sales}}</td>
                    <td>{{$product->subcategories->name}}</td>
                    <td>{{date('Y-m-d',strtotime($product->created_at))}}</td>
                    <td>
                        <a href="{{ route('product.show',['id'=>$product->id]) }}"
                           class="btn btn-info btn-xs" style="margin:2px !important"><i class="fa fa-eye fa-fw"></i><span>View</span></a>
                        <a href="" class="btn btn-danger btn-xs  del" style="margin:2px !important" data-toggle="modal"
                       data-target="#modal-del"><i class="glyphicon glyphicon-trash fa-fw"></i><span>Delete</span>
                            <form method="post" action="{{route('product.destroy',['id'=>$product->id]) }}">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                            </form>
                        </a>
                    </td>
                    <td>{{$product->provider->name}}</td>
                    <td>@if(empty($product->discount))  {{"0"}} @else {{"1"}} @endif</td>
                </tr>
                @endforeach

                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>


@include('admin.layout.modal-del')
@endsection
@section("script")
    <script>

        $(document).ready(function(){
            // DataTable
            var table = $('#dataTables-example').DataTable( {
                'responsive':true,
                'destroy':true,
                'vertical-align': 'middle',
                "order": [
                            [ 7, "desc" ],
                            [ 0, "desc" ]
                        ],
                "columnDefs": [
                // <th>ID</th>
                // <th>Name</th>
                // <th>Image</th>
                // <th>Price</th>
                // <th>Saleoff</th>
                // <th>Sales</th>
                // <th>Sub category</th>
                // <th>Created_at</th>
                // <th>Action</th>
                // <th>Provider</th>
                // <th>Discount</th>
                    { "orderable": true, "targets": [0,3,5,7] },
                    { "orderable": false, "targets": [1,2,4,6,8] },//disable ordering column
                    {'visible':false,'targets':[9,10]},
                    {"width": "5%", "targets": [0,3,4,5]},
                    {"width": "10%", "targets": [6,7,8]},
                    {"width": "15%", "targets": [1]},
                ]
            } );
            $('#filter-subcate').on('change',function() {
                var value = this.value;
                table.column(6).search("^(?=.?(" + value + ")).?",true,true).draw();
            });
            $('#filter-provider').on('change',function() {
                var value = this.value;
                table.column(9).search("^(?=.?(" + value + ")).?",true,true).draw();
            });
            $('#filter-date').on('change',function() {
                var value = this.value;
                table.column(7).search("^(?=.?(" + value + ")).?",true,true).draw();
            });
            $('#checkbox_discount').on('change',function() {
                if(this.checked){
                    table.column(10).search("^(?=.?(" + 1 + ")).?",true,false).draw();
                }
                else{
                    table.column(10).search("",false,false).draw();
                }

            });
        //    DatePicker

        });




    </script>
@endsection