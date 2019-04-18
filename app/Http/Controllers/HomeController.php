<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\Produit;
use Illuminate\Support\Facades\DB;
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
        $stMin = DB::select('select * from produits where stockMin >= quantiteDisp');
        $seuilAlerte = DB::select('select * from produits where seuilAlerte >= quantiteDisp');
        $min = DB::select('SELECT COUNT(*) as nb FROM produits WHERE stockMin>= quantiteDisp');
        $alerte = DB::select('SELECT COUNT(*) as nb FROM produits WHERE seuilAlerte>= quantiteDisp');
        return view('home',compact('stMin', 'seuilAlerte', 'min', 'alerte'));
        dd($stMin);
    }
}
