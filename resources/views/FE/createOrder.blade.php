@extends('layouts.fe')
@section('content')
    <div class="container p-4">
        <div class="row">
            <aside class="col-sm-8">

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
                                            <div class="img-wrap"><img
                                                    src="{{ asset(Storage::url('public/img/product/' . $item->options->image)) }}"
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
                                            $temp = (int) $item->qty;
                                            ?>
                                            @for ($i = 0; $i < $temp; $i++)
                                                <option @if ($temp) {{ 'selected' }} @endif>
                                                    {{ $i + 1 }}</option>
                                            @endfor
                                            {{-- <option>2</option>
                                        <option>3</option>
                                        <option>4</option> --}}
                                        </select>
                                    </td>
                                    <td>
                                        <div class="price-wrap">
                                            <var class="price">{{ $item->price * $temp }}</var>
                                            <small class="text-muted">(USD5 each)</small>
                                        </div> <!-- price-wrap .// -->
                                    </td>
                                    <td class="text-right">
                                        <a data-original-title="Save to Wishlist" title="" href=""
                                            class="btn btn-outline-success" data-toggle="tooltip"> <i
                                                class="fa fa-heart"></i></a>
                                        <a href="{{ url('fe/cart/delete') }}/{{ $item->rowId }}"
                                            class="btn btn-outline-danger">Xóa</a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div> <!-- card.// -->
                <div id="code_register_1">
                    <div class="card">
                        <article class="card-body">
                            <form action="{{ route('Fe.orderByUser.store') }}" method="POST">
                                @csrf
                                {{-- <div class="form-row">
                                    <div class="col form-group">
                                        <label>First name</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div> <!-- form-group end.// -->
                                    <div class="col form-group">
                                        <label>Last name</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div> <!-- form-group end.// -->
                                </div> <!-- form-row end.// --> --}}
                                <div class="form-group">
                                    <label>Mã đơn hàng</label>
                                    <input type="text" class="form-control" name="code" placeholder=""
                                        value="<?php echo mt_rand(); ?>">
                                </div>
                                <div class="form-group">
                                    <label>Tên nhận hàng</label>
                                    <input type="text" class="form-control" name="consignee_name" placeholder=""
                                        value="{{ Auth::user()->name }}">
                                </div>
                                <div class="form-group">
                                    <label>Số điện thoại đặt hàng</label>
                                    <input type="text" class="form-control" placeholder="" name="consignee_phone"
                                        value="{{ Auth::user()->tel }}">
                                </div>

                                <div class="form-group">
                                    <label>Địa chỉ đặt hàng</label>
                                    <input type="text" class="form-control" placeholder=""
                                        name="consignee_address"value="{{ Auth::user()->address }}">
                                </div> <!-- form-group end.// -->

                                <div class="form-group">
                                    <input type="hidden" class="form-control" placeholder="" name="status" value="0">
                                </div>

                                <div class="form-group">
                                    {{-- <label class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" value="option1">
                                        <span class="form-check-label"> Male </span>
                                    </label> --}}
                                    <label class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="payment_method" value="1"
                                            checked='checked'>
                                        <span class="form-check-label">Thanh toán khi nhận hàng</span>
                                    </label>
                                </div> <!-- form-group end.// -->
                                {{-- <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>City</label>
                                        <input type="text" class="form-control">
                                    </div> <!-- form-group end.// -->
                                    <div class="form-group col-md-6">
                                        <label>Country</label>
                                        <select id="inputState" class="form-control">
                                            <option> Choose...</option>
                                            <option>Uzbekistan</option>
                                            <option>Russia</option>
                                            <option selected="">United States</option>
                                            <option>India</option>
                                            <option>Afganistan</option>
                                        </select>
                                    </div> <!-- form-group end.// -->
                                </div> <!-- form-row.// --> --}}
                                {{-- <div class="form-group">
                                    <label>Create password</label>
                                    <input class="form-control" type="password">
                                </div> <!-- form-group end.// --> --}}
                                {{-- <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block"> Register </button>
                                </div> <!-- form-group// -->
                                <small class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our <br>
                                    Terms of use and Privacy Policy.</small> --}}
                                <button type="submit" class="btn btn-success w-100"> Đặt hàng</button>

                            </form>
                        </article> <!-- card-body end .// -->
                        {{-- <div class="border-top card-body text-center">Have an account? <a href="">Log In</a></div> --}}
                    </div> <!-- card.// -->

                </div> <!-- code-wrap.// -->
            </aside> <!-- col.// -->

            <aside class="col-sm-3">
                {{-- <p class="alert alert-success">Add USD 5.00 of eligible items to your order to qualify for FREE
                    Shipping. </p> --}}

                <dl class="dlist-align">
                    <dt>Tổng giá: </dt>
                    {{-- <dd class="text-right">{{$total = Cart::subtotal() }}</dd> --}}
                    <dd class="text-right">
                        {{ Cart::subtotal() }}đ</dd>
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
            </aside> <!-- col.// -->

        </div>

    </div>
@endsection
