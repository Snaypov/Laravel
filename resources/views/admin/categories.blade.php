@extends('admin.layouts.app')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Slug</th>
                <th>Content</th>
                <th>Img</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($category as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->slug }}</td>
                    <td>{{ $item->content }}</td>
                    <td style="background-image: url({{$item->img}}); background-size: cover;"></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
