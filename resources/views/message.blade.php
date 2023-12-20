@extends('layouts.app')

@section('title-block')Message @endsection

@section('content')
    <h1>Message #{{ $data->id }}</h1>
    <div class="alert alert-secondary">
        <p>{{ $data->name }}, {{ $data->email }}</p>
        <p>{{ $data->subject }}<p>
        <p>{{ $data->message }}</p>
        <p><small>{{ $data->created_at }}</small></p>
        <a href="{{ route('contact-update', $data->id) }}"><button class="btn btn-dark">Edit</button></a>
        <a href="{{ route('contact-delete', $data->id) }}"><button class="btn btn-secondary">Delete</button></a>
    </div>
@endsection
