<form action="{{ route('barang.store') }}" method="post">
    @csrf 
    NAMA: <input type="text" name="nama">
    HARGA: <input type="text" name="harga">
    <button type="submit">Simpan</button>
</form>