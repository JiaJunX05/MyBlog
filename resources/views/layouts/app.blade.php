<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    @yield('css')
    <title>@yield("title") || Blog Tracks</title>
</head>
<body class="d-flex flex-column min-vh-100">
    <header>
        @include("layouts.header")
    </header>

    <main class="flex-grow-1">
        @yield("content")
    </main>

    <footer>
        @include("layouts.footer")
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
