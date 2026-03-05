@extends('layout.app')

@section('content')

<h3>Data Penyewa</h3>

<a href="/penyewa/create" class="btn btn-primary mb-3">Tambah Penyewa</a>

<table class="table table-bordered">

<tr>
<th>No</th>
<th>Nama</th>
<th>No HP</th>
<th>Aksi</th>
</tr>

@foreach($penyewa as $p)

<tr>

<td>{{$loop->iteration}}</td>

<td>{{$p->nama}}</td>

<td>{{$p->no_hp}}</td>

<td>

<a href="/penyewa/{{$p->id}}/edit" class="btn btn-warning">Edit</a>

<form action="/penyewa/{{$p->id}}" method="POST" style="display:inline">
@csrf
@method('DELETE')

<button class="btn btn-danger">Hapus</button>

</form>

</td>

</tr>

@endforeach

</table>

@endsection