@extends('layout.master')
@section('title','single-product-details')
@section('content')
    <table>
    <tr>
        <td width="200" align="center" valign="center">
            <div class="product-left">
                <h5></h5>
            </div>
        </td>
        <td width="250" align="center" valign="center">
            <div class="product-right">
                <h5>Product Name</h5>
            </div>
        </td>
        <td width="20" align="center" valign="center">
            <h5>Prcie</h5>
        </td>
        <td width="50" align="center" valign="center">
            <div class="product-right1">
                <h5>Quantity</h5>
            </div>
        </td>

        <td width="200" align="center" valign="center">
            <div class="product-right1">
                <h5>Size</h5>
            </div>
        </td>
        <td width="200" align="center" valign="center">
            <div class="product-right1">
                <h5>Total</h5>
            </div>
        </td>

        <td width="200" align="center" valign="center">
        </td>
    </tr>



    @foreach ($carts as $cart)
        <tr >
            <td width="200" align="center" valign="center">
                <div class="product-left">
                    <img src={{asset("/img/product-img/$cart->photo1.png")}}>
                </div>
            </td>
            <td width="250" align="center" valign="center">
                <div class="product-right">
                    <h6>{{$cart->goodsname1}}</h6>
                </div>
            </td>
            <td width="200" align="center" valign="center">
                <div class="product-right1">
                    <h6>{{$cart->price}}</h6>
                    <div class="close"> </div>
                </div>
            </td>
            <td width="50" align="center" valign="center">
                <div class="product-right1">
                    <h6>{{$cart->quantity}}</h6>
                </div>
            </td>

            <td width="200" align="center" valign="center">
                <div class="product-right1">
                    <h6></h6>
                    <div> {{$cart->size}}</div>
                </div>
            </td>
            <td width="200" align="center" valign="center">
                <div class="product-right1">
                    <h6>{{$cart->price * $cart->quantity}}</h6>
                    <div class="close"> </div>
                </div>
            </td>
            <td width="200" align="center" valign="center">
                <div class="clear">
                    <form action="{{ route('cart_delete', $cart->id) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button class="btn btn-link"><img src="{{asset('/img/core-img/close.png')}}"></button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
        </table>

        <div class="add-to-cart-btn">
            <a href="" class="btn essence-btn">下單</a>
        </div>

        <div class="clearfix mr-50 mt-50 mb-50">
        </div>
        <div class="clearfix mr-50 mt-50 mb-50">
        </div>
    @endsection