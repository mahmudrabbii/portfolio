@extends('layouts.app')

@section('content')
    <main id="home" class="container">


      <section class="hero section reveal">
        <p class="kicker">Computer Science and Engineering Graduate</p>
        <h1>Building reliable software products with clean architecture.</h1>
        <p class="intro">
          I design and develop practical applications using modern web tools and
          strong CS fundamentals and a user-friendly mindset.
        </p>
        <div class="hero-actions">
          <a href="{{ route('projects') }}" class="btn btn-solid">View Projects</a>
          <a href="{{ route('contact') }}" class="btn btn-outline">Contact Me</a>
        </div>
      </section>


@include('aboutme')
      

@include('skills')      

@include('projects')      

@include('education')

@include('queryform')

@include('contactinfo')

    </main>
@endsection
