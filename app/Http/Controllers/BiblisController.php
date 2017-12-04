<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BiblisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $books =  Book::paginate(3);
       // $books = Book::all();
       return view('biblis.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $book = new Book;
        return view('biblis.create',compact('book'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        'title' => 'bail|required|min:3',
        'resume' => 'required|min:5',
    ]);

        Book::create(['title' => $request->title,
                        'author' => $request->author,
                        'resume' => $request->resume,
                        'category' => $request->category,
                        'borrow' => $request->borrow,
                        'user_id' => $request->user_id,
                        'date' => $request->date]);

        return redirect(route('home'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            $book = Book::findOrFail($id);
           return view('biblis.show',compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('biblis.edit',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $request->validate([
        'title' => 'bail|required|min:3',
        'resume' => 'required|min:5',
        ]);

        $book = Book::findOrFail($id);
         $book->update(['title' => $request->title,
                        'author' => $request->author,
                        'resume' => $request->resume,
                        'category' => $request->category,
                        'borrow' => $request->borrow,
                        'user_id' => $request->user_id,
                        'date' => $request->date]);

        return redirect(route('biblis.show', $id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Book::destroy($id);
        return redirect(route('home'));
    }
}
