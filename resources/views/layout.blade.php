<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js" defer></script>
    
    <title> @yield('title', 'App')</title>
    <style>
        .active a{
            color:red;
            text-decoration:none;
        }
    </style>
</head>
<body>
   @include('partials.nav')
   @yield('content')
</body>
</html>