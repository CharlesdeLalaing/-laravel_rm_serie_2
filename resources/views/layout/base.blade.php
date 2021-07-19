<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel rm section 2</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <header>
        @include('partials.navbar')
    </header>

    @yield('content')

    <section>
        @include('partials.carrousel')
    </section>

    <footer>
        <div class="w-100 text-center bg-success fixed-bottom">
            Charles de Lalaing
        </div>
    </footer>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>