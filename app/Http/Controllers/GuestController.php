<?php

namespace MyIBMT\Http\Controllers;

use Illuminate\Http\Request;
use MyIBMT\Models\Jadwal;
use MyIBMT\Models\KelasPerkuliahan;
use MyIBMT\Models\Kurikulum;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subheader = 'Jadwal Perkuliahan STIE IBMT Surabaya';
        $j = new Jadwal;
        $kls = new KelasPerkuliahan;
        $krk = new Kurikulum;
        // $prodi = $krk->find($j->find(1)->kelasperkuliahan->kurikulum_id)->prodi->id;
        $data = $j->get();
        return view('myibmt', compact('subheader','data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
