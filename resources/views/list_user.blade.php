@extends('layouts.app')

@section('content')


<h2>List User</h2>

<div class="mb-3 mt-2 m-3">
    <a href="{{ route('user.create') }}" class="btn">Tambah Pengguna Baru</a><br>
</div>

<div class="card-container">
    @foreach ($users as $user)
    <div class="card">
        <img class="card-img-top" src="{{ asset('storage/uploads/' . $user->foto) }}" alt="Profile Picture">
        <div class="card-body">
            <h5 class="card-title">{{ $user['nama'] }}</h5>
            <p class="card-text">
                NPM: {{ $user['npm'] }}<br>
                Kelas: {{ $user['nama_kelas'] }}<br>
                Jurusan: {{ $user['jurusan'] }}<br>
                Semester: {{ $user['semester'] }}
            </p>
            <a href="{{ route('users.show', $user['id']) }}" class="btn-view">Detail Profile</a>
        </div>
    </div>
    @endforeach
</div>

@endsection
