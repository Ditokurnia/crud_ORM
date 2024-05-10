<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <!-- Tambahkan tautan ke file CSS jika diperlukan -->
</head>
<body>
    @extends('layouts.app')

    @section('content')
        <div class="container">
            <h1>Detail Produk</h1>
            <p>Nama: {{ $product->nama }}</p>
            <p>Harga: {{ $product->harga }}</p>
            <p>Stok: {{ $product->stok }}</p>
            <p>Berat: {{ $product->berat }}</p>
            <p>URL Gambar: {{ $product->gambar }}</p>
            <p>Kondisi: {{ $product->kondisi }}</p>
            <p>Deskripsi: {{ $product->deskripsi }}</p>
        </div>
    @endsection
</body>
</html>
