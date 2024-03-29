@extends('layouts.fe')
@section('content')
<section class="" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-8 col-xl-6">
          <div class="card border-top border-bottom border-3" style="border-color: #f37a27 !important;">
            <div class="card-body p-5">
  
              <p class="lead fw-bold mb-5" style="color: #f37a27;">Đơn hàng</p>
  
              {{-- @foreach ($order_detail as $item) --}}
              <div class="row">
                <div class="col mb-3">
                  <p class="small text-muted mb-1">Date</p>
                  <p>{{ $order->created_at }}</p>
                </div>
                <div class="col mb-3">
                  <p class="small text-muted mb-1">Order No.</p>
                  <p>{{ $order->code }}</p>
                </div>
              </div>
              {{-- @endforeach --}}
              <div class="mx-n5 px-5 py-4" style="background-color: #f2f2f2;">
              @foreach ($order_detail as $item)

                <div class="row">
                  <div class="col-md-8 col-lg-9">
                    <p>{{ $item->name }}</p>
                  </div>
                  <div class="col-md-4 col-lg-3">
                    {{-- <p>{{ $item->total }} đ</p> --}}
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-8 col-lg-9">
                    <p class="mb-0">Shipping</p>
                  </div>
                  <div class="col-md-4 col-lg-3">
                    <p class="mb-0">0đ</p>
                  </div>
                </div>
              </div>
  
              <div class="row my-4">
                <div class="col-md-4 offset-md-8 col-lg-3 offset-lg-9">
                  <p class="lead fw-bold mb-0" style="color: #f37a27;">{{ $item->total }}đ</p>
                </div>
              </div>
              @endforeach
  
              <p class="lead fw-bold mb-4 pb-2" style="color: #f37a27;">Trạng thái</p>
  
              <div class="row">
                <div class="col-lg-12">
  
                  <div class="horizontal-timeline">
  
                    <ul class="list-inline items d-flex justify-content-between">
                      <li class="list-inline-item items-list">
                        <p class="py-1 px-2 rounded text-white" style="background-color: #f37a27;">Đã được xác nhận</p
                          class="py-1 px-2 rounded text-white" style="background-color: #f37a27;">
                      </li>
                      <li class="list-inline-item items-list">
                        <p class="py-1 px-2 rounded text-white" style="background-color: #f37a27;">giao cho shiper</p
                          class="py-1 px-2 rounded text-white" style="background-color: #f37a27;">
                      </li>
                      <li class="list-inline-item items-list">
                        <p class="py-1 px-2 rounded text-white" style="background-color: #f37a27;">Đang giao
                        </p>
                      </li>
                      <li class="list-inline-item items-list text-end" style="margin-right: 8px;">
                        <p style="margin-right: -8px;">Đã giao</p>
                      </li>
                    </ul>
                  </div>
  
                </div>
              </div>
  
              <p class="mt-4 pt-2 mb-0">Want any help? <a href="#!" style="color: #f37a27;">Please contact
                  us</a></p>
  
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection