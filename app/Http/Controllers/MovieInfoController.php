<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Models\Movie;

class MovieInfoController extends Controller
{
    public function movieEntry() {
        $allMovies = Movie::all();

        if($allMovies === NULL) {
            return redirect()->to('/');
        } else {
            return redirect()->to(url('/movie/detail/{mov_id}'))->with(['data'=>$allMovies]);
        }
    }

    public function listMovies(Request $request) {

        $data = $request;

        // array as parameter
        return view('movie-db-main', ['data'=>$data]);

        // with compact
        // return view('movie-db-main')->with(compact('data'));
    }

    public function listData() {
        $allMovies = Movie::all();

        if($allMovies === NULL) {
            return redirect()->to('/');
        } else {
            return redirect()->to(url('/movie/detail/{mov_id}'))->with(['data'=>$allMovies]);
        }

    }
}
