<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\menu;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;



class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Cart::all();
        $menu = menu::all();
        return view('Cart.index',compact('data', 'menu'));
    }

    public function cart($menu)
    {
        $menu = Cart::leftjoin('menu','menu.id', 'cart.menu_id')
                        ->select('cart.*', 'menu.nama_menu')
                        ->where('menu.nama_menu', '=', $menu)
                        ->get();

        // $menu = Kategori::where('nama_kategori', $kategori)->first();
        // dd($menu);
        return view('Cart.index' ,compact('menu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menu = menu::all();
        $data = Cart::all();
        return view('Cart.index', compact('menu', 'data'));
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
            'tanggal' => 'required',
            'menu_id' => 'required',
            'nama_cust' => 'required',
            'qty' => 'required',
            'total'=> 'required',
        ]);


        $data = Cart::create([
            'tanggal'=>$request->tanggal,
            'menu_id'=>$request->menu_id,
            'nama_cust'=>$request->nama_cust,
            'qty'=>$request->qty,
            'total'=> $request->qty * $request->menu_id->harga,
        ]);

        // return dd($data);

        return view('Cart.index', compact($data));
        // return redirect()->route('Cart.index')->with('success','Selamat, cart berhasil dibuat');
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

    public function kosongkan($id) {
        $itemcart = Cart::findOrFail($id);
        $itemcart->detail()->delete();//semua item di cart detail
        $itemcart->updatetotal($itemcart, '-'.$itemcart->subtotal);
        return back()->with('success', 'Cart berhasil dikosongkan');
    }
}
