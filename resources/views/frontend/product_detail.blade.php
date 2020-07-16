@extends('frontend.layouts.app')
@section('title') Sản phẩm @endsection
@section('content')
    <main>
    <section class="container">


        <ul class="b-crumbs">
            <li>
                <a href="index.html">
                    Trang chủ
                </a>
            </li>
            <li>
                <a href="catalog-gallery.html">
                    {{ $productDetail->category_product ? $productDetail->category_product->name : '' }}
                </a>
            </li>
            <li>
                <span>{{ $productDetail->name }}</span>
            </li>
        </ul>
        <h1 class="main-ttl"><span>{{ $productDetail->name }}</span></h1>
        <!-- Single Product - start -->
        <div class="prod-wrap">

            <!-- Product Images -->
            <div class="prod-slider-wrap">
                <div class="prod-slider">
                    <ul class="prod-slider-car">
                        <li>
                            <a data-fancybox-group="product" class="fancy-img" href="http://placehold.it/500x642">
                                <img src="{{ Storage::url('images/'.$productDetail->image) }}" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Product Description/Info -->
            <div class="prod-cont">
                <div class="prod-skuwrap">
                    <p class="prod-skuttl">SIZES</p>
                    <div class="offer-props-select">
                        <p>XL</p>
                        <ul>
                            <li><a href="#">XS</a></li>
                            <li><a href="#">S</a></li>
                            <li><a href="#">M</a></li>
                            <li><a href="#">L</a></li>
                            <li class="active"><a href="#">XL</a></li>
                            <li><a href="#">XXL</a></li>
                        </ul>
                    </div>
                </div>
                <div class="prod-info">
                    <p class="prod-price">
                        <b class="item_current_price">{{ $productDetail->price }}&nbsp;đ</b>
                    </p>
                    <p class="prod-qnt">
                        <input value="1" type="text">
                        <a href="#" class="prod-plus"><i class="fa fa-angle-up"></i></a>
                        <a href="#" class="prod-minus"><i class="fa fa-angle-down"></i></a>
                    </p>
                    <p class="prod-addwrap">
                        <a href="#" class="prod-add" rel="nofollow">Thêm giỏ hàng</a>
                    </p>
                    </br>
                </div>
                <div style="overflow: auto;">
                    Còn lại : <span style="color:red">{{ $productDetail->quantities }}</span>&nbsp;&nbsp;Sản phẩm
                </div>
            </div>

            <!-- Product Tabs -->
            <div class="prod-tabs-wrap">
                <div class="prod-tab-cont">
                    <h2><span>Mô tả</span></h2>
                    <div class="prod-tab stylization" id="prod-tab-1">
                        {!! $productDetail->description !!}
                    </div>
                    <div class="prod-tab prod-tab-video" id="prod-tab-3">
                        <iframe width="853" height="480" src="https://www.youtube.com/embed/kaOVHSkDoPY?rel=0&amp;showinfo=0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

        </div>
        <!-- Single Product - end -->

        <!-- Related Products - start -->
        <div class="prod-related">
            <h2><span>Sản phẩm liên quan</span></h2>
            <div class="prod-related-car" id="prod-related-car">
                <ul class="slides">
                    <li class="prod-rel-wrap">
                        @foreach($productRelated as $proRelated)
                            <div class="prod-rel">
                                <a href="product.html" class="prod-rel-img">
                                    <img src="{{ Storage::url('images/'.$proRelated->image) }}" alt="Adipisci aperiam commodi">
                                </a>
                                <div class="prod-rel-cont">
                                    <h3><a href="product.html">{{ $productDetail->name }}</a></h3>
                                    <p class="prod-rel-price">
                                        <b>{{ $productDetail->price }}&nbsp;đ</b>
                                    </p>
                                    <div class="prod-rel-actions">
                                        <p class="prod-i-addwrap">
                                            <a title="Thêm giỏ hàng" href="#" class="prod-i-add"><i class="fa fa-shopping-cart"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </li>
                </ul>
            </div>
        </div>
        <!-- Related Products - end -->

    </section>
</main>
@endsection
