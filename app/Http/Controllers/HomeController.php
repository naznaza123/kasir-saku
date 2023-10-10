<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Siswa;
use App\Models\kategori;
use App\Models\Kas;
use App\Models\Pengeluaran;


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
        $users = User::count();
        $transaksis = Kas::count();
        $transaksikeluar= Pengeluaran::count();
        $kategoris = Kategori::count();
        $siswas= Siswa::count();
        $uang= Kas::sum('uang');
        $uangkeluar= Pengeluaran::sum('uang');


        $tottransaksi=$transaksis + $transaksikeluar;
        $saldosaatini=$uang-$uangkeluar;
        

        
    
    



       
        
        return view('home',compact('users','siswas','kategoris','transaksis','uang','uangkeluar','transaksikeluar','tottransaksi','saldosaatini'));
    }
}
