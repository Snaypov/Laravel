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
                    <td>
                        <form action="{{ route('category.edit', $item->id) }}">
                            @csrf
                            <button class="btn btn-primary">Edit</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('category.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-primary">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
