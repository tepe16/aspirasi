<?php

namespace App\Http\Controllers;
use App\Models\Komentar;
use App\Models\News;
use DB; //import fungsi query builder
use Illuminate\Http\Request;

class BalasanKomentarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.balasan_komentar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Komentar $komentar,$id)
    {
        
        
        $data=DB::table('balasan_komentar')
                      ->join('komentar_aspirasi', 'balasan_komentar.id_komentar_aspirasi', '=', 'komentar_aspirasi.id_komentar_aspirasi')
                      ->where('balasan_komentar.id_komentar_aspirasi', $id)
                      ->get();


        return view('admin.detail_balasan_komentar')->with('data', $data);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $komentar_aspirasi = News::findOrFail($id);
        return view('admin.balasan_komentar', ['komentar_aspirasi' => $komentar_aspirasi]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_komentar_aspirasi' => 'required',
            'keterangan_balasan' => 'required',
            'waktu' => 'required',
        ]);
        $id=$request->id_komentar_aspirasi;
        Komentar::create($request->all());
        return redirect()->route('balasan.show', $id)
                        ->with('success','Balasan Komentar created successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $komentar = Komentar::find($id)->delete();

        return redirect()->route('balasan.show',$id)
                        ->with('success','Berita deleted successfully');
    }
}
