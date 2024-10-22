@extends('layouts.app')

@section('content')

<!-- Isi Section -->
<form action="{{ route('user.update', $user['id']) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="container mt-5">
        <h1 class="text-center">Edit Data</h1>
        <div class="form-group mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" value="{{ old('nama', $user->nama) }}">
        </div>
        <div class="form-group mb-3">
            <label for="npm" class="form-label">NPM</label>
            <input type="text" class="form-control" name="npm" id="npm" value="{{ old('npm', $user->npm) }}">
        </div>
        <div class="form-group mb-3">
            <label for="kelas_id" class="form-label">Kelas</label>
            <select class="form-select" name="kelas_id" id="kelas_id" required>
                @foreach ($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}" {{ $kelasItem->id == $user->kelas_id ? 'selected' : '' }}>
                        {{ $kelasItem->nama_kelas }}
                    </option>
                @endforeach
            </select>
        </div>
        <!-- Jurusan -->
        <div class="form-group mb-3">
            <label for="jurusan" class="form-label">Jurusan</label>
            <input type="text" class="form-control" name="jurusan" id="jurusan" value="{{ old('jurusan', $user->jurusan) }}" required>
        </div>
        
        <!-- Semester -->
        <div class="form-group mb-3">
            <label for="semester" class="form-label">Semester</label>
            <input type="number" class="form-control" name="semester" id="semester" value="{{ old('semester', $user->semester) }}" min="1" max="8" required>
        </div>
        <div class="form-group">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" name="foto" class="form-control">
            @if($user->foto)
                <img src="{{ asset($user->foto) }}" alt="User Photo" width="100" class="mt-2">
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</form>

@endsection
