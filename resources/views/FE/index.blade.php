@extends('layouts.fe')
@section('content')

    <!-- ========================= SECTION MAIN ========================= -->
    {{-- <section class="section-main bg padding-y-sm">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row row-sm">
                    <aside class="col-md-3">
                        <h5 class="text-uppercase">My Markets</h5>
                        <ul class="menu-category list-dots">
                            <li> <a href="#">Food &amp Beverage </a></li>
                            <li> <a href="#">Home Equipments </a></li>
                            <li> <a href="#">Machinery Items </a></li>
                            <li> <a href="#">Toys & Hobbies </a></li>
                            <li> <a href="#">Consumer Electronics </a></li>
                            <li> <a href="#">Beauty & Personal Care </a></li>
                            <li class="has-submenu"> <a href="#">More category <i
                                        class="icon-arrow-right pull-right"></i></a>
                                <ul class="submenu">
                                    <li> <a href="#">Food &amp Beverage </a></li>
                                    <li> <a href="#">Home Equipments </a></li>
                                    <li> <a href="#">Machinery Items </a></li>
                                    <li> <a href="#">Toys & Hobbies </a></li>
                                    <li> <a href="#">Consumer Electronics </a></li>
                                    <li> <a href="#">Home & Garden </a></li>
                                    <li> <a href="#">Beauty & Personal Care </a></li>
                                </ul>
                            </li>
                        </ul>

                    </aside> <!-- col.// -->
                    <div class="col-md-6">

                        <!-- ================= main slide ================= -->
                        <div class="owl-init slider-main owl-carousel" data-items="1" data-nav="true"
                            data-dots="false">
                            <div class="item-slide">
                                <img src="images/banners/slide1.jpg">
                            </div>
                            <div class="item-slide">
                                <img src="images/banners/slide2.jpg">
                            </div>
                            <div class="item-slide">
                                <img src="images/banners/slide3.jpg">
                            </div>
                        </div>
                        <!-- ============== main slidesow .end // ============= -->

                    </div> <!-- col.// -->
                    <aside class="col-md-3">

                        <h6 class="title-bg bg-secondary"> Qualified Suppliers</h6>
                        <div style="height:280px;">
                            <figure class="itemside has-bg border-bottom" style="height: 33%;">
                                <img class="img-bg" src="images/items/item-sm.png">
                                <figcaption class="p-2">
                                    <h6 class="title">One request, many offers </h6>
                                    <a href="#">Good link</a>
                                </figcaption>
                            </figure>

                            <figure class="itemside has-bg border-bottom" style="height: 33%;">
                                <img class="img-bg" src="images/items/1.jpg" height="80">
                                <figcaption class="p-2">
                                    <h6 class="title">One request, many offers </h6>
                                    <a href="#">Good link</a>
                                </figcaption>
                            </figure>
                            <figure class="itemside has-bg border-bottom" style="height: 33%;">
                                <img class="img-bg" src="images/items/2.jpg" height="80">
                                <figcaption class="p-2">
                                    <h6 class="title">One request, many offers </h6>
                                    <a href="#">Good link</a>
                                </figcaption>
                            </figure>
                        </div>

                    </aside>
                </div> <!-- row.// -->
            </div> <!-- card-body .// -->
        </div> <!-- card.// -->

        <figure class="mt-3 banner p-3 bg-secondary">
            <div class="text-lg text-center white">Useful banner can be here</div>
        </figure>

    </div> <!-- container .//  -->
</section> --}}
    <!-- ========================= SECTION MAIN END// ========================= -->


    <!-- ========================= SECTION CONTENT ========================= -->
    {{-- <section class="section-content padding-y-sm bg">
    <div class="container">

        <header class="section-heading heading-line">
            <h4 class="title-section bg">MACHINERY</h4>
        </header>

        <div class="card">
            <div class="row no-gutters">
                <div class="col-md-3">

                    <article href="#" class="card-banner h-100 bg2">
                        <div class="card-body zoom-wrap">
                            <h5 class="title">Machinery items for manufacturers</h5>
                            <p>Consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet,
                                cLorem ipsum dolor sit amet, cLorem ipsum dolor sit amet, cLorem ipsum dolor sit
                                amet, c</p>
                            <a href="#" class="btn btn-warning">Explore</a>
                            <img src="images/items/item-sm.png" height="200" class="img-bg zoom-in">
                        </div>
                    </article>

                </div> <!-- col.// -->
                <div class="col-md-9">
                    <ul class="row no-gutters border-cols">
                        <li class="col-6 col-md-3">
                            <a href="#" class="itembox">
                                <div class="card-body">
                                    <p class="word-limit">Home and kitchen electronic stuff collection </p>
                                    <img class="img-sm" src="images/items/1.jpg">
                                </div>
                            </a>
                        </li>
                        <li class="col-6 col-md-3">
                            <a href="#" class="itembox">
                                <div class="card-body">
                                    <p class="word-limit">Kitchen equipments collection</p>
                                    <img class="img-sm" src="images/items/2.jpg">
                                </div>
                            </a>
                        </li>
                        <li class="col-6 col-md-3">
                            <a href="#" class="itembox">
                                <div class="card-body">
                                    <p class="word-limit">Accessiries and other good items</p>
                                    <img class="img-sm" src="images/items/3.jpg">
                                </div>
                            </a>
                        </li>
                        <li class="col-6 col-md-3">
                            <a href="#" class="itembox">
                                <div class="card-body">
                                    <p class="word-limit">Techs, Electronics</p>
                                    <img class="img-sm" src="images/items/4.jpg">
                                </div>
                            </a>
                        </li>
                    </ul>
                    <ul class="row no-gutters border-cols">
                        <li class="col-6 col-md-3">
                            <a href="#" class="itembox">
                                <div class="card-body">
                                    <p class="word-limit">Home and kitchen electronic stuff </p>
                                    <img class="img-sm" src="images/items/1.jpg">
                                </div>
                            </a>
                        </li>
                        <li class="col-6 col-md-3">
                            <a href="#" class="itembox">
                                <div class="card-body">
                                    <p class="word-limit">Kitchen equipments collection</p>
                                    <img class="img-sm" src="images/items/2.jpg">
                                </div>
                            </a>
                        </li>
                        <li class="col-6 col-md-3">
                            <a href="#" class="itembox">
                                <div class="card-body">
                                    <p class="word-limit">Accessiries and other good items</p>
                                    <img class="img-sm" src="images/items/3.jpg">
                                </div>
                            </a>
                        </li>
                        <li class="col-6 col-md-3">
                            <a href="#" class="itembox">
                                <div class="card-body">
                                    <p class="word-limit">Techs, Electronics</p>
                                    <img class="img-sm" src="images/items/4.jpg">
                                </div>
                            </a>
                        </li>
                    </ul>
                </div> <!-- col.// -->
            </div> <!-- row.// -->

        </div> <!-- card.// -->

    </div> <!-- container .//  -->
</section> --}}
    <!-- ========================= SECTION CONTENT END// ========================= -->

    <!-- ========================= SECTION CONTENT ========================= -->
    {{-- <section class="section-content padding-y-sm bg">
    <div class="container">

        <header class="section-heading heading-line">
            <h4 class="title-section bg text-uppercase">Food & Beverage</h4>
        </header>

        <div class="card">
            <div class="row no-gutters">
                <div class="col-md-3">

                    <article href="#" class="card-banner h-100 bg2">
                        <div class="card-body zoom-wrap">
                            <h5 class="title">Good equipments for cooking food and cakes</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. </p>
                            <a href="#" class="btn btn-warning">Explore</a>
                            <img src="images/items/item-sm.png" height="200" class="img-bg zoom-in">
                        </div>
                    </article>

                </div> <!-- col.// -->
                <div class="col-md-9">
                    <ul class="row no-gutters border-cols">
                        <li class="col-6 col-md-3">
                            <a href="#" class="itembox">
                                <div class="card-body">
                                    <p class="word-limit">Home and kitchen electronic stuff collection </p>
                                    <img class="img-sm" src="images/items/1.jpg">
                                </div>
                            </a>
                        </li>
                        <li class="col-6 col-md-3">
                            <a href="#" class="itembox">
                                <div class="card-body">
                                    <p class="word-limit">Kitchen equipments collection</p>
                                    <img class="img-sm" src="images/items/2.jpg">
                                </div>
                            </a>
                        </li>
                        <li class="col-6 col-md-3">
                            <a href="#" class="itembox">
                                <div class="card-body">
                                    <p class="word-limit">Accessiries and other good items</p>
                                    <img class="img-sm" src="images/items/3.jpg">
                                </div>
                            </a>
                        </li>
                        <li class="col-6 col-md-3">
                            <a href="#" class="itembox">
                                <div class="card-body">
                                    <p class="word-limit">Techs, Electronics</p>
                                    <img class="img-sm" src="images/items/4.jpg">
                                </div>
                            </a>
                        </li>
                    </ul>
                    <ul class="row no-gutters border-cols">
                        <li class="col-6 col-md-3">
                            <a href="#" class="itembox">
                                <div class="card-body">
                                    <p class="word-limit">Home and kitchen electronic stuff </p>
                                    <img class="img-sm" src="images/items/1.jpg">
                                </div>
                            </a>
                        </li>
                        <li class="col-6 col-md-3">
                            <a href="#" class="itembox">
                                <div class="card-body">
                                    <p class="word-limit">Kitchen equipments collection</p>
                                    <img class="img-sm" src="images/items/2.jpg">
                                </div>
                            </a>
                        </li>
                        <li class="col-6 col-md-3">
                            <a href="#" class="itembox">
                                <div class="card-body">
                                    <p class="word-limit">Accessiries and other good items</p>
                                    <img class="img-sm" src="images/items/3.jpg">
                                </div>
                            </a>
                        </li>
                        <li class="col-6 col-md-3">
                            <a href="#" class="itembox">
                                <div class="card-body">
                                    <p class="word-limit">Techs, Electronics</p>
                                    <img class="img-sm" src="images/items/4.jpg">
                                </div>
                            </a>
                        </li>
                    </ul>
                </div> <!-- col.// -->
            </div> <!-- row.// -->

        </div> <!-- card.// -->

    </div> <!-- container .//  -->
</section> --}}
    <!-- ========================= SECTION CONTENT END// ========================= -->

    <!-- ========================= SECTION REQUEST ========================= -->
    {{-- <section class="section-request bg padding-y-sm">
    <div class="container">
        <header class="section-heading heading-line">
            <h4 class="title-section bg text-uppercase">Request for Quotation</h4>
        </header>

        <div class="row">
            <div class="col-md-8">
                <figure class="card-banner banner-size-lg">
                    <figcaption class="overlay left">
                        <br>
                        <h2 style="max-width: 300px;">Big boundle or collection of featured items</h2>
                        <br>
                        <a class="btn btn-warning" href="#">Detail info » </a>
                    </figcaption>
                    <img src="images/banners/banner-request.jpg">
                </figure>
            </div> <!-- col // -->
            <div class="col-md-4">

                <div class="card card-body">
                    <h5 class="title py-4">One Request, Multiple Quotes.</h5>
                    <form>
                        <div class="form-group">
                            <input class="form-control" name="" type="text">
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <input class="form-control" name="" type="text">
                                <span class="input-group-btn" style="border:0; width: 0;"></span>
                                <select class="form-control">
                                    <option>Pieces</option>
                                    <option>Litres</option>
                                    <option>Tons</option>
                                    <option>Gramms</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group text-muted">
                            <p>Select template type:</p>
                            <label class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="option1">
                                <span class="form-check-label">Request price</span>
                            </label>
                            <label class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="option2">
                                <span class="form-check-label">Request a sample</span>
                            </label>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-warning">Request for quote</button>
                        </div>
                    </form>
                </div>

            </div> <!-- col // -->
        </div><!-- row // -->

    </div><!-- container // -->
</section> --}}
    <!-- ========================= SECTION REQUEST .END// ========================= -->

    <!-- ========================= SECTION ITEMS ========================= -->
    <section class="section-request bg padding-y-sm">
        <div class="container">
            <header class="section-heading heading-line">
                <h4 class="title-section bg text-uppercase">Sách mới nhất</h4>
            </header>
            <div class="row-sm test_api">
                @foreach ($products as $item)
                    <div class="col-md-2">
                        <figure class="card card-product">
                            <div class="img-wrap"> <img
                                    src="{{ asset(Storage::url('public/img/product/' . $item->feature_image)) }}"></div>
                            <figcaption class="info-wrap">
                                <h6 class="title" id="oklahoma"><a id="oklahoma"
                                        href="{{ url('fe/detail') }}/{{ $item->id }}">{{ $item->name }}</a></h6>

                                <div class="price-wrap">
                                    <span
                                        class="price-new">{{ $item->sale_price == 0 ? $item->real_price : $item->sale_price }}</span>
                                    @if ($item->sale_price == 0)
                                    @else
                                        <del class="price-old">{{ $item->real_price }}</del>
                                    @endif

                                </div> <!-- price-wrap.// -->

                            </figcaption>
                        </figure> <!-- card // -->
                    </div> <!-- col // -->
                @endforeach
                
            </div> <!-- row.// -->


        </div><!-- container // -->
    </section>
    <!-- ========================= SECTION ITEMS .END// ========================= -->

    <!-- ========================= SECTION LINKS ========================= -->
    {{-- <section class="section-links bg padding-y-sm">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <header class="section-heading heading-line">
                        <h4 class="title-section bg text-uppercase">Suppliers by Region</h4>
                    </header>

                    <ul class="list-icon row">
                        <li class="col-md-4"><a href="#"><img src="images/icons/flag-usa.png"><span>United
                                    States</span></a></li>
                        <li class="col-md-4"><a href="#"><img src="images/icons/flag-in.png"><span>India</span></a>
                        </li>
                        <li class="col-md-4"><a href="#"><img src="images/icons/flag-tr.png"><span>Turkey</span></a>
                        </li>
                        <li class="col-md-4"><a href="#"><img src="images/icons/flag-kr.png"><span>Korea</span></a>
                        </li>
                        <li class="col-md-4"><a href="#"><img src="images/icons/flag-tr.png"><span>Turkey</span></a>
                        </li>
                        <li class="col-md-4"><a href="#"><img src="images/icons/flag-kr.png"><span>Korea</span></a>
                        </li>
                    </ul>
                </div> <!-- col // -->

                <div class="col-sm-6">
                    <header class="section-heading heading-line">
                        <h4 class="title-section bg text-uppercase">Trade services</h4>
                    </header>
                    <ul class="list-icon row">
                        <li class="col-md-4"><a href="#"><i class="icon fa fa-comment"></i><span>Trade
                                    Assistance</span></a></li>
                        <li class="col-md-4"><a href="#"><i class="icon  fa fa-suitcase"></i><span>Business
                                    Identity</span></a></li>
                        <li class="col-md-4"><a href="#"><i class="icon fa fa-globe"></i><span>Worldwide
                                    delivery</span></a></li>
                        <li class="col-md-4"><a href="#"><i class="icon fa fa-phone-square"></i><span>Customer
                                    support</span></a></li>
                        <li class="col-md-4"><a href="#"><i class="icon fa fa-globe"></i><span>Worldwide
                                    delivery</span></a></li>
                        <li class="col-md-4"><a href="#"><i class="icon fa fa-phone-square"></i><span>Customer
                                    support</span></a></li>
                    </ul>
                </div> <!-- col // -->
            </div><!-- row // -->

            <figure class="mt-3 banner p-3 bg-secondary">
                <div class="text-lg text-center white">Another banner can be here</div>
            </figure>

        </div><!-- container // -->
    </section> --}}
    <!-- ========================= SECTION LINKS END.// ========================= -->

    <!-- ========================= SECTION SUBSCRIBE ========================= -->
    <section class="section-subscribe bg-secondary padding-y-lg">
        <div class="container">

            <p class="pb-2 text-center white">Delivering the latest product trends and industry news straight to your
                inbox</p>

            <div class="row justify-content-md-center">
                <div class="col-lg-4 col-sm-6">
                    <form class="row-sm form-noborder">
                        <div class="col-8">
                            <input class="form-control" placeholder="Your Email" type="email">
                        </div> <!-- col.// -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-block btn-warning"> <i class="fa fa-envelope"></i>
                                Subscribe </button>
                        </div> <!-- col.// -->
                    </form>
                    <small class="form-text text-white-50">We’ll never share your email address with a third-party.
                    </small>
                </div> <!-- col-md-6.// -->
            </div>


        </div> <!-- container // -->
    </section>
    <!-- ========================= SECTION SUBSCRIBE END.//========================= -->
@endsection
{{-- @push('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            var settings = {
                "url": "http://127.0.0.1:8000/api/blogs",
                "method": "GET",
                "timeout": 0,
            };

            $.ajax(settings).done(function(response) {
                console.log(response);
                var result = '';
                response.forEach(item => {
                    console.log(item.name)
                            temp = `<div class="col-md-2">
            <figure class="card card-product">
                <div class="img-wrap"> <img src="${item.feature_image}"></div>
                <figcaption class="info-wrap">
                    <h6 class="title "><a href="#">${item.name}</a></h6>
                    
                    <div class="price-wrap">
                        <span class="price-new">$1280</span>
                        <del class="price-old">$1980</del>
                    </div> <!-- price-wrap.// -->
                    
                </figcaption>
            </figure> <!-- card // -->
        </div> <!-- col // -->`
                $(".test_api").append(temp)
                });
            });

        });
    </script>
@endpush --}}
