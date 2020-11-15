<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Book::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $book = new Book;
        $book->title = request('title');
        $book->isbn = request('isbn');
        $book->pages = request('pages');
        $book->released = request('released');
        $book->value = request('value');
        $book->cost = request('cost');
        $book->edition = request('edition');
        $book->ref_author_id = request('ref_author_id');
        $book->ref_genre_id = request('ref_genre_id');
    
        $book->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Book::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $book = Book::find($id);

        $book->title = request('title');
        $book->isbn = request('isbn');
        $book->pages = request('pages');
        $book->released = request('released');
        $book->value = request('value');
        $book->cost = request('cost');
        $book->edition = request('edition');
        $book->ref_author_id = request('ref_author_id');
        $book->ref_genre_id = request('ref_genre_id');
    
        $book->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Book::find($request->id)->delete();
    }
}
