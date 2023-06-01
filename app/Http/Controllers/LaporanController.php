<?php

namespace App\Http\Controllers;

use App\Models\Aset;
use App\Models\Laporan;
use Illuminate\Http\Request;
use App\Models\Transaksi;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array('title' => 'Form Laporan Penjualan');
        return view('laporan.index', compact('data'));
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
        $data = Transaksi::all();

        return view('laporan.proses_keuangan', compact('data', 'data2'));
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

    

    public function keuangan()
    {
        // Ambil data transaksi dari tabel transaksi
        $transaksi = Transaksi::all();

        // Loop data transaksi dan tambahkan ke tabel laporan keuangan
        foreach ($transaksi as $data) {
            Laporan::create([
                'no_invoice' => $data->no_invoice,
                'tanggal' => $data->tanggal,
                'diskon' => $data->diskon,
                'subtotal' => $data->subtotal
            ]);
        }

        return "Tabel laporan keuangan telah diisi.";
    }

    public function proseskeuangan(Request $request)
    {
        $data = array('title' => 'Form Laporan Keuangan');
        $laporan = Transaksi::all();
        $total = 0;
        $totaltransaksi = 0;
        foreach ($laporan as $key) {
            $total = $key->subtotal + $total;
            $totaltransaksi++;
        }
        return view('laporan.proses_keuangan', compact('total', 'laporan', 'totaltransaksi'));
    }

    // public function prosespenjualan (Request $request){
    //     $penjualan = array('title' => 'Form Laporan Penjualan');
    //     return view('laporan.penjualan', compact('penjualan'));
    // }

    public function prosespenjualan(Request $request)
    {
        $data = array('title' => 'Form Laporan Penjualan');
        // $data2= Transaksi::all();
        $penjualan = Transaksi::all();
        $total = 0;
        $totalpenjualan = 0;
        $totalqty = 0;
        foreach ($penjualan as $key) {
            $total = $key->qty + $total;
            $totalpenjualan++;

            foreach ($key->menu as $item) {
                $totalqty = $item[1] + $totalqty;
            }
        }
        return view('laporan.penjualan', compact('total', 'penjualan', 'totalpenjualan', 'totalqty'));
    }

    public function indexkasir()
    {
        $data = array('title' => 'Form Laporan Penjualan');
        return view('laporan.index', compact('data'));
    }

    public function keuangankasir(Request $request)
    {
        $data = array('title' => 'Form Laporan Keuangan');
        $laporan = Transaksi::all();
        $total = 0;
        $totaltransaksi = 0;
        foreach ($laporan as $key) {
            $total = $key->subtotal + $total;
            $totaltransaksi++;
        }
        return view('laporan.proses_keuangan', compact('total', 'laporan', 'totaltransaksi'));
    }

    // public function prosespenjualan (Request $request){
    //     $penjualan = array('title' => 'Form Laporan Penjualan');
    //     return view('laporan.penjualan', compact('penjualan'));
    // }

    public function penjualankasir(Request $request)
    {
        $data = array('title' => 'Form Laporan Penjualan');
        $penjualan = Transaksi::all();
        $total = 0;
        $totalpenjualan = 0;
        $totalqty = 0;
        foreach ($penjualan as $key) {
            $total = $key->qty + $total;
            $totalpenjualan++;

            foreach ($key->menu as $item) { 
                $totalqty = $item[1] + $totalqty;
            }
        }
        return view('laporan.penjualan', compact('total', 'penjualan', 'totalpenjualan', 'totalqty'));
    }

    public function stokbarang(Request $request)
    {
        $data2= Aset::all();
        $total = 0;
        $totalbarang = 0;
        $totalqty = 0;
        foreach ($data2 as $key) {
            $total = $key->stok + $total;
            $totalbarang++;
        }
        return view('laporan.stok_barang', compact('data2', 'total', 'totalbarang', 'totalqty'));
        // return view('laporan.stok_barang');
    }
}
