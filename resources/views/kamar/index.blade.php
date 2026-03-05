@extends('layout.app')

@section('content')

<h3>Data Kamar</h3>

<a href="/kamar/create" class="btn btn-primary mb-3">Tambah Kamar</a>

<table class="table table-bordered">

<tr>
<th>No</th>
<th>Nomor Kamar</th>
<th>Harga</th>
<th>Status</th>
<th>Aksi</th>
</tr>

@foreach($kamar as $k)

<tr>

<td>{{$loop->iteration}}</td>

<td>{{$k->nomor_kamar}}</td>

<td>{{$k->harga}}</td>

<td>{{$k->status}}</td>

<td>

<a href="/kamar/{{$k->id}}/edit" class="btn btn-warning">Edit</a>

<form action="/kamar/{{$k->id}}" method="POST" style="display:inline">
@csrf
@method('DELETE')

<button class="btn btn-danger">Hapus</button>

</form>

</td>

</tr>

@endforeach

</table>

@endsection