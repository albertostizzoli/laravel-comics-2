<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\View\View
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     */
    public function store(Request $request)
    {
        //
        $form_data = $request->all();
        $new_comic = new Comic();
        $new_comic->title = $form_data["title"];
        $new_comic->description = $form_data["description"];
        $new_comic->thumb = $form_data["thumb"];
        $new_comic->price = $form_data["price"];
        $new_comic->sale_date = '2020-07-01';
        $new_comic->series = $form_data["series"];
        $new_comic->type = $form_data["type"];
        $new_comic->save();
        //dd($request->all());
        return to_route("comics.index", $new_comic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return  \Illuminate\View\View
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return  \Illuminate\View\View
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     *
     */
    public function update(Request $request, Comic $comic)
    {

        $form_data = $request->all();
        $comic->title = $form_data["title"];
        $comic->description = $form_data["description"];
        $comic->thumb = $form_data["thumb"];
        $comic->price = $form_data["price"];
        $comic->sale_date = '2020-07-01';
        $comic->series = $form_data["series"];
        $comic->type = $form_data["type"];
        $comic->update();
        return to_route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     *functio
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return to_route('comics.index');
    }
}
