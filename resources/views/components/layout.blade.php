<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div>
        <nav class="bg-stone-500 flex justify-center items-center space-x-3 p-2">
            <a href="/">Home</a>
            <a href="/cart">Cart</a>
        </nav>
    </div>
    {{ $slot }}
</body>
</html>