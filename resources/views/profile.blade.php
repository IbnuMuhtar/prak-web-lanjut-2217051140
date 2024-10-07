@extends('layouts.app')

@section('content')
<div class="container mt-5 d-flex justify-content-center"> <!-- Center the card -->
    <div class="card shadow-lg border-0 rounded-3" style="transition: 0.3s; overflow: hidden; background-color: rgba(0, 77, 152, 0.8); max-width: 500px; width: 100%;"> <!-- Reduced width -->
        <div class="card-body text-center">
            <!-- Display User Photo -->
            <div class="mb-4">
                <img src="{{ asset($user->foto ?? 'assets/img/default.png') }}" alt="Foto Profil" class="img-fluid rounded-circle shadow" style="width: 150px; height: 150px; transition: transform 0.3s;">
            </div>

            <h3 class="font-weight-bold" style="color: #FFD700;">{{ $user->nama }}</h3>
            <p class="text-light mb-1">NPM: <strong>{{ $user->npm }}</strong></p>
            <p class="text-light mb-1">Kelas: <strong>{{ $user->nama_kelas ?? 'Kelas tidak ditemukan' }}</strong></p>
        </div>
    </div>
</div>

<style>
    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    }
    img:hover {
        transform: scale(1.05);
    }
    h1, h3 {
        letter-spacing: 1px;
    }

    h1 {
        color: #004D98; 
    }
    h3 {
        color: #FFD700;
    }
    strong {
        color: #FFD700;
    }

    .card {
        background-color: rgba(0, 77, 152, 0.8);
    }
    .text-light {
        color: rgba(255, 255, 255, 0.9);
    }
</style>
@endsection