<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Bootstrap-ecommerce by Vosidiy">

    <title>Lazapee</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('fe/images/logos/Picture1.png') }}">

    <!-- jQuery -->
    <script src="{{ asset('fe/js/jquery-2.0.0.min.js') }}" type="text/javascript"></script>

    <!-- Bootstrap4 files-->
    <script src="{{ asset('fe/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
    <link href="{{ asset('fe/css/bootstrap-custom.css') }}" rel="stylesheet" type="text/css" />

    <!-- Font awesome 5 -->
    <link href="{{ asset('fe/fonts/fontawesome/css/fontawesome-all.min.css') }}" type="text/css" rel="stylesheet">

    <!-- plugin: fancybox  -->
    <script src="{{ asset('fe/plugins/fancybox/fancybox.min.js') }}" type="text/javascript"></script>
    <link href="{{ asset('fe/plugins/fancybox/fancybox.min.css') }}" type="text/css" rel="stylesheet">

    <!-- plugin: owl carousel  -->
    <link href="{{ asset('fe/plugins/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('fe/plugins/owlcarousel/assets/owl.theme.default.css') }}" rel="stylesheet">
    <script src="{{ asset('fe/plugins/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- custom style -->
    <link href="{{ asset('fe/css/uikit.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('fe/css/responsive.css') }}" rel="stylesheet" media="only screen and (max-width: 1200px)" />

    @stack('link')

    <!-- custom javascript -->
    <script src="{{ asset('fe/js/script.js') }}" type="text/javascript"></script>

    <script type="text/javascript">
        /// some script

        // jquery ready start
        $(document).ready(function() {
            // jQuery code

        });
        // jquery end
    </script>
    <style> 
    .avatar_user{
        width: 40px;
        height: 40px;
        border-radius: 50%;
        box-shadow:5px 5px 15px rgb(231, 216, 216) ;
    }
    #oklahoma{
        display: block;
  	display: -webkit-box;
  	height: 16px*1.3*3;
  	font-size: 16px;
  	line-height: 1.3;
  	-webkit-line-clamp: 1;  /* số dòng hiển thị */
  	-webkit-box-orient: vertical;
  	overflow: hidden;
  	text-overflow: ellipsis;
  	margin-top:10px;
    }
    @media (min-width: 1025px) {
.h-custom {
height: 100vh !important;
}
}

.horizontal-timeline .items {
border-top: 2px solid #ddd;
}

.horizontal-timeline .items .items-list {
position: relative;
margin-right: 0;
}

.horizontal-timeline .items .items-list:before {
content: "";
position: absolute;
height: 8px;
width: 8px;
border-radius: 50%;
background-color: #ddd;
top: 0;
margin-top: -5px;
}

.horizontal-timeline .items .items-list {
padding-top: 15px;
}
    </style>
</head>

