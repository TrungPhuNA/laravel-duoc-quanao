@extends('frontend.layouts.app')
@section('title') Thể loại sản phẩm @endsection
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
                    {{ $categoryProducts->name }}
                </a>
            </li>
        </ul>
        <h1 class="main-ttl"><span>{{ $categoryProducts->name }}</span></h1>
        <!-- Catalog Sidebar - start -->
        <div class="section-sb">

            <!-- Filter - start -->
            <div class="section-filter">
                <button id="section-filter-toggle" class="section-filter-toggle" data-close="Hide Filter" data-open="Show Filter">
                    <span>Show Filter</span> <i class="fa fa-angle-down"></i>
                </button>
                <div class="section-filter-cont">
                    <div class="section-filter-price">
                        <div class="range-slider section-filter-price" data-min="0" data-max="1000" data-from="200" data-to="800" data-prefix="$" data-grid="false"></div>
                    </div>
                    <div class="section-filter-item">
                        <p class="section-filter-ttl">Style <i class="fa fa-angle-down"></i></p>
                        <div class="section-filter-fields">
                            <p class="section-filter-field">
                                <input id="section-filter-checkbox2-1" value="on" type="checkbox">
                                <label class="section-filter-checkbox" for="section-filter-checkbox2-1">Work</label>
                            </p>
                            <p class="section-filter-field">
                                <input id="section-filter-checkbox2-2" value="on" type="checkbox">
                                <label class="section-filter-checkbox" for="section-filter-checkbox2-2">Vintage</label>
                            </p>
                            <p class="section-filter-field">
                                <input id="section-filter-checkbox2-3" value="on" type="checkbox">
                                <label class="section-filter-checkbox" for="section-filter-checkbox2-3">Cute</label>
                            </p>
                            <p class="section-filter-field">
                                <input id="section-filter-checkbox2-4" value="on" type="checkbox">
                                <label class="section-filter-checkbox" for="section-filter-checkbox2-4">Novelty</label>
                            </p>
                            <p class="section-filter-field">
                                <input id="section-filter-checkbox2-5" value="on" type="checkbox">
                                <label class="section-filter-checkbox" for="section-filter-checkbox2-5">Brief</label>
                            </p>
                        </div>
                    </div>
                    <div class="section-filter-item opened">
                        <p class="section-filter-ttl">Chất liệu <i class="fa fa-angle-down"></i></p>
                        <div class="section-filter-fields">
                            <p class="section-filter-field">
                                <input id="section-filter-checkbox3-1" value="on" type="checkbox">
                                <label class="section-filter-checkbox" for="section-filter-checkbox3-1">Cotton</label>
                            </p>
                            <p class="section-filter-field">
                                <input id="section-filter-checkbox3-2" value="on" type="checkbox">
                                <label class="section-filter-checkbox" for="section-filter-checkbox3-2">Spandex</label>
                            </p>
                        </div>
                    </div>
                    <div class="section-filter-item">
                        <p class="section-filter-ttl">Size <i class="fa fa-angle-down"></i></p>
                        <div class="section-filter-fields">
                            <p class="section-filter-field">
                                <input id="section-filter-checkbox4-1" value="on" type="checkbox">
                                <label class="section-filter-checkbox" for="section-filter-checkbox4-1">S</label>
                            </p>
                            <p class="section-filter-field">
                                <input id="section-filter-checkbox4-2" value="on" type="checkbox">
                                <label class="section-filter-checkbox" for="section-filter-checkbox4-2">M</label>
                            </p>
                            <p class="section-filter-field">
                                <input id="section-filter-checkbox4-3" value="on" type="checkbox">
                                <label class="section-filter-checkbox" for="section-filter-checkbox4-3">L</label>
                            </p>
                            <p class="section-filter-field">
                                <input id="section-filter-checkbox4-4" value="on" type="checkbox">
                                <label class="section-filter-checkbox" for="section-filter-checkbox4-4">XS</label>
                            </p>
                        </div>
                    </div>
                    <div class="section-filter-buttons">
                        <input class="btn btn-themes" id="set_filter" name="set_filter" value="Search" type="button">
                        <input class="btn btn-link" id="del_filter" name="del_filter" value="Reset" type="button">
                    </div>
                </div>
            </div>
            <!-- Filter - end -->

        </div>
        <!-- Catalog Sidebar - end -->
        <!-- Catalog Items | Gallery V1 - start -->
        <div class="section-cont">

            <!-- Catalog Topbar - start -->
            <div class="section-top">

                <!-- Sorting -->
                <div class="section-sortby">
                    <p>Mặc định</p>
                    <ul>
                        <li>
                            <a href="#">Gía tăng dần</a>
                        </li>
                        <li>
                            <a href="#">Gía giảm dần</a>
                        </li>
                        <li>
                            <a href="#">Mới nhất</a>
                        </li>
                        <li>
                            <a href="#">Cũ nhất</a>
                        </li>
                    </ul>
                </div>

                <!-- Count per page -->
                <div class="section-count">
                    <p>12</p>
                    <ul>
                        <li><a href="#">12</a></li>
                        <li><a href="#">24</a></li>
                        <li><a href="#">48</a></li>
                    </ul>
                </div>

            </div>
            <!-- Catalog Topbar - end -->
            <div class="prod-items section-items">
                @if(!$products->isEmpty())
                    @foreach($products as $pro)
                    <div class="prod-i">
                        <div class="prod-i-top">
                            <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="{{ Storage::url('images/'.$pro->image) }}" alt="Adipisci aperiam commodi"><!-- NO SPACE --></a>
                            <a href="#" class="prod-i-buy">Thêm giỏ hàng</a>
                        </div>
                        <h3>
                            <a href="product.html">{{ $pro->name }}</a>
                        </h3>
                        <p class="prod-i-price">
                            <b>{{ $pro->price }}&nbsp;đ</b>
                        </p>
                    </div>
                    @endforeach
                @endif
            </div>

            @if($products->hasPages())
                <div class="pagination text-center mb-4">
                    {{ $products->links() }}
                </div>
            @endif
        </div>
        <!-- Catalog Items | Gallery V1 - end -->
    </section>
</main>
@endsection
