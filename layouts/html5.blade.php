<!-- Stored in storage/view/layouts/app.blade.php -->

<html>
<head>
    <title>App Name - @yield('title')</title>
</head>
<body>
@section('sidebar')

    This is the master sidebar.125
@show

<div class="container">
    @yield('content')
</div>
</body>
</html>
