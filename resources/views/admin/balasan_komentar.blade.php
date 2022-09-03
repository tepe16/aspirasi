@extends('admin.header')

@section('content')

 <!-- /.row -->
 <div class="row">
     <div class="col-lg-9">
         <div class="panel panel-default">
             <div class="panel-heading">
                 Form Balasan Komentar
             </div>
             <div class="panel-body">
                 <div class="row">
                     <div class="col-lg-12">
                         <form role="form" action="{{ route('balasan.update',  $komentar_aspirasi->id_komentar_aspirasi)}}" method="POST" enctype="multipart/form-data">
                             @csrf
                             @method('PUT')
                             <div class="form-group">
                                 <label>Keterangan Komentar</label>
                                 <textarea class="form-control" type="text" name="keterangan_balasan" placeholder="Masukan Keterangan Balasan"></textarea>
                                 <input class="form-control" type="hidden" name="id_komentar_aspirasi" value="{{ $komentar_aspirasi->id_komentar_aspirasi }}"  required/>
                                 <input class="form-control" type="hidden" name="waktu" value="{{now()->format('j F Y')}}" placeholder="Masukan Nama Berita" required/>
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
