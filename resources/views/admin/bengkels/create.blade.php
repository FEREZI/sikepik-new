<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Bengkel</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 p-6">
    <h1 class="text-2xl mb-4">Tambah Bengkel</h1>
    <form action="{{ route('admin.drivers.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Nama</label>
            <input type="text" id="name" name="name" required class="border rounded w-full py-2 px-3">
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700">Email</label>
            <input type="email" id="email" name="email" required class="border rounded w-full py-2 px-3">
        </div>
        <div class="mb-4">
            <label for="phone" class="block text-gray-700">Nomor Telepon</label>
            <input type="text" id="phone" name="phone" required class="border rounded w-full py-2 px-3">
        </div>
        <div class="mb-4">
            <label for="image" class="block text-gray-700">Gambar</label>
            <input type="file" id="image" name="image" class="border rounded w-full py-2 px-3">
        </div>
        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Tambah Bengkel</button>
    </form>
</body>
</html>
