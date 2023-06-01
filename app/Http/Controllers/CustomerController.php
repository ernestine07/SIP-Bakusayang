<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\menu;

class CustomerController extends Controller
{

    public function menu_customer()
    {
        $data = menu::all();
        // dd($data);
        return view('Customer.menu',compact('data'));
    }
}
