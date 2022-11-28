@extends("blank")

@section("konten")

<table class="table">

<a href="{{ route("user_input") }}" >Tambah User</a>
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Password</th>
            <th scope="col">Nama</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Nomor Telpon</th>
            <th scope="col">Alamat</th>
            <th scope="col">Edit</th>

        </tr>
    </thead>
    <tbody>
        @foreach($data_user as $user)
        <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->username}}</td>
            <td>{{$user->password}}</td>
            <td>{{$user->level}}</td>
            <td>{{$user->created_at}}</td>
            <td>{{$user->updated_at}}</td>
            <td>
            <a href="{{ route("user_edit", ["id" => $user->id]) }}">Edit | </a>
            <a href="{{ route("user_show", ["id" => $user->id]) }}">Show</a>


            @if ($errors->any())
            <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            </ul>
            </div>
            @endif


            <form action = "{{ route("user_hapus", ['id' => $user->id])}}" method="post">
            @csrf
            @method("delete")
            <button class="btn btn-primary" type="submit" 
            onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')">Hapus</button>
</form></td>
        </tr>
</body>
        @endforeach
</table>
@endsection