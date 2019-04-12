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
        return view('home',compact('stMin'));
    }
}
