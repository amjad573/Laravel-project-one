@extends('forms.master-forms')

@section('title', 'contact_us')

@section('headers', 'Contact Us')

@section('forms')

    <div class="row justify-content-center">
        <div class=" mb-5">
            <form action="{{ route('contact_us_data') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name">Name</label>
                    <input type="text" name="name" placeholder="Your Name" class="form-control" id="">
                </div>
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Your Email" class="form-control" id="">
                </div>
                <div class="mb-3">
                    <label>Image</label>
                    <input type="file" accept=".png,.jpg,.jpeg" name="image" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="email">Message</label>
                    <textarea name="message" placeholder="Message" rows="6" class="form-control"></textarea>
                </div>
                <button class="btn btn-primary">Send</button>
            </form>
        </div>

        <div class="">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1301.5068594633885!2d34.45917653147276!3d31.547429235909767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14fd7f13bd6c01ad%3A0x9d5d7d44ccc9dfc!2z2YXYs9iq2LTZgdmJINiz2YXZiCDYp9mE2LTZitiuINit2YXYryDZhNmE2KrYo9mH2YrZhCDZiNin2YTYo9i32LHYp9mBINin2YTYtdmG2KfYudmK2Kkg2KjYutiy2Kk!5e0!3m2!1sar!2s!4v1691666262374!5m2!1sar!2s"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

@endsection
