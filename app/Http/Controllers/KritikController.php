<?php

namespace App\Http\Controllers;

use App\Models\Kritik;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class KritikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = Kritik::leftjoin('users','users.id', 'kritik.users_id')
        //         ->select('kritik.*', 'users.name')
        //         ->get();
        // $user = User::where('id', Auth::user()->id)->first();

        $data = Kritik::all();

        return view('Landingpage', compact('data'));
        // return view('Pesan.index', compact('data','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Kritik::all();
        return view('Landingpage', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Kritik::create([
            'nama'=>$request->nama,
            'pesan'=>$request->pesan
        ]);

        return redirect('/')->with('success');
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
