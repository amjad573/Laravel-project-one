<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Register new account</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $e)
                    <ul>
                        <li>{{ $e }}!</li>
                    </ul>
                @endforeach
            </div>
        @endif
        <form action="{{ route('form2_data') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name">Name</label>
                <input class="w-100 form-control" type="text" name="yourname" placeholder="Your Name!"
                    id="name" />
            </div>
            <div class="mb-3">
                <label for="email">Email</label>
                <input class="w-100 form-control" type="text" name="youremail" placeholder="Your Email!"
                    id="email" />
            </div>


            <div class="mb-3">
                <label for="">Gender</label><br>
                <label><input type="radio" name="yourgender" value="Male" id="">Male</label><br>
                <label><input type="radio" name="yourgender" value="Femle" id="">Female</label>
            </div>

            <div class="mb-3">
                <label for="age">Age</label>
                <input class="w-100 form-control" type="number" name="yourage" placeholder="Your Age!"
                    id="age" />
            </div>
            <div class="text-center">
                <button class="w-25 btn btn-info">Send</button>
            </div>

        </form>
    </div>
</body>

</html>
