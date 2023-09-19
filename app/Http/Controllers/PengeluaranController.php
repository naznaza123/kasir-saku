<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengeluaran;

class PengeluaranController extends Controller
{
    //
    function show(){
        $data['pengeluaran'] = Pengeluaran::all();
        return view('pengeluaran',$data);
    }
    function add(){
        $data =[
            'action' => url('pengeluaran/create'),
            'tombol' => 'SIMPAN',
            'pengeluaran' => (object)[
                'id'=>'',
                'tanggal'=>'',
                'nama_barang'=>'',
                'harga_barang'=>'',
                'keterangan'=>'',
            ]
            ];
            return view('form_pengeluaran',$data);
    }
    function create(Request $request){ 
        Pengeluaran::create([
            'id' => $request->id,
            'tanggal' => $request->tanggal,
            'nama_barang' => $request->nama_barang,
            'harga_barang' => $request->harga_barang,
            'keterangan' => $request->keterangan
        ]);
        return redirect ('pengeluaran');
}
function edit($id){
    $data['pengeluaran'] = Pengeluaran::find($id);
    $data['action'] = url('pengeluaran/update').'/'.$data['pengeluaran']->id;
    $data['tombol'] = "Update";
    return view('form_pengeluaran',$data);
}
function update(Request $request){
    Pengeluaran::where('id',$request->id)->update([
        'id' => $request->id,
        'tanggal' => $request->tanggal,
        'nama_barang' => $request->nama_barang,
        'harga_barang' => $request->harga_barang,
        'keterangan' => $request->keterangan
    ]);
    return redirect ('pengeluaran');
}
function hapus($id){
    Pengeluaran::where('id',$id)->delete();
    return redirect('pengeluaran');
}
}
