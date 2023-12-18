<?php

namespace App\Http\Controllers\Admin\Master;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateDaftarPelanggan;
use App\Http\Requests\EditDaftarMakananMinumanRequest;
use App\Http\Requests\EditDaftarPelanggan;
use App\Models\DaftarPelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daftarpelanggans = DaftarPelanggan::all();
        return view('admin.master.pelanggan.index',['page_title' => 'Data Pelanggan','daftarpelanggans' => $daftarpelanggans]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.master.pelanggan.create',['page_title' => 'Tambah Data Pelanggan']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateDaftarPelanggan $request)
    {
        $pelanggan = new DaftarPelanggan();
        $pelanggan->fill($request->all());
        $pelanggan->save();
        return redirect()->route('admin.master.pelanggan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DaftarPelanggan  $daftarPelanggan
     * @return \Illuminate\Http\Response
     */
    public function show(DaftarPelanggan $daftarPelanggan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DaftarPelanggan  $daftarPelanggan
     * @return \Illuminate\Http\Response
     */
    public function edit(DaftarPelanggan $daftarPelanggan)
    {
        return view('admin.master.pelanggan.edit',['page_title' => 'Edit Data Pelanggan','pelanggan' => $daftarPelanggan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DaftarPelanggan  $daftarPelanggan
     * @return \Illuminate\Http\Response
     */
    public function update(EditDaftarPelanggan $request, DaftarPelanggan $daftarPelanggan)
    {
        $pelanggan = $daftarPelanggan;
        $pelanggan->fill($request->all());
        $pelanggan->save();
        return redirect()->route('admin.master.pelanggan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DaftarPelanggan  $daftarPelanggan
     * @return \Illuminate\Http\Response
     */
    public function destroy(DaftarPelanggan $daftarPelanggan)
    {
        $daftarPelanggan->delete();
        return redirect()->route('admin.master.pelanggan.index');
    }
}
