<?php

namespace App\Http\Controllers;

use App\Models\Hasil_Tes;
use App\Models\Jurusan;
use App\Models\Artikel;
use App\Models\SaranPekerjaan;
use App\Models\Pertanyaan;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function user()
    {
        $hasilTes = Hasil_Tes::all();
        $jurusan = Jurusan::all();
        $artikel = Artikel::all();
        $saran_pekerjaan = SaranPekerjaan::all();
        return view('pages.dashboard', [
            'hasilTes' => $hasilTes,
            'diseases' => $jurusan,
            'artikel' => $artikel,
            'saran_pekerjaan' => $saran_pekerjaan
        ]);
    }

    public function admin()
    {
        $pertanyaanInfo = Pertanyaan::all();
        $jurusanInfo = Jurusan::all();
        $artikelInfo = Artikel::all();
        $usersInfo = User::all();

        return view('components.admin.base', [
            'symptomsInfo' => $pertanyaanInfo,
            'jurusanInfo' => $jurusanInfo,
            'artikelInfo' => $artikelInfo,
            'usersInfo' => $usersInfo
        ]);
    }
}