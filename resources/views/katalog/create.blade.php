<H1>CREATE KATALOG</H1>
<form action="/katalog/store" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="namaproduk" placeholder="Nama Produk" ><br>
    <input type="file" name="foto" placeholder="Foto" ><br>
    <input type="text" name="harga" placeholder="Harga" ><br>
    <input type="submit" name="submit" value="Save">
</form>
