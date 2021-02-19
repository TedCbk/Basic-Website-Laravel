<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Acme</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse justify-content-between" id="navbarsExampleDefault">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item {{Request::is('/') ? 'active' : '' }}">
            <a class="nav-link" href="/">Accueil</a>
          </li>
          <li class="nav-item {{Request::is('about') ? 'active' : '' }}">
            <a class="nav-link" href="/about">A propos</a>
          </li>
          <li class="nav-item {{Request::is('contact') ? 'active' : '' }}">
            <a class="nav-link" href="/contact">Contact</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2 mr-2" type="search" placeholder="Rechercher" aria-label="Rechercher">
          <button class="btn btn-outline-success" type="submit">Rechercher</button>
        </form>
      </div>
    </div>
  </nav>