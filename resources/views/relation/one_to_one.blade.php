<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-3">
        <table class="table table-hover table-striped">
            <tr class="table-dark">
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Insuranse Start</th>
                <th>Insuranse End</th>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->insurance->start }}</td>
                    <td>{{ $user->insurance->end }}</td>
                </tr>
            @endforeach
        </table>
    </div>

</body>

</html>
