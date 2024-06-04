<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css">
    @vite(['resources/css/app.css'])
</head>
<body>
    <h1>Welcome to Laravel Blade</h1>
    <h2>Version 1.1</h2>

    <p>Name = {{$name}}</p>
    <p>Email = {{$email}}</p>
</body>
</html>