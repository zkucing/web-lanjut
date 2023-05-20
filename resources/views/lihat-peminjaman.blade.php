@extends('blank')
@section('konten')


</br>
<center>
    <h1>Semua Buku yang Sedang Dipinjam</h1>
</center>
</br>
Halaman : {{ $tb_peminjaman->currentPage() }} <br/>
Jumlah Data : {{ $tb_peminjaman->total() }} <br/>
    <center>
        <table class="table">
            
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
                        <a href="/lihat-peminjaman/edit/{{ $p->id }}">Edit  |</a>
                        <a href="/lihat-peminjaman/hapus/{{ $p->id }}">Hapus</a> 
                    </td>
                </tr>
                @endforeach
            </tbody>    
        </table>
        <br/>
        {{ $tb_peminjaman->links('pagination::simple-bootstrap-4') }}
    </center>   
@endsection