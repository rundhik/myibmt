<?php

namespace MyIBMT\Http\Controllers\Admin;

use Illuminate\Http\Request;
use MyIBMT\Http\Controllers\Controller;
use MyIBMT\Models\KelasPerkuliahan;
use MyIBMT\Models\Kurikulum;

class KelasPerkuliahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $subheader = 'Kelas Perkuliahan ';
        $kls = new KelasPerkuliahan;
        $filter['datakrk'] = $kls->findOrFail(1)->kurikulums->findOrFail(1)->prodi->get();
        $filter['datathn'] = $kls->findOrFail(1)->kurikulums->findOrFail(1)->thn_semester->get();

        if ($request->thn_semester_id == NULL && $request->prodi_id == NULL) {
            $request->thn_semester_id = 0;
            $request->prodi_id = 0;
        }
        $smt = $request->thn_semester_id;
        $prd = $request->prodi_id;

        $k = new Kurikulum;
        $data = $k
            ->join('kelas_perkuliahans', 'kurikulums.id', '=', 'kelas_perkuliahans.kurikulum_id')
            ->where([
                    ['kurikulums.thn_semester_id', '=', $smt],
                    ['kurikulums.kode_prodi_id', '=', $prd],
                ])
            ->get();
        return view('kelas.index', compact('subheader', 'data','filter', 'smt', 'prd'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $subheader = 'Tambah Kelas Perkuliahan ';
        $kls = new KelasPerkuliahan;
        $filter['datakrk'] = $kls->findOrFail(1)->kurikulums->findOrFail(1)->prodi->get();
        $filter['datathn'] = $kls->findOrFail(1)->kurikulums->findOrFail(1)->thn_semester->get();
        $filter['datakurikulum'] = $kls->findOrFail(1)->kurikulums->all();

        // if ($request->krk == NULL ) 
        // {
        //     $request->krk = 0;
        // }
        $smt = $request->thn_semester_id;
        $prd = $request->prodi_id;
        $krk = $request->kurikulum;
        var_dump($filter['datakurikulum']) or die;
        $k = new Kurikulum;
        // $data = 
        return view('kelas.index', compact('subheader', 'data','filter', 'smt', 'prd','krk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
