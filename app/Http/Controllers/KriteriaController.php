<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kriteria;


class KriteriaController extends Controller {

    public function index() {
        return view('datakriteria', [
            'users' => kriteria::all(),
            'title' => 'Data kriteria'
        ]);
    }
    public function add() {
        return view('adddatakriteria',[
            'title' => 'Tambah Data kriteria'
        ]);
    }
    public function edit($id){
        
        $siswa = siswa::where('id', $id)->first();

        return view('editkriteria', [
            'kriteria' => $kriteria,
            'title' => 'Edit Data kriteria'
        ]);

    }

    public function update(Request $request, $id) {
        $code   = $request->input('code');
        $nama_kriteria = $request->input('nama_kriteria');
        $bobot = $request->input('bobot');
        

        $kriteria = kriteria ::where('id', $id)->first();
        $kriteria ->code    = $code;
        $kriteria ->nama_kriteria = $nama_kriteria;
        $kriteria ->bobot = $bobot; // Don't forget to encryp!s

        $kriteria ->save();

        return redirect()->to('/kriteria');
    }


    public function dashboard(){
        $kriteria = kriteria ::count();

        return view('main', compact('kriteria '));

    }

    public function store(Request $request) {
        $code   = $request->input('code');
        $nama_kriteria  = $request->input('nama_kriteria');
        $bobot = $request->input('bobot');
        
        // TODO: Compare $password and $rePassword

        $kriteria  = new kriteria;
        $kriteria ->code   = $code;
        $kriteria ->nama_kriteria = $nama_kriteria; // Don't forget to encryp!s
        $kriteria ->bobot = $bobot;
       
        $kriteria ->save();

        return redirect()->to('/kriteria ');
    }
    public function delete($id) {
        $kriteria  =kriteria ::where('id', $id)->first();
        $kriteria ->delete();
        return redirect()->back();
    }
}
