@extends('home')

@section('main')

<div class="row">
		<div class="col-md-8 offset-sm-2">
			<form action="{{ url("/article/{$article->id}") }}" method="post">
				@method('PATCH')
				@csrf
				<div class="form-group">
					<label for="judul">Judul:</label>
					<input value="{{ $article->judul }}" class="form-control" type="text" name="judul">
				</div>
				<div class="form-group">
					<label for="url_article">url artikel:</label>
					<input value="{{ $article->url_artikel }}" class="form-control" type="text" name="url_artikel">
				</div>
				<div class="form-group">
					<label for="permalink">permalink:</label>
					<input value="{{ $article->permalink }}" class="form-control" type="text" name="permalink">
				</div>
				<div class="form-group">
					<label for="isi_article">isi artikel:</label>
					<textarea class="form-control" name="isi_artikel">{{ $article->isi_article }}</textarea>
				</div>
				<div class="form-group">
					<label for="penulis">penulis</label>
					<input value="{{ $article->penulis }}" type="text" name="penulis" class="form-control" id="penulis">
				</div>
				<div class="form-group">
					<label for="gambar">gambar</label>
					<input value="{{ $article->gambar }}" class="form-control" type="date" name="tanggal_terbit">
				</div>
				<button type="submit" class="btn btn-primary">Edit Data</button>
			</form>
		</div>
	</div>

@endsection