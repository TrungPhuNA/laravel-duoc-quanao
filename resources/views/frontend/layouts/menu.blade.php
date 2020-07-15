<div class="header-bottom">
        <div class="container">
            <nav class="topmenu">

                <!-- Catalog menu - start -->
                <div class="topcatalog">
                    <a class="topcatalog-btn" href="catalog-gallery.html"><span>Tất cả</a>
                    <ul class="topcatalog-list">
                        @if (isset($infor['gioi-thieu']))
                        <li>
                            <a href="catalog-gallery.html">
                                {{ $infor['gioi-thieu']['title'] }}
                            </a>
                        </li>
                        @endif
                        @if (isset($infor['huong-dan-dat-hang']))
                        <li>
                            <a href="catalog-gallery.html">
                                {{ $infor['huong-dan-dat-hang']['title'] }}
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
                <!-- Catalog menu - end -->

                <!-- Main menu - start -->
                <button type="button" class="mainmenu-btn">Menu</button>

                <ul class="mainmenu">
                    @foreach($menu_parent as $menu)
                        <li class="menu-item-has-children">
                            <a href="#">
                            {{$menu->name}}
                            @if($menu->menu_children)
                                {{$menu->name}} <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="sub-menu">
                                    @foreach($menu->menu_children as $m)
                                        <li>
                                            <a href="contacts.html">
                                                {{$m->name}}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                            </a>
                        </li>
                    @endforeach
                </ul>
                <!-- Main menu - end -->

                <!-- Search - start -->
                <div class="topsearch">
                    <a id="topsearch-btn" class="topsearch-btn" href="#"><i class="fa fa-search"></i></a>
                    <form class="topsearch-form" action="#">
                        <input type="text" placeholder="Search products">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <!-- Search - end -->

            </nav>    </div>
    </div>