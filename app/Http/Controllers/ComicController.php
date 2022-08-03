<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicController extends Controller
{
    public function index()
    {
        $comics = Comic::all();

        return view("comics.index", compact("comics"));
    }

    public function create()
    {
        return view("comics.create");
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $comic = new Comic;
        $comic->title = $request->title;
        $comic->series = $request->series;
        $comic->type = $request->type;
        $comic->save();
}

    public function show(Comic $comic)
    {
    return view('comics.show',compact('comic'));
}

}
