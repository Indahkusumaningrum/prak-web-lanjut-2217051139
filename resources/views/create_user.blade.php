@extends('layouts.app')

@section('content')

<form action="{{ route('user.store') }}" method="POST" novalidate enctype="multipart/form-data"> 
    <h2>Create User</h2>
    @csrf
    <div class="form-group">
        <label for="nama">Nama:</label>
        <i class="fas fa-user"></i>
        <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan nama" required>
        @foreach ($errors->get('nama') as $msg)
            <p class="error">{{ $msg }}</p>
        @endforeach
    </div>

    <div class="form-group">
        <label for="npm">NPM:</label>
        <i class="fas fa-id-card"></i>
        <input type="text" id="npm" name="npm" class="form-control" placeholder="Masukkan NPM" required>
        @foreach ($errors->get('npm') as $msg)
            <p class="error">{{ $msg }}</p>
        @endforeach
    </div>

    <div class="form-group">
        <label for="kelas">Kelas:</label>
        <select name="kelas_id" id="kelas_id" class="form-control" required>
            @foreach($kelas as $kelasItem)
                <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
            @endforeach
        </select>
        @foreach ($errors->get('kelas_id') as $msg)
            <p class="error">{{ $msg }}</p>
        @endforeach
    </div>


    <div class="form-group">
        <label for="foto">Foto:</label>
        <input type="file" id="foto" name="foto" class="form-control"><br><br>
    </div>

    <div class="form-group">
        <label for="jurusan">Jurusan:</label>
        <input type="text" id="jurusan" name="jurusan" class="form-control"><br><br>
    </div>

    <div class="form-group">
        <label for="semester">Semester:</label>
        <input type="text" id="semester" name="semester" class="form-control"><br><br>
    </div>

    <input type="submit" value="Submit">
</form>

@endsection