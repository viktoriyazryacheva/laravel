@extends('layouts.app')

@section('title-block')Edit @endsection

@section('content')
    <h1>Edit</h1>
    <form action="{{ route('contact-form-edit', $data->id) }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name">Enter your name</label>
            <input type="text" id="name" name="name" value="{{ $data->name }}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="email">Enter your email</label>
            <input type="text" id="email" name="email" value="{{ $data->email }}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject" value="{{ $data->subject }}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="message">Message</label>
            <textarea id="message" name="message" class="form-control">{{ $data->message }}</textarea>
        </div>
        <button type="submit" class="btn btn-outline-success">Save</button>
    </form>
@endsection
