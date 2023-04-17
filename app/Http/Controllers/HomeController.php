<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
        // $role = Auth::user()->UserRole->role->name;
        // if ($role == 'admin') {
        //     return redirect()->route('admin.dashboard.admin');
        // }

        // if ($role == 'semiadmin') {
        //     return redirect()->route('admin.dashboard.admin');
        // }

        // if ($role == 'customer' || $role == 'admin') {
        //     return redirect()->route('home');
        // } else {
        //     return view('auth.login');
        // }
    }
}
