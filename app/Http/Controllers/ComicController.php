<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required|max:100',
                'description' => 'nullable|max:65535',
                'thumb' => 'nullable|max:255',
                'price' => 'nullable|max:10',
                'series' => 'required|max:100',
                'sale_date' => 'nullable|max:20',
                'type' => 'required|max:20'
            ],
            [
                'title.required' => 'il titolo è un campo obbligatorio',
                'title.max' => 'il titolo deve avere al massimo :max caratteri',
                'description.max' => 'la descizione deve avere al massimo :max caratteri',
                'thumb.max' => 'la URL dell\' immagine deve avere al massimo :max caratteri',
                'price.max' => 'il prezzo deve avere al massimo :max caratteri',
                'series.required' => 'la serie è un campo obbligatorio',
                'series.max' => 'la serie deve avere al massimo :max caratteri',
                'sale_date.max' => 'la data di uscita deve avere al massimo :max caratteri',
                'type.required' => 'il genere è un campo obbligatorio',
                'type.max' => 'il genere deve avere al massimo :max caratteri'
            ]
        );

        $form_data = $request->all();

        $newComic = new Comic();

        $newComic->fill($form_data);

        $newComic->save();

        return redirect()->route('comics.show', ['comic' => $newComic->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $request->validate(
            [
                'title' => 'required|max:100',
                'description' => 'nullable|max:65535',
                'thumb' => 'nullable|max:255',
                'price' => 'nullable|max:10',
                'series' => 'required|max:100',
                'sale_date' => 'nullable|max:20',
                'type' => 'required|max:20'
            ],
            [
                'title.required' => 'il titolo è un campo obbligatorio',
                'title.max' => 'il titolo deve avere al massimo :max caratteri',
                'description.max' => 'la descizione deve avere al massimo :max caratteri',
                'thumb.max' => 'la URL dell\' immagine deve avere al massimo :max caratteri',
                'price.max' => 'il prezzo deve avere al massimo :max caratteri',
                'series.required' => 'la serie è un campo obbligatorio',
                'series.max' => 'la serie deve avere al massimo :max caratteri',
                'sale_date.max' => 'la data di uscita deve avere al massimo :max caratteri',
                'type.required' => 'il genere è un campo obbligatorio',
                'type.max' => 'il genere deve avere al massimo :max caratteri'
            ]
        );

        $form_data = $request->all();

        $comic->update($form_data);

        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
