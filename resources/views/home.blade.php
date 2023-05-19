<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        header {
            width: 100%;
            height: 80px;
            margin: 0 auto;
        }

        nav {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: black;
            color: white;
        }
    </style>
</head>

<body class="antialiased">
    <header>
        <nav>

            <ul>

                <li> {{ $home }} </li>
                <li> {{ $about_us }} </li>
                <li> {{ $shop }} </li>

            </ul>

        </nav>
    </header>
    <h1>Hello world</h1>
</body>

</html>
