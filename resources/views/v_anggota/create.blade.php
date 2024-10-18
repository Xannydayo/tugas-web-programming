<h3>{{ $judul }}</h3>
<form action="{{ route('anggota.store') }}" method="post">
    @csrf
    <label>Nama</label><br>
    <input type="text" name="nama" id="nama">
    <p></p>
    <label>HP</label><br>
    <input type="text" name="hp" id="hp">
    <p></p>
    <button type="submit">Simpan</button>
    <a href="{{ route('anggota.index') }}">
        <button type="button">Batal</button>
    </a>
</form>
