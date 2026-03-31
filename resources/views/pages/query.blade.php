@extends('layouts.app')

@section('content')
  <main class="container">
    <section class="hero section reveal">
      <p class="kicker">Query</p>
      <h1>Send your question and I will respond soon.</h1>
      <p class="intro">
        Share your project details, collaboration ideas and general inquiries through the form below.
      </p>
    </section>

    @include('queryform')
  </main>
@endsection
