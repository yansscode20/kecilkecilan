@extends('layout.app')

@section('content')

<h3>Tambah Penyewa</h3>

<form action="/penyewa" method="POST">

@csrf

Nama

<input type="text" name="nama" class="form-control">

<br>

No HP

<input type="text" name="no_hp" class="form-control">

<br>

<button class="btn btn-primary">Simpan</button>

</form>

@endsection