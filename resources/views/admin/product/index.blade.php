@extends('admin.layouts.app')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Slug</th>
                <th>Content</th>
                <th>Img</th>
                <th>Price</th>
                <th>Category</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->slug }}</td>
                    <td>{{ $item->content }}</td>
                    <td>
                        <img src="{{asset($item->img)}}" style="width: 100px; height: 100px;" alt="">
                    </td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->category->name }}</td>
                    <td>
                        <form action="{{ route('products.edit', $item->id) }}">
                            @csrf
                            <button class="btn btn-primary" style="width: 100px">Edit</button>
                        </form>
                        <form action="{{ route('products.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-primary" style="width: 100px">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{$products->links()}}
@endsection
