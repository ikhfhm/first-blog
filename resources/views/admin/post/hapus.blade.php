@extends('template_backend.home')
@section('sub-judul','Trash Post')
@section('content')

@if(Session::has('success'))
	<div class="alert alert-success" role="alert">
      {{Session('success')}}
    </div>
@endif
<br>
	
	<table class="table table-hover table-sm table-bordered">
		<thead>
			<th>No</th>
			<th>Judul</th>
			<th>Kategori</th>
			<th>Tag</th>
			<th>Thumbnail</th>
			<th>Aksi</th>
		</thead>
		<tbody>
			@foreach($post as $result => $hasil)
			<tr>
				<td>{{$result + $post->firstitem()}}</td>
				<td>{{$hasil->judul}}</td>
				<td>{{$hasil->category->name}}</td>
				<td>@foreach($hasil->tags as $tag)
					{{$tag->name}} | 
					@endforeach
				</td>
				<td><img src="{{asset($hasil->thumbnail)}}" class="img-fluid" style="width:100px"></td>
				<td>
					<form action="{{route('post.kill', $hasil->id)}}" method="post">
						@csrf
						@method('delete')
					<a href="{{route('post.restore', $hasil->id)}}" class="btn btn-info btn-sm">Restore</a>
					<button type="submit" class="btn btn-danger btn-sm">Delete</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	{{ $post->links() }}

@endsection