<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e9ecef; /* Warna latar belakang yang lebih lembut */
            font-family: 'Arial', sans-serif;
        }

        .container {
            margin-top: 50px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #343a40; /* Warna teks heading */
            font-weight: bold;
        }

        /* Gaya untuk gambar di tengah */
        .center-img {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 180px; /* Ukuran gambar lebih besar */
            height: 180px;
            border-radius: 50%; /* Membuat gambar bulat */
            border: 4px solid #343a40; /* Border dengan warna abu-abu tua */
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); /* Efek bayangan pada gambar */
            margin-bottom: 30px; /* Jarak bawah gambar */
        }

        /* Styling untuk tabel */
        table {
            width: 60%;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: #fff; /* Warna latar belakang tabel */
            border-radius: 8px; /* Membuat sudut tabel membulat */
            overflow: hidden;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); /* Efek bayangan pada tabel */
        }

        td {
            padding: 12px 15px;
            text-align: left;
            font-size: 18px;
        }

        td:first-child {
            font-weight: bold;
            color: #495057; /* Warna teks untuk label */
        }

        td:nth-child(2) {
            text-align: center;
            font-weight: bold;
            color: #007bff; /* Warna untuk simbol ":" */
        }

        td:last-child {
            text-align: left;
            color: #343a40; /* Warna teks untuk nilai */
        }

        tr:nth-child(odd) {
            background-color: #f8f9fa; /* Warna latar belakang baris genap */
        }

        tr:hover {
            background-color: #e2e6ea; /* Warna saat baris di-hover */
        }

        table, td {
            border: 1px solid #dee2e6; /* Border ringan pada tabel */
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Data Mahasiswa</h2>

    <!-- Gambar dari folder public -->
    <img src="{{ asset('public-jarjit.jpg') }}" alt="Profile Picture" class="center-img">

    <table class="table table-striped table-bordered table-hover">
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

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
