<header class="header_area">
    <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
        <!-- Classy Menu -->
        <nav class="classy-navbar" id="essenceNav">
            <!-- Logo -->
            <a class="nav-brand" href="layout/master.blade.php"><img src="img/core-img/logo.png" alt=""></a>
            <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler">
                <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>
            <!-- Menu -->
            <div class="classy-menu">
                <!-- close btn -->
                <div class="classycloseIcon">
                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                </div>
                <!-- Nav Start -->
                <div class="classynav">
                    <ul>
                        <li><a href="#">購物</a>
                            <div class="megamenu">
                                <ul class="single-mega cn-col-4">
                                    <li class="title">衣服</li>
                                    <li><a href="shop.blade.php">長袖</a></li>
                                    <li><a href="shop.blade.php">短袖</a></li>

                                </ul>
                                <ul class="single-mega cn-col-4">
                                    <li class="title">褲子</li>
                                    <li><a href="shop.blade.php">長褲</a></li>
                                    <li><a href="shop.blade.php">短褲</a></li>

                                </ul>
                                <ul class="single-mega cn-col-4">
                                    <li class="title"><a href="shop.blade.php">外套</a></li>
                                </ul>
                                <div class="single-mega cn-col-4">
                                    <img src="img/bg-img/bg-6.jpg" alt="">
                                </div>
                            </div>
                        </li>
                        <li><a href="#">關於我們</a></li>
                        <li><a href="{{route('contact')}}">聯絡我們</a></li>
                    </ul>
                </div>
                <!-- Nav End -->
            </div>
        </nav>

        <!-- Header Meta Data -->
        <div class="header-meta d-flex clearfix justify-content-end">
            <!-- Search Area -->
            <div class="search-area">
                <form action="#" method="post">
                    <input type="search" name="search" id="headerSearch" placeholder="搜尋">
                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </div>

            <!-- User Login Info -->
            <div class="user-login-info">
                <a href="#"><img src="img/core-img/user.svg" alt=""></a>
            </div>
            <!-- Cart Area -->
            <div class="cart-area">
                <a href="#" id="essenceCartBtn"><img src="img/core-img/bag.svg" alt=""> <span>3</span></a>
            </div>
        </div>

    </div>
</header>