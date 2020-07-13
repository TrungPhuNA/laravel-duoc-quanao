@extends('frontend.layouts.app')
@section('title') Danh sách loại sản phẩm @endsection
@section('content')
    <main>
    <section class="container">


        <!-- Slider -->
        <div class="fr-slider-wrap">
            <div class="fr-slider">
                <ul class="slides">
                    <li>
                        <img src="img/slider/slide2.jpg" height="480" width="1140"  alt="">
                    </li>
                    <li>
                        <img src="img/slider/slide3.png" height="480" width="1140"  alt="">
                    </li>
                    <li>
                        <img src="img/slider/slide4.jpg" height="480" width="1140"  alt="">
                    </li>
                </ul>
            </div>
        </div>


        <!-- Popular Products -->
        <div class="fr-pop-wrap">

            <h3 class="component-ttl"><span>Sản phẩm nổi tiếng</span></h3>

            <ul class="fr-pop-tabs sections-show">
                <li><a data-frpoptab-num="1" data-frpoptab="#frpoptab-tab-1" href="#" class="active">Tât cả sản phẩm</a></li>
                <li><a data-frpoptab-num="2" data-frpoptab="#frpoptab-tab-2" href="#">Mũ</a></li>
                <li><a data-frpoptab-num="3" data-frpoptab="#frpoptab-tab-3" href="#">Quần</a></li>
                <li><a data-frpoptab-num="4" data-frpoptab="#frpoptab-tab-4" href="#">Áo</a></li>
                <li><a data-frpoptab-num="5" data-frpoptab="#frpoptab-tab-5" href="#">Giày/dép</a></li>
            </ul>

            <div class="fr-pop-tab-cont">

                <p data-frpoptab-num="1" class="fr-pop-tab-mob active" data-frpoptab="#frpoptab-tab-1">All Categories</p>
                <div class="flexslider prod-items fr-pop-tab" id="frpoptab-tab-1">

                    <ul class="slides">

                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="img/images.jpg" alt="Aspernatur excepturi rem"><!-- NO SPACE --></a>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Thêm giỏ hàng</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">ảnh</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$90</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="img/images.jpg" alt="Aspernatur excepturi rem"><!-- NO SPACE --></a>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Thêm giỏ hàng</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">ảnh</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$90</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="img/images.jpg" alt="Aspernatur excepturi rem"><!-- NO SPACE --></a>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Thêm giỏ hàng</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">ảnh</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$90</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="img/images.jpg" alt="Aspernatur excepturi rem"><!-- NO SPACE --></a>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Thêm giỏ hàng</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">ảnh</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$90</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="img/images.jpg" alt="Aspernatur excepturi rem"><!-- NO SPACE --></a>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Thêm giỏ hàng</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">ảnh</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$90</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="img/images.jpg" alt="Aspernatur excepturi rem"><!-- NO SPACE --></a>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Thêm giỏ hàng</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">ảnh</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$90</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="img/images.jpg" alt="Aspernatur excepturi rem"><!-- NO SPACE --></a>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Thêm giỏ hàng</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">ảnh</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$90</b>
                            </p>
                        </li>
                    </ul>

                </div>

                <p data-frpoptab-num="2" class="fr-pop-tab-mob" data-frpoptab="#frpoptab-tab-2">Kids</p>
                <div class="flexslider prod-items fr-pop-tab" id="frpoptab-tab-2">

                    <ul class="slides">

                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="img/images.jpg" alt="Aspernatur excepturi rem"><!-- NO SPACE --></a>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Chi tiết</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">ảnh</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$90</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="img/images.jpg" alt="Aspernatur excepturi rem"><!-- NO SPACE --></a>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Chi tiết</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">ảnh</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$90</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="img/images.jpg" alt="Aspernatur excepturi rem"><!-- NO SPACE --></a>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Chi tiết</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">ảnh</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$90</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="img/images.jpg" alt="Aspernatur excepturi rem"><!-- NO SPACE --></a>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Chi tiết</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">ảnh</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$90</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="img/images.jpg" alt="Aspernatur excepturi rem"><!-- NO SPACE --></a>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Thêm giỏ hàng</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">ảnh</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$90</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="img/images.jpg" alt="Aspernatur excepturi rem"><!-- NO SPACE --></a>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Thêm giỏ hàng</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">ảnh</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$90</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="img/images.jpg" alt="Aspernatur excepturi rem"><!-- NO SPACE --></a>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Thêm giỏ hàng</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">ảnh</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$90</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="img/images.jpg" alt="Aspernatur excepturi rem"><!-- NO SPACE --></a>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Thêm giỏ hàng</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">ảnh</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$90</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="img/images.jpg" alt="Aspernatur excepturi rem"><!-- NO SPACE --></a>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Thêm giỏ hàng</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">ảnh</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$90</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="img/images.jpg" alt="Aspernatur excepturi rem"><!-- NO SPACE --></a>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Thêm giỏ hàng</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">ảnh</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$90</b>
                            </p>
                        </li>

                    </ul>
                </div>

                <p data-frpoptab-num="3" class="fr-pop-tab-mob" data-frpoptab="#frpoptab-tab-3">Women</p>
                <div class="flexslider prod-items fr-pop-tab" id="frpoptab-tab-3">

                    <ul class="slides">

                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="img/images.jpg" alt="Aspernatur excepturi rem"><!-- NO SPACE --></a>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Thêm giỏ hàng</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">ảnh</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$90</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="img/images.jpg" alt="Aspernatur excepturi rem"><!-- NO SPACE --></a>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Thêm giỏ hàng</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">ảnh</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$90</b>
                            </p>
                        </li><li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="img/images.jpg" alt="Aspernatur excepturi rem"><!-- NO SPACE --></a>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Thêm giỏ hàng</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">ảnh</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$90</b>
                            </p>
                        </li><li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="img/images.jpg" alt="Aspernatur excepturi rem"><!-- NO SPACE --></a>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Thêm giỏ hàng</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">ảnh</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$90</b>
                            </p>
                        </li><li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="img/images.jpg" alt="Aspernatur excepturi rem"><!-- NO SPACE --></a>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Thêm giỏ hàng</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">ảnh</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$90</b>
                            </p>
                        </li><li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="img/images.jpg" alt="Aspernatur excepturi rem"><!-- NO SPACE --></a>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Thêm giỏ hàng</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">ảnh</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$90</b>
                            </p>
                        </li>
                        
                    </ul>
                </div>

                <p data-frpoptab-num="4" class="fr-pop-tab-mob" data-frpoptab="#frpoptab-tab-4">Men</p>
                <div class="flexslider prod-items fr-pop-tab" id="frpoptab-tab-4">

                    <ul class="slides">
                
                    <li class="prod-i">
                        <div class="prod-i-top">
                            <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="img/images.jpg" alt="Aspernatur excepturi rem"><!-- NO SPACE --></a>
                            <p class="prod-i-addwrap">
                                <a href="#" class="prod-i-add">Thêm giỏ hàng</a>
                            </p>
                        </div>
                        <h3>
                            <a href="product.html">ảnh</a>
                        </h3>
                        <p class="prod-i-price">
                            <b>$90</b>
                        </p>
                    </li>

                    <li class="prod-i">
                        <div class="prod-i-top">
                            <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="img/images.jpg" alt="Aspernatur excepturi rem"><!-- NO SPACE --></a>
                            <p class="prod-i-addwrap">
                                <a href="#" class="prod-i-add">Thêm giỏ hàng</a>
                            </p>
                        </div>
                        <h3>
                            <a href="product.html">ảnh</a>
                        </h3>
                        <p class="prod-i-price">
                            <b>$90</b>
                        </p>
                    </li>
                    <li class="prod-i">
                        <div class="prod-i-top">
                            <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="img/images.jpg" alt="Aspernatur excepturi rem"><!-- NO SPACE --></a>
                            <p class="prod-i-addwrap">
                                <a href="#" class="prod-i-add">Thêm giỏ hàng</a>
                            </p>
                        </div>
                        <h3>
                            <a href="product.html">ảnh</a>
                        </h3>
                        <p class="prod-i-price">
                            <b>$90</b>
                        </p>
                    </li>
                    <li class="prod-i">
                        <div class="prod-i-top">
                            <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="img/images.jpg" alt="Aspernatur excepturi rem"><!-- NO SPACE --></a>
                            <p class="prod-i-addwrap">
                                <a href="#" class="prod-i-add">Thêm giỏ hàng</a>
                            </p>
                        </div>
                        <h3>
                            <a href="product.html">ảnh</a>
                        </h3>
                        <p class="prod-i-price">
                            <b>$90</b>
                        </p>
                    </li>
                    <li class="prod-i">
                        <div class="prod-i-top">
                            <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="img/images.jpg" alt="Aspernatur excepturi rem"><!-- NO SPACE --></a>
                            <p class="prod-i-addwrap">
                                <a href="#" class="prod-i-add">Thêm giỏ hàng</a>
                            </p>
                        </div>
                        <h3>
                            <a href="product.html">ảnh</a>
                        </h3>
                        <p class="prod-i-price">
                            <b>$90</b>
                        </p>
                    </li>

                    </ul>

                </div>


                <p data-frpoptab-num="5" class="fr-pop-tab-mob" data-frpoptab="#frpoptab-tab-5">Shoes</p>
                <div class="flexslider prod-items fr-pop-tab" id="frpoptab-tab-5">

                    <ul class="slides">

                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="img/images.jpg" alt="Aspernatur excepturi rem"><!-- NO SPACE --></a>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Thêm giỏ hàng</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">ảnh</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$90</b>
                            </p>
                        </li>

                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="img/images.jpg" alt="Aspernatur excepturi rem"><!-- NO SPACE --></a>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Thêm giỏ hàng</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">ảnh</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$90</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="img/images.jpg" alt="Aspernatur excepturi rem"><!-- NO SPACE --></a>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Thêm giỏ hàng</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">ảnh</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$90</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="img/images.jpg" alt="Aspernatur excepturi rem"><!-- NO SPACE --></a>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Thêm giỏ hàng</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">ảnh</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$90</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="img/images.jpg" alt="Aspernatur excepturi rem"><!-- NO SPACE --></a>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Thêm giỏ hàng</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">ảnh</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$90</b>
                            </p>
                        </li>

                    </ul>

                </div>


            </div><!-- .fr-pop-tab-cont -->


        </div><!-- .fr-pop-wrap -->


        <!-- Banners -->
        <div class="discounts-wrap">
            <h3 class="component-ttl"><span>Sản phẩm mới nhất</span></h3>
            <div class="prod-items section-items">

                <div class="prod-i">
                    <div class="prod-i-top">
                        <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="img/images.jpg" alt="Adipisci aperiam commodi"><!-- NO SPACE --></a>
                        <a href="#" class="prod-i-buy">Thêm giỏ hàng</a>
                    </div>
                    <h3>
                        <a href="product.html">Adipisci aperiam commodi</a>
                    </h3>
                    <p class="prod-i-price">
                        <b>$59</b>
                    </p>
                </div>
                <div class="prod-i">
                    <div class="prod-i-top">
                        <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="img/images.jpg" alt="Adipisci aperiam commodi"><!-- NO SPACE --></a>
                        <a href="#" class="prod-i-buy">Thêm giỏ hàng</a>
                    </div>
                    <h3>
                        <a href="product.html">Adipisci aperiam commodi</a>
                    </h3>
                    <p class="prod-i-price">
                        <b>$59</b>
                    </p>
                </div>
                <div class="prod-i">
                    <div class="prod-i-top">
                        <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="img/images.jpg" alt="Adipisci aperiam commodi"><!-- NO SPACE --></a>
                        <a href="#" class="prod-i-buy">Thêm giỏ hàng</a>
                    </div>
                    <h3>
                        <a href="product.html">Adipisci aperiam commodi</a>
                    </h3>
                    <p class="prod-i-price">
                        <b>$59</b>
                    </p>
                </div>
                <div class="prod-i">
                    <div class="prod-i-top">
                        <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="img/images.jpg" alt="Adipisci aperiam commodi"><!-- NO SPACE --></a>
                        <a href="#" class="prod-i-buy">Thêm giỏ hàng</a>
                    </div>
                    <h3>
                        <a href="product.html">Adipisci aperiam commodi</a>
                    </h3>
                    <p class="prod-i-price">
                        <b>$59</b>
                    </p>
                </div>
                <div class="prod-i">
                    <div class="prod-i-top">
                        <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="img/images.jpg" alt="Adipisci aperiam commodi"><!-- NO SPACE --></a>
                        <a href="#" class="prod-i-buy">Thêm giỏ hàng</a>
                    </div>
                    <h3>
                        <a href="product.html">Adipisci aperiam commodi</a>
                    </h3>
                    <p class="prod-i-price">
                        <b>$59</b>
                    </p>
                </div>
                <div class="prod-i">
                    <div class="prod-i-top">
                        <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="img/images.jpg" alt="Adipisci aperiam commodi"><!-- NO SPACE --></a>
                        <a href="#" class="prod-i-buy">Thêm giỏ hàng</a>
                    </div>
                    <h3>
                        <a href="product.html">Adipisci aperiam commodi</a>
                    </h3>
                    <p class="prod-i-price">
                        <b>$59</b>
                    </p>
                </div>
                <div class="prod-i">
                    <div class="prod-i-top">
                        <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="img/images.jpg" alt="Adipisci aperiam commodi"><!-- NO SPACE --></a>
                        <a href="#" class="prod-i-buy">Thêm giỏ hàng</a>
                    </div>
                    <h3>
                        <a href="product.html">Adipisci aperiam commodi</a>
                    </h3>
                    <p class="prod-i-price">
                        <b>$59</b>
                    </p>
                </div>
                <div class="prod-i">
                    <div class="prod-i-top">
                        <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="img/images.jpg" alt="Adipisci aperiam commodi"><!-- NO SPACE --></a>
                        <a href="#" class="prod-i-buy">Thêm giỏ hàng</a>
                    </div>
                    <h3>
                        <a href="product.html">Adipisci aperiam commodi</a>
                    </h3>
                    <p class="prod-i-price">
                        <b>$59</b>
                    </p>
                </div>
                <div class="prod-i">
                    <div class="prod-i-top">
                        <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="img/images.jpg" alt="Adipisci aperiam commodi"><!-- NO SPACE --></a>
                        <a href="#" class="prod-i-buy">Thêm giỏ hàng</a>
                    </div>
                    <h3>
                        <a href="product.html">Adipisci aperiam commodi</a>
                    </h3>
                    <p class="prod-i-price">
                        <b>$59</b>
                    </p>
                </div>
                <div class="prod-i">
                    <div class="prod-i-top">
                        <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="img/images.jpg" alt="Adipisci aperiam commodi"><!-- NO SPACE --></a>
                        <a href="#" class="prod-i-buy">Thêm giỏ hàng</a>
                    </div>
                    <h3>
                        <a href="product.html">Adipisci aperiam commodi</a>
                    </h3>
                    <p class="prod-i-price">
                        <b>$59</b>
                    </p>
                </div>
                <div class="prod-i">
                    <div class="prod-i-top">
                        <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="img/images.jpg" alt="Adipisci aperiam commodi"><!-- NO SPACE --></a>
                        <a href="#" class="prod-i-buy">Thêm giỏ hàng</a>
                    </div>
                    <h3>
                        <a href="product.html">Adipisci aperiam commodi</a>
                    </h3>
                    <p class="prod-i-price">
                        <b>$59</b>
                    </p>
                </div>

            </div>
        </div>
        <!-- Pagination - start -->
            <ul class="pagi">
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li class="pagi-next"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
            </ul>
            <!-- Pagination - end -->

        <!-- Special offer -->
        <div class="discounts-wrap">
            <h3 class="component-ttl"><span>Sản phẩm đặc biệt</span></h3>
            <div class="flexslider discounts-list">
                <ul class="slides">
                    <li class="discounts-i">
                        <a href="product.html" class="discounts-i-img">
                            <img src="img/images.jpg" alt="Dicta doloremque">
                        </a>
                        <h3 class="discounts-i-ttl">
                            <a href="product.html">ảnh</a>
                        </h3>
                        <p class="discounts-i-price">
                            <b>$115</b> <del>$135</del>
                        </p>
                    </li>
                    <li class="discounts-i">
                        <a href="product.html" class="discounts-i-img">
                            <img src="img/images.jpg" alt="Dicta doloremque">
                        </a>
                        <h3 class="discounts-i-ttl">
                            <a href="product.html">ảnh</a>
                        </h3>
                        <p class="discounts-i-price">
                            <b>$115</b> <del>$135</del>
                        </p>
                    </li>
                    <li class="discounts-i">
                        <a href="product.html" class="discounts-i-img">
                            <img src="img/images.jpg" alt="Dicta doloremque">
                        </a>
                        <h3 class="discounts-i-ttl">
                            <a href="product.html">ảnh</a>
                        </h3>
                        <p class="discounts-i-price">
                            <b>$115</b> <del>$135</del>
                        </p>
                    </li>
                    <li class="discounts-i">
                        <a href="product.html" class="discounts-i-img">
                            <img src="img/images.jpg" alt="Dicta doloremque">
                        </a>
                        <h3 class="discounts-i-ttl">
                            <a href="product.html">ảnh</a>
                        </h3>
                        <p class="discounts-i-price">
                            <b>$115</b> <del>$135</del>
                        </p>
                    </li>
                    <li class="discounts-i">
                        <a href="product.html" class="discounts-i-img">
                            <img src="img/images.jpg" alt="Dicta doloremque">
                        </a>
                        <h3 class="discounts-i-ttl">
                            <a href="product.html">ảnh</a>
                        </h3>
                        <p class="discounts-i-price">
                            <b>$115</b> <del>$135</del>
                        </p>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Quick View Product - start -->
        <div class="qview-modal">
            <div class="prod-wrap">
                <a href="product.html">
                    <h1 class="main-ttl">
                        <span>Reprehenderit adipisci</span>
                    </h1>
                </a>
                <div class="prod-slider-wrap">
                    <div class="prod-slider">
                        <ul class="prod-slider-car">
                            <li>
                                <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x525">
                                    <img src="http://placehold.it/500x525" alt="">
                                </a>
                            </li>
                            <li>
                                <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x591">
                                    <img src="http://placehold.it/500x591" alt="">
                                </a>
                            </li>
                            <li>
                                <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x525">
                                    <img src="http://placehold.it/500x525" alt="">
                                </a>
                            </li>
                            <li>
                                <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x722">
                                    <img src="http://placehold.it/500x722" alt="">
                                </a>
                            </li>
                            <li>
                                <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x722">
                                    <img src="http://placehold.it/500x722" alt="">
                                </a>
                            </li>
                            <li>
                                <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x722">
                                    <img src="http://placehold.it/500x722" alt="">
                                </a>
                            </li>
                            <li>
                                <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x722">
                                    <img src="http://placehold.it/500x722" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="prod-thumbs">
                        <ul class="prod-thumbs-car">
                            <li>
                                <a data-slide-index="0" href="#">
                                    <img src="http://placehold.it/500x525" alt="">
                                </a>
                            </li>
                            <li>
                                <a data-slide-index="1" href="#">
                                    <img src="http://placehold.it/500x591" alt="">
                                </a>
                            </li>
                            <li>
                                <a data-slide-index="2" href="#">
                                    <img src="http://placehold.it/500x525" alt="">
                                </a>
                            </li>
                            <li>
                                <a data-slide-index="3" href="#">
                                    <img src="http://placehold.it/500x722" alt="">
                                </a>
                            </li>
                            <li>
                                <a data-slide-index="4" href="#">
                                    <img src="http://placehold.it/500x722" alt="">
                                </a>
                            </li>
                            <li>
                                <a data-slide-index="5" href="#">
                                    <img src="http://placehold.it/500x722" alt="">
                                </a>
                            </li>
                            <li>
                                <a data-slide-index="6" href="#">
                                    <img src="http://placehold.it/500x722" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="prod-cont">
                    <div class="prod-skuwrap">
                        <p class="prod-skuttl">Color</p>
                        <ul class="prod-skucolor">
                            <li class="active">
                                <img src="img/color/blue.jpg" alt="">
                            </li>
                            <li>
                                <img src="img/color/red.jpg" alt="">
                            </li>
                            <li>
                                <img src="img/color/green.jpg" alt="">
                            </li>
                            <li>
                                <img src="img/color/yellow.jpg" alt="">
                            </li>
                            <li>
                                <img src="img/color/purple.jpg" alt="">
                            </li>
                        </ul>
                        <p class="prod-skuttl">Sizes</p>
                        <div class="offer-props-select">
                            <p>XL</p>
                            <ul>
                                <li><a href="#">XS</a></li>
                                <li><a href="#">S</a></li>
                                <li><a href="#">M</a></li>
                                <li class="active"><a href="#">XL</a></li>
                                <li><a href="#">L</a></li>
                                <li><a href="#">4XL</a></li>
                                <li><a href="#">XXL</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="prod-info">
                        <p class="prod-price">
                            <b class="item_current_price">$238</b>
                        </p>
                        <p class="prod-qnt">
                            <input type="text" value="1">
                            <a href="#" class="prod-plus"><i class="fa fa-angle-up"></i></a>
                            <a href="#" class="prod-minus"><i class="fa fa-angle-down"></i></a>
                        </p>
                        <p class="prod-addwrap">
                            <a href="#" class="prod-add">Thêm giỏ hàng</a>
                        </p>
                    </div>
                    <ul class="prod-i-props">
                        <li>
                            <b>SKU</b> 05464207
                        </li>
                        <li>
                            <b>Manufacturer</b> Mayoral
                        </li>
                        <li>
                            <b>Material</b> Cotton
                        </li>
                        <li>
                            <b>Pattern Type</b> Print
                        </li>
                        <li>
                            <b>Wash</b> Colored
                        </li>
                        <li>
                            <b>Style</b> Cute
                        </li>
                        <li>
                            <b>Color</b> Blue, Red
                        </li>
                        <li><a href="#" class="prod-showprops">All Features</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Quick View Product - end -->
    </section>
</main>
@endsection
