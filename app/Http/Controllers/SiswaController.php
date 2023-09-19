<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    //
    function show(){
        $data['siswa'] = Siswa::all();
        return view('siswa',$data);
    }
    function add(){
        $data =[
            'action' => url('siswa/create'),
            'tombol' => 'SIMPAN',
            'siswa' => (object)[
                'nis'=>'',
                'nama'=>'',
                'kelas'=>'',
                'jk'=>'',
                'no_hp'=>'',
                'alamat'=>'',
            ]
            ];
            return view('form_siswa',$data);
    }
    function create(Request $request){ 
        Siswa::create([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'jk' => $request->jk,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat
        ]);
        return redirect ('siswa');
    }
    function edit($id){
        $data['siswa'] = Siswa::find($id);
        $data['action'] = url('siswa/update').'/'.$data['siswa']->nis;
        $data['tombol'] = "Update";
        return view('form_siswa',$data);
    }
    function update(Request $request){
        Siswa::where('nis',$request->id)->update([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'jk' => $request->jk,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat
        ]);
        return redirect ('siswa');
    }
    function hapus($id){
        Siswa::where('nis',$id)->delete();
        return redirect('siswa');
    }
}
