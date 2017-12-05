<?php

namespace App\Http\Controllers;


use App\Http\Requests\BibliFormRequest;
use App\Models\Book;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;

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
         // Flashy::message('Create was success!');
        return view('biblis.create',compact('book'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BibliFormRequest $request)
    {
      

        Book::create(['title' => $request->title,
                        'author' => $request->author,
                        'resume' => $request->resume,
                        'category' => $request->category,
                        'borrow' => $request->borrow,
                        'user_id' => $request->user_id,
                        'date' => $request->date]);

        Flashy::message('Create was success!');
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
        // Flashy::message('Delete was success!');
        return view('biblis.edit',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BibliFormRequest $request, $id)
    {
        
        $book = Book::findOrFail($id);
         $book->update(['title' => $request->title,
                        'author' => $request->author,
                        'resume' => $request->resume,
                        'category' => $request->category,
                        'borrow' => $request->borrow,
                        'user_id' => $request->user_id,
                        'date' => $request->date]);


        Flashy::primaryDark('Modif was success!');
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
        Flashy::error('Delete was success!');
        return redirect(route('home'));
    }
}
