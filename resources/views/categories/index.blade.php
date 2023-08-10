<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categories</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="text-center">Add Categories</h1>
            <a href="{{ route('categories.create') }}" class="btn btn-dark w-25">Add New Category</a>
        </div>
        <div class="my-3">
            <form action="{{ route('categories.index') }}" method="GET">

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
                <th>Created At</th>
                <th>Upated At</th>
                <th>Actions</th>
            </tr>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->title }}</td>
                    <td>{{ $category->created_at->format('Y, M, d | H:s:i a') }}</td>
                    <td>{{ $category->updated_at->diffForHumans() }}</td>
                    <td>
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary btn-sm"><i
                                class="fa fa-edit" aria-hidden="true"></i>
                        </a>
                        <form class="d-inline" action="{{ route('categories.destroy', $category->id) }}" method="POST">
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

        {{ $categories->appends($_GET)->links() }}

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
