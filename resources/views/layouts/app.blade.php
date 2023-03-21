<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>    @yield('title-block')</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

      <!-- or
<link href="{{ URL::asset('css/app.css') }}" rel="stylesheet" type="text/css" >
      -->
  </head>
  <body>
    @include('inc.header')

    @if(Request::is('/'))
    @include('inc.hero')
    @endif



  <div class="container mt-5">
      @include('inc.messages')
    <div class="row">
      <div class="col-md-8">  @yield('content')      </div>
      <div class="col-md-4">     @include('inc.aside')     </div>
    </div>
  </div>




    @include('inc.footer')
  </body>
</html>
