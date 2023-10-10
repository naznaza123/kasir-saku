<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kas;
use App\Models\Siswa;
use App\Models\Kategori;

class KasController extends Controller
{

    //
   public function index(){
        $data['kas'] = Kas::all();
        return view('kas.index-pemasukan',$data);
    }
    // public function showhistory(){
    //     $data['kas'] = Kas::all();
    //     return view('history',$data);
    // }
    public function create(){
        $data =[
            'action' => url('kas/store'),
            'tombol' => 'SIMPAN',
            'kas' => (object)[
                // 'nis'=>'',
                'nama'=>'',
                'tanggal'=>'',
                // 'jns'=>'',
                'kategori'=>'',
                'uang'=>'',
                'ket'=>'',
            ]
            ];
            $kateg=Kategori::all();
             $namas=Siswa::all();
            return view('kas.create',compact('namas','kateg'), $data);
    }
    public function store(Request $request){ 
       
        
        $this->validate($request,[
            'nama'=>'required|min:3 ',
            // 'jns'=>'required',
            'ket'=>'required',
            'kategori'=>'required',
            'uang'=>'required',

        ],[
            'nama.required'=>'nama tidak boleh kosong',
            // 'jns.required'=>'jns tidak boleh kosong',
            'ket.required'=>'keterangan tidak boleh kosong',
            'nama.min'=>'nama harus lebih dari 3 karakter',
            'kategori.required'=>'kategori tidak boleh kosong',
            'uang.required'=>'kategori tidak boleh kosong',

        ]
        
        );

        Kas::create([
            // 'nis' => $request->nis,
            'nama' => $request->nama,
            'tanggal' => $request->tanggal,
            // 'jns' => $request->jns,
            'kategori' => $request->kategori,
            'uang' => $request->uang,
            'ket'=> $request->ket,
        ]);
       
        
        
        // 
        
        // return redirect ('kas.index-pemasukan');
        return redirect()->route('pemasukan');
    }
    public function edit($id){
        $data['kas'] = Kas::find($id);
        
        $data['action'] = url('kas/update').'/'.$data['kas']->id;
        $data['tombol'] = "Update";
        $kateg=Kategori::all();
        $namas=Siswa::all();

        return view('kas.create',compact('namas','kateg'),$data);
        
    }
    public function update(Request $request){

        $this->validate($request,[
            'nama'=>'required|min:3 ',
            // 'jns'=>'required',
            'ket'=>'required',
            'kategori'=>'required',
            'uang'=>'required',

        ],[
            'nama.required'=>'nama tidak boleh kosong',
            // 'jns.required'=>'jns tidak boleh kosong',
            'ket.required'=>'keterangan tidak boleh kosong',
            'kategori.required'=>'ketegori tidak boleh kosong',
            'uang.required'=>'uang tidak boleh kosong',
            'nama.min'=>'nama harus lebih dari 3 karakter',

        ]
        
        );

        Kas::where('id',$request->id)->update([
            // 'nis' => $request->nis,
            'nama' => $request->nama,
            'tanggal' => $request->tanggal,
            'kategori' => $request->kategori,
            // 'jns' => $request->jns,
            'uang' => $request->uang,
            'ket' => $request->ket,
        ]);
        
        return redirect()->route('pemasukan');
        
    }
    public function destroy($id){
        Kas::where('id',$id)->delete();

        return redirect()->route('pemasukan');
        
    }
    
}
