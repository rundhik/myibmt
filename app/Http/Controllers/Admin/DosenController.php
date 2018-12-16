<?php

namespace MyIBMT\Http\Controllers\Admin;

use Illuminate\Http\Request;
use MyIBMT\Http\Controllers\Controller;
use MyIBMT\Models\Dosen;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function __construct()
    // {
    //     $this->middleware('permission:create', ['only' => ['create', 'store']]);    
    //     $this->middleware('permission:edit', ['only' => ['edit', 'update']]);   
    //     $this->middleware('permission:delete', ['only' => ['show', 'delete']]);
    // }
    
    public function index()
    {
        $subheader = 'Dosen';
        $d = new Dosen;
        $data = $d->get();
        return view('dosen.index',compact('subheader','data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subheader = 'Tambah Dosen';
        return view('dosen.create',compact('subheader'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dosen = new Dosen;
        $dosen->nm_dosen = $request->nm_dosen;
        $dosen->nidn = $request->nidn;
        $dosen->save();
        return redirect()->route('dosen.index')->with('success','Dosen berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subheader = 'Hapus Dosen';
        $data = Dosen::findOrFail($id);
        return view('dosen.show', compact('subheader', 'data'));
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
        $d = new Dosen;
        $data = $d->findOrFail($id);
        return view('dosen.edit', compact('data', 'subheader'));
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
        $dosen = Dosen::findOrFail($id);
        $dosen->update($request->all());
        return redirect()->route('dosen.index')->with('success', 'Data dosen berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy($id)
    {
        $dosen = Dosen::findOrFail($id);
        $dosen->delete();
        return redirect()->route('dosen.index')->with('success','Dosen Berhasil dihapus');
    }
}
