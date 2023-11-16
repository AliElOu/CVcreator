<nav class="navbar navbar-expand-lg navbar-light bg-light px-2">
    <a class="navbar-brand" href="{{route("home")}}">CV Creator</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link"  href="">Accueil</a>
          </li>
            <li class="nav-item">
              <a class="nav-link"  href="">Tous les profils</a> 
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="">Ajouter profile</a>
        </li>
                  <li class="nav-item">
            <a class="nav-link"  href="">Publications</a>
        </li>
      </ul>
    </div>
    <a class="btn btn-danger"  href="{{ route('auth.logout') }}">Déconnexion</a>
  </nav>