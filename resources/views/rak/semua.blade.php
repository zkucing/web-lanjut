@extends("blank")

@section("konten")

    <h1>Semua Data</h1>

    @foreach($data as $rak)
        Nama : {{ $rak->nama }} <br>
        Keterangan: {{ $rak->keterangan }} <br>
        <a href="{{ route('ubah_rak', ['id' => $rak->id]) }}">Ubah</a>
        <a href="{{ route('tampil_rak', ['id' => $rak->id]) }}">Tampil</a>

        <form action="{{ route('hapus_rak', ['id' => $rak->id]) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Hapus</button>
        </form>
        <hr>
    @endforeach
@endsection