<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index( Request $request)
    {
        if( $request->has("search") ){
            $books = Book::query()
                ->where("title","like","%". $request->get("search") ."%")
                ->orWhere("author","like","%". $request->get("search") ."%")
                    ->paginate(10);

                //return $books ->toSql();
        }
        else{
            $books = Book::paginate(10);
        }


        //$books = Book::paginate(10);
        return view('books.index')
            ->with('books', $books);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());

        $rules=[
            'title'=> 'required',
            'author'=> 'required',
            'isbn'=> 'required|digits:13',
            'price'=> 'required|numeric|min:0',
            'stock'=> 'required|integer|min:0',
        ];
        $request->validate( $rules);

        $book = new Book();
        $book->title = $request->title;
        $book->author = $request->author;
        $book->isbn = $request->isbn;
        $book->price = $request->price;
        $book->stock = $request->stock;
        $book->save();
        // return redirect()->route('books.index');
        return redirect()->route('books.show', $book->id);

        // return 'All data is valid';
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // echo "ID: $id";
         $book = Book::find($id);

        // dd($book);

        return view('books.show')
            ->with('book', $book);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = Book::findOrFail($id);
        // dd($book);
        return view('books.edit')->with('book',$book);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // dd($request->all());

        $rules=[
            'title'=> 'required',
            'author'=> 'required',
            'isbn'=> 'required|digits:13',
            'price'=> 'required|numeric|min:0',
            'stock'=> 'required|integer|min:0',
        ];
        $request->validate( $rules);
        $book = Book::findOrFail($request->id);
        $book->title = $request->title;
        $book->author = $request->author;
        $book->isbn = $request->isbn;
        $book->price = $request->price;
        $book->stock = $request->stock;
        $book->save();

        return redirect()->route('books.show', $book->id);



    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $book = Book::findOrFail($request->id);
        $book->delete();
        return redirect()->route('books.index', $book->id);
    }
}
