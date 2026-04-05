<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-linear-to-r from-indigo-500 to-purple-600 min-h-screen flex items-center justify-center">
    {{$slot}}
</body>

</html>