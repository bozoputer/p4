<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title','Much To-Do | E Boone | Project 4 | CSCI E-15')
    </title>

    <link href='https://fonts.googleapis.com/css?family=Bitter:400,700|Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/foundation.min.css">
    <link rel="stylesheet" href="css/shared.css">

    {{-- Yield any page specific CSS files or anything else you might want in the head --}}
    @yield('head')

</head>
<body>
@if(Auth::check())
<nav>
    <ul class="menu">
      <li><a href="#">Test</a></li>
      <li><a href="#">Test</a></li>
    </ul>
</nav>
@endif

<main>
    {{-- Main page content will be yielded here --}}
    @yield('content')
</main>


<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>
</body>
</html>
