<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>categories</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="text-center">Add New Category</h1>
            <a href="{{ route('categories.index') }}" class="btn btn-dark w-25">All Category</a>
        </div>
        <div class="my-3">
            <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control @error('title')is-invalid @enderror"
                        placeholder="Title" value="{{ old('title') }}" id="">
                    @error('title')
                        <small class="invalid-feedback">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <button class="btn btn-success px-5">Add Category</button>
                </div>
            </form>
        </div>
</body>

</html>
