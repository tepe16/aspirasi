@extends('admin.header')

@section('content')

<!-- /.row -->
<div class="row">
     <div class="col-lg-12">
         <div class="panel panel-default">
             <div class="panel-heading">
                 Data User
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
                                 <th>Username</th>
                                 <th>Nama Pengguna</th>
                                 <th>Action</th>
                             </tr>
                         </thead>
                         <tbody>
                         @foreach ($user as $index => $a)

                             <tr class="odd gradeX">
                                 <td>{{ $index + 1 }}</td>
                                 <td>{{ $a->username }}</td>
                                 <td>{{ $a->name }}</td>

                                 <td>
                                    <form action="{{ route('admin.destroy',$a->user_id) }}" method="POST">

                                        <a class="btn btn-primary" href="{{ route('admin.edit',$a->user_id) }}">Edit</a>

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>

                                 </td>
                             </tr>
                        @endforeach
                         </tbody>
                     </table>
                     {!! $user->links() !!}
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
