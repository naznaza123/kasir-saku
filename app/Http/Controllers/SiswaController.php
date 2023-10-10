<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    //
    function index(){
        
        $data['siswa'] = Siswa::all();
        return view('siswa.index',$data);
    }
    function create(){
        $data =[
            'action' => url('siswa/store'),
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
            return view('siswa.create',$data);
    }
    function store(Request $request){ 

        $this->validate($request,[
            'nis'=>'required|min:3|max:10 ',
            'nama'=>'required|min:3',
            'no_hp'=>'required|min:12|max:13',
            'alamat'=> 'required',

        ],[
            'nis.required'=>'nis tidak boleh kosong',
            'nama.required'=>'nama tidak boleh kosong',
            'no_hp.required'=>'nomor handphone tidak boleh kosong',
            'nama.min'=>'nama harus lebih dari 3 karakter',
            'nis.min'=>'nis harus lebih dari 3 karakter',
            'nis.max'=>'nis tidak boleh lebih dari 10 karakter',
            'no_hp.min'=>'nomor tidak boleh kurang dari 12 karakter',
            'no_hp.max'=>'nomor tidak boleh lebih dari 13 karakter',

        ]
        
        );

        Siswa::create([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'jk' => $request->jk,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat
        ]);
        // return redirect ('siswa');
        return redirect()->route('siswa');

    }
    function edit($id){
        $data['siswa'] = Siswa::find($id);
        $data['action'] = url('siswa/update').'/'.$data['siswa']->nis;
        $data['tombol'] = "Update";
        return view('siswa.create',$data);
    }
    function update(Request $request){

        $this->validate($request,[
            'nis'=>'required|min:3|max:10 ',
            'nama'=>'required|min:3',
            'no_hp'=>'required|min:12|max:13',
            'alamat'=> 'required',

        ],[
            'nis.required'=>'nis tidak boleh kosong',
            'nama.required'=>'nama tidak boleh kosong',
            'no_hp.required'=>'nomor handphone tidak boleh kosong',
            'nama.min'=>'nama harus lebih dari 3 karakter',
            'nis.min'=>'nis harus lebih dari 3 karakter',
            'nis.max'=>'nis tidak boleh lebih dari 10 karakter',
            'no_hp.min'=>'nomor tidak boleh kurang dari 12 karakter',
            'no_hp.max'=>'nomor tidak boleh lebih dari 13 karakter',

        ]
        
        );

        Siswa::where('nis',$request->id)->update([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'jk' => $request->jk,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat
        ]);
        // return redirect ('siswa');
        return redirect()->route('siswa');

    }
    function hapus($id){
        Siswa::where('nis',$id)->delete();
        // return redirect('siswa');
        return redirect()->route('siswa');

    }
}
