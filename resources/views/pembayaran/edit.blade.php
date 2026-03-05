@extends('layout.app')

@section('content')

<h3>Edit Pembayaran</h3>

<form action="{{ route('pembayaran.update', $pembayaran->id) }}" method="POST">

@csrf
@method('PUT')

<div class="mb-3">
<label>Nama Penyewa</label>

<select name="id_penyewa" class="form-control">

@foreach($penyewa as $p)

<option value="{{ $p->id }}"
@if($p->id == $pembayaran->id_penyewa) selected @endif>

{{ $p->nama }}

</option>

@endforeach

</select>
</div>

<div class="mb-3">
<label>Tanggal Bayar</label>

<input type="date"
name="tanggal_bayar"
class="form-control"
value="{{ $pembayaran->tanggal_bayar }}">
</div>

<div class="mb-3">
<label>Jumlah Bayar</label>

<input type="number"
name="jumlah_bayar"
class="form-control"
value="{{ $pembayaran->jumlah_bayar }}">
</div>

<div class="mb-3">
<label>Metode Pembayaran</label>

<select name="metode" class="form-control">

<option value="Cash"
@if($pembayaran->metode == "Cash") selected @endif>
Cash
</option>

<option value="Transfer"
@if($pembayaran->metode == "Transfer") selected @endif>
Transfer
</option>

</select>

</div>

<button type="submit" class="btn btn-primary">
Update
</button>

<a href="{{ route('pembayaran.index') }}" class="btn btn-secondary">
Kembali
</a>

</form>

@endsection