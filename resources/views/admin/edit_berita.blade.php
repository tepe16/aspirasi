@extends('admin.header')

@section('content')

 <!-- /.row -->
 <div class="row">
     <div class="col-lg-9">
         <div class="panel panel-default">
             <div class="panel-heading">
                 Form Edit Berita
             </div>
             <div class="panel-body">
                 <div class="row">
                     <div class="col-lg-12">
                          @if ($errors->any())
                             <div class="alert alert-danger">
                                 <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                 <ul>
                                     @foreach ($errors->all() as $error)
                                         <li>{{ $error }}</li>
                                     @endforeach
                                 </ul>
                             </div>
                         @endif
                         <form role="form" action="{{ route('admins.update', $berita->id_berita) }}" method="POST" enctype="multipart/form-data">
                             @csrf
                             @method('PUT')
                             <div class="form-group">
                                 <label>Nama Berita</label>
                                 <input class="form-control" type="text" name="nama_berita" value="{{ $berita->nama_berita }}" placeholder="Masukan Nama Berita">
                                 <input class="form-control" type="hidden" name="tgl_berita" value="{{now()->format('j F Y')}}" placeholder="Masukan Nama Berita" required/>
                             </div>
                             <div class="form-group">
                                 <label>Keterangan Berita</label>
                                 <textarea class="form-control" type="text" name="ket_berita"  placeholder="Masukan Keterangan berita">{{ $berita->ket_berita }}</textarea>
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
