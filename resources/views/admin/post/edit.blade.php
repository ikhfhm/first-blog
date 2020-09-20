@extends('template_backend.home')
@section('sub-judul','Edit Post')
@section('content')

@if(count($errors)>0)
  @foreach($errors->all() as $error)
    <div class="alert alert-danger" role="alert">
      {{$error}}
    </div>
  @endforeach
@endif

<form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label>Judul</label>
    <input type="text" class="form-control" name="judul" value="{{$post->judul}}">
  </div>
  <div class="form-group">
    <label>Kategori</label>
    <select class="form-control" name="category_id">
      <option value="" holder>Pilih Kategori</option>
      @foreach($category as $result)
      <option value="{{$result->id}}"
        @if($post->category_id == $result->id)
          selected
        @endif
        >{{$result->name}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label>Konten</label>
    <textarea class="form-control" name="content">{{$post->content}}</textarea>
  </div>
  <div class="form-group">
    <label>Pilih Tag</label>
    <select class="form-control select2" multiple="" name="tags[]">
      @foreach($tags as $tag)
      <option value="{{$tag->id}}"
      @foreach($post->tags as $value)
        @if($tag->id == $value->id)
        selected
        @endif
      @endforeach
        >{{$tag->name}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label>Thumbnail</label>
    <input type="file" class="form-control" name="thumbnail">
  </div>
  <div class="form-group">
    <button class="btn btn-primary">Simpan Post</button>
  </div>
</form>

@endsection