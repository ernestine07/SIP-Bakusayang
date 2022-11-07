<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;


class DatauserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::leftjoin('role','role.id', 'users.role_id')
                    ->select('users.*', 'role.nama_role')
                    ->get();

        return view ('Datauser.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = Role::all();
        return view('Datauser.tambahdata', compact('role'));
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
            'name' => 'required|unique:pegawai,nama_pegawai',
            'username' => 'required|unique:users,username',
            'email' => 'required|unique:users,email',
            'password' => 'required',
            'role_id' => 'required',
        ]);

        $role = Role::where('id', $request->role_id)->first();
        $user = User::create([
            'name'=>$request->name,
            'username'=>$request->username,
            'email'=>$request->email,
            'password' => Hash::make($request->password),
            'role_id'=>$role->id,
        ]);

        return redirect()->route('Datauser.index')->with('success','Selamat, data user berhasil dibuat');
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
        $role = Role::all();
        $user = User::where('id', $id)->first();
        return view('Datauser.edit', compact('role', 'user'));
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
        $user = User::where('id' ,$id)->first();
        $role = Role::where('id',$request->role_id)->first();

        $request->validate([
            'name' => 'required|unique:pegawai,nama_pegawai',
            'username' => 'required|unique:users,username',
            'email' => 'required|unique:users,email',
            'password' => 'required',
            'role_id' => 'required',
        ]);

        $userupdate = User::where('id' ,$id)->update([
            'name'=>$request->name,
            'username'=>$request->username,
            'email'=>$request->email,
            'password' => Hash::make($request->password),
            'role_id'=>$role->id,
        ]);
        return redirect()->route('Datauser.index')->with('success','Data User berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::where('id',$id)->first();
        $user->delete();

        return redirect()->route('Datauser.index')->with('success','Data User berhasil dihapus');
    }
}
