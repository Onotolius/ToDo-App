<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="bg-indigo-300 min-h-screen flex items-start justify-center py-24">
<div class="bg-white w-full max-w-3xl p-6 rounded shadow">
    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-4 rounded mb-6 max-w-2xl mx-auto">
            {{ session('success') }}
        </div>
    @endif
    <div>
        <h1 class="text-2xl font-bold mb-4">@yield('title')</h1>
        @yield('content')
    </div>
</div>
</body>
</html>
