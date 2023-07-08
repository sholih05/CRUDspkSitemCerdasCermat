<?php

namespace App\Http\Controllers;

use App\Models\alternatif;
use Illuminate\Http\Request;

class alternatifController extends Controller
{
    public function index() {
        return view('dataalternatif', [
            'users' => Alternatif::all(),
            'title' => 'Data alternatif'
        ]);
    }
    public function add() {
        return view('adddataalternatif',[
            'title' => 'Tambah Data alternatif'
        ]);
    }
    public function edit($id){
        
        $alternatif = alternatif::where('id', $id)->first();

        return view('editalternatif', [
            'alternatif' => $alternatif,
            'title' => 'Edit Data alternatif'
        ]);

    }

    public function update(Request $request, $id) {
        $nis  = $request->input('nis');
        $pkn   = $request->input('pkn');
        $bhs_indo = $request->input('bhs_indo');
        $mtk = $request->input('mtk');
        $ipa= $request->input('ipa');
        $ips= $request->input('ips');
        $bhs_ingris= $request->input('bhs_ingris');
        $rata_rata_rpot= $request->input('rata_rata_rpot');
        $absensi= $request->input('absensi');
        $dokumen_pendukung= $request->input('dokumen_pendukung');
        
        

        $alternatif = alternatif::where('id', $id)->first();
        $alternatif->nis   = $nis;
        $alternatif->pkn = $pkn;
        $alternatif->bhs_indo = $bhs_indo;
        $alternatif->mtk = $mtk;
        $alternatif->ipa = $ipa;
        $alternatif->ips = $ips;
        $alternatif->bhs_ingris = $bhs_ingris;
        $alternatif->rata_rata_rpot = $rata_rata_rpot;
        $alternatif->absensi = $absensi;
        $alternatif->dokumen_pendukung = $dokumen_pendukung;

        $alternatif->save();

        return redirect()->to('/alternatif');
    }


    public function dashboard(){
        $alternatif= alternatif::count();

        return view('main', compact('alternatif'));

    }

    public function store(Request $request) {
        $nis  = $request->input('nis');
        $pkn   = $request->input('pkn');
        $bhs_indo = $request->input('bhs_indo');
        $mtk = $request->input('mtk');
        $ipa= $request->input('ipa');
        $ips= $request->input('ips');
        $bhs_ingris= $request->input('bhs_ingris');
        $rata_rata_rpot= $request->input('rata_rata_rpot');
        $absensi= $request->input('absensi');
        $dokumen_pendukung= $request->input('dokumen_pendukung');

        $alternatif           = new alternatif;
        $alternatif->nis    = $nis;
        $alternatif->pkn = $pkn;
        $alternatif->bhs_indo = $bhs_indo;
        $alternatif->mtk = $mtk;
        $alternatif->ipa = $ipa;   
        $alternatif->ips = $ips;
        $alternatif->bhs_ingris = $bhs_ingris;
        $alternatif->rata_rata_rpot = $rata_rata_rpot;
        $alternatif->absensi= $absensi;
        $alternatif->dokumen_pendukung = $dokumen_pendukung;

        $alternatif->save();

        return redirect()->to('/alternatif');
    }
    public function delete($id) {
        $alternatif = alternatif::where('id', $id)->first();
        $alternatif->delete();
        return redirect()->back();
    }
}
