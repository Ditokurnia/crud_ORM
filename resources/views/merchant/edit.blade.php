<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Merchant</title>
</head>
<body>
    <h1>Edit Merchant</h1>

    <form action="{{ route('merchant.update', $merchant->id) }}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Nama:</label>
            <input type="text" name="name" id="name" value="{{ $merchant->name }}">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ $merchant->email }}">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <label for="password_confirmation">Konfirmasi Password:</label>
            <input type="password" name="password_confirmation" id="password_confirmation">
        </div>
        <button type="submit">Simpan Perubahan</button>
    </form>
</body>
</html>
