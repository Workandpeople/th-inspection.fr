<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'TH-INSPECTION')</title>

    <!-- Core CSS Files -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/fontAwesome/css/all.css" rel="stylesheet">

    <!-- Additional CSS pushed by views -->
    @yield('head-css')
</head>

<body>
    <!-- header (external partial) -->
    @include('partials.header')

    <!-- Main Content -->
    @yield('content')

    <!-- Footer (external partial) -->
    @include('partials.footer')

    <!-- Loading Overlay -->
    <div id="loadingOverlay" class="loading-overlay d-none">
        <div class="loading-spinner">
            <i class="fas fa-spinner fa-spin"></i>
        </div>
    </div>

    <!-- Core JS Files -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/app.js"></script>

    <!-- Additional JS pushed by views -->
    @yield('head-js')
</body>

</html>