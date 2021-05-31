<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\kota;

class tambahcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kota = kota::all();
        return view ('kota.index', compact('kota'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('kota/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'namakota'=> 'required',
            'namapemimpin' => 'required',
            'luaswilayah' => 'required'
        ]);
        kota::create($request->all());

        return redirect('/kota')->with('status', 'Data Berhasil Ditambahkan');
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
    public function edit(kota $kota)
    {
        return view('kota/edit', compact('kota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kota $kota)
    {
        $request->validate([
            'namakota'=> 'required',
            'namapemimpin' => 'required',
            'luaswilayah' => 'required'
        ]);
        
        kota::where('id', $kota->id)
            ->update([
                'namakota' => $request->namakota,
                'namapemimpin' => $request->namapemimpin,
                'jmlpenduduk' => $request->jmlpenduduk,
                'luaswilayah' => $request->luaswilayah,
                'jeniskota' => $request->jeniskota
            ]);
        return redirect('/kota')->with('status', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(kota $kota)
    {
        $kota::destroy($kota->id);
        return redirect('/kota')->with('status', 'Data Berhasil Dihapus');
    }
}
