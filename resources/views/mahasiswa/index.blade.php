@extends('layouts.main')

@section('title', 'Daftar Mahasiswa')

@section('container')
	<div class="container">
		<div class="row">
			<div class="col-10">
				<h1 class="mt-3">Halaman Mahasiswa</h1>

				<a href="/mahasiswa/create" class="btn btn-primary my-1">Tambah Data</a>

				@if (session('status'))
				<div class="alert alert-success">
					{{session('status')}}
				</div>
				@endif

				<table class="table">
					<thead class="thead-dark">
						<tr>
							<th scope="col">No</th>
							<th scope="col">Nama</th>
							<th scope="col">NIM</th>
							<th scope="col">Email</th>
							<th scope="col">Jurusan</th>
							<th scope="col">Aksi</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($mahasiswa as $mhs)
						<tr>
							<td scope="row">{{$loop->iteration}}</td>
							<td scope="row">{{$mhs->nama}}</td>
							<td scope="row">{{$mhs->nim}}</td>
							<td scope="row">{{$mhs->email}}</td>
							<td scope="row">{{$mhs->jurusan}}</td>
							<td>
								<a href="mahasiswa/{{$mhs->id}}/edit" class="btn btn-primary btn-sm">Edit</a>

								<form action="mahasiswa/{{$mhs->id}}" method="post" class="d-inline">
									@method('delete')
									@csrf
									<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin data akan dihapus?')">Delete
									</button>
								</form>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection
