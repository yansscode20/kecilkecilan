@extends('layout.app')

@section('content')

<h3>Edit Penyewa</h3>

<form action="/penyewa/{{$penyewa->id}}" method="POST">

@csrf
@method('PUT')

<div class="mb-3">

<label>Nama</label>

<input type="text" name="nama" value="{{$penyewa->nama}}" class="form-control">

</div>

<div class="mb-3">

<label>No HP</label>

<input type="text" name="no_hp" value="{{$penyewa->no_hp}}" class="form-control">

</div>

<div class="mb-3">

<label>Tanggal Masuk</label>

<input type="date" name="tanggal_masuk" value="{{$penyewa->tanggal_masuk}}" class="form-control">

</div>

<button class="btn btn-success">Update</button>

<a href="/penyewa" class="btn btn-secondary">Kembali</a>

</form>

@endsection