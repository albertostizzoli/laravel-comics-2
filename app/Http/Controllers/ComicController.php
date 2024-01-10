<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;
use App\Http\Requests\UpdateComicRequest;
use App\Http\Requests\StoreComicRequest;

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
    public function store(StoreComicRequest $request)
    {

        //$form_data = $request->all();

        /*$new_comic = new Comic();
        $new_comic->title = $form_data["title"];
        $new_comic->description = $form_data["description"];
        $new_comic->thumb = $form_data["thumb"];
        $new_comic->price = $form_data["price"];
        $new_comic->sale_date = '2020-07-01';
        $new_comic->series = $form_data["series"];
        $new_comic->type = $form_data["type"];
        $new_comic->save();*/
        $form_data = $this->validation($request->all());
        $form_data = $request->validated();
        $new_comic = Comic::create($form_data);
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
    public function update(UpdateComicRequest $request, Comic $comic)
    {
        $form_data = $this->validation($request->all());
        $form_data = $request->validated();
        //$form_data = $request->all();
        $comic->fill($form_data);
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
        return to_route('comics.index')->with('message', "Il prodotto $comic->title è stato eliminato");
    }

    private function validation($data)
    {
        $validator = Validator::make($data, [
            'title' => 'required|min:5|max:255|unique:comics',
            'type' => 'required|max:50',
            'description' => 'nullable',
            'price' => 'required|numeric',
            'series' => 'required|max:50',
            'sale_date' => 'required|date_format:Y-m-d',
        ], [
            'title.required' => 'Il titolo è obbligatorio',
            'title.min' => 'Il titolo deve avere almeno :min caratteri',
            'title.max' => 'Il titolo deve avere massimo :max caratteri',
            'title.unique' => 'Il titolo deve essere univoco',
            'type.required' => 'Il tipo è obbligatorio',
            'type.max' => 'Il tipo deve avere massimo :max caratteri',
            'price.required' => 'Il prezzo è obbligatorio',
            'price.numeric' => 'Il prezzo deve essere un numero',
            'series.required' => 'La serie è obbligatoria',
            'series.max' => 'La serie deve avere massimo :max caratteri',
            'sale_date.required' => 'La data di vendita è obbligatoria',
            'sale_date.date_format' => 'La data di vendita deve essere nel formato AAAA-MM-GG',
        ])->validate();
        return $validator;
    }
}
