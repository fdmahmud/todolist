<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TodoList</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @include('inc.navbar')
    <div class="container">
      @include('inc.messages')
      @yield('content')
    </div>

    <footer class="text-center navbar-fixed-bottom" id="footer">
      <p>Copyright &copy; 2020 Ferdous Mahmud</p>
    </footer>
  </body>
</html>
