<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\video;

class videoController extends Controller
{
    
    public function video(){
        return view('video');
        }
    

    public function unos(Request $request){
        $film = new video;
        $film->naslov = $request->naslov;
        $film->zanr= $request->zanr;
        $film->godina = $request->godina;
        $film->trajanje = $request->trajanje;
        $film->save();

        return redirect()->route('home');
    }
}
