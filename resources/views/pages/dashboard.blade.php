@extends('layouts.app')
@section('content')
  <main class="container">
    <section class="hero section reveal">
      <p class="kicker">Dashboard</p>
      <h1>Welcome to your dashboard, {{ $userName ?? 'User' }}!</h1>
      <p class="intro">
        Here you can get a quick overview of your portfolio stats and recent activity.
      </p>
    </section>

    @include('stats')
    </main>
    @endsection