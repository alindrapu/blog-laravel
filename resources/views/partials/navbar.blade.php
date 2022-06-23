<nav class="navbar navbar-expand-lg navbar-dark bg-info">
  <div class="container">
    <a class="navbar-brand" href="/">Journeys Story</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ $active === 'home' ? 'active' : '' }}"href="/">home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $active === 'about' ? 'active' : '' }}" href="/about">about</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $active === 'journeys' ? 'active' : '' }}" href="/posts">journeys</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $active == 'cities' ? 'active' : '' }}" href="/cities">cities</a>
        </li>
      </ul>

      {{-- login - sign up --}}
      <ul class="navbar-nav ms-auto">
        @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Welcome, {{ auth()->user()->username }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-wtf"></i> my dashboard</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li>
                <form action="/logout" method="POST">
                  @csrf
                  <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> log out</button>
                </form>
              </li>
            </ul>
          </li>
        @else
          <li class="nav-item">
            <a class="nav-link {{ $active == 'login' ? 'active' : '' }}" href="/login"><i
                class="bi bi-box-arrow-in-right"></i> login</a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ $active == 'sign up' ? 'active' : '' }}" href="/signup"><i
                class="bi bi-box-arrow-in-up"></i> sign up</a>
          </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>
