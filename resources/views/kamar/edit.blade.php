@extends('layout.app')

@section('content')

<h3>Edit Kamar</h3>

<form action="/kamar/{{$kamar->id}}" method="POST">

@csrf
@method('PUT')

<div class="mb-3">

<label>Nomor Kamar</label>

<input type="text" name="nomor_kamar" value="{{$kamar->nomor_kamar}}" class="form-control">

</div>

<div class="mb-3">

<label>Harga</label>

<input type="number" name="harga" value="{{$kamar->harga}}" class="form-control">

</div>

<div class="mb-3">

<label>Status</label>

<select name="status" class="form-control">

<option value="Kosong" {{$kamar->status=='Kosong'?'selected':''}}>Kosong</option>

<option value="Terisi" {{$kamar->status=='Terisi'?'selected':''}}>Terisi</option>

</select>

</div>

<button class="btn btn-success">Update</button>

<a href="/kamar" class="btn btn-secondary">Kembali</a>

</form>

@endsection