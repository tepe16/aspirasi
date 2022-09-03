@extends('depan.header')

@section('content')
<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 text-center">
				<div class="breadcrumb-text">
					<p></p>
					<h1>DETAIL NEWS</h1>
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
		@foreach($data as $a)
       
		@endforeach
			<div class="col-lg-12">
				<div class="single-article-section">
                   				
					
					<div class="comments-list-wrap">
						<h3 class="comment-count-title">Detail Balasan Komentar Aspirasi</h3>
						<div class="comment-list">

							<div class="single-comment-body">
								<div class="comment-user-avater">
									<img src="assets/img/avaters/avatar1.png" alt="">
								</div>
								
								<div class="comment-text-body">
                                @foreach($data as $k)
                                @endforeach
									<h4>{{$k->ket_aspirasi}} <span class="comment-date">{{$k->tgl_aspirasi}}</span></h4>
                                    @foreach($data as $j)
									<p>{{$j->keterangan_balasan}}   <span class="comment-date">{{$j->tgl_aspirasi}}</span></p>
                                   
                                    @endforeach
                                    </br>
                                    <a href="{{ route('depan.show', $k->id_berita) }}"><button type="button" class="btn btn-danger">KEMBALI</button></a>
								</div>

								
							</div>

						</div>
					</div>

					<div class="comment-template">
						<!--h4>Masukan Aspirasi</h4-->
                        @if ($errors->any())
                             <!--div class="alert alert-danger">
                                 <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                 <ul>
                                     @foreach ($errors->all() as $error)
                                         <li>{{ $error }}</li>
                                     @endforeach
                                 </ul>
                             </div-->
                         @endif
                        <!--form action="{{route ('depan.store')}}" method="post">
                        @csrf
							  <p>
								<input type="text" name="nama_mahasiswa" placeholder="Masukan Nama">
								<input type="text" name="nim" placeholder="Masukan NIM" name="">
                                @foreach ($data as $b)
                                <input type="hidden" value ="{{ $b->id_berita}}" name="id_berita">
                                @endforeach
                                <input type="hidden" value="{{now()->format('j F Y')}}" name="tgl_aspirasi">
							</p>
							<p><textarea name="ket_aspirasi" id="comment" cols="30" rows="10" placeholder="Masukan Komentar Aspirasi"></textarea></p>
							<p><a href="" >Kembali</a></p>
						</form-->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end single article section -->
@endsection
