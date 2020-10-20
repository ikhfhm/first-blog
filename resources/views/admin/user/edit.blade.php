@extends('template_backend.home')
@section('sub-judul','Tambah User')
@section('content')

@if(count($errors)>0)
  @foreach($errors->all() as $error)
    <div class="alert alert-danger" role="alert">
      {{$error}}
    </div>
  @endforeach
@endif



<form action="{{route('user.update', $user->id)}}" method="post">
  @csrf
  @method('put')
  <div class="form-group">
    <label>Nama User</label>
    <input type="text" class="form-control" name="name" value="{{$user->name}}">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email" value="{{$user->email}}" readonly>
  </div>
  <div class="form-group">
    <label>Tipe User</label>
    <select class="form-control" name="tipe">
        <option value="" holder>Pilih Tipe User</option>
        <option value="1"
        @if($user->tipe == 1)
        selected
        @endif
        >Administrator</option>
        <option value="0"
        @if($user->tipe == 0)
        selected
        @endif
        >Author</option>
    </select>
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <div class="form-group">
    <label>Confirm Password</label>
    <input type="password" class="form-control" name="password_confirmation">
  </div>
  <div class="form-group">
    <button class="btn btn-primary">Update User</button>
  </div>
</form>

@endsection