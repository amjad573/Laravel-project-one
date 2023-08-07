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
            <h1 class="text-center">Add Posts</h1>
            <a href="" class="btn btn-dark w-25">Add New Post</a>
        </div>

        <table class="table table-bordered table-striped table-hover mt-3">
            <tr class="table-dark">
                <th>ID</th>
                <th>Title</th>
                <th>Created At</th>
                <th>Upated At</th>
                <th>Actions</th>
            </tr>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->created_at->format('Y, M, d | H:s:i a') }}</td>
                    <td>{{ $post->updated_at->diffForHumans() }}</td>
                    <td>
                        <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i>
                        </a>
                        <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $posts->links() }}
    </div>
</body>

</html>
