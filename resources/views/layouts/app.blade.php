<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
     
        <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
        <title>@yield('title')</title>

    <body>
     
        @include('inc.navbar')
        <div class="container">
         
        @yield('content');
      </div>
     
      @include("inc.footer")
      <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}">

    </body>
</html>
