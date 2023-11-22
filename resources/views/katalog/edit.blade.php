<H1>EDIT KATALOG</H1>
<form action="/katalog/{{ $katalogWhere->id }}" method="POST">
    @method('put')
    @csrf
    <input type="text" name="namaproduk" placeholder="Nama Produk" value={{ $katalogWhere->namaproduk }}><br>
    <input type="text" name="foto" placeholder="Foto" value={{ $katalogWhere->foto }} ><br>
    <input type="text" name="harga" placeholder="Harga" value={{ $katalogWhere->harga }} ><br>
    <input type="submit" name="submit" value="Update">
</form>