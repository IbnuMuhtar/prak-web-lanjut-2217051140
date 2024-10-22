@extends('layouts.app')

@section('content')
<div class="container mt-5 d-flex justify-content-center">
    <div class="card shadow-lg border-0 rounded-4" style="transition: 0.3s; overflow: hidden; background-color: #2D3E50; max-width: 500px; width: 100%;">
        <div class="card-body text-center">
            <!-- Display User Photo with full coverage -->
            <div class="mb-4">
                <img src="{{ asset($user->foto ?? 'assets/img/default.png') }}" alt="Foto Profil" class="img-fluid shadow" style="width: 150px; height: 150px; transition: transform 0.3s; object-fit: cover;">
            </div>

            <h3 class="font-weight-bold mb-3" style="color: #FFFFFF;">{{ $user->nama }}</h3> <!-- Font color changed to white -->
            <p class="text-light mb-2"><strong style="color: #FFFFFF;">{{ $user->npm }}</strong></p> <!-- Font color changed to white --> <p class="text-light mb-2"><strong style="color: #FFFFFF;">{{ $user->nama_kelas ?? 'Kelas tidak ditemukan' }}</strong></p> <!-- Font color changed to white -->
            <p class="text-light mb-2"><strong style="color: #FFFFFF;">{{ $user->jurusan }}</strong></p> 
            <p class="text-light mb-2"><strong style="color: #FFFFFF;">{{ $user->semester}}</strong></p> 
        </div>
    </div>
</div>

<style>
    /* Card hover effect */
    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
    }

    /* Profile image hover effect */
    img:hover {
        transform: scale(1.05);
    }

    /* Typography improvements */
    h3 {
        letter-spacing: 1.2px;
        font-family: 'Poppins', sans-serif; /* A clean and modern font */
        color: #FFFFFF; /* Font color changed to white */
    }

    /* Strong text styling */
    strong {
        color: #FFFFFF; /* Font color changed to white */
    }

    /* Card styling */
    .card {
        background-color: #2D3E50; /* Darker background for better contrast */
        border-radius: 12px;
    }

    /* Lighter text with better readability */
    .text-light {
        color: rgba(255, 255, 255, 0.9);
    }

    /* Media query for responsiveness */
    @media (max-width: 576px) {
        .card {
            max-width: 100%;
        }
        img {
            width: 120px;
            height: 120px;
        }
    }
</style>
@endsection
