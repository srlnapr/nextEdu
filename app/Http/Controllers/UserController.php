<?php

namespace App\Http\Controllers;

use App\Models\HasilTes;
use App\Models\Jurusan;
use App\Models\Artikel;
use App\Models\Pertanyaan;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hasilTes = HasilTes::all();
        $users = User::orderBy('id');
        $usersInfo = User::all();
        $pertanyaansInfo = Pertanyaan::all();
        $jurusansInfo = Jurusan::all();
        $artikelsInfo = Artikel::all();

        if (request('search')){
            $users->where('name', 'like', '%' . request('search') . '%');
        }

        return view('components.admin.users.view', [
            'hasilTes' => $hasilTes,
            'users' => $users->paginate(15)->withQueryString(),
            'pertanyaansInfo' => $pertanyaansInfo,
            'jurusansInfo' => $jurusansInfo,
            'artikelsInfo' => $artikelsInfo,
            'usersInfo' => $usersInfo
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
