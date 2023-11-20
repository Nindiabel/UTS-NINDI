<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk Baru - Admin</title>
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

/* Menata label dan input */
form {
  width: 50%;
  margin: 20px auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
}

input[type="text"],
input[type="number"],
textarea {
  width: calc(100% - 12px);
  padding: 8px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

textarea {
  height: 100px;
}

/* Menata tombol */
button {
  padding: 8px 15px;
  border: none;
  border-radius: 3px;
  background-color: #007bff;
  color: white;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

</style>
<body>
    <h1>Tambah Produk Baru</h1>

    <form action="{{ route('admin.products.store') }}" method="post">
        @csrf

        <label for="nama">Nama Produk:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="deskripsi">Deskripsi:</label><br>
        <textarea id="deskripsi" name="deskripsi" required></textarea><br><br>

        <label for="harga">Harga:</label><br>
        <input type="number" id="harga" name="harga" required><br><br>

        <button type="submit">Tambah Produk</button>
    </form>
</body>
</html>
