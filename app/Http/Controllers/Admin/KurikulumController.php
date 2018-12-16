<?php

namespace MyIBMT\Http\Controllers\Admin;

use Illuminate\Http\Request;
use MyIBMT\Http\Controllers\Controller;
use MyIBMT\Models\Kurikulum;

class KurikulumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $subheader = 'Kurikulum';
        $k = new Kurikulum;
        $prodi = $k->find(1)->prodi->all();
        $thnsmt = $k->find(1)->thn_semester->all();
        $data = $k->get();
        return view('kurikulum.index',compact('subheader','prodi','thnsmt','data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subheader = 'Tambah Kurikulum';
        $k = new Kurikulum;
        $prodi = $k->find(1)->prodi->all();
        $thnsmt = $k->find(1)->thn_semester->all();
        $data = $k->get();
        return view('kurikulum.create',compact('subheader','prodi','thnsmt','data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kurikulum = new Kurikulum;
        $kurikulum->nm_kurikulum = $request->nm_kurikulum;
        $kurikulum->kode_prodi_id = $request->kode_prodi_id;
        $kurikulum->thn_semester_id = $request->thn_semester_id;
        $kurikulum->save();
        return redirect()->route('kurikulum.index')->with('success','Kurikulum Berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subheader = 'Hapus Kurikulum';
        $k = new Kurikulum;
        $data = $k->find($id);
        return view('kurikulum.show', compact('data','subheader'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subheader = 'Edit Kurikulum';
        $k = new Kurikulum;
        $prodi = $k->find($id)->prodi->all();
        $thnsmt = $k->find($id)->thn_semester->all();
        $data = $k->find($id);
        $krk = $k->get();
        return view('kurikulum.edit', compact('data', 'subheader','krk','prodi','thnsmt'));
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
        $kurikulum = Kurikulum::findOrFail($id);
        $kurikulum->update($request->all());
        return redirect()->route('kurikulum.index')->with('success','Kurikulum Berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kurikulum = Kurikulum::findOrFail($id);
        $kurikulum->forcedelete();
        return redirect()->route('kurikulum.index')->with('success','Kurikulum Berhasil dihapus');
    }
}
