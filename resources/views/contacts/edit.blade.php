<!DOCTYPE html>
<html>
<head>
    <title>Edit Kontak</title>
</head>
<body>
    <h1>Edit Kontak</h1>

    <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nama:</label><br>
        <input type="text" name="name" value="{{ $contact->name }}" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="{{ $contact->email }}" required><br><br>

        <label>No. HP:</label><br>
        <input type="text" name="phone" value="{{ $contact->phone }}"><br><br>

        <button type="submit">Update</button>
    </form>

    <br>
    <a href="{{ route('contacts.index') }}">← Kembali ke daftar</a>
</body>
</html>
