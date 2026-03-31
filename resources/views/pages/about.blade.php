@extends('layouts.app')

@section('content')
  <main class="container">
    <section class="hero section reveal">
      <p class="kicker">About</p>
      <h1>The story behind my work.</h1>
      <p class="intro">
        I enjoy building software that is practical, maintainable, and focused on real user value.
      </p>
      <div class="hero-actions">
        <a href="{{ route('projects') }}" class="btn btn-solid">See Projects</a>
        <a href="{{ route('contact') }}" class="btn btn-outline">Let's Connect</a>
      </div>
    </section>

    @include('aboutme')
  </main>
@endsection
