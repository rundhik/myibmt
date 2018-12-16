<?php

namespace MyIBMT\Http\Controllers\Admin;

use Illuminate\Http\Request;
use MyIBMT\Http\Controllers\Controller;
use MyIBMT\Models\RuangPerkuliahan;

class RuangPerkuliahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subheader = 'Ruang Perkuliahan';
        $rp = new RuangPerkuliahan;
        $data = $rp->get();
        return view('ruangperkuliahan.index', compact('subheader', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subheader = 'Tambah Ruang Kuliah';
        return view('ruangperkuliahan.create', compact('subheader'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rp = new RuangPerkuliahan;
        $rp->nm_ruangan = $request->nm_ruangan;
        $rp->lokasi = $request->lokasi;
        $rp->save();
        return redirect()->route('ruangan.index')->with('success', 'Ruang Kuliah berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subheader = 'Hapus Ruang Perkuliahan';
        $data = RuangPerkuliahan::findOrFail($id);
        return view('ruangperkuliahan.show', compact('subheader', 'data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subheader = 'Edit Dosen';
        $rp = new RuangPerkuliahan;
        $data = $rp->findOrFail($id);
        return view('ruangperkuliahan.edit', compact('subheader', 'data'));
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
        $rp = RuangPerkuliahan::findOrFail($id);
        $rp->update($request->all());
        return redirect()->route('ruangan.index')->with('succes', 'Ruang Kuliah berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rp = RuangPerkuliahan::findOrFail($id);
        $rp->forceDelete();
        return redirect()->route('ruangan.index')->with('succes', 'Ruang Kuliah berhasil dihapus');
    }
}
