@extends('admin.header')

@section('content')

 <!-- /.row -->
 <div class="row">
     <div class="col-lg-9">
         <div class="panel panel-default">
             <div class="panel-heading">
                 Form Tambah Berita
             </div>
             <div class="panel-body">
                 <div class="row">
                     <div class="col-lg-12">
                         <form role="form" action="{{ route('admins.store')}}" method="POST" enctype="multipart/form-data">
                             @csrf
                             <div class="form-group">
                                 <label>Nama Berita</label>
                                 <input class="form-control" type="text" name="nama_berita" placeholder="Masukan Nama Berita">
                                 <input class="form-control" type="hidden" name="tgl_berita" value="{{now()->format('j F Y')}}" placeholder="Masukan Nama Berita" required/>
                             </div>
                             <div class="form-group">
                                 <label>Keterangan Berita</label>
                                 <textarea class="form-control" type="text" name="ket_berita" placeholder="Masukan Keterangan berita"></textarea>
                             </div>
                             <div class="form-group">
                                 <label>Gambar Berita</label>
                                 <input class="form-control" type="file" name="foto" placeholder="Masukan Username">
                             </div>



                             <button type="submit" class="btn btn-default">Simpan</button>
                         </form>
                     </div>

                 </div>
                 <!-- /.row (nested) -->
             </div>
             <!-- /.panel-body -->
         </div>
         <!-- /.panel -->
     </div>
     <!-- /.col-lg-12 -->
 </div>
 <!-- /.row -->
@endsection
