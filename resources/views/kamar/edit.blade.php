<h2>Edit Kamar</h2>

<form action="{{ route('kamar.update',$kamar->id) }}" method="POST">

@csrf
@method('PUT')

Nomor Kamar
<input type="text" name="nomor_kamar" value="{{ $kamar->nomor_kamar }}"><br><br>

Tipe Kamar
<input type="text" name="tipe_kamar" value="{{ $kamar->tipe_kamar }}"><br><br>

Harga
<input type="number" name="harga" value="{{ $kamar->harga }}"><br><br>

Status
<select name="status">
<option value="kosong" {{ $kamar->status == 'kosong' ? 'selected' : '' }}>Kosong</option>
<option value="terisi" {{ $kamar->status == 'terisi' ? 'selected' : '' }}>Terisi</option>
</select>

<br><br>

<button type="submit">Update</button>

</form>