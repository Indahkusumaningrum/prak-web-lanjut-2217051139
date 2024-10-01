<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
     Link font Poppins dari Google Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
     Link fontawesome untuk icon -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <style>
        /* Base style */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #A1D6F0, #74A4BC); /* Background gradient */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
            font-weight: 600;
        }
        form {
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Card shadow */
            max-width: 400px;
            width: 100%;
        }
        .form-group {
            margin-bottom: 15px;
            position: relative;
        }
        label {
            font-weight: 500;
            margin-bottom: 5px;
            display: block;
            color: #333;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px 40px; /* Add padding to accommodate icon */
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 14px;
            outline: none;
            transition: all 0.3s ease;
        }
        input[type="text"]:focus {
            border-color: #0072ff;
            box-shadow: 0 0 5px rgba(0, 114, 255, 0.3);
        }
        .form-group i {
            position: absolute;
            top: 35px;
            left: 10px;
            color: 74A4BC;
            font-size: 18px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 12px;
            border-radius: 5px;
            background-color: #0C80BA;
            color: white;
            border: none;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #A1D6F0;
            color: #333;
        }
        .error {
            color: red; /* Mengatur warna teks menjadi merah */
            font-size: 12px; /* Ukuran font untuk pesan error */
            margin-top: 5px; /* Jarak atas dari input */
        }

        /* Responsive design */
        @media (max-width: 768px) {
            body {
                padding: 20px;
            }
            form {
                padding: 20px;
                max-width: 100%;
            }
        }
        @media (max-width: 480px) {
            h2 {
                font-size: 1.5rem;
            }
            input[type="submit"] {
                font-size: 14px;
            }
        }
    </style>
</head>
<body> --> 
@extends('layouts.app')

@section('content')

<form action="/user/store" method="POST" novalidate> <!-- Menambahkan novalidate -->
    <h2>Create User</h2>
    @csrf
    <div class="form-group">
        <label for="nama">Nama:</label>
        <i class="fas fa-user"></i>
        <input type="text" id="nama" name="nama" placeholder="Masukkan nama" required>
        @foreach ($errors->get('nama') as $msg)
            <p class="error">{{ $msg }}</p> <!-- Menggunakan kelas error -->
        @endforeach
    </div>

    <div class="form-group">
        <label for="npm">NPM:</label>
        <i class="fas fa-id-card"></i>
        <input type="text" id="npm" name="npm" placeholder="Masukkan NPM" required>
        @foreach ($errors->get('npm') as $msg)
            <p class="error">{{ $msg }}</p> <!-- Menggunakan kelas error -->
        @endforeach
    </div>

    <div class="form-group">
        <label for="kelas">Kelas:</label>
        <select name="kelas_id" id="kelas_id" required>
            @foreach($kelas as $kelasItem)
                <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
            @endforeach
        </select>
        @foreach ($errors->get('kelas_id') as $msg)
            <p class="error">{{ $msg }}</p> <!-- Menggunakan kelas error -->
        @endforeach
    </div>

    <input type="submit" value="Submit">
</form>

@endsection


<!-- </body>
</html> -->
