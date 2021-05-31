@extends('layouts.utama')

@section('title', 'Daftar Kota')

@section('container')
	<div class="container">
		<div class="row">
			<div class="col-10">
				<h1 class="mt-3">Daftar Kota Di Seluruh Indonesia</h1>

				<a href="/kota/create" class="btn btn-primary my-3">Tambah Kota</a>

				@if (session('status'))
					<div class="alert alert-success">
						{{session('status')}}
					</div>
				@endif
				
				<table class="table">
					<thead class="thead-dark">
						<tr>
							<th scope="col">No</th>
							<th scope="col">Kota</th>
							<th scope="col">Pemimpin</th>
							<th scope="col">Jumlah Penduduk (jiwa)</th>
							<th scope="col">Luas Wilayah (km2)</th>
							<th scope="col">Jenis Kota</th>
							<th scope="col">Aksi</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($kota as $kt)
						<tr>
							<td scope="row">{{$loop->iteration}}</td>
							<td scope="row">{{$kt->namakota}}</td>
							<td scope="row">{{$kt->namapemimpin}}</td>
							<td scope="row">{{$kt->jmlpenduduk}}</td>
							<td scope="row">{{$kt->luaswilayah}}</td>
							<td scope="row">{{$kt->jeniskota}}</td>
							<td>
								<a href="kota/{{$kt->id}}/edit" class="btn btn-primary btn-sm">Edit</a>

								<form action="kota/{{$kt->id}}" method="post" class="d-inline">
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
