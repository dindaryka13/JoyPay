<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'My Website' }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #f2f2f2;
        }

        header {
            background: #007BFF;
            color: white;
            padding: 1rem 2rem;
        }

        header h1 {
            margin: 0;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin-top: 10px;
            display: flex;
            gap: 20px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        main {
            padding: 2rem;
            background: white;
            margin: 2rem;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 1rem;
            margin-top: 2rem;
        }
    </style>
</head>
<body>

    @include('layouts.header')

    <main>
        
        @switch($page)
            
            @case('home')
                @include('pages.home')
                @break

            @case('informasi')
                @include('pages.informasi')
                @break

            @case('kamus')
                @include('pages.kamus')
                @break

                @case('kloteraktif')
    @include('pages.kloteraktif')
    @break

            @default
                <p>Halaman tidak ditemukan</p>
        @endswitch
    </main>

    @include('layouts.footer')

</body>
</html>
