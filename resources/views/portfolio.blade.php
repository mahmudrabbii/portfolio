<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="Portfolio website for Rabbi, a Computer Science and Engineering graduate."
    />
    <title>Rabbi | CSE Graduate Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Sora:wght@400;500;600;700&family=JetBrains+Mono:wght@500;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  </head>
  <body>
    <div class="ambient ambient-left" aria-hidden="true"></div>
    <div class="ambient ambient-right" aria-hidden="true"></div>

    <header class="topbar">
      <a href="#home" class="brand">Know About Me</a>
      <nav>
        <a href="#about">About</a>
        <a href="#skills">Skills</a>
        <a href="#projects">Projects</a>
        <a href="#education">Education</a>
        <a href="#query">Query</a>
        <a href="#contact">Contact</a>
      </nav>
    </header>

    <main id="home" class="container">
      <section class="hero section reveal">
        <p class="kicker">Computer Science and Engineering Graduate</p>
        <h1>Building reliable software products with clean architecture.</h1>
        <p class="intro">
          I design and develop practical applications using modern web tools and
          strong CS fundamentals and a user-friendly mindset.
        </p>
        <div class="hero-actions">
          <a href="#projects" class="btn btn-solid">View Projects</a>
          <a href="#contact" class="btn btn-outline">Contact Me</a>
        </div>
      </section>

      <section id="about" class="section card reveal">
        <div class="profile-block">
          <img
            src="{{ asset('assets/Mahmud.jpg') }}"
            alt="Rabbi profile photo"
          />
          <div>
            <h2>About Me</h2>
            <p>
              I am a CSE graduate focused on software engineering, full-stack
              development and scalable system design. I enjoy turning
              requirements into fast, maintainable, and production-ready
              software.
            </p>
            <br />
            <ul class="quick-facts">
              <li><strong>Location:</strong> Dhaka, Bangladesh</li>
              <li><strong>Open To:</strong> Software Engineer roles</li>
              <li><strong>Focus:</strong> Web App Development, System Design and Data Analytics</li>
            </ul>
          </div>
        </div>
      </section>

      <section id="skills" class="section reveal">
        <h2>Skills</h2>
        <div class="skills-grid">
          <article class="card skill-card">
            <h3>Programming</h3>
            <p>Python, Java, JavaScript</p>
          </article>
          <article class="card skill-card">
            <h3>Web Development</h3>
            <p>HTML, CSS, PHP, Laravel</p>
          </article>
          <article class="card skill-card">
            <h3>Database</h3>
            <p>PostgreSQL, MySQL</p>
          </article>
          <article class="card skill-card">
            <h3>Core CS</h3>
            <p>DSA, OOP, DBMS, System Analysis & Design</p>
          </article>
        </div>
      </section>

      <section id="projects" class="section reveal">
        <h2>Featured Projects</h2>
        <div class="projects-list">
          <article class="card project-card">
            <div class="project-head">
              <h3>Project Title</h3>
              <span>Full Stack</span>
            </div>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis aliquid, odit voluptatibus, placeat repellat eum iure, ea adipisci porro ut delectus inventore explicabo ipsum cumque natus. Ex quo architecto veniam.
            </p>
            <p class="muted">JavaScript, HTML, CSSL</p>
          </article>

          <article class="card project-card">
            <div class="project-head">
              <h3>Project Title</h3>
              <span>Machine Learning</span>
            </div>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio dolorem at alias. Deserunt nulla asperiores molestiae nam corrupti officiis optio, nemo, sapiente dolorem architecto nesciunt expedita sunt cum? Modi, nemo!
            </p>
            <p class="muted"> JavaScript, HTML, CSS</p>
          </article>

          <article class="card project-card">
            <div class="project-head">
              <h3>Project Title</h3>
              <span>Systems</span>
            </div>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat repellendus voluptates consequatur est iure, incidunt sint saepe eum ea nesciunt mollitia non vitae natus quidem doloribus consequuntur ullam laudantium cupiditate!
            </p>
            <p class="muted">JavaScript, HTML, CSS</p>
          </article>

          <article class="card project-card">
            <div class="project-head">
              <h3>Project Title</h3>
              <span>Systems</span>
            </div>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat repellendus voluptates consequatur est iure, incidunt sint saepe eum ea nesciunt mollitia non vitae natus quidem doloribus consequuntur ullam laudantium cupiditate!
            </p>
            <p class="muted">JavaScript, HTML, CSS</p>
          </article>
        </div>
      </section>
    <!--
      <section id="education" class="section reveal">
        <h2>Education and Certifications</h2>
        <div class="dual-grid">
          <article class="card">
            <h3>BSc in Computer Science and Engineering</h3>
            <p class="muted">2021 - 2025</p>
            <p>
              Completed core coursework in algorithms, software engineering,
              operating systems, and database management.
            </p>
          </article>
          <article class="card">
            <h3>Certifications</h3>
            <ul class="plain-list">
              <li>Web Development Bootcamp</li>
              <li>SQL for Data Analysis</li>
              <li>Introduction to Cloud Computing</li>
            </ul>
          </article>
        </div>
      </section>
    -->
      <section id="education" class="section reveal">
        <h2>Education and Certifications</h2>
        <div class="dual-grid">
          <article class="card">
            <h3>BSc in Computer Science and Engineering</h3>
            <p class="muted">2021 - 2025</p>
            <ul class="quick-facts">
              <li><strong>Major:</strong> Computer Science and Engineering</li>
              <li><strong>Minor:</strong> Management Information Systems</li>
              <li><strong>Institute:</strong> Independent University Bangladesh (IUB)</li>
            </ul>
          </article>
