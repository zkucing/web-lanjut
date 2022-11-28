@extends("blank")

@section("konten")

    <h1>Semua Data</h1>

    @foreach($data as $petugas)
        Nama : {{ $petugas->nama }} <br>
        Keterangan: {{ $petugas->keterangan }} <br>
        <a href="{{ route('ubah_petugas', ['id' => $petugas->id]) }}">Ubah</a>
        <a href="{{ route('tampil_petugas', ['id' => $petugas->id]) }}">Tampil</a>

        <form action="{{ route('hapus_petugas', ['id' => $petugas->id]) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Hapus</button>
        </form>
        <hr>
    @endforeach
@endsection