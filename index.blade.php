<!DOCTYPE html>
<html>
<head>
    <title>Daftar Produk</title>
</head>
<style>
    /* Reset beberapa default styling */
body,
html {
  margin: 0;
  padding: 0;
}

/* Menata judul h1 */
h1 {
  text-align: center;
  margin-top: 20px;
}

/* Menata link "Buat Produk" */
a {
  display: block;
  width: 100px;
  text-align: center;
  margin: 20px auto;
  padding: 10px;
  text-decoration: none;
  color: white;
  background-color: #007bff;
  border-radius: 5px;
}

a:hover {
  background-color: #0056b3;
}

/* Menata tabel */
table {
  width: 80%;
  margin: 0 auto;
  border-collapse: collapse;
}

/* Menata header tabel */
th {
  background-color: #f2f2f2;
  padding: 8px;
  text-align: left;
}

/* Menata baris data */
td {
  padding: 8px;
}

/* Menata link aksi pada tabel */
td a {
  display: inline-block;
  margin-right: 5px;
  text-decoration: none;
  padding: 5px 10px;
  border-radius: 3px;
  color: #fff;
}

td a:hover {
  opacity: 0.7;
}

/* Menata tombol hapus */
button {
  padding: 5px 10px;
  border: none;
  border-radius: 3px;
  background-color: #dc3545;
  color: white;
  cursor: pointer;
}

button:hover {
  opacity: 0.7;
}

</style>
<body>
    <h1>Daftar Produk</h1>

    <a href="{{ route('admin.products.create') }}">Buat Produk</a>

    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->nama }}</td>
                <td>{{ $product->deskripsi }}</td>
                <td>{{ $product->harga }}</td>
                <td>
                    <a href="{{ route('products.edit', $product->id) }}">Edit</a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
