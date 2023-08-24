<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('index')}}">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('index')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('pictures.index')}}">Quadri</a>
        </li>

        @if (!auth()->check())
        
        <li class="nav-item">
          <a class="nav-link" href="/login">Accedi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/register">Registrati</a>
        </li>
        
        @else
        
        <li class="nav-item">
          <a class="nav-link" href="{{route('users.profile')}}">Profilo Utente</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('pictures.create')}}">Aggiungi Quadro</a>
        </li>
        <li class="nav-item">
          <form action="/logout" method="post">
            @csrf
            <input type="submit" value="Logout">
          </form>
          @endif
        </li>

      </ul>
    </div>
  </div>
</nav>