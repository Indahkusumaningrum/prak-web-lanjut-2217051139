<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
            background-color: #f0f8ff;
        }
        .profile-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: left;
            border: 1px solid #ddd;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #f9f9f9;
            max-width: 400px;
            margin: 0 auto;
        }
        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 20px;
            object-fit: cover;
            border: 5px solid #ffb6c1;
        }
        h1 {
            color: #4682b4;
        }
        table {
            width: 100%;
            margin-top: 20px;
        }
        td {
            padding: 10px;
            color: #696969;
        }
        td:nth-child(2) {
            width: 5px;
        }
        .profile-container table {
            border-top: 1px solid #ddd;
            padding-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Myself</h1>

    <div class="profile-container">
        <img src="{{ asset('images/foto.png') }}" alt="Profile Picture" class="profile-img">

        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?= $nama ?></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><?= $kelas ?></td>
            </tr>
            <tr>
                <td>NPM</td>
                <td>:</td>
                <td><?= $npm ?></td>
            </tr>
        </table>
    </div>
</body>
</html>
