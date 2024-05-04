<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <!-- Tambahkan link CSS jika diperlukan -->
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
    <header>
        <!-- Tambahkan header sesuai kebutuhan -->
        <h1>Admin Page</h1>
    </header>
    <nav>
        <!-- Tambahkan navigasi atau menu admin -->
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="{{ url('/admin/create') }}">Tambah Produk</a></li>
            <li><a href="{{ url('/admin') }}">Kembali ke Beranda</a></li>
        </ul>
    </nav>
    <main>
        <!-- Tambahkan konten utama admin -->
        <div class="content">
            <h2>Selamat datang di Halaman Admin</h2>
            <!-- Tampilkan daftar produk di sini -->
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Kondisi</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th> <!-- Kolom untuk tombol edit dan hapus -->
                    </tr>
                </thead>
                <tbody>
                    <!-- Tampilkan produk dari database di sini -->
                    @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->nama }}</td>
                        <td>{{ $product->harga }}</td>
                        <td>{{ $product->stok }}</td>
                        <td>{{ $product->kondisi }}</td>
                        <td>{{ $product->deskripsi }}</td>
                        <td>
                            <a href="{{ route('products.edit', $product->id) }}">Edit</a> |
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
    <footer>
        <!-- Tambahkan konten footer sesuai kebutuhan -->
    </footer>
</body>
</html>
