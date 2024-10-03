<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-r from-gray-700 via-blue-800 to-black flex items-center justify-center">

    <div class="bg-gray-900 bg-opacity-95 p-10 rounded-xl shadow-2xl w-full max-w-lg">
        <h1 class="text-4xl font-extrabold text-center mb-10 text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-gray-400">
            Form Data Mahasiswa
        </h1>

        <form action="{{ route('user.store') }}" method="POST">
            @csrf

            <!-- Input Nama -->
            <div class="mb-6">
                <label for="nama" class="block text-gray-300 text-sm font-semibold mb-2">Nama:</label>
                <input type="text" name="nama" id="nama" class="w-full p-3 bg-gray-800 text-gray-200 border border-gray-600 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Masukkan nama Anda" value="{{ old('nama') }}">
                @error('nama')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Input NPM -->
            <div class="mb-6">
                <label for="npm" class="block text-gray-300 text-sm font-semibold mb-2">NPM:</label>
                <input type="text" name="npm" id="npm" class="w-full p-3 bg-gray-800 text-gray-200 border border-gray-600 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Masukkan NPM Anda" value="{{ old('npm') }}">
                @error('npm')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Input Kelas -->
            <div class="mb-6">
                <label for="kelas_id" class="block text-gray-300 text-sm font-semibold mb-2">Kelas:</label>
                <select name="kelas_id" id="kelas_id" class="w-full p-3 bg-gray-800 text-gray-200 border border-gray-600 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                    <option value="">Pilih Kelas</option>
                    @foreach ($kelas as $kelasItem)
                        <option value="{{ $kelasItem->id }}" {{ old('kelas_id') == $kelasItem->id ? 'selected' : '' }}>
                            {{ $kelasItem->nama_kelas }}
                        </option>
                    @endforeach
                </select>
                @error('kelas_id')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Tombol Submit -->
            <div class="flex justify-center mt-10">
                <button type="submit" class="bg-gradient-to-r from-blue-600 to-gray-600 text-white font-bold px-8 py-3 rounded-full shadow-lg hover:from-blue-700 hover:to-gray-700 transition-all duration-300 transform hover:scale-105">
                    Simpan Data
                </button>
            </div>
        </form>
    </div>

</body>
</html>
