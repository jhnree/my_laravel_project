<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome-free-5.10.2/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
    @stack('css')
    <title>Laravel Project</title>
</head>
<body>
    @yield('content')
</body>
</html>