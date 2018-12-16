<?php

namespace MyIBMT\Http\Controllers\Admin;

use Illuminate\Http\Request;
use MyIBMT\Http\Controllers\Controller;
use MyIBMT\Models\MataKuliah;

class MataKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $m = new MataKuliah;
        $subheader = 'Mata Kuliah '.$m->findOrFail($id)->prodi->find($id)->deskripsi;
        $prodi_id = $m->findOrFail($id)->prodi->find($id)->id;
        $prodi = $m->findOrFail($id)->prodi->all();
        $data = $m->where('prodi_id','=',$id)->get();
        return view('matakuliah.index', compact('subheader','data','prodi', 'prodi_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $m = new MataKuliah;
        $subheader = 'Tambah Mata Kuliah '.$m->findOrFail($id)->prodi->findOrFail($id)->deskripsi;
        $prodi = $m->findOrFail($id)->prodi->findOrFail($id)->deskripsi;
        $prodi_id = $m->findOrFail($id)->prodi->findOrFail($id)->id;
        return view('matakuliah.create', compact('subheader','prodi','prodi_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $m = new MataKuliah;
        $m->kode_mk = $request->kode_mk;
        $m->nm_matakuliah = $request->nm_matakuliah;
        $m->sks = $request->sks;
        $m->prodi_id = $request->prodi_id;
        $m->save();
        return redirect()->route('matakuliah.prodi', $m->prodi_id)->with('success', 'Mata Kuliah berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $m = new MataKuliah;
        $subheader = 'Hapus Mata Kuliah '.$m->findOrFail($id)->prodi->findOrFail($m->findOrFail($id)->prodi_id)->deskripsi;
        $prodi = $m->findOrFail($id)->prodi->findOrFail($m->findOrFail($id)->prodi_id)->deskripsi;
        $prodi_id = $m->findOrFail($id)->prodi->findOrFail($m->findOrFail($id)->prodi_id)->id;
        $data = $m->findOrFail($id);
        return view('matakuliah.show', compact('subheader','prodi','prodi_id', 'data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $m = new MataKuliah;
        $subheader = 'Edit Mata Kuliah '.$m->findOrFail($id)->prodi->findOrFail($m->findOrFail($id)->prodi_id)->deskripsi;
        $prodi = $m->findOrFail($id)->prodi->findOrFail($m->findOrFail($id)->prodi_id)->deskripsi;
        $prodi_id = $m->findOrFail($id)->prodi->findOrFail($m->findOrFail($id)->prodi_id)->id;
        $data = $m->findOrFail($id);
        return view('matakuliah.edit', compact('subheader','prodi','prodi_id', 'data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $m = MataKuliah::findOrFail($id);
        $m->update($request->all());
        return redirect()->route('matakuliah.prodi',$request->prodi_id)->with('success', 'Mata Kuliah berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $m = MataKuliah::findOrFail($id);
        $m->forceDelete();
        return redirect()->route('matakuliah.prodi',$m->prodi_id)->with('success', 'Mata Kuliah berhasil dihapus');
    }
}
