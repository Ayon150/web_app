@extends('layout',['title'=>'Home'])


@section('page-content')

{{-- {{request()}} ashe kina dekhbo --}}
<br>
<div class="row mt-2">

    <div class="col-lg-10">
        <form action="{{route('books.index')}}" method="get">
            <div class="row g-3">
                <div class="col">
                  <input type="text" class="form-control" name="search" placeholder="Search" value={{request('search')}}>
                </div>
                <div class="col-2">
                  <button type="submit" class="btn btn-success">Search</button>
                </div>
            </div>
        </form>
    </div>

    <div class="col-lg-2">
        <p class="text-end">
            <a href="{{route('book.create')}}" class="btn btn-primary"> New Book</a>

        </p>
    </div>
</div>

    <h1>Book List</h1>

    <table class="table table-striped" >
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Price</th>
            <th>Action</th>
        </tr>

        @foreach ($books as $book)
            <tr>
                <td>{{$book->id}}</td>
                <td>{{$book->title}}</td>
                <td>{{$book->author}}</td>
                <td>{{$book->price}}</td>
                <td>
                    <a href="{{route('books.show',$book->id)}}">View</a>
                    <a href="{{route('books.edit',$book->id)}}">Edit</a>
                    <form method="POST" action="{{route('books.destroy')}}"onsubmit="return confirm ('Are you sure?')">
                        @csrf
                        @method('Delete')
                        <input type="hidden" name="id" value="{{$book->id}}">
                        <input type="submit" value="Delete" class="btn btn-danger btn-link">

                    </form>
                </td>
            </tr>

        @endforeach
    </table>

    {{$books->links()}}

    @endsection


