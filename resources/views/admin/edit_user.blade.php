@extends('admin.header')

@section('content')

 <!-- /.row -->
 <div class="row">
     <div class="col-lg-9">
         <div class="panel panel-default">
             <div class="panel-heading">
                 Form Edit User
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
                         <form role="form" action="{{route ('admin.update', $user->user_id)}}" method="POST">
                             @csrf
                             @method('PUT')
                             <div class="form-group">
                                 <label>Username</label>
                                 <input class="form-control" type="text" name="username" value="{{ $user->username }}" >
                             </div>
                             <div class="form-group">
                                 <label>Name</label>
                                 <input class="form-control" type="text" name="name" value="{{ $user->name }}">
                             </div>
                             <div class="form-group">
                                 <label>Password</label>
                                 <input class="form-control" type="password" name="password">
                             </div>
                             <div class="form-group">
                                 <label>Konfirm Password</label>
                                 <input class="form-control" type="password" name="konfirm_password" >
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
