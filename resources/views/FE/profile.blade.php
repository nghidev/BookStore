@extends('layouts.fe')
@push('link')
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.c/om/ajax/libs/bootstrap-fileinput/5.0.9/css/fileinput.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/css/fileinput.min.css">
@endpush

@section('content')
    <div class="card container">
        <article class="card-body d-flex mx-auto" style="width: 100%;">

            <form action="{{ route('fe.updateProfile') }}" method="POST" style="flex: 1;">
                {{-- name --}}
                @csrf
                <h4 class="pl-3">Thông tin cá nhân tin cá nhân</h4>
                
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                    <input name="name" class="form-control" placeholder="Full name" type="text"
                        value="{{ Auth::user()->name }}">
                </div> <!-- form-group// -->
                {{-- email --}}
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                    </div>
                    <input name="email" class="form-control" placeholder="Email address" type="email"
                        value="{{ Auth::user()->email }}">
                </div> <!-- form-group// -->

                {{-- <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                    </div>
                    <input type="file" class="form-control" required name="avatar">
                </div> <!-- form-group// --> --}}
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                    </div>
                    <input name="tel" class="form-control" placeholder="Phone" type="text"
                        value="{{ Auth::user()->tel }}">
                </div> <!-- form-group// -->
                {{-- address --}}
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-building"></i> </span>
                    </div>
                    <input name="address" class="form-control" placeholder="Address" type="text"
                        value="{{ Auth::user()->address }}">
                </div>

                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input name="password" class="form-control" placeholder="Mật khẩu" type="password">
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input name="repassword" class="form-control" placeholder="Repeat password" type="password">
                </div> <!-- form-group// -->
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Cập nhật thông tin</button>
                </div> <!-- form-group// -->
                <p class="text-center">Have an account? <a href="">Log In</a> </p>
            </form>
            <form action="{{ route('fe.profile.storeAvatar') }}" method="POST" enctype="multipart/form-data" style="flex: 1;">
                @csrf
                <div class="container">
                    <h4 class="pl-3">Ảnh đại diện</h4>
                    <input id="input-b1" name="input-b1" type="file" class="file" data-browse-on-zone-click="true" >
                </div>
              
            </form>
        </article>
    </div>

@endsection

@push('js')
{{-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/js/fileinput.min.js"></script>
@endpush
