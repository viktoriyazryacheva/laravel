@extends('layouts.app')

@section('title-block')Contact us @endsection

@section('content')
    <h1>CONTACT</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('contact-form') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name">Enter your name</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" class="form-control">
        </div>
        <div class="mb-3">
            <label for="email">Enter your email</label>
            <input type="text" id="email" name="email" placeholder="Enter your email" class="form-control">
        </div>
        <div class="mb-3">
            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject" placeholder="Subject" class="form-control">
        </div>
        <div class="mb-3">
            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Message" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-outline-success">Submit</button>
    </form>
@endsection