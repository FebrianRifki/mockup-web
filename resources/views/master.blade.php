<!DOCTYPE html>
<html lang="en">
  @include('partials._head')
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    @include('partials._navbar')
    @include('partials._sidebar')
    @yield('content') 
    @include('partials._footer')
  </div>
    @include('javascript')
</body>
</html>
