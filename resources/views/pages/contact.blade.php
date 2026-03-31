@extends('layouts.app')

@section('content')
  <main class="container">
    <section class="hero section reveal">
      <p class="kicker">Contact</p>
      <h1>Let's connect and build something useful.</h1>
      <p class="intro">
        Reach me directly via email, GitHub or LinkedIn for opportunities and collaborations.
      </p>
      <div class="hero-actions">
        <a href="{{ route('query') }}" class="btn btn-solid">Send Query</a>
        <a href="{{ route('home') }}" class="btn btn-outline">Back to Home</a>
      </div>
    </section>

    @include('contactinfo')
  </main>
@endsection
