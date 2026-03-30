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