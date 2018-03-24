@extends('admin.layout.master')
@section('title')
    <title>Admin - Add categories</title>
@endsection
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Sub Category
                        <small>Add</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    @include('admin.layout.notify')
                        <form action="admin/subcategory" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Category Name</label>
                            <select name="category" id="category" class="form-control">
                                <option value="">Please chose category...</option>
                                @foreach($category as $sub)
                                    <option value="{{$sub->id}}">{{$sub->name}}</option>
                                @endforeach
                            </select>
                         </div>
                        <div class="form-group">
                            <label>SubCategory Name</label>
                            <input class="form-control" name="subcategory" placeholder="Please Enter Sub Category Name..."/>
                        </div>
                        <button type="submit" class="btn btn-default">Add</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                        </form>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
    </div>
@endsection