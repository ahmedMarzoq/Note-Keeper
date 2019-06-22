<!DOCTYPE html>
<html lang="{{ config('app.local') }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    </head>
    <body>
      <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        Note Keeper
      </a>
      @yield('navButton')
    </nav>
      </div>
      <div class="container">
        @yield('content')
      </div>
       <script src="{{asset('js/app.js')}}" crossorigin="anonymous"></script>
    </body>
</html>
