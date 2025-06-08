<!DOCTYPE html>
<html>
<head>
    <title>Tambah Kontak</title>
</head>
<body>
    <h1>Tambah Kontak Baru</h1>

    <form action="{{ route('contacts.store') }}" method="POST">
        @csrf
        <label>Nama:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>No. HP:</label><br>
        <input type="text" name="phone"><br><br>

        <button type="submit">Simpan</button>
    </form>

    <br>
    <a href="{{ route('contacts.index') }}">← Kembali ke daftar</a>
</body>
</html>
