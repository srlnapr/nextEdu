<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Http\Requests\StoreJurusanRequest;
use App\Http\Requests\UpdateJurusanRequest;
use App\Models\Artikel;
use App\Models\SaranPekerjaan;
use App\Models\Pertanyaan;
use App\Models\User;
use App\Models\Rule;

class JurusanController extends Controller
{
    public function __construct(){
        $this->middleware('admin')->except('show');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $saranpekerjaans = SaranPekerjaan::orderBy('jurusan_id');
        $jurusans = Jurusan::orderBy('jurusan_code');
        $jurusansInfo = Jurusan::all();
        $pertanyaansInfo = Pertanyaan::all();
        $artikelsInfo = Artikel::all();
        $usersInfo = User::all();

        if (request('search')){
            $jurusans->where('jurusans', 'like', '%' . request('search') . '%');
        }

        if (request('searchSol')){
            $saranpekerjaans->where('saranpekerjaans', 'like', '%' . request('searchSol') . '%');
        }

        return view('components.admin.jurusans.view', [
            'jurusans' => $jurusans->paginate(10)->withQueryString(),
            'saranpekerjaans' => $saranpekerjaans->paginate(10)->withQueryString(),
            'jurusansInfo' => $jurusansInfo,
            'pertanyaansInfo' => $pertanyaansInfo,
            'artikelsInfo' => $artikelsInfo,
            'usersInfo' => $usersInfo
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jurusansInfo = Jurusan::all();
        $pertanyaansInfo = Pertanyaan::all();
        $artikelsInfo = Artikel::all();
        $usersInfo = User::all();

        return view('components.admin.jurusans.add', [
            'jurusansInfo' => $jurusansInfo,
            'pertanyaansInfo' => $pertanyaansInfo,
            'artikelsInfo' => $artikelsInfo,
            'usersInfo' => $usersInfo
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJurusanRequest $request)
    {
        $validatedData = $request->validate([
            'jurusans_code' => 'required',
            'jurusans' => 'required',
            'type' => 'required',
            'description' => 'required',
        ]);

        $validatedData['img'] = 'https://source.unsplash.com/bkc-m0iZ4Sk';

        $jurusans = Jurusan::create($validatedData);
        $pertanyaans = Pertanyaan::all();

        for($i = 0; $i < count($pertanyaans); $i++){
            Rule::create([
                'jurusan_id' => $jurusans->id,
                'pertanyaan_id' => $pertanyaans[$i]->id,
                'rule_value' => 0
            ]);
        }
        return redirect('/jurusans')->with('success', 'Jurusan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jurusan $jurusan)
    {
        $saranpekerjaans = SaranPekerjaan::all();
        $articles = Artikel::all();
        return view('pages.jurusanDetail', [
            'jurusan' => $jurusan,
            'saranpekerjaans' => $saranpekerjaans,
            'articles' => $articles
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jurusan $jurusan)
    {
        $jurusansInfo = Jurusan::all();
        $pertanyaansInfo = Pertanyaan::all();
        $artikelsInfo = Artikel::all();
        $usersInfo = User::all();

        return view('components.admin.jurusans.edit', [
            'jurusan' => $jurusan,
            'jurusansInfo' => $jurusansInfo,
            'pertanyaansInfo' => $pertanyaansInfo,
            'artikelsInfo' => $artikelsInfo,
            'usersInfo' => $usersInfo
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJurusanRequest $request, Jurusan $jurusan)
    {
        $rules = [
            'jurusans_code' => 'required',
            'jurusans' => 'required',
            'type' => 'required',
            'description' => 'required',
        ];

        $validatedData = $request->validate($rules);

        $jurusan->update($validatedData);
        return redirect('/jurusans')->with('success', 'Jurusan berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jurusan $jurusan)
    {
        Jurusan::destroy($jurusan['id']);
        return redirect('/jurusans')->with('success', 'Jurusan berhasil dihapus');
    }
}