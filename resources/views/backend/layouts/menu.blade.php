<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="{{ asset('backend_asset/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">AllStore</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('backend_asset/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{Auth::user()->name}}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        @if(Auth::user()->role == 1)
        <li class="nav-item has-treeview menu-open">
          <a href="{{ route('product.index') }}" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Sản phẩm
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('product.index') }}" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Sản phẩm</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('category_product.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Thể loại sản phẩm</p>
              </a>
            </li>
          </ul>
        </li>
      
        @endif
        @if(Auth::user()->role == 1 || Auth::user()->role == 2)
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Đơn đặt hàng
            </p>
          </a>
        </li>
        @endif
        @if(Auth::user()->role == 1)
        <li class="nav-item has-treeview">
          <a href="{{ route('user.index') }}" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Người dùng
            </p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="{{ route('supplier.index') }}" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Nhà cung cấp
            </p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="{{ route('contact.index') }}" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Liên hệ
            </p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="{{ route('information.index') }}" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Thông tin Shop
            </p>
          </a>
        </li>
        @endif
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>