<?php

namespace App\Http\Controllers;

use App\Models\Aset;
use Illuminate\Http\Request;

class AsetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Aset::all();

        return view('Aset.index',compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Aset::all();
        return view('Aset.tambah_barang',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'tanggal'=> 'required',
        //     'nama_barang'=>'required',
        //     'stok'=>'required'
        // ]);

        $data = Aset::create([
            'nama_barang'=>$request->aset,
            'stok'=>$request->qty,
            'tanggal'=>$request->tanggal
        ]);


        return redirect()->route('Aset.index')->with('success','Selamat, data barang berhasil dibuat');

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
        $aset = Aset::where('id', $id)->first();
        return view('Aset.edit', compact('aset'));
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
        $aset = Aset::where('id', $id)->first();

        $asetupdate =Aset::where('id' ,$id)->update ([
            'tanggal'=>$request->tanggal,
            'nama_barang'=>$request->aset,
            'stok'=>$request->qty
        ]);

        return redirect()->route('Aset.index')->with('success', 'Data Barang berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Aset::where('id', $id)->first();

        $data->delete();

        return redirect()->route('Aset.index')->with('success','Data Barang berhasil dihapus');
    }
}
