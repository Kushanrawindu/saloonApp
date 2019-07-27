<!DOCTYPE html>
<html lang="en">
<head>
    @yield('title')

    @include('admin.layouts.head')
</head>
<body>
    @include('admin.layouts.header')

    @include('admin.layouts.sidebar')

    @section('main-content')
        
    @show

    @include('admin.layouts.jquery')
</body>
</html>