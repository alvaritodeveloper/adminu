<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <x-includes.head />
</head>

<body class="bg-gradient-primary">
    {{ $slot }}
</body>
