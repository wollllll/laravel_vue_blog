<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div id="app">
    <router-view></router-view>
</div>
<script src="{{ vasset('js/app.js') }}" defer></script>
</body>
</html>
