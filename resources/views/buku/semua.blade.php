@extends("blank")

@section("konten")

    <h1>Semua Data</h1>

    @foreach($data as $buku)
        Nama : {{ $buku->nama }} <br>
        Keterangan: {{ $buku->keterangan }} <br>
        <a href="{{ route('ubah_buku', ['id' => $buku->id]) }}">Ubah</a>
        <a href="{{ route('tampil_buku', ['id' => $buku->id]) }}">Tampil</a>

        <form action="{{ route('hapus_buku', ['id' => $buku->id]) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Hapus</button>
        </form>
        <hr>
    @endforeach
@endsection