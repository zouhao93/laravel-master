<html>
<head>
</head>
<body>
<h1>Blade Demo</h1>
@section('template')

    @show
<div class="container">
    This is a content
    @yield('content')
</div>
</body>
</html>