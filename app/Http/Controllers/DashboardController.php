<?php

namespace App\Http\Controllers;

use App\Models\alternatif;
use Illuminate\Http\Request;
use App\Models\krieria;


class DashboardController extends Controller {

    public function index() {
        
        $kriteria= kriteria::count();
        $alternatif= alternatif::count();

        return view('main',[
            'title' => 'Dashboard'
        ], compact('kriteria','alternatif'))
        ;  
    }
}