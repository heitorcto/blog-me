<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    @vite('resources/css/app.css')
    <link crossorigin="anonymous" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" referrerpolicy="no-referrer" rel="stylesheet" />
    <title>{{ $title ?? 'Page Title' }}</title>
</head>

<body data-theme="dark">
    {{ $slot }}
</body>

<script src="https://cdn.jsdelivr.net/npm/theme-change@2.0.2/index.js"></script>
<script src="{{ asset('js/app.js') }}"></script>

</html>
