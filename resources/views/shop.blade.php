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
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: black;
            color: white;
        }

        ul {
            display: flex;
            flex-direction: row;
            padding: 0;
            list-style: none;

        }

        li {
            padding: 5px 10px 5px 10px;
            text-transform: uppercase;
            cursor: pointer;
            transition: transform .7s;
        }

        li:hover {
            transform: scale(1.2);

        }

        a {
            text-decoration: none;
            color: white;
        }

        h1 {
            text-align: center;
            margin-top: 50px;
        }
    </style>
</head>

<body class="antialiased">
    <header>
        <nav>

            <ul>

                <li> <a href="{{ route('home') }}"> {{ $home }} </a> </li>
                <li> <a href="{{ route('about-us') }}"> {{ $about_us }} </a> </li>
                <li> <a href="{{ route('shop') }}"> {{ $shop }} </a> </li>

            </ul>

        </nav>
    </header>
    <h1>Shop</h1>
</body>

</html>
