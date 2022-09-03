<?php

namespace App\Http\Controllers;
use App\Models\Komentar;
use App\Models\News;
use DB; //import fungsi query builder
use Illuminate\Http\Request;

class BalasanKomentarDepanController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Komentar $komentar,$id)
    {
        $data_raw =Komentar::where('id_komentar_aspirasi',$id);
        $total_raw = $data_raw->count();
        if ($total_raw > 0){
        $data=DB::table('balasan_komentar')
                      ->join('komentar_aspirasi', 'balasan_komentar.id_komentar_aspirasi', '=', 'komentar_aspirasi.id_komentar_aspirasi')
                      ->where('balasan_komentar.id_komentar_aspirasi', $id)
                      ->get();


        return view('depan.lihat_balasan')->with('data', $data);
        } else {
            $balasan_not=DB::table('komentar_aspirasi')
                      ->where('id_komentar_aspirasi', $id)
                      ->get();


        return view('depan.lihat_balasan_not')->with('balasan_not', $balasan_not);
        }
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
        //
    }
}
