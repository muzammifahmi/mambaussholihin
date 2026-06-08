<?php

namespace App\Http\Controllers;
use App\Models\Pendaftaran;

use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pendaftaran = Pendaftaran::all();
        return view('pendaftaran.index', compact('pendaftaran'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulir');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

        'email' => 'required',
        'nama_lengkap' => 'required',
        'NIK' => 'required',

        'nisn' => 'required',
        'tempat_lahir' => 'required',
        'tanggal_lahir' => 'required|date',
        'pendidikan' => 'required',

        'no_wa' => 'required',
        'alamat' => 'required',
        'tanggal_masuk' => 'required',

        // data walisantri
        'no_kk' => 'required',

        'nama_ayah' => 'required',
        'no_nik_ayah' => 'required',
        'tempat_lahir_ayah' => 'required',
        'tanggal_lahir_ayah' => 'required',
        'pendidikan_ayah' => 'required',
        'pekerjaan_ayah' => 'required',

        'nama_ibu' => 'required',
        'no_nik_ibu' => 'required',
        'tempat_lahir_ibu' => 'required',
        'tanggal_lahir_ibu' => 'required',
        'pendidikan_ibu' => 'required',
        'pekerjaan_ibu' => 'required',

        'pendapatan_ortu' => 'required',
        'no_wa_ortu' => 'required',
        ]);

        Pendaftaran::create($request->all());

        if($request->ajax()){
            return response()->json(['succes' => true, 'message' => 'Data Berhasil ditambahkan']);
        }
        session()->flash('succes', 'Data berhasil disimpan');
        return redirect()->route('formulir');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);
        return view('pendaftaran.show', compact('pendaftaran'));
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
