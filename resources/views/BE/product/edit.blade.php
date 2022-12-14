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
                <input type="hidden" name="id" class="form-control" value="{{old('code')}}{{ $product->id }}">
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Loại sách</label>
                  <div class="col-sm-10">
                    <select class="form-select" name="cats_id" id="category_id" aria-label="Default select example">
                      @foreach ($cats as $cat)
                      <option 
                      @if($product->cats_id == $cat->id)
                      selected 
                      
                      @endif
                      value="{{ $cat->id }}">{{ $cat->name }}</option>
                      @endforeach
                      {{-- <option value="1">Công nghệ thông tin</option>
                      <option  value="2">Kinh tế</option>
                      <option selected value="3">Manga</option> --}}
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Mã số</label>
                  <div class="col-sm-10">
                    <input type="text" name="code" class="form-control" value="{{old('code')}}{{ $product->code }}">
                    
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Tên</label>
                  <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" value="{{old('name')}}{{ $product->name }}">
                   
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Mô tả </label>
                  <div class="col-sm-10">
                    <input type="text" name="description" class="form-control" value="{{old('description')}}{{ $product->description }}">
                  </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Nội dung</label>
                    <div class="col-sm-10">
                      <textarea class="text " id="summernote" name="detail" style="height: 100px; width:100%;">{{old('detail')}}{{ $product->detail }}</textarea>
                    </div>
                  </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Giá</label>
                  <div class="col-sm-10">
                    <input type="number" name="real_price" class="form-control" value="{{old('real_price')}}{{ $product->real_price }}">
                  </div>
                </div>
                <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">Giá khuyến mại</label>
                    <div class="col-sm-10">
                      <input type="number" name="sale_price" class="form-control" value="{{old('sale_price')}}{{ $product->sale_price }}">
                    </div>
                  </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Chọn ảnh đặc trưng</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" name="feature_image" id="feature_image" >
                  </div>
                </div>
                {{-- <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Chọn bộ sưu tập ảnh</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" name="product_galleries[]" multiple id="product_galleries">
                  </div>
                </div> --}}
                <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">Sẵn trong kho</label>
                    <div class="col-sm-10">
                      <input type="number" name="inventory_number" class="form-control" value="{{old('v')}}{{ $product->inventory_number }}">
                    </div>
                  </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Submit Button</label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Lưu sản phẩm</button>
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