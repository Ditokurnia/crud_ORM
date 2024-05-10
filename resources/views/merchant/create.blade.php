<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Merchant Baru</title>
</head>
<body>
    <h1>Tambah Merchant Baru</h1>

    <form action="{{ route('merchant.store') }}" method="post">
        @csrf
        <div>
            <label for="name">Nama:</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <label for="password_confirmation">Konfirmasi Password:</label>
            <input type="password" name="password_confirmation" id="password_confirmation">
        </div>
        <button type="submit">Tambah Merchant</button>
    </form>
</body>
</html>
