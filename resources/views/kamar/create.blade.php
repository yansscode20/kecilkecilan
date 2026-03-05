<h2>Tambah Kamar</h2>

<form action="{{ route('kamar.store') }}" method="POST">
@csrf

Nomor Kamar
<input type="text" name="nomor_kamar"><br><br>

Tipe Kamar
<input type="text" name="tipe_kamar"><br><br>

Harga
<input type="number" name="harga"><br><br>

Status
<select name="status">
<option value="kosong">Kosong</option>
<option value="terisi">Terisi</option>
</select><br><br>

<button type="submit">Simpan</button>

</form>