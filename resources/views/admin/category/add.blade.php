@extends('admin.layout.master')
@section('title')
    <title>Admin - Add categories</title>
@endsection
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Category
                        <small>Add</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    @include('admin.layout.notify')
                        <form action="admin/category" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Category Name</label>
                            <input class="form-control" name="name" placeholder="Please Enter Category Name"/>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file"  id="image"  name="image" accept="image/*">
                            <img id='img_display' class="thumbnail " width='200px' height='200px' style="display:none;margin-top: 20px">
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
@section('script')
    <script>
        $(document).ready(function(){
            $('#image').change(function(){
                if(this.files && this.files[0]){
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#img_display').attr({
                        'src':e.target.result
                    });
                    $('#img_display').css({
                        display:'block'
                    })
                }
                reader.readAsDataURL(this.files[0]);
                }
            });
        });
    </script>
@endsection