@extends('admin.layout.master')
@section('title')
    <title>Admin - View/Edit categories</title>
@endsection
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Category
                        <small>View/Edit</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    @include('admin.layout.notify')
                    <form action="{{ route('category.update',['id'=>$category->id]) }}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="PUT">
                        <div class="form-group">
                            <label>Category Name</label>
                            <input class="form-control" name="name"  id="name" value="{{ $category->name }}" />
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file"  id="image"  name="image"  accept="image/*">
                            <img id='img_display' class="thumbnail " width='200px' height='200px' src="upload/images/img_category/{{$category->image}}" style="margin-top: 20px">
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
@section('script')
    <script>
        $(document).ready(function(){
            $('#image').change(function(){
                if(this.files && this.files[0]){
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#img_display').attr('src',e.target.result);
                    }
                    reader.readAsDataURL(this.files[0]);
                }
            });
        });
    </script>
@endsection
