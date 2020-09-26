<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>@yield('title')</title>

    @include('admin.layouts._meta')
    @include('admin.layouts._base-css')
    @yield('css')
</head>
<body class="hold-transition sidebar-mini layout-fixed app">

<div class="wrapper">
    @include('admin.layouts._header')
    @include('admin.layouts._sidebar')

    <main class="main-content">
        <div class="content-wrapper">
            @include('admin.layouts._alert')
            @yield('content')
        </div>
    </main>

    @include('admin.layouts._footer')
</div>

@include('admin.layouts._base-js')
@yield('js')
</body>
</html>
