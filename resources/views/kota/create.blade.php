@extends('layouts.utama')

@section('title', 'Tambah Kota')

@section('container')
	<div class="container">
		<div class="row">
			<div class="col-8">
				<h1 class="mt-3">Tambah Kota</h1>
				<form method="post" action="/kota">
					@csrf
					<div class="form-group">
						<label for="namakota">Kota</label>
						<input type="text" class="form-control @error('namakota') is-invalid @enderror" id="namakota" placeholder="Masukan Kota" name="namakota" value="{{old('namakota')}}">
						@error('namakota')
							<div class="invalid-feedback">{{$message}}</div>
						@enderror
					</div>

					<div class="form-group">
						<label for="namapemimpin">Pemimpin</label>
						<input type="text" class="form-control @error('namapemimpin') is-invalid @enderror" id="namapemimpin" placeholder="Masukan Pemimpin" name="namapemimpin" value="{{old('namapemimpin')}}">
						@error('namapemimpin')
							<div class="invalid-feedback">{{$message}}</div>
						@enderror
					</div>

					<div class="form-group">
						<label for="jmlpenduduk">Jumlah Penduduk (jiwa)</label>
						<input type="text" class="form-control" id="jmlpenduduk" placeholder="Masukan Jumlah Penduduk" name="jmlpenduduk" value="{{old('jmlpenduduk')}}">
					</div>

					<div class="form-group">
						<label for="luaswilayah">Luas Wilayah (km2)</label>
						<input type="text" class="form-control @error('luaswilayah') is-invalid @enderror" id="luaswilayah" placeholder="Masukan Luas Wilayah" name="luaswilayah" value="{{old('luaswilayah')}}">
						@error('luaswilayah')
							<div class="invalid-feedback">{{$message}}</div>
						@enderror
					</div>

					<div class="form-group">
						<label for="jeniskota">Jenis Kota</label>
						<input type="text" class="form-control" id="jeniskota" placeholder="Masukan Jenis Kota" name="jeniskota" value="{{old('jeniskota')}}">
					</div>

					<button type="submit" class="btn btn-primary">Tambah Data</button>
				</form>
			</div>
		</div>
	</div>
@endsection
