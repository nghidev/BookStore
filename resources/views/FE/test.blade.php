<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Laravel Search</title>
</head>

<body>
    <div class="container my-5 py-5 px-5 mx-5">
        <!-- Search input -->
        <form>
            <input type="search" class="form-control" placeholder="Find user here" name="search">
        </form>

        <!-- List items -->
        @if ($check == 0)
            {{-- if check isn't equal to 0 if so is 1 --}}
        @else
            <ul class="list-group mt-3">
                @forelse($product as $products)
                    <li class="list-group-item">{{ $products->name }}</li>
                @empty
                    <li class="list-group-item list-group-item-danger">Khôn tìm thấy thông tin sản phẩm </li>
                @endforelse
            </ul>

        @endif
    </div>
    <button id="click">click</button>
    <div id="ok1">
        <input type="text" id="ip1" placeholder="nhap">
        <input type="text" id="ip2" placeholder="hien">
        <h1 id="show"></h1>
    </div>
    <div>

        <label for="input-6a">Large Input Group</label>
        <div class="file-loading">
            <input id="input-b6a" name="input-b6a[]" type="file" multiple>
        </div>
        <br>
        <label for="input-6b">Small Input Group</label>
        <div class="file-loading">
            <input id="input-b6b" name="input-b6b[]" type="file" multiple>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
    <script>
        $(document).ready(function() {
            // var temp = ''
            // $('#ip1').keyup(function() {
            //     const temp = $(this).val()
            //     $('#ip2').val(temp)
            // })
            $('.file-upload').file_upload();
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#input-b6a").fileinput({
                showUpload: false,
                dropZoneEnabled: false,
                maxFileCount: 10,
                inputGroupClass: "input-group-lg"
            });
            $("#input-b6b").fileinput({
                showUpload: false,
                dropZoneEnabled: false,
                maxFileCount: 10,
                inputGroupClass: "input-group-sm"
            });
        });
        </script>
</body>

</html>
