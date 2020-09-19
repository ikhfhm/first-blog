@extends('template_backend.home')
@section('content')
<h1>INI ADALAH CATEGORY</h1>
@foreach($category as $result)
	<table class="table table-striped table-hover table-sm table-bordered">
		<thead>
			<th>No</th>
			<th>Nama Kategori</th>
			<th>Aksi</th>
		</thead>
		<tbody>
			<td></td>
			<td>{{$result->name}}</td>
			<td><a href="" class="btn btn-warning btn-sm">Edit</a>
				<a href="" class="btn btn-danger btn-sm">Delete</a>
			</td>
		</tbody>
	</table>
@endforeach
@endsection