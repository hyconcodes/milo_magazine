<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Responsive Bootstrap 4 Magazine/Blog Theme">
  <meta name="author" content="Bootlab">

  <title>Milo - Magazine/Blog Theme</title>

  <link href="{{asset('css/filament/app.css')}}" rel="stylesheet">
</head>

<body>

  <main>

    @include('include.header')

    @yield('content')
  </main>


  @include('include.footer')

  <script src="{{asset('js/filament/app.js')}}"></script>
</body>

</html>