<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kas;

class KasController extends Controller
{

    //
    function show(){
        $data['kas'] = Kas::all();
        return view('kas',$data);
    }
    function add(){
        $data =[
            'action' => url('kas/create'),
            'tombol' => 'SIMPAN',
            'kas' => (object)[
                'nis'=>'',
                'nama'=>'',
                'tanggal'=>'',
                'uang'=>'',
                'ket'=>'',
            ]
            ];
            return view('form_kas',$data);
    }
    function create(Request $request){ 
        Kas::create([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'tanggal' => $request->tanggal,
            'uang' => $request->uang,
            'ket'=> $request->ket,
        ]);
        return redirect ('kas');
    }
    function edit($id){
        $data['kas'] = Kas::find($id);
        $data['action'] = url('kas/update').'/'.$data['kas']->id;
        $data['tombol'] = "Update";
        return view('form_kas',$data);
    }
    function update(Request $request){
        Kas::where('id',$request->id)->update([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'tanggal' => $request->tanggal,
            'uang' => $request->uang,
            'ket' => $request->ket,
        ]);
        return redirect ('kas');
    }
    function hapus($id){
        Kas::where('id',$id)->delete();

        return redirect('kas');
    }
}
