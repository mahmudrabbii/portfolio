    <header class="topbar">
      <a href="{{ route('home') }}" class="brand">Know About Me</a>
      <div class="topbar-right">
        <nav>
                  
          <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
          <a href="{{ route('skills') }}" class="{{ request()->routeIs('skills') ? 'active' : '' }}">Skills</a>
          <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">Dashboard</a>    
          <a href="{{ route('projects') }}" class="{{ request()->routeIs('projects') ? 'active' : '' }}">Projects</a>
          <a href="{{ route('education') }}" class="{{ request()->routeIs('education') ? 'active' : '' }}">Education</a>
          <a href="{{ route('query') }}" class="{{ request()->routeIs('query') ? 'active' : '' }}">Query</a>
          <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
       
 <!--
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('skills') }}">Skills</a>
        <a href="{{ route('projects') }}">Projects</a>
        <a href="{{ route('education') }}">Education</a>
        <a href="{{ route('query') }}">Query</a>
        <a href="{{ route('contact') }}">Contact</a>

         -->
        </nav>


        <div class="top-icons" aria-label="Quick social links">
          <a
            class="top-icon-link"
            href="mailto:mahmudrabbi0501@gmail.com"
            title="Email"
            aria-label="Send email"
          >
            <img src="{{ asset('assets/gmail logo.png') }}" alt="" />
          </a>
          <a
            class="top-icon-link"
            href="https://github.com/mahmudrabbii"
            target="_blank"
            rel="noreferrer"
            title="GitHub"
            aria-label="Open GitHub profile"
          >
            <img src="{{ asset('assets/github icon.png') }}" alt="" />
          </a>
          <a
            class="top-icon-link"
            href="https://www.linkedin.com/in/mahmudrabbi"
            target="_blank"
            rel="noreferrer"
            title="LinkedIn"
            aria-label="Open LinkedIn profile"
          >
            <img src="{{ asset('assets/linked in icon.png') }}" alt="" />
          </a>
        </div>
      </div>
    </header>