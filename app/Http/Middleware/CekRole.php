<?php

namespace App\Http\Middleware;

use Closure;
// use App\Models\User;
// use App\Models\Role;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;

class CekRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    // public function handle($request, Closure $next, ...$roles)
    // {
    //     // dd(session("role"));
    //     // dd(auth() ->user()->role);
    //     foreach ($roles as $key => $value) {
    //         if (auth() ->user()->role) {
    //             return $next($request);
    //         }
    //     }
    //     return redirect()->back()->with('error',"Anda tidak dapat mengakses halaman ini");
    // }


    public function handle($request, Closure $next, ...$roles)
    {
        if ($role = auth()->user()->role) {
            foreach ($roles as $key => $value) {
                if ($role->nama_role == $value) {
                    // dd($role, $value);
                    return $next($request);
                }
            }
        }
        return redirect()->back()->with('error', 'Anda tidak dapat mengakses halaman ini');
    }

    // public function handle(Request $request, Closure $next, ...$roles)
    // {
    //     if (Auth::check() && in_array(Auth::user()->role, $roles)) {
    //         return $next($request);
    //     }

    //     return redirect()->back()->with('error', 'Anda tidak dapat mengakses halaman ini.');
    // }
}
