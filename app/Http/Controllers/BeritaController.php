<?php

namespace App\Http\Controllers;
use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita=Berita::orderBy('id_berita','desc')->paginate(10);
        return view('admin.lihat_berita',compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.tambah_berita');
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
            'nama_berita' => 'required',
            'foto' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'tgl_berita' => 'required',
            'ket_berita' => 'required',
        ]);
        $input = $request->all();

        if ($image = $request->file('foto')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['foto'] = "$profileImage";
        }

        Berita::create($input);

        return redirect()->route('admin.index')
                        ->with('success','Berita has been created successfully.');
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
    * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('admin.edit_berita', ['berita' => $berita]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

         $request->validate([
            'nama_berita' => 'required',
            'foto' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'tgl_berita' => 'required',
            'ket_berita' => 'required',
         ]);
        $berita = Berita::find($id);

     if($request->foto != ''){
          $path = 'images/';

          //code for remove old file
          if($berita->foto != ''  && $berita->foto != null){
               $foto_old = $path.$berita->foto;
               unlink($foto_old);
          }

          //upload new file
          $foto = $request->foto;
          $filename = $foto->getClientOriginalName();
          $foto->move($path, $filename);

          //for update in table
          $berita->update($request->all());
     }

        return redirect()->route('admin.index')
                        ->with('success','Berita has been update successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita = Berita::find($id)->delete();

        return redirect()->route('admin.index')
                        ->with('success','Berita deleted successfully');

    }
}
