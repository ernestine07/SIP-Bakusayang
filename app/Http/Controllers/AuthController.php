<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function register_customer(Request $request)
    {
        $user = User::create([
            'name'=>$request->name,
            'username'=>$request->username,
            'email'=>$request->email,
            'password' => Hash::make($request->password),
            // 'remember_token'(),
            'role_id'=>'2',
        ]);

        $customer = Customer::create([
            'nama_customer'=>$request->name,
            'jeniskelamin'=>$request->jeniskelamin,
            'alamat'=>$request->alamat,
            'no_telepon' =>$request->notelp,
            'users_id' =>$user->id,
        ]);

        return redirect('register_customer')->with('success','Selamat, Akun berhasil dibuat');
    }
    public function login(Request $request)
    {
        if (Auth::attempt(['username'=> $request->username, 'password'=>$request->password])) {
            if (Auth::user()->role_id==2){
                return redirect(route('Dashboard.index_customer'));
            }
            else{
                return redirect(route('Dashboard.index'));
            }

        }
        else{
            echo('gagal login');
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login');
    }

}
