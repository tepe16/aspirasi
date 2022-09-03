@extends('admin.header')

@section('content')

<!-- /.row -->
<div class="row">
     <div class="col-lg-12">
         <div class="panel panel-default">
             <div class="panel-heading">
                 Data Balasan Komentar
             </div>
             <!-- /.panel-heading -->
             <div class="panel-body">
                 <div class="table-responsive">
                     <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                         <thead>
                             <tr>
                                 <th>Balasan Komentar</th>
                                 <th>Waktu Balasan</th>
                             </tr>
                         </thead>
                         <tbody>
                        
                            @foreach($data as $a)
                             <tr class="odd gradeX">
                                 <td>{{ $a->keterangan_balasan }}</td>
                                 <td>{{ $a->waktu }}</td>
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
