<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>User Profiles</title>
    <style>
        body {
            background-color: #000; /* Latar belakang hitam */
            color: #000; /* Warna teks hitam untuk kartu putih */
        }
        .card {
            transition: transform 0.3s; /* Efek skala yang halus */
            background-color: #fff; /* Latar belakang putih untuk kartu */
            border: 1px solid #dee2e6; /* Border abu-abu terang pada kartu */
        }
        .card:hover {
            transform: scale(1.05); /* Efek skala saat hover */
        }
        .card-title, .card-text {
            color: #000; /* Warna teks hitam di dalam kartu */
        }
        .card-img-top {
            height: 200px; /* Tinggi tetap untuk gambar */
            object-fit: cover; /* Memastikan gambar terisi dengan baik */
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        @foreach($users as $user)
            <div class="col-md-4 mb-4 d-flex align-items-stretch"> <!-- D-flex untuk memastikan semua kolom sama tinggi -->
                <div class="card w-100"> <!-- Memastikan kartu menggunakan lebar penuh kolom -->
                    <img src="{{ asset($user->foto) }}" class="card-img-top" alt="User Photo">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $user->nama }}</h5>
                        <p class="card-text">
                            <strong>NPM:</strong> {{ $user->npm }} <br>
                            <strong>Kelas:</strong> {{ $user->kelas->nama_kelas }} <br>
                            <strong>Jurusan:</strong> {{ $user->jurusan }} <br>
                            <strong>Semester:</strong> {{ $user->semester }}
                        </p>
                        <a href="{{ route('user.show', $user->id) }}" class="btn btn-primary btn-sm">Detail Profile</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

</body>
</html>
