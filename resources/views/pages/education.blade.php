@extends('layouts.app')

@section('content')
  <main class="container">
    <section class="hero section reveal">
      <p class="kicker">Education</p>
      <h1>Academic foundation that supports my technical growth.</h1>
      <p class="intro">
        My coursework and projects shaped how I approach software architecture and system design.
      </p>
      <div class="hero-actions">
        <a href="{{ route('projects') }}" class="btn btn-solid">See Practical Work</a>
        <a href="{{ route('contact') }}" class="btn btn-outline">Contact Me</a>
      </div>
    </section>

    @include('education')


  </main>
@endsection
