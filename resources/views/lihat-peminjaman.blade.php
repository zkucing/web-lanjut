@extends('blank')
@section('konten')
</br>
    <center>
        <table class="table">
            <h1>Semua Buku yang Sedang Dipinjam</h1>
        </br>
            <thead>
                <tr>
                    <th>Nomor Peminjaman</th>
                    <th>Nama Siswa yang Meminjam</th>
                    <th>Kelas Siswa yang Meminjam</th>
                    <th>Nomor Hp Siswa yang Meminjam</th>
                    <th>Judul Buku yang Dipinjam</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tb_peminjaman as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->nama_siswa }}</td>
                    <td>{{ $p->kelas_siswa }}</td>
                    <td>{{ $p->nomor_hp }}</td>
                    <td>{{ $p->judul_buku }}</td>
                    <td>{{ $p->tanggal_peminjaman }}</td>
                    <td>
                        <a href="/blog/sedangdipinjam/hapus/{{ $p->id }}">Edit  |</a>
                        <a href="/blog/sedangdipinjam/hapus/{{ $p->id }}">Hapus</a> 
                    </td>
                </tr>
                @endforeach
            </tbody>    
        </table>
    </center>    
@endsection