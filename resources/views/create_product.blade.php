<!-- resources/views/create_product.blade.php -->
<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <input type="text" name="nama" placeholder="Nama Produk" required>
    <input type="number" name="harga" placeholder="Harga" required>
    <input type="number" name="stok" placeholder="Stok" required>
    <input type="number" name="berat" placeholder="Berat" required>
    <input type="text" name="gambar" placeholder="URL Gambar" required>
    <input type="text" name="kondisi" placeholder="Kondisi" required>
    <textarea name="deskripsi" placeholder="Deskripsi" required></textarea>
    <button type="submit">Tambah Produk</button>
</form>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
