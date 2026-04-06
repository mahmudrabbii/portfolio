<section id="stats" class="section reveal">
  <div class="stats-heading">
    <h2>Portfolio Statistics</h2>
    <p class="muted">For now these data are static.</p>
  </div>

  <div class="stats-grid">
    <article class="card stats-card">
      <p class="stats-label">Total Projects</p>
      <p class="stats-value">{{ $totalProjects ?? 0 }}</p>
    </article>
    <article class="card stats-card">
      <p class="stats-label">Total Skills</p>
      <p class="stats-value">{{ $totalSkills ?? 0 }}</p>
    </article>
    <article class="card stats-card">
      <p class="stats-label">Contact Messages Received</p>
      <p class="stats-value">{{ $totalMessages ?? 0 }}</p>
    </article>
    <article class="card stats-card">
      <p class="stats-label">Visitors (Analytics)</p>
      <p class="stats-value">{{ $totalVisitors ?? 0 }}</p>
    </article>
  </div>

  <div class="widgets-grid">
    <article class="card widget-card">
      <h3>📊 Projects completed</h3>
      <p class="widget-value">{{ $totalProjects ?? 0 }} completed projects</p>
      <!-- <p class="muted">5 projects completed this month (static)</p> -->
      <p class="muted">Last update: April 2026(static)</p>
    </article>

    <article class="card widget-card">
      <h3>📩 Messages received</h3>
      <p class="widget-value">{{ $totalMessages ?? 0 }} total messages</p>
      <p class="muted">11 this month (static)</p>
    </article>

    <article class="card widget-card">
      <h3>⭐ Top skills</h3>
      <ul class="widget-list">
        <li>Laravel</li>
        <li>PHP</li>
        <li>JavaScript</li>
        <li>MySQL</li>
      </ul>
    </article>

<article class="card widget-card">
    <h3>📈 Activity graph</h3>
    @php
      $safeMaxVisitors = max((int) ($maxVisitors ?? 0), 1);
    @endphp
    <div class="activity-graph" role="img" aria-label="Daily visitor graph. Hover over bars to see details.">
      @forelse($visitorData as $data)
        @php
          $dateLabel = \Carbon\Carbon::parse($data->visit_date)->format('d M Y');
          $visitors = (int) $data->visitors;
          $barHeight = max(($visitors / $safeMaxVisitors) * 100, 6);
        @endphp
        <span
          class="activity-bar"
          style="--bar-height: {{ $barHeight }}%;"
          title="{{ $dateLabel }}: {{ $visitors }} visitors"
          data-tooltip="{{ $dateLabel }} - {{ $visitors }} visitors"
          tabindex="0"
          aria-label="{{ $dateLabel }}: {{ $visitors }} visitors">
        </span>
      @empty
        <p class="muted">No visitor data found yet.</p>
      @endforelse
    </div>
    <p class="muted">Weekly Visitor Graph</p>
</article>
</div>

<!--

    <article class="card widget-card">
      <h3>📈 Activity graph</h3>
      <div class="activity-graph" role="img" aria-label="Static weekly activity graph">
        <span style="height: 26%"></span>
        <span style="height: 48%"></span>
        <span style="height: 35%"></span>
        <span style="height: 62%"></span>
        <span style="height: 82%"></span>
        <span style="height: 58%"></span>
        <span style="height: 72%"></span>
      </div>
      <p class="muted">Weekly Visitor Graph (static)</p>
    </article>
  </div>
 
  <article class="card recent-queries">
    <h3>Recent Queries</h3>
    <ul class="widget-list">
      <li>"Can we build a booking dashboard?" - Apr 03, 2026</li>
      <li>"Need portfolio customization for hiring." - Apr 02, 2026</li>
      <li>"Interested in collaborating on a Laravel app." - Apr 01, 2026</li>
    </ul>
  </article>
  -->
</section>