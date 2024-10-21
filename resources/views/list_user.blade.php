@extends('layouts.app')

@section('content')

<div class="mb-3 mt-2 m-3">
    <a href="{{ route('user.create') }}" class="btn btn-primary mb-3">Tambah Pengguna Baru</a><br>
</div>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Kelas</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user['id'] }}</td> 
            <td>{{ $user['nama'] }}</td> 
            <td>{{ $user['npm'] }}</td> 
            <td>{{ $user['nama_kelas'] }}</td>
            <td>
                <img src="{{ asset('storage/uploads/' . $user->foto) }}" alt="Profile Picture" class="profile-img" width="100" />
            </td>


            <td>
                <!-- Button View -->
                <a href="{{ route('users.show', $user['id']) }}" class="btn-view">View</a>

                <!-- Button Edit -->
                <a href="{{ route('user.edit', $user['id']) }}" class="btn-edit">Edit</a>

                <!-- Button Delete (Form) -->
                <form action="{{ route('user.destroy', $user['id']) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-delete"
                    onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
