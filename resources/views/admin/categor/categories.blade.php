@extends('admin.layouts.app')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Slug</th>
                <th>Content</th>
                <th>Img</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($category as $item)
                <tr>
                    <td>{{ $item->name }}  ({{$item->products}})</td>
                    <td>{{ $item->slug }}</td>
                    <td>{{ $item->content }}</td>
                    <td>
                        <img src="{{asset($item->img)}}" style="width: 100px; height: 100px;" alt="">
                    </td> 
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

    {{$category->links()}}
@endsection
