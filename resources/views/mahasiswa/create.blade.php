@extends('layouts.main')

@section('title', 'Tambah Mahasiswa')

@section('container')
	<div class="container">
		<div class="row">
			<div class="col-10">
				<h1 class="mt-3">Tambah Mahasiswa</h1>
				<form method="post" action="/mahasiswa">
					@csrf
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" class="form-control" id="nama" placeholder="Masukan Nama" name="nama" required="" value="{{old('nama')}}">
					</div>

					<div class="form-group">
						<label for="nim">NIM</label>
						<input type="text" class="form-control" id="nim" placeholder="Masukan NIM" name="nim" required="" maxlength="9" value="{{old('nim')}}">
					</div>

					<div class="form-group">
						<label for="email">Email</label>
						<input type="text" class="form-control" id="email" placeholder="Masukan Email" name="email" value="{{old('email')}}">
					</div>

					<div class="form-group">
						<label for="jurusan">Jurusan</label>
						<input type="text" class="form-control" id="jurusan" placeholder="Masukan Jurusan" name="jurusan" value="{{old('jurusan')}}">
					</div>

					<button type="submit" class="btn btn-primary">Tambah Data</button>
				</form>
			</div>
		</div>
	</div>
@endsection
