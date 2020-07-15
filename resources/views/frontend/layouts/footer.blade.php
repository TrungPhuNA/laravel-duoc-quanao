<footer class="footer-wrap">
    <div class="container f-menu-list">
        <div class="row">
            <div class="f-menu">
                <a href="index.html">
                    <img src="{{ asset('frontend_asset/img/logo-b.png') }}" alt="AllStore - MultiConcept eCommerce Responsive HTML5 Template">
                    </br> Thương hiệu thời trang Việt Nam
                    </br></br>
                </a>
                <table>
                    <tbody>
                        @if (isset($infor['email']))
                            <tr>
                                <td>{{ $infor['email']['title'] . ' : '}}</td>
                                <td>{!! $infor['email']['content'] !!}</td>
                            </tr>
                        @endif
                        @if (isset($infor['hotline']))
                            <tr>
                                <td>{{ $infor['hotline']['title'] . ' : '}}</td>
                                <td>{!! $infor['hotline']['content'] !!}</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            <div class="f-menu">
                <h3>
                    Trợ Giúp và Tư Vấn
                </h3>
                <ul class="nav nav-pills nav-stacked">
                    @if (isset($infor['gioi-thieu']))
                    <li>
                        <a href="catalog-gallery.html">
                            {{ $infor['gioi-thieu']['title'] }}
                        </a>
                    </li>
                    @endif
                    @if (isset($infor['chinh-sach-giao-hang']))
                    <li>
                        <a href="catalog-gallery.html">
                            {{ $infor['chinh-sach-giao-hang']['title'] }}
                        </a>
                    </li>
                    @endif
                    @if (isset($infor['chinh-sach-doi-hang']))
                    <li>
                        <a href="catalog-gallery.html">
                            {{ $infor['chinh-sach-doi-hang']['title'] }}
                        </a>
                    </li>
                    @endif
                    <li>
                        <a href="catalog-gallery.html">
                            Liên hệ
                        </a>
                    </li>
                </ul>
            </div>
            <div class="f-menu">
                <h3>
                    Pages
                </h3>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="gioithieu.html">Giới thiệu</a></li>
                    <li><a href="contacts.html">Liên hệ</a></li>
                    <li><a href="baohanh.html">Chính sách bảo hành</a></li>
                </ul>
            </div>
            <div class="f-menu">
                <ul class="nav nav-pills nav-stacked">
                    <li>
                        <div class="contacts-map allstore-gmap">
                        <div height="10px" class="marker" data-zoom="16" data-lat="-37.81485261872975" data-lng="144.95655298233032" data-marker="img/marker.png">534-540 Little Bourke St, Melbourne VIC 3000, Australia</div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>