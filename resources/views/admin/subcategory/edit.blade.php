@extends('admin.layout.master')
@section('title')
    <title>Admin - View/Edit categories</title>
@endsection
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Sub Category
                        <small>View/Edit</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">

                    <form action="{{ route('subcategory.update',['id'=>$subcategory->id]) }}" method="POST">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="PUT">
                        <div class="form-group">
                            <label>Category Name</label>
                            <select name="category" id="category" class="form-control">
                                <option value="">Please chose sub category...</option>
                                @foreach($category as $cate)
                                    <option value="{{$cate->id}}"  @if($cate->id == $subcategory->cate_id) selected @endif >{{$cate->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Category Name</label>
                            <input class="form-control" name="subcategory"  value="{{$subcategory->name}}" id="subcategory" />
                        </div>
                        <button type="submit" class="btn btn-default">Save</button>
                        <a href="{{ route('category.index') }}"><button type="button" class="btn btn-default">Back</button></a>
                        </form>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
    </div>
@endsection
