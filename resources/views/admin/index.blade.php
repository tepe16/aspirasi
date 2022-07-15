
@extends('admin.layout')

@section('content')
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        @if(session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
        @endif
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <div class="login-panel panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><center>LOGIN ADMIN ASPIRASI MAHASISWA</center></h3>
            </div>
            <div class="panel-body">
                <form role="form" action="{{ route('login.action') }}" method="POST">
                   @csrf
                    <fieldset>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Masukan Username" name="username" value="{{ old('username') }}" >
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Masukan Password" name="password" type="password" >
                        </div>
                        <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
