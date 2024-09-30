<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'WebHub')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Common Styles -->
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            background-color: #000;
            color: #fff;
            font-family: Arial, sans-serif;
        }
        .navbar {
            background-color: #111;
        }
        .navbar a {
            color: #fff;
            text-decoration: none;
        }
        footer {
            background-color: #111;
            color: #ccc;
            padding: 10px;
            text-align: center;
        }
        .content-container {
            text-align: center;
            max-width: 600px;
            margin: auto;
            padding: 20px;
        }
    </style>

    <!-- Custom Page Styles -->
    @yield('styles')
</head>
<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand text-white" href="/">WebHub</a>
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/welcome">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/content">Content</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard">Dashboard</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="content-container">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer>
        &copy; {{ date('Y') }} WebHub. All Rights Reserved.
    </footer>

    <!-- Optional JavaScript -->
    @yield('scripts')
</body>
</html>
