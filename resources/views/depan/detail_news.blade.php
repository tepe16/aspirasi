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
			<div class="col-lg-12">
				<div class="single-article-section">
                    @foreach($data as $a)
					<div class="single-article-text">
                        <img src="/images/{{ $a->foto }}" height="500" width="100%">
						<p class="blog-meta">
							<span class="author"><i class="fas fa-user"></i> Admin</span>
							<span class="date"><i class="fas fa-calendar"></i> {{ $a->tgl_berita}}</span>
						</p>
						<h2>{{$a->nama_berita}}</h2>
						<p>{{$a->ket_berita}}</p>
					</div>

					<div class="comments-list-wrap">
						<h3 class="comment-count-title">Komentar Aspirasi</h3>
						<div class="comment-list">

							<div class="single-comment-body">
								<div class="comment-user-avater">
									<img src="assets/img/avaters/avatar1.png" alt="">
								</div>
								<div class="comment-text-body">
									<h4>{{$a->nama_mahasiswa}} <span class="comment-date">{{$a->tgl_aspirasi}}</span></h4>
									<p>{{$a->ket_aspirasi}}</p>
								</div>
							</div>

						</div>
					</div>
                    @endforeach
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
                        <form action="{{route ('depan.store')}}" method="post">
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
