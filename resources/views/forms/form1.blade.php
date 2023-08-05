@extends('forms.master-forms')

@section('title', 'Form1')

@section('headers', 'Enter Your Name')

@section('forms')

    <form action="{{ route('form1_data') }}" method="post">
        @csrf
        <input class="w-100 mb-3 form-control" placeholder="Your Name!!" name="yourname" />
        <button class="w-100 btn btn-success">Send</button>
    </form>

@endsection
