
    <a href="/katalog/create">ADD KATALOG</a>
    <table border ='1'>
        <tr>
            <th>ID</th>
            <th>Nama Produk</th>
            <th>Foto</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        @foreach ($katalog as $k )
        <tr>
            <td>{{ $k->id }}</td>
            <td>{{ $k->namaproduk }}</td>
            <td>{{ $k->foto }}</td>
            <td>{{ $k->harga }}</td>
            <td>
                <a href="/katalog/{{ $k->id }}/edit">EDIT</a> 
                <form action="/katalog/{{ $k->id }}" method="POST">
                    @method('delete')
                    @csrf
                    <input type="submit" value='Delete'>
                </form>
            </td>
        </tr>
        @endforeach
