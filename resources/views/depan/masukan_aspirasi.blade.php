@extends('depan.header')

@section('content')
<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 text-center">
				<div class="breadcrumb-text">
					<p></p>
					<h1>MASUKAN ASPIRASI</h1>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end breadcrumb section -->
<!-- single article section -->
<div class="mt-150 mb-150">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="single-article-section">
                   
					<div class="comment-template">
						<h4>Masukan Aspirasi</h4>
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
                         @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <form action="{{route ('masukan.store')}}" method="POST">
                        @csrf
                        
							  <p>
								<input type="text" name="nama_mahasiswa" placeholder="Masukan Nama">
								<input type="text" name="nim" placeholder="Masukan NIM" name="">
                                
                                <input type="hidden" value ="0" name="id_berita">
                                
                                <input type="hidden" value="{{now()->format('j F Y')}}" name="tgl_aspirasi">
							</p>
							<p><textarea name="ket_aspirasi" id="comment" cols="30" rows="10" placeholder="Masukan Komentar Aspirasi"></textarea></p>
							<p><input type="submit" value="Submit"></p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end single article section -->
@endsection
