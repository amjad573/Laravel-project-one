<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Login To Your Account</h1>
        {{-- Validation Code --}}
        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $e)
                    <ul>
                        <li>{{ $e }}!</li>
                    </ul>
                @endforeach
            </div>
        @endif --}}
        {{-- End Validation Code --}}
        <form action="{{ route('form3_data') }}" method="post">
            @csrf
            <div class="mb-3">
                <input class="form-control @error('youremail') is-invalid @enderror" type="email"
                    placeholder="Your Email!!" name="youremail" />
                @error('youremail')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <input class=" mb-3 form-control @error('yourpassword') is-invalid @enderror "
                    type="password"placeholder="Your Password!!" name="yourpassword" autocomplete="new-password" />
                @error('yourpassword')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button class="w-100 btn btn-success">Login</button>
        </form>
    </div>
</body>

</html>