<body>
 
    <header class="section-header">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="{{ route('fe.index') }}"><img class="logo"
                        src="{{ asset('fe/images/logos/Picture1.png') }}"
                        alt="alibaba style e-commerce html template file" title="alibaba e-commerce html css theme"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTop"
                    aria-controls="navbarTop" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTop">
                    {{-- <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle"
                                data-toggle="dropdown"> Sourcing </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Top Suppliers</a></li>
                                <li><a class="dropdown-item" href="#">Suppliers by Regions </a></li>
                                <li><a class="dropdown-item" href="#">Online Retailer </a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle"
                                data-toggle="dropdown"> Services </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Trade Assurance </a></li>
                                <li><a class="dropdown-item" href="#">Arabic</a></li>
                                <li><a class="dropdown-item" href="#">Logistics Service </a></li>
                                <li><a class="dropdown-item" href="#">Membership Services</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle"
                                data-toggle="dropdown"> Community </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Help Center</a></li>
                                <li><a class="dropdown-item" href="#">Submit a Dispute </a></li>
                                <li><a class="dropdown-item" href="#">For Suppliers </a></li>
                            </ul>
                        </li>
                    </ul> --}}
                    <ul class="mr-auto"></ul>
                    <ul class="navbar-nav">
                        @guest
                        
                            <li><a class="nav-link" href="{{ route('login') }}">Đăng nhập</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">Đăng ký</a></li>
                        @endguest
                    </ul> <!-- navbar-nav.// -->
                </div> <!-- collapse.// -->
            </div>
        </nav>

        <section class="header-main shadow-sm">
            <div class="container">
                <div class="row-sm align-items-center">
                    <div class="col-lg-4-24 col-sm-3">
                        <div class="category-wrap dropdown py-1">
                            <button type="button" class="btn btn-light  dropdown-toggle" data-toggle="dropdown"><i
                                    class="fa fa-bars"></i>Danh mục</button>
                            <div class="dropdown-menu">
                                <?php $cats =  App\Models\Cat::orderBy('id', 'DESC')->get(); ?>
                                @foreach ($cats as $item)
                                <a class="dropdown-item" href="{{ url('fe/cats')}}/{{ $item->id }}">{{ $item->name }}</a>
                                    
                                @endforeach
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-11-24 col-sm-8">
                        <form action="#" class="py-1">
                            <div class="input-group w-100">
                                <select class="custom-select" name="category_name">
                                    <option value="">All type</option>
                                    <option value="">Special</option>
                                    <option value="">Only best</option>
                                    <option value="">Latest</option>
                                </select>
                                <input type="text" class="form-control" style="width:50%;" placeholder="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-warning" type="submit">
                                        <i class="fa fa-search"></i> Search
                                    </button>
                                </div>
                            </div>
                        </form> <!-- search-wrap .end// -->
                    </div> <!-- col.// -->
                    <div class="col-lg-9-24 col-sm-12">
                        <div class="widgets-wrap float-right row no-gutters py-1">
                            <div class="col-auto">
                                <div class="widget-header dropdown">
                                    <a href="#" data-toggle="dropdown" data-offset="20,10">
                                        @guest
                                            <div class="icontext">
                                                <div class="icon-wrap"><i class="text-warning icon-sm fa fa-user"></i>
                                                </div>

                                            </div>
                                        @endguest
                                        @auth

                                            <a href="#" data-toggle="dropdown" data-offset="20,10">
                                                <div class="icontext">
                                                    <div class="icon-wrap"> 
                                                        @if(Auth::user()->avatar != null)
                                                        <img class="avatar_user" src="{{ asset(Storage::url('img/product/'.Auth::user()->avatar)) }}">
                                                        @else  
                                                        <i class="text-warning icon-sm fa fa-user"></i>
                                                        @endif
                                                    </div>
                                                    <div class="text-wrap text-dark">
                                                        {{ Auth::user()->name }} <i class="fa fa-caret-down"></i>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="dropdown-menu">
                                                <!-- <form class="px-4 py-3">
                                            <div class="form-group">
                                                <label>Email address</label>
                                                <input type="email" class="form-control" placeholder="email@example.com">
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" class="form-control" placeholder="Password">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Sign in</button>
                                            </form>
                                            <hr class="dropdown-divider">
                                            <a class="dropdown-item" href="#">Have account? Sign up</a>
                                            <a class="dropdown-item" href="#">Forgot password?</a> -->
                                                <a class="dropdown-item" href="{{ route('fe.viewProfile') }}">Thông tin
                                                    cá nhân</a>
                                                <a class="dropdown-item"
                                                    href="{{ url('fe/orderByUser') }}">Đơn hàng của
                                                    tôi</a>
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
														document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                            <!--  dropdown-menu .// -->
                                        @endauth
                                    </a>
                                </div> <!-- widget-header .// -->
                            </div> <!-- col.// -->
                            <div class="col-auto">
                                <a href="{{ route('Fe.cart') }}" class="widget-header">
                                    <div class="icontext">
                                        <div class="icon-wrap"><i
                                                class="text-warning icon-sm fa fa-shopping-cart"></i></div>
                                                <span class="small round badge badge-secondary">{{ Cart::count() }}</span>
                                                
                                        <div class="text-wrap text-dark">
                                            Giỏ  <br> hàng
                                        </div>
                                    </div>
                                </a>
                            </div> <!-- col.// -->
                            <div class="col-auto">
                                <a href="#" class="widget-header">
                                    <div class="icontext">
                                        <div class="icon-wrap"><i class="text-warning icon-sm  fa fa-heart"></i></div>
                                        <div class="text-wrap text-dark">
                                            <span class="small round badge badge-secondary">0</span>
                                            <div>Yêu thích</div>
                                        </div>
                                    </div>
                                </a>
                            </div> <!-- col.// -->
                        </div> <!-- widgets-wrap.// row.// -->
                    </div> <!-- col.// -->
                </div> <!-- row.// -->
            </div> <!-- container.// -->
        </section> <!-- header-main .// -->
    </header> <!-- section-header.// -->

    @yield('content')

    <!-- ========================= FOOTER ========================= -->
    <footer class="section-footer bg-secondary">
        <div class="container">
            <section class="footer-top padding-top">
                <div class="row">
                    <aside class="col-sm-3 col-md-3 white">
                        <h5 class="title">Customer Services</h5>
                        <ul class="list-unstyled">
                            <li> <a href="#">Help center</a></li>
                            <li> <a href="#">Money refund</a></li>
                            <li> <a href="#">Terms and Policy</a></li>
                            <li> <a href="#">Open dispute</a></li>
                        </ul>
                    </aside>
                    <aside class="col-sm-3  col-md-3 white">
                        <h5 class="title">My Account</h5>
                        <ul class="list-unstyled">
                            <li> <a href="#"> User Login </a></li>
                            <li> <a href="#"> User register </a></li>
                            <li> <a href="#"> Account Setting </a></li>
                            <li> <a href="#"> My Orders </a></li>
                            <li> <a href="#"> My Wishlist </a></li>
                        </ul>
                    </aside>
                    <aside class="col-sm-3  col-md-3 white">
                        <h5 class="title">About</h5>
                        <ul class="list-unstyled">
                            <li> <a href="#"> Our history </a></li>
                            <li> <a href="#"> How to buy </a></li>
                            <li> <a href="#"> Delivery and payment </a></li>
                            <li> <a href="#"> Advertice </a></li>
                            <li> <a href="#"> Partnership </a></li>
                        </ul>
                    </aside>
                    <aside class="col-sm-3">
                        <article class="white">
                            <h5 class="title">Contacts</h5>
                            <p>
                                <strong>Phone: </strong> +123456789 <br>
                                <strong>Fax:</strong> +123456789
                            </p>

                            <div class="btn-group white">
                                <a class="btn btn-facebook" title="Facebook" target="_blank" href="#"><i
                                        class="fab fa-facebook-f  fa-fw"></i></a>
                                <a class="btn btn-instagram" title="Instagram" target="_blank" href="#"><i
                                        class="fab fa-instagram  fa-fw"></i></a>
                                <a class="btn btn-youtube" title="Youtube" target="_blank" href="#"><i
                                        class="fab fa-youtube  fa-fw"></i></a>
                                <a class="btn btn-twitter" title="Twitter" target="_blank" href="#"><i
                                        class="fab fa-twitter  fa-fw"></i></a>
                            </div>
                        </article>
                    </aside>
                </div> <!-- row.// -->
                <br>
            </section>
            <section class="footer-bottom row border-top-white">
                <div class="col-sm-6">
                    <p class="text-white-50"> Made with <3 <br> by Vosidiy M.</p>
                </div>
                <div class="col-sm-6">
                    <p class="text-md-right text-white-50">
                        Copyright &copy <br>
                        <a href="http://bootstrap-ecommerce.com" class="text-white-50">Bootstrap-ecommerce UI kit</a>
                    </p>
                </div>
            </section> <!-- //footer-top -->
        </div><!-- //container -->
    </footer>
    <!-- ========================= FOOTER END // ========================= -->

</body>
@stack('js')

</html>
