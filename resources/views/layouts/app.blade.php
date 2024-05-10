<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Tambahkan tautan ke file CSS jika diperlukan -->
    <link rel="stylesheet" href="{{ asset('csscopy/admin.css') }}">
</head>
<body>
    <header>
        <!-- Tambahkan header sesuai kebutuhan -->
        <h3>List Produk</h3>
    </header>
    <nav>
        <!-- Tambahkan navigasi atau menu admin -->
        <ul>
            <li><a href="{{ route('products.index') }}">Kembali ke Produk</a></li>
            <li><a href="{{ route('products.create') }}">Tambah Produk</a></li>
        </ul>
    </nav>
    <main>
        <!-- Tambahkan konten utama admin -->
        <div class="content">
            @yield('content')
        </div>
    </main>
    <footer>
        <!-- Tambahkan footer sesuai kebutuhan -->
    </footer>
</body>
</html>
