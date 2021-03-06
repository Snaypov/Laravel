@extends('admin.layouts.app')

@section('content')
    @include('admin.layouts._messages')
        {!! Form::model($category, ['route' => ['category.update', $category->id], 'files' => true]) !!}
            
        @method('PUT')
        <div class="form-group">
            @include('admin.categor._form')
            <div class="row">
                <div class="text-center" style="margin: 0 auto; padding-top: 20px">
                    <button class="btn btn-primary text-center" style="width: 80px;">Send</button>
                </div>
            </div>
        </div>
        {!! Form::close() !!}


    {{-- @foreach ($category as $item)
        <form action="{{ route('category.update', $item->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group container" style="margin-top: 35px">
                <div class="row" style="padding: 20px 20px;">
                    <div class="col" style="border-right: 1px solid gray">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" placeholder="Enter category name" name="name"
                            value="{{ $item->name }}">
                    </div>
                    <div class="col">
                        <label for="slug">Slug:</label>
                        <input type="text" class="form-control" placeholder="Enter category slug" name="slug"
                            value="{{ $item->slug }}">
                    </div>
                </div>
                <div class="row" style="padding: 20px 20px">
                    <label for="content">Content:</label>
                    <input type="text" class="form-control" style="height: 100px" placeholder="Enter category content"
                        name="content" value="{{ $item->content }}">
                </div>
                <div class="row" style="padding: 0px  20px;">
                    <label for="img">Img:</label>
                    <input type="text" class="form-control" placeholder="Enter category img" name="img"
                        value="{{ $item->img }}">
                </div>
            </div>
            <div class="row">
                <div class="text-center" style="margin: 0 auto; padding-top: 20px">
                    <button class="btn btn-primary text-center" style="width: 80px;">Send</button>
                </div>
            </div>
        </form>
    @endforeach --}}
@endsection
