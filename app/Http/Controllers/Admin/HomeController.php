<?php

namespace App\Http\Controllers\Admin;

use App\meses;
use App\añosemp;

use App\Gallery;
use Carbon\Carbon;
use App\estructura;
use App\Onomasticas;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::all();
        $estructura = estructura::all()->count();
        $uc = estructura::where('Codigo_Linea', "L1")->count();
        $um = estructura::where('Codigo_Linea', "L2")->count();
        $urd = estructura::where('Codigo_Linea', "L3")->count();
        $kam= estructura::where('Codigo_Linea', "KA")->count();
        $hr = estructura::where('Codigo_Linea', "HR")->count();
        $mch= estructura::where('Codigo_Linea', "LO")->count();

        $gamch = estructura::where('Codigo_Linea', "GO")->count();
        $gaeticos = estructura::where('Codigo_Linea', "GA")->count();

        return view('home',compact('estructura', 'uc','um', 'urd','kam','mch', 'hr','gaeticos', 'gamch','galleries' ));
    }

}
