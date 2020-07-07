<!DOCTYPE html>
<html lang="en">
<head>
  @include('backend.head')
</head>
<body>
    @include('backend.sidebar')
    @include('backend.nav')
    @yield('content')
    @include('backend.footer')
</body>
</html>