<!--
          <article class="card">
            <h3>Certifications</h3>
            <ul class="plain-list">
              <li>Web Development Bootcamp</li>
              <li>SQL for Data Analysis</li>
              <li>Introduction to Cloud Computing</li>
            </ul>
          </article>
          -->
        </div>
      </section>

      <section id="query" class="section card reveal">
        <h2>Send a Query</h2>
        <p class="muted">Fill out this form and I will get back to you soon.</p>
        <form class="query-form" action="#" method="post">
          <label for="query-email">Email</label>
          <input
            id="query-email"
            name="email"
            type="email"
            placeholder="yourname@email.com"
            required
          />

          <label for="query-contact">Contact</label>
          <input
            id="query-contact"
            name="contact"
            type="tel"
            placeholder="+8801XXXXXXXXX"
            required
          />

          <label for="query-description">Description</label>
          <textarea
            id="query-description"
            name="description"
            rows="5"
            placeholder="Write your message here"
            required
          ></textarea>

          <button type="submit" class="btn btn-solid">Submit Query</button>
        </form>
      </section>




      <section id="contact" class="section card reveal">
        <h2>Contact</h2>
        <p>
          In case you want to reach out and connect, feel free to email me or find me on GitHub and LinkedIn.
        </p>
        <div class="contact-grid">
          <a class="contact-link" href="mailto:mahmudrabbi0501@gmail.com">
            <span class="contact-icon" aria-hidden="true">
              <img src="{{ asset('assets/gmail logo.png') }}" alt="" />
            </span>
            <span class="contact-text">mahmudrabbi0501@gmail.com</span>
          </a>
          <a class="contact-link" href="https://github.com/mahmudrabbii" target="_blank" rel="noreferrer">
            <span class="contact-icon" aria-hidden="true">
              <img src="{{ asset('assets/github icon.png') }}" alt="" />
            </span>
            <span class="contact-text">github.com/mahmudrabbii</span>
          </a>
          <a
            class="contact-link"
            href="https://www.linkedin.com/in/mahmudrabbi"
            target="_blank"
            rel="noreferrer"
            >
            <span class="contact-icon" aria-hidden="true">
              <img src="{{ asset('assets/linked in icon.png') }}" alt="" />
            </span>
            <span class="contact-text">linkedin.com/in/mahmudrabbi</span></a
          >
        </div>
      </section>
    </main>

    <footer class="footer">
      <p>2026 Rabbi. Built for a sCSE Graduate Portfolio.</p>
    </footer>
  </body>
</html>
