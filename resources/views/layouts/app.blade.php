<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #A1D6F0, #74A4BC);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 20px;
        }
        .container {
            width: 100%;
            max-width: 1200px;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
            font-weight: 600;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table thead {
            background-color: #0C80BA;
            color: white;
        }
        table th, table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        table tr:hover {
            background-color: #e1f5fe;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #0C80BA;
            color: white;
            text-align: center;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
            margin-bottom: 10px;
        }
        .btn:hover {
            background-color: #A1D6F0;
            color: #333;
        }
        @media (max-width: 768px) {
            table th, table td {
                padding: 8px;
                font-size: 14px;
            }
        }

        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-group {
           
            position: relative;
        }

        .form-group i {
            position: absolute;
            top: 72%;
            left: 10px;
            transform: translateY(-50%); /* Ini untuk membuat ikon sejajar di tengah */
            color: #ccc;
            font-size: 16px; /* Atur ukuran sesuai kebutuhan */
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
        }

        .form-group input[type="text"] {
        padding-left: 40px; /* Tambahkan padding kiri untuk memberi ruang bagi ikon */
    }

        .form-group input[type="text"],
        .form-group select,
        .form-group input[type="file"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
            transition: border-color 0.3s ease;
        }

        .form-group input[type="text"]:focus,
        .form-group select:focus,
        .form-group input[type="file"]:focus {
            border-color: #0C80BA;
        }

        .form-group input[type="text"] {
            padding-left: 35px;
        }

        .error {
            color: red;
            font-size: 14px;
            margin-top: 5px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #0C80BA;
            color: white;
            font-size: 16px;
            font-weight: 600;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #A1D6F0;
            color: #333;
        }

        @media (max-width: 768px) {
            form {
                padding: 15px;
            }
            
            .form-group input[type="text"],
            .form-group select {
                font-size: 14px;
                padding: 8px;
            }

            input[type="submit"] {
                font-size: 14px;
                padding: 8px;
            }
        }

    </style>
</head>
<body>

    <div class="container">
        @yield('content')
    </div>

</body>
</html>
