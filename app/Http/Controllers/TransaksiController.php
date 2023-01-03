<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use Midtrans\Transaction;

use function GuzzleHttp\Promise\all;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $itemuser = $request->user();
        // if ($itemuser->role == 'admin') {
        //     // kalo admin maka menampilkan semua cart
        //     $itemorder = Order::whereHas('cart', function($q) use ($itemuser) {
        //                     $q->where('status_cart', 'checkout');
        //                 })
        //                 ->orderBy('created_at', 'desc')
        //                 ->paginate(20);
        // } else {
        //     // kalo member maka menampilkan cart punyanya sendiri
        //     $itemorder = Order::whereHas('cart', function($q) use ($itemuser) {
        //                     $q->where('status_cart', 'checkout');
        //                     $q->where('user_id', $itemuser->id);
        //                 })
        //                 ->orderBy('created_at', 'desc')
        //                 ->paginate(20);
        // }
        // $data = array('title' => 'Data Transaksi',
        //             'itemorder' => $itemorder,
        //             'itemuser' => $itemuser);
        // return view('transaksi.index', $data)->with('no', ($request->input('page', 1) - 1) * 20);
       // Set your Merchant Server Key
       \Midtrans\Config::$serverKey = 'SB-Mid-server-_ASo-C2HohkhKjJlVM89-QMJ';
       // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
       \Midtrans\Config::$isProduction = false;
       // Set sanitization on (default)
       \Midtrans\Config::$isSanitized = true;
       // Set 3DS transaction for credit card to true
       \Midtrans\Config::$is3ds = true;

       $params = array(
           'transaction_details' => array(
               'order_id' => rand(),
               'gross_amount' => 10000,
           ),
           'customer_details' => array(
               'first_name' => 'budi',
               'last_name' => 'pratama',
               'email' => 'budi.pra@example.com',
               'phone' => '08111222333',
           ),
       );

       $snapToken = \Midtrans\Snap::getSnapToken($params);
       // return $snapToken;
       return view ('Transaksi.index', ['Token'=>$snapToken]);
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
        $itemuser = $request->user();
        $itemcart = Cart::where('status_cart', 'cart')
                        ->where('user_id', $itemuser->id)
                        ->first();
        if ($itemcart) {
                $itemcart->update(['status_cart' => 'checkout']);
                return redirect()->route('transaksi.index')->with('success', 'Order berhasil disimpan');
        } else {
            return abort('404');//kalo ternyata ga ada shopping cart, maka akan menampilkan error halaman tidak ditemukan
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = array('title' => 'Detail Transaksi');
        return view('transaksi.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $data = array('title' => 'Form Edit Transaksi');
        return view('transaksi.edit', $data);
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

    public function order()
    {
        // $data = array('title' => 'Order');
        // return view('transaksi.order', $data);
        // return view('cart.index');
    }
}
