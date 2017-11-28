<?php

namespace App\Http\Controllers;

use App\Models\Biblis;
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
       $biblis =  Biblis::paginate(3);
       return view('biblis.index',compact('biblis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bibli = new Biblis;
        return view('biblis.create',compact('bibli'));
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

        Biblis::create(['title' => $request->title,
                        'author' => $request->author,
                        'resume' => $request->resume,
                        'category' => $request->category,
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
            $bibli = Biblis::findOrFail($id);
           return view('biblis.show',compact('bibli'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bibli = Biblis::findOrFail($id);
        return view('biblis.edit',compact('bibli'));
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

        $bibli = Biblis::findOrFail($id);
         $bibli->update(['title' => $request->title,
                        'author' => $request->author,
                        'resume' => $request->resume,
                        'category' => $request->category,
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
        dd('gh');
    }
}
