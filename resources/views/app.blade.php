<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>
    @yield('title')
  </title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet">
  <link href="{{ asset('/assets/css/stylesheet.css') }}" rel="stylesheet">
  <script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>
  <script src="{{ asset('/assets/js/jquery.js') }}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script src='/js/fullcalendar/core/main.js'></script>
  <script src='/js/fullcalendar/daygrid/main.js'></script>
  <script src='/js/fullcalendar/interaction/main.js'></script>

  <script src="/js/ajax-setup.js"></script>
  <script src='/js/fullcalendar.js'></script>
  <script src='/js/event-control.js'></script>

  <link href='/css/fullcalendar/core/main.css' type="text/css" rel='stylesheet' />
  <link href='/css/fullcalendar/daygrid/main.css' type="text/css" rel='stylesheet' />
</head>

<body>
<div id="app">
  @yield('content')
</div>
  <script src="{{ mix('js/app.js') }}"></script>
  <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/js/mdb.min.js"></script>
  <script src="{{asset('/assets/js/jquery.min.js')}}"></script>
</body>

</html>