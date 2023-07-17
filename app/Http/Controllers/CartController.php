<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\menu;
use App\Models\Transaksi;
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
        $data = Cart::where('user_id', auth()->id())->get();
        $menu = menu::all();
        $totalSubTotal = Cart::get()->sum('total');
        // dd($total);
        return view('Cart.index',compact('data', 'menu','totalSubTotal'));
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
        $menu = menu::where('id', $request->menu_id)->first();
        $data = Cart::create([
            'tanggal'=>$request->tanggal,
            'menu_id'=>$request->menu_id,
            'nama_cust'=>$request->nama_cust,
            'user_id'=>auth()->id(),
            'qty'=>$request->qty,
            'status_cart'=>$request->status_cart,
            'status_order'=>$request->status_order,
            'total'=> $request->qty * $menu->harga,
        ]);

        // return view('Cart.index', compact($data))->with('success','Selamat, cart berhasil dibuat');
        return back()->with('success','Selamat, menu berhasil ditambahkan');
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
        $data = Cart::where('id',$id)->first();
        $data->delete();
        return redirect()->route('Cart.index')->with('success','list menu berhasil dihapus');
    }

    public function cartcustomer(Request $request)
    {
        $menu = menu::all();
        $data = Cart::all();
        $totalSubTotal = Cart::get()->sum('total');
        // dd($total);
        return view('Customer.cart',compact('data', 'menu','totalSubTotal'));
    }
    
    public function createcart(Request $request)
    {
        $menu = menu::where('id', $request->menu_id)->first();
        $data = Cart::create([
            'tanggal'=>$request->tanggal,
            'menu_id'=>$request->menu_id,
            'nama_cust'=>$request->nama_cust,
            'qty'=>$request->qty,
            'user_id'=>auth()->id(),
            'status_cart'=>$request->status_cart,
            'status_order'=>$request->status_order,
            'total'=> $request->qty * $menu->harga,
        ]);
        // dd($data);
        // return view('Cart.index', compact('data', 'menu'));
        return back()->with('success','Selamat, menu berhasil ditambahkan');
    }

    public function destroycart($id)
    {
        $data = Cart::where('id',$id)->first();
        $data->delete();
        return back()->with('success','list menu berhasil dihapus');
    }

    public function tambahpesanan(Request $request)
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
            // 'diskon' => $request->diskon,
            'subtotal' => $request->subtotal
        ]);
        $detail = Transaksi::all();

        // return view ('transaksi.edit', compact('detail'));
        return back()->with('success','Selamat, pesanan berhasil dibuat');

    }
}
