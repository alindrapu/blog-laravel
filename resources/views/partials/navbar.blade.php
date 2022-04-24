<nav class="navbar navbar-expand-lg navbar-dark bg-info">
  <div class="container">
    <a class="navbar-brand" href="/">alindra's blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ($title === "home" ? 'active' : '') }}"href="/">home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "about" ? 'active' : '') }}" href="/about">about</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "blog" ? 'active' : '') }}" href="/posts">blog</a>
        </li>
      </ul>
    </div>
  </div>
</nav>