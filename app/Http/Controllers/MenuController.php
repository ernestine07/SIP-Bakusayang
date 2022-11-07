<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Models\menu;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;


class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = menu::all();
        return view('menu.index',compact('data'));

    }

    public function kategori($kategori)
    {
        $menu = menu::leftjoin('kategoris','kategoris.id', 'menu.kategori_id')
                        ->select('menu.*', 'kategoris.nama_kategori')
                        ->where('kategoris.nama_kategori', '=', $kategori)
                        ->get();

        // $menu = Kategori::where('nama_kategori', $kategori)->first();
        // dd($menu);
        return view('menu.menu_kategori' ,compact('menu'));
    }

    public function menu_customer()
    {
        $data = menu::all();
        return view('Customer.menu',compact('data'));
    }

    public function kategoricustomer($kategori)
    {
        $menucustomer = menu::leftjoin('kategoris','kategoris.id', 'menu.kategori_id')
                        ->select('menu.*', 'kategoris.nama_kategori')
                        ->where('kategoris.nama_kategori', '=', $kategori)
                        ->get();

        // $menu = Kategori::where('nama_kategori', $kategori)->first();
        // dd($menu);
        return view('Customer.menu_kategori' ,compact('menucustomer'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('menu.tambah_menu', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $kategori = Kategori::where('id', $request->kategori_id)->first();
        $fotomenu = $request->foto;
        $namafile_fotomenu = uniqid(). 'menu_'.$fotomenu->getClientOriginalName();
        $fotomenu->move(public_path('Storage/'), $namafile_fotomenu);


        $data = menu::create([
            'kode_menu'=>$request->kodemenu,
            'kode_barang'=>$request->kodebarang,
            'nama_menu'=>$request->menu,
            'kategori_id'=>$kategori->id,
            'harga'=>$request->harga,
            'foto_produk'=>$namafile_fotomenu,
        ]);

        return redirect()->route('menu.index')->with('success','Selamat, menu berhasil dibuat');

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
        $data=menu::where('id', $id)->first();
        $kategori = Kategori::all();
        return view('menu.edit', compact('data', 'kategori'));
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

        $data=menu::where('id', $id)->first();
        $kategori = Kategori::where('id', $request->kategori_id)->first();


        if($request->hasFile('foto')){
            $fotomenu = $request->file('foto');
            $namafile_fotomenu = uniqid(). 'menu_'.$fotomenu->getClientOriginalName();
            $fotomenu_path = public_path("Storage/{$data->foto_produk}");
            if (File::exists($fotomenu)){
                unlink($fotomenu_path);
            }
            $fotomenu->move(public_path('Storage/'), $namafile_fotomenu);
            $exist_fotomenu = $data->update(['foto_produk'=>$namafile_fotomenu]);
        }

        $data=menu::where('id' ,$id)->update([
            'kode_menu'=>$request->kodemenu,
            'kode_barang'=>$request->kodebarang,
            'nama_menu'=>$request->menu,
            'kategori_id'=>$kategori->id,
            'harga'=>$request->harga,
        ]);

        return redirect()->route('menu.index')->with('success','Data menu berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = menu::where('id',$id)->first();

        $fotomenu_path = public_path("Storage/{$data->foto_produk}");
        if (File::exists($fotomenu_path)){
            unlink($fotomenu_path);
        }

        $data->delete();
        return redirect()->route('menu.index')->with('success','Data menu berhasil dihapus');
    }
}
