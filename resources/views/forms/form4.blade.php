@extends('forms.master-forms')

@section('title', 'Form1')

@section('headers', 'Enter Your Name And Upload CV')

@section('forms')

    <form action="{{ route('form4_data') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="yourname">Name</label>
            <input type="text" class="form-control" placeholder="Your Name!!" name="yourname" />
        </div>

        <div class="mb-3">
            <label for="yourcv">CV</label>
            <input type="file" class="form-control"name="yourcv" />
        </div>

        <button class="btn btn-success px-5">Upload</button>
    </form>

@endsection
