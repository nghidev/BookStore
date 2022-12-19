@extends('layouts.fe')
@section('content')
    <!-- ========================= SECTION CONTENT ========================= -->
    @foreach (Cart::content() as $item)
    {{ $item->name }}
    {{ $item->qty }}
    {{ "-------" }}

@endforeach
{{-- @foreach ($get_carts as $item)
    {{ $item->name }}
    {{ $item->qty}}
@endforeach --}}
    {{-- {{ $total }} --}}
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
    <tr>
        <td>
    <figure class="media">
        <div class="img-wrap"><img src="images/items/1.jpg" class="img-thumbnail img-sm"></div>
        <figcaption class="media-body">
            <h6 class="title text-truncate">Product name goes here </h6>
            <dl class="dlist-inline small">
              <dt>Size: </dt>
              <dd>XXL</dd>
            </dl>
            <dl class="dlist-inline small">
              <dt>Color: </dt>
              <dd>Orange color</dd>
            </dl>
        </figcaption>
    </figure> 
        </td>
        <td> 
            <select class="form-control">
                <option>1</option>
                <option>2</option>	
                <option>3</option>	
                <option>4</option>	
            </select> 
        </td>
        <td> 
            <div class="price-wrap"> 
                <var class="price">USD 145</var> 
                <small class="text-muted">(USD5 each)</small> 
            </div> <!-- price-wrap .// -->
        </td>
        <td class="text-right"> 
        <a data-original-title="Save to Wishlist" title="" href="" class="btn btn-outline-success" data-toggle="tooltip"> <i class="fa fa-heart"></i></a> 
        <a href="" class="btn btn-outline-danger"> × Remove</a>
        </td>
    </tr>
    <tr>
        <td>
    <figure class="media">
        <div class="img-wrap"><img src="images/items/2.jpg" class="img-thumbnail img-sm"></div>
        <figcaption class="media-body">
            <h6 class="title text-truncate">Product name goes here </h6>
            <dl class="dlist-inline small">
              <dt>Size: </dt>
              <dd>XXL</dd>
            </dl>
            <dl class="dlist-inline small">
              <dt>Color: </dt>
              <dd>Orange color</dd>
            </dl>
        </figcaption>
    </figure> 
        </td>
        <td> 
            <select class="form-control">
                <option>1</option>
                <option>2</option>	
                <option>3</option>	
                <option>4</option>	
            </select> 
        </td>
        <td> 
            <div class="price-wrap"> 
                <var class="price">USD 35</var> 
                <small class="text-muted">(USD10 each)</small> 
            </div> <!-- price-wrap .// -->
        </td>
        <td class="text-right"> 
        <a data-original-title="Save to Wishlist" title="" href="" class="btn btn-outline-success" data-toggle="tooltip"> <i class="fa fa-heart"></i></a> 
        <a href="" class="btn btn-outline-danger btn-round"> × Remove</a>
        </td>
    </tr>
    <tr>
        <td>
    <figure class="media">
        <div class="img-wrap"><img src="images/items/3.jpg" class="img-thumbnail img-sm"></div>
        <figcaption class="media-body">
            <h6 class="title text-truncate">Product name goes here </h6>
            <dl class="dlist-inline small">
              <dt>Size: </dt>
              <dd>XXL</dd>
            </dl>
            <dl class="dlist-inline small">
              <dt>Color: </dt>
              <dd>Orange color</dd>
            </dl>
        </figcaption>
    </figure> 
        </td>
        <td> 
            <select class="form-control">
                <option>1</option>
                <option>2</option>	
                <option>3</option>	
                <option>4</option>	
            </select> 
        </td>
        <td> 
            <div class="price-wrap"> 
                <var class="price">USD 45</var> 
                <small class="text-muted">(USD15 each)</small> 
            </div> <!-- price-wrap .// -->
        </td>
        <td class="text-right"> 
            <a data-original-title="Save to Wishlist" title="" href="" class="btn btn-outline-success" data-toggle="tooltip"> <i class="fa fa-heart"></i></a> 
            <a href="" class="btn btn-outline-danger btn-round"> × Remove</a>
        </td>
    </tr>
    </tbody>
    </table>
    </div> <!-- card.// -->
    
        </main> <!-- col.// -->
        <aside class="col-sm-3">
    <p class="alert alert-success">Add USD 5.00 of eligible items to your order to qualify for FREE Shipping. </p>
    <dl class="dlist-align">
      <dt>Total price: </dt>
      <dd class="text-right">USD 568</dd>
    </dl>
    <dl class="dlist-align">
      <dt>Discount:</dt>
      <dd class="text-right">USD 658</dd>
    </dl>
    <dl class="dlist-align h4">
      <dt>Total:</dt>
      <dd class="text-right"><strong>USD 1,650</strong></dd>
    </dl>
    <hr>
    <figure class="itemside mb-3">
        <aside class="aside"><img src="images/icons/pay-visa.png"></aside>
         <div class="text-wrap small text-muted">
    Pay 84.78 AED ( Save 14.97 AED )
    By using ADCB Cards 
         </div>
    </figure>
    <figure class="itemside mb-3">
        <aside class="aside"> <img src="images/icons/pay-mastercard.png"> </aside>
        <div class="text-wrap small text-muted">
    Pay by MasterCard and Save 40%. <br>
    Lorem ipsum dolor 
        </div>
    </figure>
    
        </aside> <!-- col.// -->
    </div>
    
    </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->
    
    <!-- ========================= SECTION  ========================= -->
    <section class="section-name bg-white padding-y">
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
    </section>
    <!-- ========================= SECTION  END// ========================= -->
    
    <!-- ========================= SECTION  ========================= -->
    <section class="section-name bg padding-y">
    <div class="container">
    <h4>Another section if needed</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div><!-- container // -->
    </section>
    <!-- ========================= SECTION  END// ========================= -->
@endsection