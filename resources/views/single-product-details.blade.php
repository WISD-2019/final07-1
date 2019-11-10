@extends('layout.master')
@section('title','single-product-details')
@section('content')
    <section class="single_product_details_area d-flex align-items-center">

        <!-- Single Product Thumb -->
        <div class="single_product_thumb clearfix">
            <div class="product_thumbnail_slides owl-carousel">
                <img src="img/product-img/product-big-1.jpg" alt="">
                <img src="img/product-img/product-big-2.jpg" alt="">
                <img src="img/product-img/product-big-3.jpg" alt="">
            </div>
        </div>

        <!-- Single Product Description -->
        <div class="single_product_desc clearfix">

            <a href="cart.html">
                <h2>One Shoulder Glitter Midi Dress</h2>
            </a>
            <p class="product-price">$49.00</p>
            <p class="product-desc">Mauris viverra cursus ante laoreet eleifend. Donec vel fringilla ante. Aenean finibus velit id urna vehicula, nec maximus est sollicitudin.</p>

            <!-- Form -->
            <form class="cart-form clearfix" method="post">
                <!-- Select Box -->
                <div class="select-box d-flex mt-50 mb-30">
                    <select name="select" id="productSize" class="mr-5">
                        <option value="value">尺寸: XL</option>
                        <option value="value">尺寸: X</option>
                        <option value="value">尺寸: M</option>
                        <option value="value">尺寸: S</option>
                    </select>
                    <select name="select" id="productColor">
                        <option value="value">顏色: Black</option>
                        <option value="value">顏色: White</option>
                        <option value="value">顏色: Red</option>
                        <option value="value">顏色: Purple</option>
                    </select>
                </div>
                <!-- Cart & Favourite Box -->
                <div class="cart-fav-box d-flex align-items-center">
                    <!-- Cart -->
                    <button type="submit" name="addtocart" value="5" class="btn essence-btn">Add to cart</button>

                </div>
            </form>
        </div>
    </section>
    @endsection