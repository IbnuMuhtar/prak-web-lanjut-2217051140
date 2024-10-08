@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <a href="/user/create" class="btn btn-primary mb-3" style="background-color: #002147; border-color: #002147; color: #FFD700;">Tambah Pengguna Baru</a> <!-- Biru Oxford dan Emas -->
    
    <table class="table table-hover table-bordered text-center align-middle">
        <thead style="background-color: #002147; color: #FFD700;"> <!-- Biru Oxford dan Emas -->
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->nama }}</td>
                    <td>{{ $user->npm }}</td>
                    <td>{{ $user->kelas->nama_kelas ?? 'Kelas tidak ditemukan' }}</td>
                    <td>
                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-warning mb-3" style="background-color: #FFD700; border-color: #FFD700; color: #002147;">Detail</a> <!-- Tombol dengan Emas dan Biru -->
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Tidak ada data pengguna yang tersedia.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
