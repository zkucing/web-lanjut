@extends("blank")

@section("konten")

    <h1>{{ $peminjaman->nama }}</h1>

    {{ $peminjaman->keterangan }}

@endsection