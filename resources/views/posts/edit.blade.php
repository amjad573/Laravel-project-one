<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="text-center">Edit Post: <span>{{ $post->title }}</span></h1>
            <a href="{{ route('posts.index') }}" class="btn btn-dark w-25">All Post</a>
        </div>
        <div class="my-3">
            <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control @error('title')is-invalid @enderror"
                        placeholder="Title" value="{{ old('title', $post->title) }}" id="">
                    @error('title')
                        <small class="invalid-feedback">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control @error('image')is-invalid @enderror">
                    @error('image')
                        <small class="invalid-feedback">{{ $message }}</small>
                    @enderror
                    <img class="mt-2" width="150" src="{{ asset('uploads/' . $post->image) }}" alt="">
                </div>
                <div class="mb-3">
                    <label>Body</label>
                    <textarea rows="6" name="body" class="form-control @error('title')is-invalid @enderror" placeholder="Body">{{ old('body', $post->body) }}</textarea>
                    @error('body')
                        <small class="invalid-feedback">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <button class="btn btn-success px-5">Update Post</button>
                </div>
            </form>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.6.1/tinymce.min.js"
            integrity="sha512-UAE3iwk1y0A7jx6PWZWng/s/7G+W0dfeYK8FwSvfj7Kx5EC6evlT7DJ9EDsAsPToEVi4pTaXKNedEMXq1JEK8g=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script>
            tinymce.init({
                selector: 'textarea',
                plugins: [
                    'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
                    'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
                    'insertdatetime', 'media', 'table', 'help', 'wordcount'
                ],
                toolbar: 'undo redo | blocks | ' +
                    'bold italic backcolor | alignleft aligncenter ' +
                    'alignright alignjustify | bullist numlist outdent indent | ' +
                    'removeformat | help',
                content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
            });
        </script>
</body>

</html>
