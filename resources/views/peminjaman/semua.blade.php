@extends("blank")

@section("konten")

    <h1>Semua Data</h1>

    @foreach($data as $peminjaman)
        Nama : {{ $peminjaman->nama }} <br>
        Keterangan: {{ $peminjaman->keterangan }} <br>
        <a href="{{ route('ubah_peminjaman', ['id' => $peminjaman->id]) }}">Ubah</a>
        <a href="{{ route('tampil_peminjaman', ['id' => $peminjaman->id]) }}">Tampil</a>

        <form action="{{ route('hapus_peminjaman', ['id' => $peminjaman->id]) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Hapus</button>
        </form>
        <hr>
    @endforeach
@endsection