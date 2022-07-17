@extends('depan.header')

@section('content')
<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 text-center">
				<div class="breadcrumb-text">
					<p></p>
					<h1>NEWS</h1>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end breadcrumb section -->
<!-- latest news -->
<div class="latest-news mt-150 mb-150">
	<div class="container">
		<div class="row">
        @foreach ($berita as $index => $a)
			<div class="col-lg-4 col-md-6">
				<div class="single-latest-news">
					<a href="{{ route('depan.show', $a->id_berita) }}"><img src="/images/{{ $a->foto }}" height="300" width="345"></a>
					<div class="news-text-box">
						<h3><a href="{{ route('depan.show', $a->id_berita) }}">{{$a->nama_berita}}</a></h3>
						<p class="blog-meta">
							<span class="author"><i class="fas fa-user"></i> Admin</span>
							<span class="date"><i class="fas fa-calendar"></i> {{$a->tgl_berita }}</span>
						</p>
						<a href="{{ route('depan.show', $a->id_berita) }}" class="read-more-btn">Detail Berita <i class="fas fa-angle-right"></i></a>
					</div>
				</div>
			</div>
        @endforeach
        </div>
	</div>
</div>
<!-- end latest news -->
@endsection
