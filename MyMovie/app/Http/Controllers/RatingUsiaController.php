<?php

namespace App\Http\Controllers;

use App\Models\RatingUsia;
use Illuminate\Http\Request;

class RatingUsiaController extends Controller
{
    public function index(){
        $ratings=RatingUsia::all();

        return view('rating_usia.index', compact('ratings'));
    }

    public function create(){
        return view('rating_usia.create');
    }

    public function store(Request $request){
        $ratings=RatingUsia::create([
            "simbol" => $request->simbol,
            "deskripsi" => $request->deskripsi
    ]);

        return redirect('/rating_usia/index');
    }

    public function edit($id){
        $ratings=RatingUsia::FindOrFail($id);

        return view('rating_usia.edit', compact('ratings'));
    }

    public function update(Request $request, $id){
        $ratings=RatingUsia::FindOrFail($id);
        $ratings->update([
            "simbol" => $request->simbol ?? $ratings->simbol,
            "deskripsi" => $request->deskripsi ?? $ratings->deskripsi
    ]);

        return redirect('/rating_usia/index');
    }
    public function destroy($id){
        $ratings=RatingUSia::FindOrFail($id);
        $ratings->delete();

        return redirect('/rating_usia/index');
    }
}
