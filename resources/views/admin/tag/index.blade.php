@extends('template_backend.home')
@section('sub-judul','Tag')
@section('content')

@if(Session::has('success'))
	<div class="alert alert-success" role="alert">
      {{Session('success')}}
    </div>
@endif
<br>
	
	<a href="{{route('tag.create')}}" class="btn btn-primary btn-sm">Tambah Tag</a>
	<br><br>

	<table class="table table-hover table-sm table-bordered">
		<thead>
			<th>No</th>
			<th>Nama Tag</th>
			<th>Aksi</th>
		</thead>
		<tbody>
			@foreach($tag as $result => $hasil)
			<tr>
				<td>{{$result + $tag->firstitem()}}</td>
				<td>{{$hasil->name}}</td>
				<td>
					<form action="{{route('tag.destroy', $hasil->id)}}" method="post">
						@csrf
						@method('delete')
					<a href="{{route('tag.edit', $hasil->id)}}" class="btn btn-warning btn-sm">Edit</a>
					<button type="submit" class="btn btn-danger btn-sm">Delete</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	{{ $tag->links() }}

@endsection