<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Admin\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $comicData = $request->all();



        // TODO: valido i dati, ma lo faremo in futuro

        $comic = new Comic();
        $comic->title = $comicData['title'];
        $comic->description = $comicData['description'];
        $comic->thumb = $comicData['thumb'];
        //sostituisco il carattere speciale con spazio vuoto
        $replacedTextPrice = str_replace('$', '', $comicData['price']);
        $comic->price = floatval($replacedTextPrice);
        $comic->series = $comicData['series'];
        $comic->sale_date = $comicData['sale_date'];
        $comic->type = $comicData['type'];
        $explodeArtists= explode(',',$comicData['artists']);
        $comic->artists = json_encode($explodeArtists);
        $explodeWriters= explode(',',$comicData['writers']);
        $comic->writers = json_encode($explodeWriters);
        $comic->save();

        return redirect()->route('comics.show', ['comic' => $comic->id]);
        dd($comicData);

    }

    /**
     * Display the specified resource.
     */

    public function show(string $id)
    {
        $comic = Comic::findOrFail($id);

        return view('comics.show', compact('comic'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $comicData = $request->all();

        $comic = Comic::findOrFail($id);

        $comic->title = $comicData['title'];
        $comic->description = $comicData['description'];
        $comic->thumb = $comicData['thumb'];
        //sostituisco il carattere speciale con spazio vuoto
        $replacedTextPrice = str_replace('$', '', $comicData['price']);
        $comic->price = floatval($replacedTextPrice);
        $comic->series = $comicData['series'];
        $comic->sale_date = $comicData['sale_date'];
        $comic->type = $comicData['type'];
        $explodeArtists= explode(',',$comicData['artists']);
        $comic->artists = json_encode($explodeArtists);
        $explodeWriters= explode(',',$comicData['writers']);
        $comic->writers = json_encode($explodeWriters);
        $comic->save();

        return redirect()->route('comics.show', ['comic' => $comic->id]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
