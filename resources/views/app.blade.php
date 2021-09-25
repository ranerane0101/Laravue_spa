<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getlocale())}}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token()}}">

  <title>{{ config('app.name', 'Vue Laravel SPA')}}</title>

  <!-- Style -->
  <link href="{{ mix('/css/app.css')}}" rel="stylesheet">
</head>
<body>
  <div id="app">
<header-component></header-component>
<router-view></router-view>
  </div>
  <!-- Script -->
  <script src="{{ mix('/js/app.js')}}" defer></script>
</body>
</html>
