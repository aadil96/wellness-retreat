<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
</head>

<body>

    <style>
         p {
            font-weight: 600;
        }
    </style>
    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')
    @include('layouts.script')
</body>
</html>

