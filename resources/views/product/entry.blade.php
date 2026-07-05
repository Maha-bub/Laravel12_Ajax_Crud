<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
 <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <form action="{{ route('product.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Product Name</label>
                    <input type="text" name="name" class="form-control">
                    <span class="text-danger name_error"></span>
                </div>

                <div class="mb-3">
                    <label class="form-label">Price</label>
                    <input type="text" name="price" class="form-control">
                    <span class="text-danger price_error"></span>
                </div>

                <div class="mb-3">
                    <label class="form-label">Product Description</label>
                    <textarea name="description" class="form-control" rows="4"></textarea>
                    <span class="text-danger description_error"></span>
                </div>

                <button type="submit" class="btn btn-success">
                    Add Product
                </button>

                <a href="{{ route('product.index') }}" class="btn btn-info">
                    Back Table
                </a>

            </form>

        </div>
    </div>
</div>
</body>

</html>
