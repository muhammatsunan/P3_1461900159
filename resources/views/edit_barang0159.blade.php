<form action="{{ url ('barang/' . $barang->id) }}" method="post">
    @csrf 
    <input type="hidden" name="_method" value="patch">
    NAMA: <input type="text" name="nama" value="{{ $barang->nama }}">
    HARGA: <input type="text" name="harga" value="{{ $barang->harga }}">
    <button type="submit">Simpan</button>
</form>