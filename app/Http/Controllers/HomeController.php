<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use  Carbon\Carbon;

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
        $now = Carbon::now()->toTimeString();
        $pares = DB::table('par_de_segundas')->count();
        $hermanados = DB::table('par_hermanados')->count();
        $primera = DB::table('par_de_primeras')->count();

        return view('home' ,compact('pares','hermanados','primera','now'));
    }

    // public function hora()
    // {
    //     $now = Carbon::now()->toTimeString();
    //     return view('home', ['now'=>$now]);
    // }


}
