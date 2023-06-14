<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array('title' => 'Form Laporan Keuangan');
        $laporan = Transaksi::all();
        $total = 0;
        $totaltransaksi = 0;
        $totalpenjualan = 0;
        $totalqty = 0;
        $data1 = User::where('role_id','1')->count();
        $data2 = User::where('role_id','2')->count();
        $data3 = User::where('role_id','3')->count();
        $data4 = User::where('role_id','4')->count();
        $data5 = User::where('role_id','5')->count();
        $data6 = User::where('role_id','6')->count();
        $data7 = User::all()->count();
        foreach ($laporan as $key) {
            $total = $key->subtotal + $total;
            $totaltransaksi++;
        }
        foreach ($laporan as $key) {
            $total = $key->qty + $total;
            $totalpenjualan++;
            foreach ($key->menu as $item) {
                $totalqty = $item[1] + $totalqty;
            }
        }
        // dd($data1);
        return view('Dashboard.index', compact('total', 'laporan', 'totaltransaksi', 'totalpenjualan',
                     'totalqty','data1','data2','data3','data4','data5','data6', 'data7'));
    }
        // return view('Dashboard.index');
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
        // dd($totalpenjualan);
        return view('Dashboard.index', compact('total', 'penjualan', 'totalpenjualan', 'totalqty'));
    }

    public function indexcustomer()
    {
        $data = Transaksi::where('users_id',Auth::user()->id)->count();

        return view('Customer.index', compact('data'));
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
