@extends('layouts.app')

@section('content')

<form action="{{ route('user.update', $user['id']) }}" method="POST" novalidate enctype="multipart/form-data"> 
    <h2>Edit User</h2>
    @csrf
    @method('PUT')
    
    <div class="form-group">
        <label for="nama">Nama:</label>
        <i class="fas fa-user"></i>
        <input type="text" id="nama" name="nama" class="form-control" value="{{ old('nama', $user->nama) }}">
        @foreach ($errors->get('nama') as $msg)
            <p class="error">{{ $msg }}</p>
        @endforeach
    </div>

    <div class="form-group">
        <label for="npm">NPM:</label>
        <i class="fas fa-id-card"></i>
        <input type="text" id="npm" name="npm" class="form-control" value="{{ old('npm', $user->npm) }}">
        @foreach ($errors->get('npm') as $msg)
            <p class="error">{{ $msg }}</p>
        @endforeach
    </div>

    <div class="form-group">
        <label for="kelas">Kelas:</label>
        <select name="kelas_id" id="kelas_id" class="form-control" required>
            @foreach($kelas as $kelasItem)
                <option value="{{ $kelasItem->id }}"
                    {{ $kelasItem->id == $user->kelas_id ? 'selected' : '' }}>
                    {{ $kelasItem->nama_kelas }}
                </option>
            @endforeach
        </select>
        @foreach ($errors->get('kelas_id') as $msg)
            <p class="error">{{ $msg }}</p>
        @endforeach
    </div>

    <div class="form-group">
        <label for="foto">Foto:</label>
        <input type="file" id="foto" name="foto" class="form-control" onchange="previewImage(event)">
        <!-- Display existing photo if available -->
        @if($user->foto)
            <img id="currentPhoto" src="{{ asset('img/' . $user->foto) }}" alt="User Photo" width="100" class="mt-2">
        @endif
        <!-- Image preview for new upload -->
        <img id="preview" width="100" class="mt-2" style="display:none;">
    </div>

    <input type="submit" value="Submit" class="btn btn-primary mt-3">
</form>

<script>
    function previewImage(event) {
        const reader = new FileReader();
        reader.onload = function() {
            const preview = document.getElementById('preview');
            preview.src = reader.result;
            preview.style.display = 'block';
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>

@endsection
