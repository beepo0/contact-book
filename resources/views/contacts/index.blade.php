<!DOCTYPE html>
<html>
<head><title>Contact List</title></head>
<body>
    <h1>Daftar Kontak</h1>
    <a href="{{ route('contacts.create') }}">Tambah Kontak</a>
    <ul>
        @foreach($contacts as $contact)
            <li>
                {{ $contact->name }} - {{ $contact->email }} - {{ $contact->phone }}
                <a href="{{ route('contacts.edit', $contact) }}">Edit</a>
                <form action="{{ route('contacts.destroy', $contact) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
