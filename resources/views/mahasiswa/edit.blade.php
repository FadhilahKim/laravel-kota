@extends('layouts.main')

@section('title', 'Ubah Data Mahasiswa')

@section('container')
	<div class="container">
		<div class="row">
			<div class="col-10">
				<h1 class="mt-3">Ubah Data Mahasiswa</h1>
				<form method="post" action="/mahasiswa/{{ $mahasiswa->id }}}">
					@method('patch')
					@csrf
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" class="form-control" id="nama" placeholder="Masukan Nama" name="nama" required="" value="{{ $mahasiswa->nama}}">
					</div>

					<div class="form-group">
						<label for="nim">NIM</label>
						<input type="text" class="form-control" id="nim" placeholder="Masukan NIM" name="nim" required="" maxlength="9" value="{{$mahasiswa->nim}}">
					</div>

					<div class="form-group">
						<label for="email">Email</label>
						<input type="text" class="form-control" id="email" placeholder="Masukan Email" name="email" value="{{$mahasiswa->email}}">
					</div>

					<div class="form-group">
						<label for="jurusan">Jurusan</label>
						<input type="text" class="form-control" id="jurusan" placeholder="Masukan Jurusan" name="jurusan" value="{{$mahasiswa->jurusan}}">
					</div>

					<button type="submit" class="btn btn-primary">Ubah Data</button>
				</form>
			</div>
		</div>
	</div>
@endsection
