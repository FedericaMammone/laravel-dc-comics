<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comic;

class MainController extends Controller
{
    public function index()
    {

        $comics = Comic::all();

        return view('comic.index', compact('comics'));
    }

    public function show($id)
    {

        $comic = Comic::findOrFail($id);

        return view('comic.show', compact('comic'));
    }

    public function create()
    {

        return view('comic.create');
    }

    public function store(Request $request)
    {

        $comics = $request->validate(
            $this->getValidationRule()
        );


        $comic = Comic::create([
            "title" => $comics["title"],
            "description" => $comics["description"],
            "thumb" => $comics["thumb"],
            "price" => $comics["price"],
            "series" => $comics["series"],
            "sale_date" => $comics["sale_date"],
            "type" => $comics["type"],
        ]);

        return redirect()->route("comics.show", $comic->id);
        // return redirect() -> route("comic.index");
    }

    public function edit($id)
    {

        $comic = Comic::findOrFail($id);

        return view('comic.edit', compact("comic"));
    }

    public function update(Request $request, $id)
    {

        $data = $request->validate(
            $this->getValidationRule()
        );

        $comic = Comic::findOrFail($id);

        $comic->update($data);

        return redirect()->route('comics.show', $comic->id);
    }

    public function destroy($id)
    {

        $comic = Comic::findOrFail($id);

        $comic->delete();

        return redirect()->route('comic.index');
    }

    private function getValidationRule()
    {

        return [
            'title' => 'required|string|max:150',
            'description' => 'required',
            'thumb' => 'required',
            'price' => 'required|string',
            'series' => 'required|string',
            'sale_date' => 'required|date',
            'type' => 'required|string'
        ];
    }
}
