<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    //Show all records

    public function index(){
    
        $movies = Movie::all();
        return view('/movies.index', compact('movies'));
    }
    public function create(){
    
        return view('/movies.create');
    }

    public function store(Request $request){
        $request->validate([
            'movie_img' => 'required|mimes:jpg,png,jpeg',
            'movie_name' => 'required',
            'movie_desc' => 'required',
            'movie_gener' => 'required'
        ]);
       if($request->hasFile('movie_img')){
           $file = $request->movie_img;
           $new_file = time().'-'.$file->getClientOriginalName();
           $file->move('storage/images', $new_file);
       }
        Movie::create([
            'movie_name' => request('movie_name'),
            'movie_desc' => request('movie_desc'),
            'movie_gener' => request('movie_gener'),
            'movie_img'  => 'storage/images/' . $new_file
        ]);
        return redirect('/movies');
    }
     
    public function edit($id){
        $edited_movie = Movie::find($id);
        return view('/movies.edit', compact('edited_movie'));
    }

    public function update(Request $req){
        $movie = Movie::find($req->id);
            $movie->movie_name = $req->movie_name;
            $movie->movie_desc = $req->movie_desc;
            $movie->movie_gener = $req->movie_gener;
            $movie->save();
        return redirect('/movies');
    }

    public function destroy($id){
        $movie = Movie::find($id);
         $movie->delete();

        return redirect('/movies');
    }
}
