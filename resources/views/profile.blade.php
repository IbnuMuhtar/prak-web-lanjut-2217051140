<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-r from-gray-700 via-blue-800 to-black flex items-center justify-center">

    <div class="bg-gray-900 bg-opacity-95 p-10 rounded-xl shadow-2xl w-full max-w-lg">
        <h1 class="text-4xl font-extrabold text-center mb-10 text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-gray-400">
            Profil Mahasiswa
        </h1>

        <div class="mb-6">
            <label class="block text-gray-300 text-sm font-semibold mb-2">Nama:</label>
            <p class="text-gray-200 text-lg">{{ $nama }}</p>
        </div>

        <div class="mb-6">
            <label class="block text-gray-300 text-sm font-semibold mb-2">NPM:</label>
            <p class="text-gray-200 text-lg">{{ $npm }}</p>
        </div>

        <div class="mb-6">
            <label class="block text-gray-300 text-sm font-semibold mb-2">Kelas:</label>
            <p class="text-gray-200 text-lg">{{ $kelas }}</p>
        </div>

        <div class="flex justify-center mt-10">
            <a href="{{ route('user.create') }}" class="bg-gradient-to-r from-blue-600 to-gray-600 text-white font-bold px-8 py-3 rounded-full shadow-lg hover:from-blue-700 hover:to-gray-700 transition-all duration-300 transform hover:scale-105">
                Kembali ke Form
            </a>
        </div>
    </div>

</body>
</html>
