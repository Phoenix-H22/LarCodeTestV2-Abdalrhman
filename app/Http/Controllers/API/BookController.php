<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return response()->json([
            'books' => $books,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'author' => 'required|string',
            'isbn' => 'required|string',
        ], [
            'title.required' => 'Book Title is required',
            'author.required' => 'Book Author is required',
            'isbn.required' => 'Book ISBN is required',
        ]);
        $book = Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'isbn' => $request->isbn,
        ]);
        if ($book) {
            return response()->json([
                'message' => 'Book created successfully',
            ]);
        }else{
            return response()->json([
                'message' => 'Book creation failed',
            ]);
        }
    }
}
