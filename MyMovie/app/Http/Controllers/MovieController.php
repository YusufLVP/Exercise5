<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use App\Models\GenreMovie;
use App\Models\RatingUsia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::with(['Genre', 'RatingUsia'])
        ->orderBy('judul','asc')->get();
        // $movies=DB::table('movies')
        // ->join('genre_movie','movies.id','=','genre_movie.movie_id')
        // ->join('genres','genre_movie.genre_id','=','genres.id')
        // ->select('movies.*','genres.genre','genres.id','genre_movie.movie_id','genre_movie.genre_id')
        // ->get();


        return view('movie.tables', compact('movies'));
    }
    public function poster(){
        $movies=Movie::get();

        return view('movie.poster', compact('movies'));
    }

    public function create()
    {
        $genres = Genre::all();
        $ratings = RatingUsia::all();

        return view('movie.create', compact('ratings', 'genres'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'rating_usia_id' => 'required',
            'negara' => 'required',
            'sutradara' => 'required',
            'studio' => 'required',
            'durasi' => 'required',
            'rate' => 'required',
            'rilis' => 'required',
            'sinopsis' => 'required',
            'poster' => 'required|file|image|max:10240'
        ]);
        $movies = Movie::create([
            'judul' => $request->judul,
            'rating_usia_id' => $request->rating_usia_id,
            'negara' => $request->negara,
            'sutradara' => $request->sutradara,
            'studio' => $request->studio,
            'durasi' => $request->durasi,
            'rate' => $request->rate,
            'rilis' => $request->rilis,
            'sinopsis' => $request->sinopsis,
            "poster" => $request->file('poster')
        ]);
        $movies->Genre()->sync($request->genre_id);

        if ($movies) {
            return redirect()
                ->route('movie-index')
                ->with(['success' => 'Data berhasil disimpan!']);
        } else {
            return redirect()
                ->route('movie-index')
                ->with(['error' => 'Data gagal disimpan!']);
        }
    }

    public function edit($id)
    {
        $movies = Movie::FindOrFail($id);
        $genres = Genre::get();
        $ratings = RatingUsia::get();

        return view('movie.edit', compact('movies', 'genres', 'ratings'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul' => 'required',
            'rating_usia_id' => 'required',
            'negara' => 'required',
            'sutradara' => 'required',
            'studio' => 'required',
            'durasi' => 'required',
            'rate' => 'required',
            'rilis' => 'required',
            'sinopsis' => 'required',
        ]);
        $movies = Movie::FindOrFail($id);
        $movies->update([
            'judul' => $request->judul ?? $movies->judul,
            'genre_id' => $request->genre_id ?? $movies->genre_id,
            'rating_usia_id' => $request->rating_usia_id ?? $movies->rating_usia_id,
            'negara' => $request->negara ?? $movies->negara,
            'sutradara' => $request->sutradara ?? $movies->sutradara,
            'studio' => $request->studio ?? $movies->studio,
            'durasi' => $request->durasi ?? $movies->durasi,
            'rate' => $request->rate ?? $movies->rate,
            'rilis' => $request->rilis ?? $movies->rilis,
            'sinopsis' => $request->sinopsis ?? $movies->sinopsis,
        ]);

        $movies->Genre()->sync($request->genre_id);

        if ($movies) {
            return redirect()
                ->route('movie-index')
                ->with(['success' => 'Data berhasil disimpan!']);
        } else {
            return redirect()
                ->route('movie-index')
                ->with(['error' => 'Data gagal disimpan!']);
        }
    }
    public function destroy($id)
    {
        $movies = Movie::FindOrFail();
        $movies->delete();
        if ($movies) {
            return redirect()
                ->route('movie-index')
                ->with(['success' => 'Data berhasil dihapus!']);
        } else {
            return redirect()
                ->route('movie-index')
                ->with(['error' => 'Data gagal dihapus!']);
        }
    }
}
