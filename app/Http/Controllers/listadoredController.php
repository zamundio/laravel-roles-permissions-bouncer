<?php

namespace App\Http\Controllers;

use App\listadored;
use Illuminate\Http\Request;

class ListadoRedController extends Controller
{

    public function index()
    {
        // abort_unless(\Gate::allows('product_access'), 403);

        $listadored=listadored::all();

        return view('listadored.index', compact('listadored'));
    }

}
