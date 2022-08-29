<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index(){
        $genres=Genre::all();

        return view('genre.index', compact('genres'));
    }

    public function create(){
        return view('genre.create');
    }

    public function store(Request $request){
        $genres=Genre::create([
            "genre" => $request->genre,
            "deskripsi" => $request->deskripsi
    ]);

        return redirect('/genre/index');
    }

    public function edit($id){
        $genres=Genre::FindOrFail($id);

        return view('genre.edit', compact('genres'));
    }

    public function update(Request $request, $id){
        $genres=Genre::FindOrFail($id);
        $genres->update([
            "genre" => $request->genre ?? $genres->genre,
            "deskripsi" => $request->deskripsi ?? $genres->deskripsi
    ]);

        return redirect()->route('genre-index');
    }
    public function destroy($id){
        $genres=Genre::FindOrFail($id);
        $genres->delete();

        return redirect()->route('genre-index');
    }
}
