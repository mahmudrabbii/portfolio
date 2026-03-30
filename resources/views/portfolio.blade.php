<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="Portfolio website for Rabbi, a Computer Science and Engineering graduate."
    />
    <title>Rabbi | CSE Graduate Portfolio</title>
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

    <main id="home" class="container">


      <section class="hero section reveal">
        <p class="kicker">Computer Science and Engineering Graduate</p>
        <h1>Building reliable software products with clean architecture.</h1>
        <p class="intro">
          I design and develop practical applications using modern web tools and
          strong CS fundamentals and a user-friendly mindset.
        </p>
        <div class="hero-actions">
          <a href="#projects" class="btn btn-solid">View Projects</a>
          <a href="#contact" class="btn btn-outline">Contact Me</a>
        </div>
      </section>


@include('aboutme')
      

@include('skills')      

@include('projects')      
   
@include('education')

@include('queryform')

@include('contactinfo')

    </main>

    <footer class="footer">
      <p>© 2026 All rights reserved | Rabbi Portfolio</p>
    </footer>
  </body>
</html>
