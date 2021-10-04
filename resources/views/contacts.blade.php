@extends('layouts.app')

@section('content')
    <h1>Contact Page</h1>

    <form action="/get-contacts" method="POST">
        @csrf
        <input type="text" name="login" placeholder="Enter login">
        <button class="btn btn-primary">Send</button>
    </form>
@endsection