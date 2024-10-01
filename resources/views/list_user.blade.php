@extends('layouts.app')

@section('content')

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Kelas</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($kelas as $user)
        <tr>
        <td><?= $user['id'] ?></td> 
        <td><?= $user['nama'] ?></td> 
        <td><?= $user['npm'] ?></td> 
        <td><?= $user['nama_kelas'] ?></td> 
        <td></td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
