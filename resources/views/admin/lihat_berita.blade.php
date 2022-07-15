@extends('admin.header')

@section('content')

<!-- /.row -->
<div class="row">
     <div class="col-lg-12">
         <div class="panel panel-default">
             <div class="panel-heading">
                 Data Berita
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
                                 <th>Nama Berita</th>
                                 <th>Tanggal Berita</th>
                                 <th>Foto</th>
                                 <th>Keterangan Berita</th>
                                 <th>Action</th>
                             </tr>
                         </thead>
                         <tbody>
                         @foreach ($berita as $index => $a)

                             <tr class="odd gradeX">
                                 <td>{{ $index + 1 }}</td>
                                 <td>{{ $a->nama_berita }}</td>
                                 <td>{{ $a->tgl_berita }}</td>
                                 <td><img src="/images/{{ $a->foto }}" height="200" width="200" alt="" /></td>
                                 <td>{{ $a->ket_berita }}</td>
                                 <td>
                                    <form action="{{ route('admin.destroy',$a->id_berita) }}" method="POST">

                                        <a class="btn btn-primary" href="{{ route('admin.edit',$a->id_berita) }}">Edit</a>

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>

                                 </td>
                             </tr>
                        @endforeach
                         </tbody>
                     </table>
                     {!! $berita->links() !!}
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
