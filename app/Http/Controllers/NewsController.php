<?php

namespace App\Http\Controllers;
use App\Models\Berita;
use App\Models\News;
use DB; //import fungsi query builder
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita=Berita::orderBy('id_berita','desc')->paginate(10);
        return view('depan.lihat_news',compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $id=$request->id_berita;

        News::create($request->all());
        return redirect()->route('depan.show',$id)
                        ->with('success','Komentar Aspirasi created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news ,$id)
    {

        $data=DB::table('komentar_aspirasi')
                      ->rightjoin('berita', 'komentar_aspirasi.id_berita', '=', 'berita.id_berita')
                      ->where('berita.id_berita', $id)
                      ->get();


        return view('depan.detail_news')->with('data', $data);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //
    }
}
