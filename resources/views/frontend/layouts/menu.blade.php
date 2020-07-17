<div class="header-bottom">
        <div class="container">
            <nav class="topmenu">

                <!-- Catalog menu - start -->
                <div class="topcatalog">
                    <a class="topcatalog-btn" href="catalog-gallery.html"><span>Tất cả</span></a>
                    <ul class="topcatalog-list">
                        <li><a href="{{ route('client.contact_create') }}">Liên hệ</a></li>
                        <li><a href="{{ route('client.about') }}">Giới thiệu</a></li>
                        <li><a href="{{ route('client.shopping_guide') }}">Hướng dẫn mua hàng</a></li>
                        <li><a href="{{ route('client.policy') }}">Chính sách đổi trả</a></li>
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
                                            <a href="{{ route('client.category_producte_detail', $m->id) }}" title="{{$m->name}}">
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
