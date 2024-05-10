<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <!-- Tambahkan tautan ke file CSS jika diperlukan -->
</head>
<body>
    @extends('layouts.app')

    @section('content')
        <div class="container">
            <h1>Edit Produk</h1>
            <form action="{{ route('admin.products.update', $product->id) }}" method="POST"> <!-- Updated route to point to the correct update route -->
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nama">Nama Produk</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $product->nama }}" required>
                </div>
                <!-- Sisipkan bagian form lainnya sesuai kebutuhan -->
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </form>
        </div>
    @endsection
</body>
</html>
