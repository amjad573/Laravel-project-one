<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-3">
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->body }}</p>

        <h4>All Comments</h4>
        @foreach ($post->comments()->orderByDesc('id')->get() as $comment)
            <div>
                <h5>{{ $comment->user->name }}</h5>
                <p>{{ $comment->comment }}</p>
            </div>
        @endforeach
        <h4>Add New Comment</h4>
        <form action="{{ route('one_to_many_data') }}" method="POST">
            @csrf
            <input type="hidden" name="post_id" value="1">
            <textarea class="form-control mb-3" placeholder="Comment" name="comment" id="" cols="30" rows="10"></textarea>
            <button class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>
