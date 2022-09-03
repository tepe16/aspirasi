<?php

namespace App\Http\Controllers;
use App\Models\News;
use Illuminate\Http\Request;
use DB; //import fungsi query builder
class MasukanAspirasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news=DB::table('komentar_aspirasi')
        ->get();


        return view('admin.lihat_masukan_aspirasi')->with('news', $news);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('depan.masukan_aspirasi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'id_berita' => 'required',
            'nim' => 'required',
            'nama_mahasiswa' => 'required',
            'tgl_aspirasi' => 'required',
            'ket_aspirasi' => 'required',

        ]);
        

        News::create($request->all());
        return redirect()->route('masukan.create')
                        ->with('success','Komentar Aspirasi created successfully.');
    }

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::find($id)->delete();

        return redirect()->route('masukan.index')
                        ->with('success','Masukan Komentar deleted successfully');
    }
}
