<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['kategori'] = Kategori::all();
        return view('kategori.index',$data);
    }
    public function create () 
    {
        $data =[
            'action' => url('kategori/store'),
            'tombol' => 'SIMPAN',
            'kategori' => (object)[
                // 'nis'=>'',
                'kategori'=>'',
            ]
            ];
            //  $kateg=Kategori::all();
            return view('kategori.create', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'kategori'=>'required|min:3 ', 
        ],[
            'kategori.required'=>'kategori tidak boleh kosong',
        ] 
        );

        Kategori::create([
            // 'nis' => $request->nis,
            'kategori' => $request->kategori,
        ]);
        // return redirect ('kategori');
        return redirect()->route('kategori');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
  

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data['kategori'] = Kategori::find($id);
        $data['action'] = url('kategori/update').'/'.$data['kategori']->id;
        $data['tombol'] = "Update";
        $kateg=Kategori::all();
        return view('kategori.create',compact('kateg'),$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update (Request $request)
    {
        //

        $this->validate($request,[
            'kategori'=>'required|min:3 ', 
        ],[
            'kategori.required'=>'kategori tidak boleh kosong',
        ] 
        );

        Kategori::where('id',$request->id)->update([
            // 'nis' => $request->nis,
            'kategori' => $request->kategori,
        ]);
        // return redirect ('kategori');
        return redirect()->route('kategori');

    }

    public function destroy($id){
        Kategori::where('id',$id)->delete();

        // return redirect('kategori');
        return redirect()->route('kategori');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
}
