<?php

namespace App\Http\Controllers;

use App\Models\menu;
use App\Models\Cart;
use App\Models\Laporan;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detail = Transaksi::where('status_pembayaran','!=', 'Lunas')->get();
        // dd($detail);
        return View ('transaksi.index', compact('detail'));
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
        $record = Transaksi::latest()->first();
        // dd($record);
        if ($record == null or $record == "") {
            if (date('l', strtotime(date('Y-01-01')))) {
                $invoiceno = date('Y') . '-0001';
            }
        } else {
            $expNum = explode('-', $record->no_invoice);
            $innoumber = ($expNum[1] + 1);
            $invoiceno = $expNum[0] . '-' . sprintf('%04d', $innoumber);
        }

        $cartList = null;
        $dataCart = Cart::all();
        // dd($dataCart);
        foreach ($dataCart as $item) {
            $cartList[] = [$item->menu->nama_menu,$item->qty, $item->menu->harga];
            Cart::find($item->id)->delete();
        }
        // dd($cartList);
        $cart = Transaksi::create([
            'no_invoice' => $invoiceno,
            'users_id' => Auth::user()->id,
            'menu' => $cartList,
            'nama_pelanggan' => $request->nama_pelanggan,
            'status_pembayaran' => 'Pending',
            'status_order' => $request->status_order,
            'diskon' => $request->diskon,
            'subtotal' => $request->subtotal
        ]);
        $detail = Transaksi::all();

        // return view ('transaksi.edit', compact('detail'));
        return back()->with('success','Selamat, pesanan berhasil dibuat');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CartDetail  $cartDetail
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Transaksi::all();
        $data2= Transaksi::where('id', $id)->first();

        // dd($data);
        return view('transaksi.detail', compact('data', 'data2'));
    }

    public function cetak($id)
    {
        $data = Transaksi::all();
        $data2= Transaksi::where('id', $id)->first();

// dd($data);
        return view('transaksi.cetak_struk', compact('data', 'data2'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CartDetail  $cartDetail
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
     * @param  \App\Models\CartDetail  $cartDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CartDetail  $cartDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detail = Transaksi::where('id',$id)->first();
        $detail->delete();
    }

    public function selesai($id)
    {
        Transaksi::where('id' ,$id)->update([
            'status_pembayaran'=>'Lunas',
        ]);
        
        return back()->with('success','Pesanan Selesai');
    }

    // public function selesaikasir($id)
    // {
    //     Transaksi::where('id' ,$id)->update([
    //         'status_pembayaran'=>'Lunas',
    //     ]);
    //     return back()->with('success','Pesanan Selesai');
    // }

    public function transaksicustomer()
    {
        // $data = Transaksi::getByAccount(1);
        $detail = Transaksi::where('users_id',Auth::user()->id)->get();
        // dd($detail);
        return View ('Customer.transaksi', compact('detail'));
    }

    public function detailtransaksicustomer($id)
    {
        // $data = Transaksi::getByAccount(1);
        $data = Transaksi::all();
        $data2= Transaksi::where('id', $id)->first();

        // dd($data);
        return view('Customer.detailtransaksi', compact('data', 'data2'));
    }

}
