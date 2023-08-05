@extends('forms.master-forms')

@section('title', 'Form3')

@section('headers', 'Login To Your Account')

@section('forms')

    <form action="{{ route('form3_data') }}" method="post">
        @csrf
        <div class="mb-3">
            <input class="form-control @error('youremail') is-invalid @enderror" type="email" placeholder="Your Email!!"
                name="youremail" />
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
@endsection
