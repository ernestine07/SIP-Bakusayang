<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;


class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawai = Pegawai::leftjoin('users','users.id', 'pegawai.users_id')
                            ->leftjoin('role','role.id', 'users.role_id')
                            ->select('pegawai.*', 'role.nama_role')
                            ->get();

        return view('pegawai.index',compact('pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = Role::all();
        return view('pegawai.tambahpegawai', compact('role'));
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
            'no_telp' => 'required|numeric',
            'email' => 'required|unique:users,email',
            'username' => 'required|unique:users,username',
            'password' => 'required',
            'role_id' => 'required',
            'foto' => 'required',
        ]);

        $fotopegawai = $request->foto;
        $namafile_fotopegawai =  uniqid(). 'pegawai_'.$fotopegawai->getClientOriginalName();
        $fotopegawai->move(public_path('storage/'), $namafile_fotopegawai);

        $role = Role::where('id', $request->role_id)->first();
        $user = User::create([
            'name'=>$request->name,
            'username'=>$request->username,
            'email'=>$request->email,
            'password' => Hash::make($request->password),
            // 'remember_token'(),
            'role_id'=>$role->id,
        ]);

        $pegawai = Pegawai::create([
            'nama_pegawai'=>$request->name,
            'no_telp'=>$request->no_telp,
            'users_id'=>$user->id,
            'foto'=>$namafile_fotopegawai,
        ]);


        return redirect()->route('pegawai.index')->with('success','Selamat, data pegawai berhasil dibuat');

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
        $pegawai = Pegawai::where('id', $id)->first();
        $user = User::where('id' ,$pegawai->users_id)->first();
        return view('pegawai.edit', compact('pegawai', 'role', 'user'));
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
        // $request->validate([
        //     'name' => 'unique:pegawai,nama_pegawai',
        //     'no_telp' => 'numeric',
        //     'email' => 'unique:users,email',
        //     'username' => 'unique:users,username',
        //     // 'password' => 'required',
        //     // 'role_id' => 'required',
        //     // 'foto' => 'required',
        // ]);

        $pegawai = Pegawai::where('id',$id)->first();
        $user = User::where('id', $pegawai->users_id)->first();
        $role = Role::where('id', $request->role_id)->first();



        if($request->hasFile('foto')){
            $fotopegawai = $request->file('foto');
            $namafile_fotopegawai = uniqid(). 'pegawai_'.$fotopegawai->getClientOriginalName();
            $fotopegawai_path = public_path("Storage/{$pegawai->foto}");
            if (File::exists($fotopegawai)){
                unlink($fotopegawai_path);
            }
            $fotopegawai->move(public_path('Storage/'), $namafile_fotopegawai);
            $exist_fotopegawai = $pegawai->update(['foto'=>$namafile_fotopegawai]);
        }


        $userupdate = User::where('id' ,$pegawai->users_id)->update([
            'name'=>$request->name,
            'username'=>$request->username,
            'email'=>$request->email,
            'password' => Hash::make($request->password),
            // 'remember_token'(),
            'role_id'=>$role->id,
        ]);

        $pegawaiupdate = Pegawai::where('id' ,$id)->update([
            'nama_pegawai'=>$request->name,
            'no_telp'=>$request->no_telp,
            'users_id'=>$user->id,
            // 'posisi'=>$request->posisi,
            'foto'=>$namafile_fotopegawai,
        ]);

        return redirect()->route('pegawai.index')->with('success','Data Pegawai berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pegawai = Pegawai::where('id',$id)->first();
        $user = User::where('id',$pegawai->users_id)->first();
        $fotopegawai_path = public_path("Storage/{$pegawai->foto}");
        if (File::exists($fotopegawai_path)){
            unlink($fotopegawai_path);
        }
        $pegawai->delete();
        $user->delete();


        return redirect()->route('pegawai.index')->with('success','Data Pegawai berhasil dihapus');
    }
}
