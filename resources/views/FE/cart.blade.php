@extends('layouts.fe')
@section('content')

    <!-- ========================= SECTION CONTENT ========================= -->
    {{-- @foreach (Cart::content() as $item)
        {{ $item->name }}
        {{ $item->options->image }}
        {{ '-------' }}
    @endforeach --}}
    
    {{-- @foreach ($get_carts as $item)
    {{ $item->name }}
    {{ $item->qty}}
@endforeach --}}
    {{-- {{ $total }} --}}
    <a href="{{ url('fe/orderByUser/destroy') }}">xóa tất cả</a>
    <section class="section-content bg padding-y border-top">
        <div class="container">

            <div class="row">
                
                <main class="col-sm-9">
                    <div class="card">
                        <table class="table table-hover shopping-cart-wrap">
                            <thead class="text-muted">
                                <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col" width="120">Quantity</th>
                                    <th scope="col" width="120">Price</th>
                                    <th scope="col" class="text-right" width="200">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (Cart::content() as $item)
                                <tr>
                                    <td>
                                        <figure class="media">
                                            <div class="img-wrap"><img src="{{ asset(Storage::url('public/img/product/' . $item->options->image)) }}"
                                                    class="img-thumbnail img-sm"></div>
                                            <figcaption class="media-body">
                                                <h6 class="title text-truncate">{{ $item->name }}</h6>
                                                {{-- <dl class="dlist-inline small">
                                                    <dt>Size: </dt>
                                                    <dd>XXL</dd>
                                                </dl> --}}
                                                {{-- <dl class="dlist-inline small">
                                                    <dt>Color: </dt>
                                                    <dd>Orange color</dd>
                                                </dl> --}}
                                            </figcaption>
                                        </figure>
                                    </td>
                                    <td>
                                        <select class="form-control">
                                            <?php
                                            $temp = (int) $item->qty    
                                            ?>
                                            @for ($i = 0 ; $i < $temp ; $i++)
                                            <option 
                                            @if($temp)
                                                {{ "selected" }}
                                            @endif
                                            >{{ $i+1 }}</option>
                                            @endfor
                                            {{-- <option>2</option>
                                            <option>3</option>
                                            <option>4</option> --}}
                                        </select>
                                    </td>
                                    <td>
                                        <div class="price-wrap">
                                            <var class="price">{{ $item->price*$temp }}</var>
                                            <small class="text-muted">(USD5 each)</small>
                                        </div> <!-- price-wrap .// -->
                                    </td>
                                    <td class="text-right">
                                        <a data-original-title="Save to Wishlist" title="" href=""
                                            class="btn btn-outline-success" data-toggle="tooltip"> <i
                                                class="fa fa-heart"></i></a>
                                        <a href="{{ url('fe/cart/delete') }}/{{ $item->rowId }}" class="btn btn-outline-danger">Xóa</a>
                                    </td>
                                </tr>
                               
                                @endforeach
                         
                               
                            </tbody>
                        </table>
                    </div> <!-- card.// -->

                </main> <!-- col.// -->
                <aside class="col-sm-3">
                    {{-- <p class="alert alert-success">Add USD 5.00 of eligible items to your order to qualify for FREE
                        Shipping. </p> --}}
                    <dl class="dlist-align">
                        <dt>Tổng giá: </dt>
                        {{-- <dd class="text-right">{{$total = Cart::subtotal() }}</dd> --}}
                        <dd class="text-right">
                        {{  Cart::subtotal() }}đ</dd>
                    </dl>
                    <dl class="dlist-align">
                        <dt>mã giảm giá:</dt>
                        <dd class="text-right">0</dd>
                    </dl>
                    <dl class="dlist-align h4">
                        <dt>Tổng:</dt>
                        <dd class="text-right"><strong>{{ Cart::subtotal() }}</strong></dd>
                    </dl>
                    <hr>
                                            {{-- <figure class="itemside mb-3">
                                <aside class="aside"><img src="images/icons/pay-visa.png"></aside>
                                <div class="text-wrap small text-muted">
                            Pay 84.78 AED ( Save 14.97 AED )
                            By using ADCB Cards 
                                </div>
                            </figure> --}}
                                            {{-- <figure class="itemside mb-3">
                                <aside class="aside"> <img src="images/icons/pay-mastercard.png"> </aside>
                                <div class="text-wrap small text-muted">
                            Pay by MasterCard and Save 40%. <br>
                            Lorem ipsum dolor 
                                </div>
                            </figure> --}}
                    <button type="submit" class="btn btn-success w-100"><a href="{{ route('Fe.orderByUser.create') }}">Đặt hàng</a> </button>
                </aside> <!-- col.// -->
            </div>
           
           
        </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->

    <!-- ========================= SECTION  ========================= -->
    {{-- <section class="section-name bg-white padding-y">
        <div class="container">
            <header class="section-heading">
                <h2 class="title-section">Section name</h2>
            </header><!-- sect-heading -->

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div><!-- container // -->
    </section> --}}
    <!-- ========================= SECTION  END// ========================= -->

    <!-- ========================= SECTION  ========================= -->
    {{-- <section class="section-name bg padding-y">
        <div class="container">
            <h4>Another section if needed</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div><!-- container // -->
    </section> --}}
    <!-- ========================= SECTION  END// ========================= -->
@endsection
