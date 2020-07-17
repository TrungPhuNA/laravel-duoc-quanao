@extends('frontend.layouts.app')
@section('title') Giỏ hàng @endsection
@section('content')

    <style>
        .qty_number {
            display: flex;
        }

        .qty_number input {
            padding: 5px 10px;
            width: 100px;
            border: 1px solid #f2f2f2;
            border-right: 0;
        }
        .qty_number p {
            display: flex;
            flex-direction: column;
        }
        .qty_number p span {
            width: 30px;
            height: 20px;
            border: 1px solid #f2f2f2;
            line-height: 20px;
            text-align: center;
            font-weight: bold;
            cursor: pointer;
        }
    </style>
    <main>
        <section class="container">


            <ul class="b-crumbs">
                <li>
                    <a href="{{ route('client.home') }}">
                        Trang chủ
                    </a>
                </li>
                <li>
                    <a href="#">
                        Giỏ hàng
                    </a>
                </li>
            </ul>
            <h1 class="main-ttl"><span>Giỏ hàng</span></h1>
            <form action="{{ route('post.shopping.pay') }}" method="POST">
                @csrf
                <div class="cart-items-wrap">
                    <table class="cart-items">
                        <thead>
                        <tr>
                            <td class="cart-image">Ảnh</td>
                            <td class="cart-ttl">Sản phẩm</td>
                            <td class="cart-price">Gía</td>
                            <td class="cart-quantity">Số lượng</td>
                            <td class="cart-summ">Tổng</td>
                            <td class="cart-del">&nbsp;</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($shopping as $key => $item)
                            <tr>
                                <td>
                                    <a href="{{ route('client.product_detail',$item->id) }}"
                                       title="{{ $item->name }}" class="avatar image contain">
                                        <img alt="" src="{{ Storage::url('images/'.$item->options->image) }}" class="lazyload">
                                    </a>
                                </td>
                                <td>
                                    <div style="" class="name-product">
                                        <a href="{{ route('client.product_detail',$item->id) }}"><strong>{{ $item->name }}</strong></a>
                                    </div>
                                </td>
                                <td>
                                    <p><b>{{  number_format($item->price,0,',','.') }} đ</b></p>
                                </td>
                                <td class="cart-quantity">
{{--                                    <p class="cart-qnt">--}}
{{--                                        <input value="{{  $item->qty }}" type="text">--}}
{{--                                        <a href="#" class="cart-plus"><i class="fa fa-angle-up"></i></a>--}}
{{--                                        <a href="#" class="cart-minus"><i class="fa fa-angle-down"></i></a>--}}
{{--                                    </p>--}}

                                    <div class="qty_number">
                                        <input type="number"  min="1" class="input_quantity" disabled name="quantity_14692" value="{{  $item->qty }}" id="">
                                        <p data-price="{{ $item->price }}" data-url="{{  route('ajax_get.shopping.update', $key) }}" data-id-product="{{  $item->id }}">
                                            <span class="js-increase">+</span>
                                            <span class="js-reduction">-</span>
                                        </p>
                                    </div>
                                </td>

{{--                                <td class="cart-quantity">--}}
{{--                                    <div class="qty_number">--}}
{{--                                        <input type="number"  min="1" class="input_quantity" disabled name="quantity_14692" value="{{  $item->qty }}" id="">--}}
{{--                                        <p data-price="{{ $item->price }}" data-url="{{  route('ajax_get.shopping.update', $key) }}" data-id-product="{{  $item->id }}">--}}
{{--                                            <span class="js-increase">+</span>--}}
{{--                                            <span class="js-reduction">-</span>--}}
{{--                                        </p>--}}
{{--                                        <a href="{{  route('get.shopping.delete', $key) }}" class="js-delete-item btn-action-delete"><i class="la la-trash"></i></a>--}}
{{--                                    </div>--}}
{{--                                </td>--}}
                                <td>
                                    <span class="js-total-item">{{ number_format($item->price * $item->qty,0,',','.') }} đ</span>
                                </td>
                                <td class="cart-del">
                                    <a href="{{  route('get.shopping.delete', $key) }}" class="cart-remove"></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <ul class="cart-total">
                    <li class="cart-summ">Tổng: <b id="sub-total">{{ \Cart::subtotal(0) }}</b></li>
                </ul>
                <div class="cart-submit">
                    <a href="{{ route('post.shopping.pay') }}" class="cart-submit-btn">Thanh toán</a>
                    <a href="{{ route('get.shopping.delete_all') }}" class="cart-clear">Xóa giỏ hàng</a>
                </div>
            </form>
        </section>
    </main>
@endsection

@section('script')
    <script>
        $(function () {
            $('.js-reduction').click(function (event) {
                let $this  = $(this);
                let $input = $this.parent().prev();
                let number = parseInt($input.val());
                if (number <= 1) {
                    alert("Số lượng sản phẩm phải >= 1")
                    return false;
                }

                let URL       = $this.parent().attr('data-url');
                let productID = $this.parent().attr("data-id-product");

                number = number - 1;
                $.ajax({
                    url: URL,
                    data: {
                        qty        : number,
                        idProduct  : productID
                    }
                }).done(function( results ) {
                    if (typeof results.error != "undefined") {
                        alert(results.messages);
                        return false;
                    }

                    if (typeof results.totalMoney !== "undefined") {
                        $input.val(number);
                        $("#sub-total").text(results.totalMoney+ " đ");
                        alert(results.messages);
                        $this.parents('tr').find(".js-total-item").text(results.totalItem +' đ');
                    }else {
                        $input.val(number + 1);
                    }
                });
            })

            $('.js-increase').click(function (event) {
                event.preventDefault();
                let $this = $(this);
                let $input = $this.parent().prev();
                let number = parseInt($input.val());
                if (number >= 10) {
                    alert("Mỗi sản phẩm chỉ được mua tối đa số lượng 10 lần / 1 lần mua");
                    return false;
                }

                let price = $this.parent().attr('data-price');
                let URL = $this.parent().attr('data-url');
                let productID = $this.parent().attr("data-id-product");

                number = number + 1;

                $.ajax({
                    url: URL,
                    data: {
                        qty        : number,
                        idProduct  : productID
                    }
                }).done(function( results ) {

                    if (typeof results.error != "undefined") {
                        alert(results.messages);
                        return false;
                    }
                    if (typeof results.totalMoney !== "undefined") {
                        $input.val(number);
                        $("#sub-total").text(results.totalMoney+ " đ");
                        alert(results.messages);
                        $this.parents('tr').find(".js-total-item").text(results.totalItem +' đ');
                    }else {
                        $input.val(number - 1);
                    }
                });
            })

        })
    </script>
@stop
