<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Tukuo Website</title>

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">

    <!-- Icons -->
    <link href="/assets/css/nucleo-icons.css" rel="stylesheet">
    <link href="/assets/css/font-awesome.css" rel="stylesheet">

    <!-- Jquery UI -->
    <link type="text/css" href="/assets/css/jquery-ui.css" rel="stylesheet">

    <!-- Argon CSS -->
    <link type="text/css" href="/assets/css/argon-design-system.min.css" rel="stylesheet">

    <!-- Main CSS-->
    <link type="text/css" href="/assets/css/style.css" rel="stylesheet">

    <!-- Optional Plugins-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <!-- SweetAlert -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">

    {{-- <link rel="stylesheet" href='/css/bootstrap.css'> --}}
</head>

<body>
    <header class="header clearfix">
        <div class="top-bar d-none d-sm-block">
            <div class="container">
                <div class="row">
                    <div class="col-6 text-left">

                    </div>
                    <div class=" col-6 text-right">
                        <ul class="top-links account-links">
                            @if (Auth::user()!==null)
                            <li><i class="fa fa-user-circle-o"></i> <a
                                    href={{Auth::user()->seller ? '/dashboard/products': '/dashboard'}}>{{Auth::user()->name}}</a>
                            </li>
                            <li>
                                <form method="POST" action="/logout" class=" inline">
                                    @csrf
                                    <a href='/logout'
                                        onclick="event.preventDefault();this.closest('form').submit();">Logout</a>
                                </form>
                            </li>
                            </a>
                            @else
                            <li><i class=""></i> <a href='/register'>Sign Up</a></li>
                            <li><i class=""></i> <a href='/login'>Login</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-main border-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-12 col-sm-6">
                        <a class="navbar-brand mr-lg-5" href="/">
                            <i class="fa fa-shopping-bag fa-3x"></i> <span class="logo">TukuO</span>
                        </a>
                    </div>
                    <div class="col-lg-7 col-12 col-sm-6">
                        <form action="#" class="search">
                            <div class="input-group w-100">
                                <input type="text" class="form-control" placeholder="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-2 col-12 col-sm-6">
                        <div class="right-icons pull-right d-none d-lg-block">
                            <div class="single-icon wishlist">
                                {{-- <a href="#"><i class="fa fa-heart-o fa-2x"></i></a>
                                <span class="badge badge-default">5</span> --}}
                            </div>
                            <div class="single-icon shopping-cart">
                                <a href="/cart"><i class="fa fa-shopping-cart fa-2x"></i></a>
                                <span
                                    class="badge badge-default">{{Auth::user() ?  Auth::user()->transactions->where('status', '0')->count(): ''}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-main navbar-expand-lg navbar-light border-top border-bottom">
            <div class="container">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav"
                    aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
                                aria-expanded="true">Pages</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="/products">Products</a>
                                <a class="dropdown-item" href="cart">Cart</a>
                                {{-- <a class="dropdown-item" href="checkout">Checkout</a> --}}
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- collapse // -->
            </div>
            <!-- container // -->
        </nav>
    </header>

    @yield('content')


    <footer class="footer bg-primary">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer about">
                            <div class="logo-footer">
                                <i class="fa fa-shopping-bag fa-3x"></i> <span class="logo">TukuO</span>
                            </div>
                            <p class="text">Website Tukuo merupakan sebuah website yang menawarkan berbagai macam
                                template website yang dibutuhkan untuk memudahkan pembuatan website.</p>
                            <p class="call">Got Question? Call us 24/7<span><a
                                        href="https://wa.me/62895366053139?text=Saya%20ingin%20bertanya%20mengenai%20website%20Tukuo">+0895366053139
                                    </a></span></p>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-2 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer links">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Faq</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Help</a></li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-2 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer links">
                            <h4>Services</h4>
                            <ul>
                                <li><a href="#">Payment Methods</a></li>
                                <li><a href="#">Money-back</a></li>
                                <li><a href="#">Returns</a></li>
                                <li><a href="#">Shipping</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer social">
                            <h4>Get In Touch</h4>
                            <!-- Single Widget -->
                            <div class="contact">
                                <ul>
                                    <li>Jl. Raya ITS, Keputih, Kec. Sukolilo, Kota SBY, Jawa Timur 60111</li>
                                    <li>Indonsesia</li>
                                    <li>tukuowebsite@gmail.com</li>
                                    <li>+62 895 3660 53139</li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                            <ul>
                                <li><a href="#"><i class="ti-facebook"></i></a></li>
                                <li><a href="#"><i class="ti-twitter"></i></a></li>
                                <li><a href="#"><i class="ti-flickr"></i></a></li>
                                <li><a href="#"><i class="ti-instagram"></i></a></li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="copyright-inner border-top">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="left">
                                <p>Copyright © 2021 - All Rights Reserved.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="right pull-right">
                                <ul class="payment-cards">
                                    <li><i class="fa fa-cc-paypal"></i></li>
                                    <li><i class="fa fa-cc-amex"></i></li>
                                    <li><i class="fa fa-cc-mastercard"></i></li>
                                    <li><i class="fa fa-cc-stripe"></i></li>
                                    <li><i class="fa fa-cc-visa"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
<!-- Core -->
<script src="/assets/js/core/jquery.min.js"></script>
<script src="/assets/js/core/popper.min.js"></script>
<script src="/assets/js/core/bootstrap.min.js"></script>
<script src="/assets/js/core/jquery-ui.min.js"></script>

<!-- Optional plugins -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<!-- Argon JS -->
<script src="/assets/js/argon-design-system.js"></script>

<!-- Main JS-->
<script src="/assets/js/main.js"></script>

<!-- SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>

<script>
    function checkOut() {
        swal("Good job!", "You clicked the button!", "success").then(() => {
            location.href = 'cart'
        })
    }

</script>


</html>
