<html>
<head>
<title>@yield('title') | My Blog</title>
</head>
<body>

<div class="container">
    @yield('content')

    @include('layouts.partials.navigation')
    <div class="container">
        @yield('content')
    </div>

</div>
</body>
</html>
