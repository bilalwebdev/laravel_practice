<!doctype html>
<html lang="en">
  <head>
    @stack('title')
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href={{ asset('/frontend/css/bootstrap4.css') }}>
    <link rel="stylesheet" href= {{ asset('frontend/css/custom.css') }}>
  </head>
  <body>
  <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: black">
    <h5 class="ml-2 mt-1 " style="color: white; margin-right:-40px">Hi, Welcome</h5>
      <a class="navbar-brand ml-5 " href="#">
          @if (session()->has('first_name'))
              {{ session()->get('first_name') }}
          @else
              Guest
          @endif
      </a>
      <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
          aria-expanded="false" aria-label="Toggle navigation"></button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item active">
                  <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ url('/customer') }}">Customers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/register') }}">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/about') }}">About</a>
            </li>
          </ul>

      </div>
  </nav>
