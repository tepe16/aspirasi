@extends('admin.header')

@section('content')

<!-- /.row -->
<div class="row">
     <div class="col-lg-12">
         <div class="panel panel-default">
             <div class="panel-heading">
                 Data Masukan Aspirasi
             </div>
             <!-- /.panel-heading -->
             <div class="panel-body">
                 <div class="table-responsive">
                     @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                     <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                         <thead>
                             <tr>
                                 <th>No</th>
                                 <th>Nama Mahasiswa</th>
                                 <th>NIM</th>
                                 <th>Tanggal Aspirasi</th>
                                 <th>Keterangan Aspirasi</th>
                                 <th>Action</th>
                             </tr>
                         </thead>
                         <tbody>
                         @foreach ($news as $index => $a)

                             <tr class="odd gradeX">
                                 <td>{{ $index + 1 }}</td>
                                 <td>{{ $a->nama_mahasiswa }}</td>
                                 <td>{{ $a->nim }}</td>
                                 <td>{{ $a->tgl_aspirasi }}</td>
                                 <td>{{ $a->ket_aspirasi }}</td>
                                 <td>
                                    <form action="{{ route('masukan.destroy',$a->id_komentar_aspirasi) }}" method="POST">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>

                                 </td>
                             </tr>
                        @endforeach
                         </tbody>
                     </table>

                 </div>

             </div>
             <!-- /.panel-body -->
         </div>
         <!-- /.panel -->
     </div>
     <!-- /.col-lg-12 -->
 </div>
 <!-- /.row -->
 @endsection
