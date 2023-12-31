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
            <a href="{{ route('posts.create') }}" class="btn btn-dark w-25">Add New Post</a>
        </div>
        <div class="my-3">
            <form action="{{ route('posts.index') }}" method="GET">
                <div class="row">
                    <div class="col-md-8">
                        <input type="text" name="s" class="form-control" placeholder="Search About Any Post..."
                            id="">
                    </div>

                    <div class="col-md-2">
                        <select name="count" id="" class="form-select">
                            <option {{ request()->count == 10 ? 'selected' : '' }} value="10">10</option>
                            <option {{ request()->count == 15 ? 'selected' : '' }} value="15">15</option>
                            <option {{ request()->count == 20 ? 'selected' : '' }} value="20">20</option>
                            <option {{ request()->has('count') ? '' : 'selected' }}
                                {{ request()->count == 25 ? 'selected' : '' }} value="25">25</option>
                            <option {{ request()->count == 'all' ? 'selected' : '' }} value="all">All</option>
                        </select>
                    </div>

                    <div class="col-md-2">
                        <button class="btn btn-success w-100">Search</button>
                    </div>
                </div>
                <div class="container mt-3">
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                </div>
            </form>
        </div>
        <table class="table table-bordered table-striped table-hover mt-3">
            <tr class="table-dark">
                <th>ID</th>
                <th>Title</th>
                {{-- <th>Body</th> --}}
                <th>Created At</th>
                <th>Upated At</th>
                <th>Actions</th>
            </tr>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    {{-- <td>{!! $post->body !!}</td> --}}
                    <td>{{ $post->created_at->format('Y, M, d | H:s:i a') }}</td>
                    <td>{{ $post->updated_at->diffForHumans() }}</td>
                    <td>
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary btn-sm"><i
                                class="fa fa-edit" aria-hidden="true"></i>
                        </a>
                        <form class="d-inline" action="{{ route('posts.destroy', $post->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button onclick="return confirm( 'Are you sure?!')" class="btn btn-danger btn-sm ">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

        {{ $posts->appends($_GET)->links() }}

    </div>

    <script>
        setTimeout(() => {
            document.querySelector('.alert').style.display = "none";
        }, 4000);

        document.querySelector('.delete-form').addEventListener('submit', function(e) {
            e.preventDefault();
            if (confirm("Are You Sure you want to delete this item?")) {
                e.target.submit();
            }
        })
    </script>


</body>

</html>
