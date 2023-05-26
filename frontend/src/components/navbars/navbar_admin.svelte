<script>
    import { api_fetch } from "../../function";
    import { api } from "../../config";
    import { user } from "../../stores/user";
</script>

<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    <div class="container-fluid">
      <a class="navbar-brand" href="/"><img src="/BLABLACNAM.png" class="navbar-logo" /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">

          <li class="nav-item">
            <a class="nav-link active" href="/admin/infoadmin">Mes informations</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Administrative tools
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/admin/listeuser">Users</a></li>
              <li><a class="dropdown-item" href="/admin/tools/adminallara">No ARA</a></li>
              <li><a class="dropdown-item" href="/admin/tools/adminallvilles">Villes</a></li>
              <li><a class="dropdown-item" href="/admin/tools/adminallmessages">Messages</a></li>
              <li><a class="dropdown-item" href="/admin/tools/adminallsections">Sections</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/admin/tools/adminallsites">Sites</a></li>
              <li><a class="dropdown-item" href="/admin/tools/adminalltrajets">Trajets</a></li>
            </ul>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item band-admin">
            <a class="nav-link active color-band-admin" href="#">administrateur</a>
          </li>
          <li class="nav-item dropdown band-admin">
            <a class="dropdown-toggle nav-link active" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">{$user.prenom}</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#" on:click={async () => {
                await user.set(null);
                await api_fetch(api + "/logout.php");
                window.history.pushState({}, '', '/');
              }}>Déconnexion</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
</nav>