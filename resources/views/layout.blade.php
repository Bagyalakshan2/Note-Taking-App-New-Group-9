<!-- resources/views/layout.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Notes App')</title>
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        /* Header */
        header {
            background-color: #343a40;
            color: white;
            padding: 15px;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 24px;
        }

        /* Container */
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        /* Navigation Links */
        nav a {
            color: #ffffff;
            margin: 0 10px;
            text-decoration: none;
            font-weight: bold;
        }

        nav a:hover {
            color: #adb5bd;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 10px;
            font-size: 14px;
            color: #6c757d;
        }

        /* Yielded Content */
        .content {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <h1>My Notes App</h1>
        <nav>
            <a href="{{ route('notes.index') }}">Home</a>
            <a href="{{ route('notes.create') }}">Create Note</a>
        </nav>
    </header>

    <!-- Main Content Container -->
    <div class="container">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 My Notes App. All rights reserved.</p>
    </footer>
</body>
</html>

