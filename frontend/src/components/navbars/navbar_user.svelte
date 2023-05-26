<script>
    import { user } from "../../stores/user"
    import { api_fetch } from "../../function";
    import { api } from "../../config";
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
          <a class="nav-link active" href="/user/infouser">Mes informations</a>
        </li>
      </ul>
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item dropdown">
          <a class="nav-link active" href="/trajet/mesTrajets">Mes trajets</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
        <a class="nav-link active" href="#" on:click={async () => {
          await user.set(null);
          await api_fetch(api + "/logout.php");
          window.history.pushState({}, '', '/');
        }}>Déconnexion</a></li>
      </ul>
    </div>
  </div>
</nav>
