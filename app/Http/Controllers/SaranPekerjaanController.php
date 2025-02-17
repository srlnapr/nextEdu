<?php

namespace App\Http\Controllers;

use App\Models\SaranPekerjaan;
use App\Http\Requests\StoreSaranPekerjaanRequest;
use App\Http\Requests\UpdateSaranPekerjaanRequest;
use App\Models\Jurusan;
use App\Models\Artikel;
use App\Models\Pertanyaan;
use App\Models\User;

class SaranPekerjaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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

        return view('components.admin.saranpekerjaans.add', [
            'jurusansInfo' => $jurusansInfo,
            'pertanyaansInfo' => $pertanyaansInfo,
            'artikelsInfo' => $artikelsInfo,
            'usersInfo' => $usersInfo
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSaranPekerjaanRequest $request)
    {
        $validatedData = $request->validate([
            'jurusan_id' => 'required',
            'saranpekerjaan' => 'required'
        ]);

        SaranPekerjaan::create($validatedData);
        return redirect('/jurusan')->with('success', 'Saran Pekerjaan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(SaranPekerjaan $saranpekerjaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SaranPekerjaan $saranpekerjaan)
    {
        $jurusansInfo = Jurusan::all();
        $pertanyaansInfo = Pertanyaan::all();
        $artikelsInfo = Artikel::all();
        $usersInfo = User::all();

        return view('components.admin.saranpekerjaans.edit', [
            'saranpekerjaan' => $saranpekerjaan,
            'jurusansInfo' => $jurusansInfo,
            'pertanyaansInfo' => $pertanyaansInfo,
            'artikelsInfo' => $artikelsInfo,
            'usersInfo' => $usersInfo
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSaranPekerjaanRequest $request, SaranPekerjaan $saranPekerjaan)
    {
        $rules = [
            'jurusan_id' => 'required',
            'saranpekerjaan' => 'required',
        ];

        $validatedData = $request->validate($rules);

        $saranPekerjaan->update($validatedData);
        return redirect('/jurusans')->with('success', 'Saran Pekerjaan berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SaranPekerjaan $saranpekerjaan)
    {
        SaranPekerjaan::destroy($saranpekerjaan['id']);
        return redirect('/jurusans')->with('success', 'Saran Pekerjaan berhasil dihapus');
    }
}
