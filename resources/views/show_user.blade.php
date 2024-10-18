<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Profile</title>
    <link rel="stylesheet" href=" {{ asset('assets/css/styleProfile.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

</head>
<body>
    <h1>Profile User</h1>

    <div class="profile-container">
    <img src="{{ asset('img/' . $user->foto) }}" alt="Profile Picture" class="profile-img" />
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>{{ $user->nama }}</td>
            </tr>
            <tr>
                <td>NPM</td>
                <td>:</td>
                <td>{{ $user->npm }}</td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td> {{ $nama_kelas ?? 'Kelas tidak ditemukan' }} </td>
            </tr>
        </table>
    </div>
</body>
</html>
