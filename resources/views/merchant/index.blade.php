<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Merchant</title>
</head>
<body>
    <h1>Daftar Merchant</h1>

    <a href="{{ route('merchant.create') }}">Tambah Merchant Baru</a>

    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <ul>
        @foreach($merchants as $merchant)
            <li>
                {{ $merchant->name }} - {{ $merchant->email }}
                <a href="{{ route('merchant.edit', $merchant->id) }}">Edit</a>
                <form action="{{ route('merchant.destroy', $merchant->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
