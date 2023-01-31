@extends('layouts.be')
@section('content')
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Thêm Sản Phẩm</h5>

              <!-- General Form Elements -->
              <form action="{{ route('BE.product.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- <input type="hidden" name="id" class="form-control" value="{{old('code')}}{{ $product->id }}"> --}}
                {{-- <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Loại sách</label>
                  <div class="col-sm-10">
                    
                  </div>
                </div> --}}
                
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Tên loại sản phẩm</label>
                  <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" value="{{old('name')}}{{ $cat->name }}">
                   
                  </div>
                </div>
                {{-- <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Mô tả </label>
                  <div class="col-sm-10">
                    <input type="text" name="description" class="form-control" value="{{old('description')}}{{ $product->description }}">
                  </div>
                </div> --}}
                
                {{-- <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Chọn bộ sưu tập ảnh</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" name="product_galleries[]" multiple id="product_galleries">
                  </div>
                </div> --}}
              
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Submit Button</label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Cập nhật sản phẩm</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

        
      </div>
    </section>


  @endsection

  @push('js')
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
   
  @endpush