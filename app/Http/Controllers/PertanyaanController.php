<?php

namespace App\Http\Controllers;

use App\Models\Pertanyaan;
use App\Http\Requests\StorePertanyaanRequest;
use App\Http\Requests\UpdatePertanyaanrequest;
use App\Models\Jurusan;
use App\Models\Artikel;
use App\Models\SaranPekerjaan;
use App\Models\User;

class PertanyaanController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $saranpekerjaan = SaranPekerjaan::orderBy('jurusan_id');
        $jurusans = Jurusan::orderBy('jurusan_code');
        $jurusansInfo = Jurusan::all();
        $pertanyaansInfo = Symptom::all();
        $medicinesInfo = Medicine::all();
        $usersInfo = User::all();

        if (request('search')){
            $pertanyaan->where('pertanyaan', 'like', '%' . request('search') . '%');
        }

        return view('components.admin.symptoms.view', [
            'pertanyaan' => $pertanyaan->paginate(10)->withQueryString(),
            'pertanyaanInfo' => $pertanyaanInfo,
            'jurusanInfo' => $jurusanInfo,
            'artikelInfo' => $artikelInfo,
            'usersInfo' => $usersInfo
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pertanyaanInfo = Pertanyaan::all();
        $jurusanInfo = Jurusan::all();
        $artikelInfo = Artikel::all();
        $usersInfo = User::all();

        return view('components.admin.symptoms.add', [
            'pertanyaanInfo' => $pertanyaanInfo,
            'jurusanInfo' => $jurusanInfo,
            'artikelInfo' => $artikelInfo,
            'usersInfo' => $usersInfo
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePertanyaanRequest $request)
    {
        $validatedData = $request->validate([
            'pertanyaan_code' => 'required',
            'pertanyaan' => 'required',
        ]);

        Pertanyaan::create($validatedData);
        return redirect('/symptoms')->with('success', 'Symptom was added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pertanyaan $pertanyaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pertanyaan $pertanyaan)
    {
        $pertanyaanInfo = Pertanyaan::all();
        $jurusanInfo = Jurusan::all();
        $artikelInfo = Artikel::all();
        $usersInfo = User::all();

        return view('components.admin.symptoms.edit', [
            'pertanyaan' => $pertanyaan,
            'pertanyaanInfo' => $pertanyaanInfo,
            'jurusanInfo' => $jurusanInfo,
            'artikelInfo' => $artikelInfo,
            'usersInfo' => $usersInfo
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePertanyaanRequest $request, Pertanyaan $pertanyaan)
    {
        $rules = [
            'pertanyaan_code' => 'required',
            'pertanyaan' => 'required',
        ];

        $validatedData = $request->validate($rules);

        $pertanyaan->update($validatedData);
        return redirect('/symptoms')->with('success', 'Symptom was updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pertanyaan $pertanyaan)
    {
        Pertanyaan::destroy($pertanyaan['id']);
        return redirect('/symptoms')->with('success', 'Symptom was deleted successfully');
    }
}