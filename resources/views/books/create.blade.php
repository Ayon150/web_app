@extends('layout',['title'=>'New Book'])


@section('page-content')
    <legend>New Book</legend>


    <form method="POST" action="{{route('book.store')}}">
        @csrf
        <div class="mb-3">
            <label  class="form-label">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Book Title" value="{{old('title')}}">
            @error('title')
                <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label  class="form-label">Author</label>
            <input type="text" class="form-control" name="author" placeholder="Book Author" value="{{old('author')}}">
            @error('author')
                <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label  class="form-label">Isbn</label>
            <input type="text" class="form-control" name="isbn" placeholder="Book ISBN" value="{{old('isbn')}}">
            @error('isbn')
                <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label  class="form-label">Stock</label>
            <input type="text" class="form-control" name="stock" placeholder="Stock" value="{{old('stock')}}">
            @error('stock')
                <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label  class="form-label">Price</label>
            <input type="text" class="form-control" name="price" placeholder="Price" value="{{old('price')}}">
            @error('price')
                <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a class="btn btn-danger" href="{{route('books.index')}}">Back</a>
        </div>

    </form>

@endsection

