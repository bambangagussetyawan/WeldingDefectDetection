<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Selamat Datang, {{ Auth::user()->name }}</h2>
    <a href="{{ route('logout') }}">Logout</a>
</body>
</html>
