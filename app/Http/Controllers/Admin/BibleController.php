<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Bible_quote;

class BibleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quotes = Bible_quote::latest()->get();
        return view('admin.bible.index', compact('quotes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.bible.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'description' => 'required|unique:bible_quotes|min:10',
            'address' => 'required'
        ]);

        $bibleQuote = new Bible_quote();
        $bibleQuote->description = $request->description;
        $bibleQuote->address = $request->address;
        $bibleQuote->save();

        return redirect(route('admin.bible.index'))->with('successMsg', 'Bible quote added!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Bible_quote $bible)
    {
        return view('admin.bible.edit', compact('bible'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bible_quote $bible)
    {
        // dd($request->all());
        $this->validate($request, [
            'description' => 'required|min:10',
            'address' => 'required'
        ]);


        $bible->update([
            'description' => $request->description,
            'address' => $request->address,
        ]);

        return redirect(route('admin.bible.index'))->with('successMsg', 'Bible quote updated!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bible_quote $bible)
    {
        $bibleQuote = Bible_quote::findOrFail($bible->id);
        if ($bibleQuote) {
            $bibleQuote->delete();
        }

        return redirect(route('admin.bible.index'))->with('successMsg', 'Bible quote deleted!!!');
    }
}
