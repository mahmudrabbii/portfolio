<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="Portfolio website for Rabbi, a Computer Science and Engineering graduate."
    />
    <title>{{ $title ?? 'Rabbi | CSE Graduate Portfolio' }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Sora:wght@400;500;600;700&family=JetBrains+Mono:wght@500;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  </head>
  <body>
    <div class="ambient ambient-left" aria-hidden="true"></div>
    <div class="ambient ambient-right" aria-hidden="true"></div>

    @include('header')

    @yield('content')

    <footer class="footer">
      <p>© 2026 All rights reserved | Rabbi's Portfolio</p>
    </footer>
  </body>
</html>
