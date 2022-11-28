@extends("blank")

@section("konten")

    <form action="{{ route("simpan_petugas") }}" method="post">
        @csrf

        Id : <input type="text" name="id"> <br>
        Nama : <input type="text" name="nama"> <br>
        No_telp : <input type="text" name="Nomor Telpon"> <br>
        Alamat: <textarea name="alamat" id="" cols="30" rows="10"></textarea> <br>

        <button type="submit">Simpan</button>
    </form>


@endsection