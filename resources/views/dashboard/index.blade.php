@extends('layout.app')

@section('content')

<h3>Dashboard</h3>

<div class="row">

<div class="col-md-6">
<div class="card p-3">
Jumlah Kamar
<h2>{{$jumlahKamar}}</h2>
</div>
</div>

<div class="col-md-6">
<div class="card p-3">
Jumlah Penyewa
<h2>{{$jumlahPenyewa}}</h2>
</div>
</div>

</div>

@endsection