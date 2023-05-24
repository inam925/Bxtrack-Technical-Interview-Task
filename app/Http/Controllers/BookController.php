<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = DB::table('books')->latest()->get();
        return view('books.index', [
            'books' => $books
        ]);
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
        $attributes = $this->validateBook();

        Book::create($attributes);
        return redirect('/books');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('books.show', [
            'book' => $book
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('books.edit', [
            'book' => $book
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Book $book)
    {
        $attributes = $this->validateBook($book);

        $book->update($attributes);

        return redirect('/books/' . $book->id)->with('success', 'Book updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return back()->with('success', 'Book deleted successfully');
    }

    protected function validateBook(?Book $book = null): array
    {
        $book ??= new Book();
        return request()->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'edition' => 'required',
            'no_of_pages' => 'required|numeric|min:100|max:1000',
        ]);
    }
}
