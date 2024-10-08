@extends('layouts.app')

@section('content')
<div class="min-vh-100 d-flex justify-content-center align-items-center" style="background-color: #121212;">
    <div class="card p-4 shadow-lg w-100" style="max-width: 500px; background: linear-gradient(135deg, #2c3e50, #34495e); border-radius: 20px; border: none;">
        <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Input Nama -->
            <div class="mb-3">
                <label for="nama" class="form-label text-light">Nama:</label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama Anda" value="{{ old('nama') }}" style="background-color: #3b4a5a; color: #ffffff; border-radius: 10px; border: 1px solid #1abc9c;">
                @error('nama')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Input NPM -->
            <div class="mb-3">
                <label for="npm" class="form-label text-light">NPM:</label>
                <input type="text" name="npm" id="npm" class="form-control" placeholder="Masukkan NPM Anda" value="{{ old('npm') }}" style="background-color: #3b4a5a; color: #ffffff; border-radius: 10px; border: 1px solid #1abc9c;">
                @error('npm')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Input Kelas -->
            <div class="mb-3">
                <label for="kelas_id" class="form-label text-light">Kelas:</label>
                <select name="kelas_id" id="kelas_id" class="form-select" required style="background-color: #3b4a5a; color: #ffffff; border-radius: 10px; border: 1px solid #1abc9c;">
                    <option value="">Pilih Kelas</option>
                    @foreach ($kelas as $kelasItem)
                        <option value="{{ $kelasItem->id }}" {{ old('kelas_id') == $kelasItem->id ? 'selected' : '' }}>
                            {{ $kelasItem->nama_kelas }}
                        </option>
                    @endforeach
                </select>
                @error('kelas_id')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Input Foto -->
            <div class="mb-3">
                <label for="foto" class="form-label text-light">Foto:</label><br>
                <input type="file" id="foto" name="foto" class="form-control" style="background-color: #3b4a5a; color: #ffffff; border-radius: 10px; border: 1px solid #1abc9c; padding: 10px;">
            </div>

            <!-- Tombol Submit -->
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" style="background-color: #1abc9c; border-color: #16a085; border-radius: 10px;">Simpan Data</button>
            </div>
        </form>
    </div>
</div>
@endsection
