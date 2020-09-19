@extends('template_backend.home')
@section('content')
<h1>INI ADALAH CATEGORY</h1>

	<table class="table table-striped table-hover table-sm table-bordered">
		<thead>
			<th>No</th>
			<th>Nama Kategori</th>
			<th>Aksi</th>
		</thead>
		<tbody>
			@foreach($category as $result => $hasil)
			<tr>
				<td>{{$result + $category->firstitem()}}</td>
				<td>{{$hasil->name}}</td>
				<td><a href="" class="btn btn-warning btn-sm">Edit</a>
					<a href="" class="btn btn-danger btn-sm">Delete</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	{{ $category->links() }}

@endsection