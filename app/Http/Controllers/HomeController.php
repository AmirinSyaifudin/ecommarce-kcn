<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

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
        // if (auth()->user()->role == 'superadmin') {
        //     return view('Superadmin.home');
        // } elseif (auth()->user()->role == 'paketdua') {
        //     return view('Paketuwo.home');
        // } 
        
        return view('home');
    }
}
