@extends('layout',['title'=>'Show Book'])

@section('page-content')

    <style>
        button{
            background-color: red;
            border-radius: 12%;
        }
    </style>
    <br>
    <br>
    <p>

       <button> <a href="{{route('books.index')}}">Back</a> </button>

    </p>

    <h1>Book Detais</h1>

    <table class="table table-striped" >
        {{-- <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Price</th>
            <th>Action</th>
        </tr> --}}
        <tr>
            <th>ID</th>
            <td>{{$book->id}}</td>
        </tr>
        <tr>
            <th>Title</th>
            <td>{{$book->title}}</td>
        </tr>
        <tr>
            <th>ISBN</th>
            <td>{{$book->isbn}}</td>
        </tr>
        <tr>
            <th>Author</th>
            <td>{{$book->author}}</td>
        </tr>
        <tr>
            <th>Price</th>
            <td>{{$book->price}}</td>
        </tr>
        <tr>
            <th>Stock</th>
            <td>{{$book->stock}}</td>
        </tr>


    </table>
    <div style="align-content: center">
        <a class="btn btn-danger" href="{{route('books.edit',$book->id)}}">Edit</a>
    </div>

    @endsection
