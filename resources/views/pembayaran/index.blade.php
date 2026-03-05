@extends('layout.app')

@section('content')

<h3>Data Pembayaran</h3>

<a href="/pembayaran/create" class="btn btn-primary mb-3">Tambah Pembayaran</a>

<table class="table table-bordered">

<tr>
<th>No</th>
<th>ID Penyewa</th>
<th>Bulan</th>
<th>Tanggal</th>
<th>Status</th>
</tr>

@foreach($pembayaran as $p)

<tr>

<td>{{$loop->iteration}}</td>

<td>{{$p->penyewa_id}}</td>

<td>{{$p->bulan}}</td>

<td>{{$p->tanggal_bayar}}</td>

<td>{{$p->status}}</td>

</tr>

@endforeach

</table>

@endsection