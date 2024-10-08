@extends('layouts.app')

@section('content')
<div class="container mt-5 d-flex justify-content-center"> <!-- Center the card -->
    <div class="card shadow-lg border-0 rounded-3" style="transition: 0.3s; overflow: hidden; background-color: rgba(0, 77, 152, 0.85); max-width: 500px; width: 100%;"> <!-- Adjusted opacity for a sleeker look -->
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
    /* Card hover effect */
    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2); /* Slightly darker shadow for better contrast */
    }

    /* Profile image hover effect */
    img:hover {
        transform: scale(1.1); /* More noticeable zoom effect */
    }

    /* Headings styling */
    h1, h3 {
        letter-spacing: 1px; /* Elegant spacing for readability */
        font-family: 'Roboto', sans-serif; /* Modern, clean font */
    }

    /* Specific colors for headings */
    h1 {
        color: #004D98; /* Deep blue */
    }

    h3 {
        color: #FFD700; /* Gold */
    }

    /* Strong text color */
    strong {
        color: #FFD700;
    }

    /* Card background color */
    .card {
        background-color: rgba(0, 77, 152, 0.85); /* Slightly more opaque for better readability */
    }

    /* Light text color with a slight opacity */
    .text-light {
        color: rgba(255, 255, 255, 0.95); /* Slightly brighter white for better contrast */
    }

    /* Media query for responsive design */
    @media (max-width: 576px) {
        .card {
            max-width: 100%; /* Ensure card takes full width on small screens */
        }
        img {
            width: 120px; /* Adjust image size for small screens */
            height: 120px;
        }
    }
</style>
@endsection
