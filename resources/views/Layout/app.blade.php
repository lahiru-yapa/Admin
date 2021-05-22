
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
  <!-- Favicon -->
  <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
@include('Library.styles')
  
</head>

<body>
  <!-- Sidenav -->
  @include('Components.side_bar')
  <!-- Main content -->
  <div class="main-content" id="panel">

    <!-- Topnav -->
   @include('Components.nav')
    <!-- Header -->
    @yield('header')
    <!-- Header -->
    @yield('content')
    <!-- Page content -->
    @include('Components.footer')
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
 @include('Library.script')
</body>

</html>
