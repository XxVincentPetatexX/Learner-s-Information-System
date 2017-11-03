<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Learner's Information System</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @include('inc.navbar')
    <div class="container">
    @if(Request::is('/'))
    @include('inc.showcase')
    @endif

@yield('content')
    </div>
<footer id="footer" class="text-center">
<p>Hello</p>
</footer>

  </body>
</html>
