<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
</head>
<body>
<header>

</header>
<main>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    @yield('content')
</main>
<footer>

</footer>
</body>
</html>
