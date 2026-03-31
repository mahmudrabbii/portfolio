@extends('layouts.app')

@section('content')
  <main class="container">
    <section class="hero section reveal">
      <p class="kicker">Projects</p>
      <h1>Selected projects that reflect my engineering style.</h1>
      <p class="intro">
        I focus on clarity, scalability, and meaningful problem-solving across each project.
      </p>
      <div class="hero-actions">
        <a href="{{ route('query') }}" class="btn btn-solid">Ask About a Project</a>
        <a href="{{ route('skills') }}" class="btn btn-outline">View Skills</a>
      </div>
    </section>

    @include('projects')
  </main>
@endsection
