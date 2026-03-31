@extends('layouts.app')

@section('content')
  <main class="container">
    <section class="hero section reveal">
      <p class="kicker">Skills</p>
      <h1>Tools and technologies I use to build.</h1>
      <p class="intro">
        My skill set combines programming fundamentals, modern web development, and database systems.
      </p>
      <div class="hero-actions">
        <a href="{{ route('projects') }}" class="btn btn-solid">View Work</a>
        <a href="{{ route('about') }}" class="btn btn-outline">About Me</a>
      </div>
    </section>

    @include('skills')
  </main>
@endsection
