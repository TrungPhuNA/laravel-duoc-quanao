@extends('frontend.layouts.app')
@section('title') Giỏ hàng @endsection
@section('content')
    <main>
        <section class="container">


            <ul class="b-crumbs">
                <li>
                    <a href="{{ route('client.home') }}">
                        Trang chủ
                    </a>
                </li>
            </ul>
            <h1 class="main-ttl"><span>Login</span></h1>
            <div class="auth-wrap">
                <div class="auth-col">
                    <form method="post" class="login">
                        @csrf
                        <p>
                            <label for="name">Name <span class="required">*</span></label><input required type="text" name="name" >
                        </p>
                        <p>
                            <label for="email">E-mail <span class="required">*</span></label><input required type="text" name="email">
                        </p>
                        <p>
                            <label for="password">Password <span class="required">*</span></label><input required type="password" name="password">
                        </p>
                        <p>
                            <label for="email">Phone <span class="required">*</span></label><input required type="text" name="phone_number">
                        </p>
                        <p class="auth-submit">
                            <input type="submit" value="Đăng ký">
                            <input type="checkbox" id="rememberme" value="forever">
                            <label for="rememberme">Nhớ đăng nhập</label>
                        </p>
                        <p class="auth-lost_password">
                            <a href="#">Bạn quên mật khẩu?</a>
                        </p>
                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection
