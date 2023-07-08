<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Kriteria;
use Illuminate\Http\Request;

class HitungController extends Controller
{

    public function hitung(Request $request){

        $kriteria = Kriteria::sum('bobot');

        $bobot1 = 10/$kriteria;
        $bobot2 = 10/$kriteria;
        $bobot3 = 10/$kriteria;
        $bobot4 = 10/$kriteria;
        $bobot5 = 10/$kriteria;
        $bobot6 = 10/$kriteria;
        $bobot7 = 10/$kriteria;
        $bobot8 = 20/$kriteria;
        $bobot9 = 10/$kriteria;

        $widget1 = [
            'kriteria' => $bobot1,
        ];
        $widget2 = [
            'kriteria' => $bobot2,
        ];
        $widget3 = [
            'kriteria' => $bobot3,
        ];
        $widget4 = [
            'kriteria' => $bobot4,
        ];
        $widget5 = [
            'kriteria' => $bobot5,
        ];
        $widget6 = [
            'kriteria' => $bobot6,
        ];
        $widget7 = [
            'kriteria' => $bobot7,
        ];
        $widget8 = [
            'kriteria' => $bobot8,
        ];
        $widget9 = [
            'kriteria' => $bobot9,
        ];


        $Alternatif = Alternatif::get();
        $data = Alternatif::orderby('nis', 'asc')->get();

        $minC1 = Alternatif::min('pkn');
        $maxC1 = Alternatif::max('pkn');
        $minC2 = Alternatif::min('bhs_indo');
        $maxC2 = Alternatif::max('bhs_indo');
        $minC3 = Alternatif::min('mtk');
        $maxC3 = Alternatif::max('mtk');
        $minC4 = Alternatif::min('ipa');
        $maxC4 = Alternatif::max('ipa');
        $minC5 = Alternatif::min('ips');
        $maxC5 = Alternatif::max('ips');
        $minC6 = Alternatif::min('bhs_ingris');
        $maxC6 = Alternatif::max('bhs_ingris');
        $minC7 = Alternatif::min('rata_rata_rpot');
        $maxC7 = Alternatif::max('rata_rata_rpot');
        $minC8 = Alternatif::min('absensi');
        $maxC8 = Alternatif::max('absensi');
        $minC9 = Alternatif::min('dokumen_pendukung');
        $maxC9 = Alternatif::max('dokumen_pendukung');

        $C1min =[
            'alternatif' => $minC1,
        ];
        $C1max =[
            'alternatif' => $maxC1,
        ];
        $C2min =[
            'alternatif' => $minC2,
        ];
        $C2max =[
            'alternatif' => $maxC2,
        ];
        $C3min =[
            'alternatif' => $minC3,
        ];
        $C3max =[
            'alternatif' => $maxC3,
        ];
        $C4min =[
            'alternatif' => $minC4,
        ];
        $C4max =[
            'alternatif' => $maxC4,
        ];
        $C5min =[
            'alternatif' => $minC5,
        ];
        $C5max =[
            'alternatif' => $maxC5,
        ];
        $C6min =[
            'alternatif' => $minC6,
        ];
        $C6max =[
            'alternatif' => $maxC6,
        ];
        $C7min =[
            'alternatif' => $minC7,
        ];
        $C7max =[
            'alternatif' => $maxC7,
        ];
        $C8min =[
            'alternatif' => $minC8,
        ];
        $C8max =[
            'alternatif' => $maxC8,
        ];
        $C9min =[
            'alternatif' => $minC9,
        ];
        $C9max =[
            'alternatif' => $maxC9,
        ];

        $hasil = $minC1/$maxC1;
        $hasil1 =[
            'alternatif' => $hasil,
        ];

        return view('hitung', compact('hasil1','data', 'widget1', 'widget2', 'widget3', 'widget4', 'widget5', 'widget6', 'widget7', 'widget8', 'widget9','C1min', 'C1max', 'C2min', 'C2max', 'C3min', 'C3max', 'C4min', 'C4max',  'C5min', 'C5max',  'C6min', 'C6max',  'C7min', 'C7max',  'C8min', 'C8max',  'C9min', 'C9max'));
    }

}
