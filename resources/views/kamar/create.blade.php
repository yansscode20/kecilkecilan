@extends('layout.app')

@section('content')

<h3>Keluhan Penyewa</h3>

<a href="/keluhan/create" class="btn btn-primary mb-3">Tambah Keluhan</a>

<table class="table table-bordered">

<tr>
<th>No</th>
<th>ID Penyewa</th>
<th>Keluhan</th>
<th>Status</th>
</tr>

@foreach($keluhan as $k)

<tr>

<td>{{$loop->iteration}}</td>

<td>{{$k->penyewa_id}}</td>

<td>{{$k->isi_keluhan}}</td>

<td>{{$k->status}}</td>

</tr>

@endforeach

</table>

@endsection