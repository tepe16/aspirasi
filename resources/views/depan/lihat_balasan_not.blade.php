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
                   				
					
					<div class="comments-list-wrap">
						<h3 class="comment-count-title">Detail Balasan Komentar Aspirasi</h3>
						<div class="comment-list">

							<div class="single-comment-body">
								<div class="comment-user-avater">
									<img src="assets/img/avaters/avatar1.png" alt="">
								</div>
								
								<div class="comment-text-body">
                                

								
									BELUM ADA BALASAN !!!!
                                    </br>
									@foreach($balasan_not as $a)
                                   
									@endforeach
									<a href="{{ route('depan.show', $a->id_berita) }}"><button type="button" class="btn btn-danger">KEMBALI</button></a>
								</div>

							
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end single article section -->
@endsection
