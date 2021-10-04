@extends('layouts.app')


@section('content')
    <h1>{{$title}}</h1>
    <h2>{!! $header !!}</h2>

    @forelse ($users as $user)
        <p>{{$loop->iteration}}  {{$user}}</p>
    @empty
        <p>Empty</p>
    @endforelse

@endsection

@section('title')
    {{$title}};
@endsection