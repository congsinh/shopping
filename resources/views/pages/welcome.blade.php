@extends('pages.layout.master')
@section('title')
    <meta title="Sin shop - Fashion for you">
@endsection
@section('content')

    {{--saleoff--}}
    @include('pages.layout.slide')
    @include('pages.layout.category')
    <section  class="container mt40">
        <h1 class="heading1"><span class="maintext">Sale off Products</span><span class="subtext"> See Our Most Sale Off Products</span></h1>
        <div id="saleoff">
            @foreach($sale_product as $sale)
            <div class="col-4">
                <div class="thumbnail">
                    <span class="sale tooltip-test" data-original-title=""></span>
                    <a class="prdocutname" href="product.html">@if(strlen($sale->name) <= 60){{$sale->name}} @else {{substr($sale->name,0,60)."..."}}@endif</a>
                    <a href="#">
                        <img alt="" src="upload/images/products/{{$sale->listimage->first()->name}}"></a>
                    <div class="pricetag">
                        <span class="spiral"></span><a href="#" class="productcart"><span class="add-text">ADD TO CART</span></a>
                        <div class="price">
                            <div class="pricenew">{{ number_format($sale->price - $sale->discount) }}đ</div>
                            <div class="priceold">{{ number_format($sale->price) }}đ</div>
                        </div>

                    </div>
                    <div class="rate clearfix">
                        <div class="rating_star">
                            <li class="on"></li>
                            <li class="on"></li>
                            <li class="on"></li>
                            <li class="off"></li>
                            <li class="off"></li>
                            <span class="reviews">(100)</span>
                        </div>
                        <div class="sales">{{ $sale->sales }} sales</div>

                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </section>
    <!-- Popular Product-->
    <section  class="container mt40">
        <h1 class="heading1"><span class="maintext">Popular Products</span><span class="subtext"> See Our Most Popular Products</span></h1>
        <div id="popular">
            @foreach($popular_product as $popular)
                <div class="col-4">
                    <div class="thumbnail">
                        @if($popular->discount != 0)
                        <span class="sale tooltip-test" data-original-title=""></span>
                        @endif
                        <a class="prdocutname" href="product.html">@if(strlen($popular->name) <= 60){{$popular->name}} @else {{substr($sale->name,0,60)."..."}}@endif</a>
                        <a href="#">
                            <img alt="" src="upload/images/products/{{$popular->listimage->first()->name}}"></a>
                        <div class="pricetag">
                            <span class="spiral"></span><a href="#" class="productcart"><span class="add-text">ADD TO CART</span></a>
                            <div class="price">
                                @if($popular->discount != 0)
                                    <div class="pricenew">{{ number_format($popular->price - $popular->discount) }}đ</div>
                                    <div class="priceold">{{ number_format($popular->price) }}đ</div>
                                @else
                                    <div class="pricenew" style="margin-top: 10px;">{{ number_format($popular->price) }}đ</div>
                                @endif
                            </div>

                        </div>
                        <div class="rate clearfix">
                            <div class="rating_star">
                                <li class="on"></li>
                                <li class="on"></li>
                                <li class="on"></li>
                                <li class="off"></li>
                                <li class="off"></li>
                                <span class="reviews">(100)</span>
                            </div>
                            <div class="sales">{{ $popular->sales }} sales</div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{--<button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next" role="button" style="display: block;">Next</button>--}}
    </section>
    <!-- Popular Brands-->
    <section id="popularbrands" class="container mt40">
        <h1 class="heading1"><span class="maintext">Popular Brands</span><span class="subtext"> See Our  Popular Brands</span></h1>
        <div class="brandcarousalrelative">
            <ul id="brandcarousal">
                <li><img src="img/brand1.jpg" alt="" title=""/></li>
                <li><img src="img/brand2.jpg" alt="" title=""/></li>
                <li><img src="img/brand3.jpg" alt="" title=""/></li>
                <li><img src="img/brand4.jpg" alt="" title=""/></li>
                <li><img src="img/brand1.jpg" alt="" title=""/></li>
                <li><img src="img/brand2.jpg" alt="" title=""/></li>
                <li><img src="img/brand3.jpg" alt="" title=""/></li>
            </ul>
            <div class="clearfix"></div>
            <a id="brand-prev" class="prev" href="#">&lt;</a>
            <a id="brand-next" class="next" href="#">&gt;</a>
        </div>
    </section>
@endsection

