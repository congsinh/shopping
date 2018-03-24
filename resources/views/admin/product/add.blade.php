@extends('admin.layout.master')
@section('title')
    <title>Admin - Add product</title>
@endsection
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <h1 class="page-header">Product
                        <small>Add</small>
                    </h1>
                </div>
                @include('admin.layout.notify')
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-12" style="padding-bottom:120px">
                <form action="admin/product" method="POST" enctype="multipart/form-data" >
                    {{csrf_field()}}
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Category</label>
                                <select class="form-control" name="category" id="category">
                                    <option value="">Please chose category...</option>
                                    @foreach($category as $cate)
                                        <option value="{{$cate->id}}">{{$cate->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label>SubCategory</label>
                                <select class="form-control" name="subcategory" id="subcategory">
                                    <option value="">Please chose sub category...</option>
                                    @foreach($subcategory as $sub)
                                        <option value="{{$sub->id}}">{{$sub->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label>Provider</label>
                                <select class="form-control" name="provider" id="provider">
                                    <option value="">Please chose provider...</option>
                                    @foreach($providers as $provider)
                                        <option value="{{$provider->id}}">{{$provider->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" type="text" name="name" placeholder="Please Enter Product Name" />
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-4">
                                <label>Price (VNĐ)</label>
                                <input class="form-control" type="hidden"  name="price" id="price" />
                                <input class="form-control" type="text"  name="price_show" id="price_show" placeholder="Please Enter Price" />
                            </div>
                            <div class="col-xs-4">
                                <label>Discount (VNĐ)</label>
                                <input class="form-control" type="hidden"  name="discount" id="discount" />
                                <input class="form-control" type="text"  name="discount_show" id="discount_show" placeholder="Please Enter Discount Price" />
                            </div>
                            <div class="col-xs-4">
                                <label>Quantity</label>
                                <input class="form-control" type="number" name="quantity" placeholder="Please Enter Quantity" min="1" max="100" value="1"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Images</label>
                        <input type="file" style="display:none" id="upload-input" multiple="multiple" name="image[]" accept="image/*">
                        <div id="upload" class="form-control drop-area">
                            <h3>Drag & drop images here</h3>
                            <button type="button" class="btn btn-primary btn-sm " id="btn_select">or click here to chose images !</button>
                            <div id="thumbnail" ></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Product Keywords</label>
                        <input class="form-control" type="text" name="keywords" placeholder="Please Enter Category Keywords" />
                    </div>
                    <div class="form-group">
                        <label>Product Description</label>
                        <textarea class="form-control"  name="desc"></textarea>
                    </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-default">Add</button>
                                <button type="reset" class="btn btn-default">Reset</button>
                            </div>

                    </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>

<!-- Your code to create an instance of Fine Uploader and bind to the DOM/template
====================================================================== -->

@endsection
@section('script')
    <script>
        $(document).ready(function(){
            $('#category').on('change',function(){
                 var category = this.value;
                $.ajax({
                    url:'admin/getSubcategory',
                    type:'POST',
                    data:{
                        category:category
                    },
                    // datatype:'json',
                    success:function(data){
                        $('#subcategory').html(data)
                    }
                });
            })
            $('#subcategory').on('change',function(){
                var subcategory = this.value;
                $.ajax({
                    url:'admin/getCategory',
                    type:'POST',
                    data:{
                        subcategory:subcategory
                    },
                    success:function(data){
                        $('#category').html(data);
                    }
                });
            });
            //format price
            $('#price_show').on('keyup',function(e){
                $('#price_show').val(accounting.formatMoney($(this).val(),"",0));
                $('#price').val(accounting.unformat($(this).val()));
            });
            $('#discount_show').on('keyup',function(e){
                $('#discount_show').val(accounting.formatMoney($(this).val(),"",0));
                $('#discount').val(accounting.unformat($(this).val()));
            });
            // ckeditor
            CKEDITOR.replace( 'desc', {
                filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
                filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
                filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
                filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
                filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
                filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
        });
            //drag & drop image
        jQuery(function($){
            var fileDiv = document.getElementById("upload");
            var fileInput = document.getElementById("upload-input");
            var btnSelect = document.getElementById('btn_select');
            fileInput.addEventListener("change",function(e){
                var files = this.files
                console.log(files);
                showThumbnail(files)
            },false)

            btnSelect.addEventListener("click",function(e){
                $(fileInput).show().focus().click().hide();
                e.preventDefault();
            },false)


            fileDiv.addEventListener("dragenter",function(e){
                e.stopPropagation();
                e.preventDefault();
            },false);

            fileDiv.addEventListener("dragover",function(e){
                e.stopPropagation();
                e.preventDefault();
            },false);

            fileDiv.addEventListener("drop",function(e){
                e.stopPropagation();
                e.preventDefault();
                var dt = e.dataTransfer;
                var files = dt.files;
                console.log(files);
                fileInput.files = files;
                showThumbnail(files)
            },false);

            function showThumbnail(files){
                $('.box-image').remove();
                for(var i=0;i<files.length;i++){
                    var file = files[i]

                    var container = document.createElement('div');
                    container.classList.add('box-image');

                    var image = document.createElement("img");
                    image.classList.add("img-thumbnail");
                    image.file = file;
                    container.appendChild(image);

                    var thumbnail = document.getElementById("thumbnail");
                    thumbnail.appendChild(container);

                    var reader = new FileReader()
                    reader.onload = (function(aImg){
                        return function(e){
                            aImg.src = e.target.result;
                        };
                    }(image))
                    var ret = reader.readAsDataURL(file);
                    var canvas = document.createElement("canvas");
                    ctx = canvas.getContext("2d");
                    image.onload= function(){
                        ctx.drawImage(image,100,100)
                    }
                }
            };
        });
        });
    </script>

@endsection




