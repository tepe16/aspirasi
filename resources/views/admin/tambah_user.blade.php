@extends('admin.header')

@section('content')

 <!-- /.row -->
 <div class="row">
     <div class="col-lg-9">
         <div class="panel panel-default">
             <div class="panel-heading">
                 Form Tambah User
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
                         <form role="form" action="{{ route('proses_tambah_user') }}" method="post">
                             @csrf
                             <div class="form-group">
                                 <label>Nama User</label>
                                 <input class="form-control" type="text" name="name" placeholder="Masukan Nama">
                             </div>
                             <div class="form-group">
                                 <label>Username</label>
                                 <input class="form-control" type="text" name="username" placeholder="Masukan Username">
                             </div>
                             <div class="form-group">
                                 <label>Password</label>
                                 <input class="form-control" type="password" name="password" placeholder="Masukan Password">
                                 <i class="bi bi-eye-slash" id="togglePassword"></i>
                             </div>
                             <div class="form-group">
                                 <label>Konfirmasi Password</label>
                                 <input class="form-control" type="password" name="konfirm_password" placeholder="Masukan Konfirmasi Password">
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
