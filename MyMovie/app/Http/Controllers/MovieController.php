<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use App\Models\RatingUsia;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){
        $movies=Movie::with(['Genre', 'RatingUsia'])->paginate();

        return view('movie.index', compact('movies'));
    }

    public function create(){
        $genres=Genre::all();
        $ratings=RatingUsia::all();

        return view('movie.create', compact("ratings","genres"));
    }

    public function store(Request $request){
        $movies=Movie::create([
            "judul" => $request->judul,
            "genre_id" => $request->genre_id,
            "rating_usia_id" => $request->rating_usia_id,
            "negara" => $request->negara,
            "sutradara" => $request->sutradara,
            "studio" => $request->studio,
            "durasi" => $request->durasi,
            "rate" => $request->rate,
            "rilis" => $request->rilis,
            "sinopsis" => $request->sinopsis
    ]);

        return redirect()->route('movie-index');
    }

    public function edit($id){
        $movies=Movie::FindOrFail($id);
        $genres=Genre::get();
        $ratings=RatingUsia::get();

        return view('movie.edit', compact('movies','genres','ratings'));
    }

    public function update(Request $request, $id){
        $movies=Movie::FindOrFail($id);
        $movies->update([
            "judul" => $request->judul ?? $movies->judul,
            "genre_id" => $request->genre_id ?? $movies->genre_id,
            "rating_usia_id" => $request->rating_usia_id ?? $movies->rating_usia_id,
            "negara" => $request->negara ?? $movies->negara,
            "sutradara" => $request->sutradara ?? $movies->sutradara,
            "studio" => $request->studio ?? $movies->studio,
            "durasi" => $request->durasi ?? $movies->durasi,
            "rate" => $request->rate ?? $movies->rate,
            "rilis" => $request->rilis ?? $movies->rilis,
            "sinopsis" => $request->sinopsis ?? $movies->sinopsis
    ]);

        return redirect()->route('movie-index');
    }
    public function destroy($id){
        $movies=Movie::FindOrFail();
        $movies->delete();

        return redirect()->route('movie-index');
    }
}
