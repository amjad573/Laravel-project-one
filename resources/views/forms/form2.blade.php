@extends('forms.master-forms')

@section('title', 'Form2')

@section('headers', 'Register new account')

@section('forms')

    <form action="{{ route('form2_data') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name">Name</label>
            <input class="w-100 form-control" type="text" name="yourname" placeholder="Your Name!" id="name"
                value="{{ old('yourname') }}" />
        </div>
        <div class="mb-3">
            <label for="email">Email</label>
            <input class="w-100 form-control" type="text" name="youremail" placeholder="Your Email!" id="email"
                value="{{ old('youremail') }}" />
        </div>


        <div class="mb-3">
            {{ old('yourgender') }}
            <label>Gender</label><br>
            <label><input type="radio" {{ old('yourgender' == 'Female' ? 'checked' : '') }} name="yourgender"
                    value="Male">Male</label><br>
            <label><input type="radio" {{ old('yourgender' == 'Female' ? 'checked' : '') }} name="yourgender"
                    value="Femle">Female</label>
        </div>

        <div class="mb-3">
            <label for="age">Age</label>
            <input class="w-100 form-control" type="number" name="yourage" placeholder="Your Age!" id="age" />
        </div>
        <div class="text-center">
            <button class="w-25 btn btn-info">Register</button>
        </div>

    </form>

@endsection
