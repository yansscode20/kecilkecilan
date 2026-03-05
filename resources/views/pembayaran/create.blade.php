<h2>Tambah Pembayaran</h2>

<form action="{{ route('pembayaran.store') }}" method="POST">

@csrf

Nama Penyewa

<select name="id_penyewa">

@foreach($penyewa as $p)

<option value="{{ $p->id }}">
{{ $p->nama }}
</option>

@endforeach

</select>

<br><br>

Tanggal Bayar
<input type="date" name="tanggal_bayar">

<br><br>

Jumlah Bayar
<input type="number" name="jumlah_bayar">

<br><br>

Metode Pembayaran

<select name="metode">

<option value="Cash">Cash</option>
<option value="Transfer">Transfer</option>

</select>

<br><br>

<button type="submit">
Simpan
</button>

</form>