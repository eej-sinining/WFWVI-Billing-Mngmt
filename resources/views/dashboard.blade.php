<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded shadow text-center">
        <h1 class="text-2xl font-bold mb-4">Welcome to the Dashboard!</h1>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Logout</button>
        </form>
    </div>
</body>
</html>