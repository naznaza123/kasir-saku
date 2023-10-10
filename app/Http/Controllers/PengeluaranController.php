<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengeluaran;
use App\Models\Siswa;
use App\Models\Kategori;

class PengeluaranController extends Controller
{

    //
    public function index(){
        $data['pengeluaran'] = Pengeluaran::all();
        return view('kas.index-pengeluaran',$data);
    }
    // function showhistory(){
    //     $data['pengeluaran'] = Pengeluaran::all();
    //     return view('history',$data);
    // }
   public function create(){
        $data =[
            'action' => url('pengeluaran/store'),
            'tombol' => 'SIMPAN',
            'pengeluaran' => (object)[
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
            return view('kas.create-pengeluaran',compact('namas','kateg'), $data);
    }
    public function store(Request $request){ 
       
        
        $this->validate($request,[
            'nama'=>'required|min:3 ',
            // 'jns'=>'required',
            'ket'=>'required',
            'kategori'=>'required',

        ],[
            'nama.required'=>'nama tidak boleh kosong',
            // 'jns.required'=>'jns tidak boleh kosong',
            'ket.required'=>'keterangan tidak boleh kosong',
            'nama.min'=>'nama harus lebih dari 3 karakter',
            'kategori.required'=>'kategori tidak boleh kosong',

        ]
        
        );

        Pengeluaran::create([
            // 'nis' => $request->nis,
            'nama' => $request->nama,
            'tanggal' => $request->tanggal,
            // 'jns' => $request->jns,
            'kategori' => $request->kategori,
            'uang' => $request->uang,
            'ket'=> $request->ket,
        ]);
        
        return redirect()->route('pengeluaran');

    }
    public function edit($id){
        $data['pengeluaran'] = Pengeluaran::find($id);
        $data['action'] = url('pengeluaran/update').'/'.$data['pengeluaran']->id;
        $data['tombol'] = "Update";
        $kateg=Kategori::all();
        $namas=Siswa::all();
        return view('kas.create-pengeluaran',compact('namas','kateg'),$data);
        
    }
    public function update(Request $request){

        $this->validate($request,[
            'nama'=>'required|min:3 ',
            // 'jns'=>'required',
            'ket'=>'required',
            'kategori'=>'required',

        ],[
            'nama.required'=>'nama tidak boleh kosong',
            // 'jns.required'=>'jns tidak boleh kosong',
            'ket.required'=>'keterangan tidak boleh kosong',
            'kategori.required'=>'ketegori tidak boleh kosong',
            'nama.min'=>'nama harus lebih dari 3 karakter',

        ]
        
        );

        Pengeluaran::where('id',$request->id)->update([
            // 'nis' => $request->nis,
            'nama' => $request->nama,
            'tanggal' => $request->tanggal,
            // 'jns' => $rppengeequest->jns,
            'uang' => $request->uang,
            'ket' => $request->ket,
        ]);
        // return redirect ('kas.index-pengeluaran');
        return redirect()->route('pengeluaran');

    }
    public function destroy($id){
        Pengeluaran::where('id',$id)->delete();

        // return redirect('kas.index-pengeluaran');
        return redirect()->route('pengeluaran');

    }
    
}
