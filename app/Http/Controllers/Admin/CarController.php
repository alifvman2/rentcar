<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = DB::table('mobil')
            ->get();

        return view('admin.car.index')->with([
            'data'  => $data,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.car.create');
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
            // 'foto'  => 'required',
            'merk'  => 'required',
            'plat'  => 'required',
            'warna' => 'required',
            'tahun' => 'required',
            'harga' => 'required',
        ]);

        $merk = strtoupper($request->merk);
        $plat = strtoupper($request->plat);
        $warna = strtoupper($request->warna);

        $insert = DB::table('mobil')
            ->insert([
                'merk'  => $merk,
                'plat'  => $plat,
                'warna' => $warna,
                'tahun' => $request->tahun,
                'harga' => $request->harga,
                // 'foto'  => $request->foto,
                'status'=> 'Aktif',
            ]);

        return redirect()->route('Admin.car')->with('success', 'Success, Car success created');

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
    public function edit(Request $request)
    {

        $data = DB::table('mobil')
            ->where('id', $request->id)
            ->first();

        return view('admin.car.edit')->with([
            'data'  => $data,
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $request->validate([
            'merk'  => 'required',
            'plat'  => 'required',
            'warna' => 'required',
            'tahun' => 'required',
            'harga' => 'required',
        ]);

        $merk = strtoupper($request->merk);
        $plat = strtoupper($request->plat);
        $warna = strtoupper($request->warna);

        $insert = DB::table('mobil')
            ->where('id', $request->id)
            ->update([
                'merk'  => $merk,
                'plat'  => $plat,
                'warna' => $warna,
                'tahun' => $request->tahun,
                'harga' => $request->harga,
                'status'=> 'Aktif',
            ]);

        return redirect()->route('Admin.car')->with('success', 'Success, Car success updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {

        DB::table('mobil')->where('id', $request->id)->delete();

    }
}
