<section  class="container mt40">
    <h1 class="heading1"><span class="maintext">Category</span></h1>
    <div id="category">
        @foreach($category as $cate)
        <div class="category_item">
            <a href=""><img src="upload/images/img_category/{{$cate->image}}" alt="{{$cate->name}}" title="{{$cate->name}}"/>
                <div class="category_name">{{$cate->name}}</div></a>
        </div>
        @endforeach
    </div>

</section>