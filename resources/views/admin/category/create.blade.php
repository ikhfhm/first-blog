@extends('template_backend.home')
@section('sub-judul','Tambah Kategori')
@section('content')

<form action="{{route('category.store')}}" method="post">
  @csrf
  <div class="form-group">
    <label>Kategori</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="form-group">
    <button class="btn btn-primary">Simpan Kategori</button>
  </div>
</form>

@endsection