<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <a style="color:red" href="/">Home</a>
    <a href="about">About</a>
    <a href="contact">Contact</a>
    @section('body')
     @show
</body>
</html>