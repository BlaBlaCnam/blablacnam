<script>
 import { user } from "./../../stores/user";
</script>

<div class="modifinfo-container">

  {#if $user && parseInt($user.administrateur)}
  <a href="/admin/infoadmin"><button class="btnpage" type="submit">Retour</button></a>
  {:else if $user}
  <a href="/user/infouser"><button class="btnpage" type="submit">Retour</button></a>
  {/if}
  
  <h2 class="info-heading">Modification des informations utilisateurs</h2>
  <form>
    <input class="inputCenter" type="text" placeholder="Nom" required>
    <input class="inputCenter" type="text" placeholder="Prénom" required>
    <input class="inputCenter" type="text" placeholder="Téléphone" required>
    <input class="inputCenter" type="date" placeholder="Date de naissance" required>
    <input class="inputCenter" type="text" placeholder="Site de formation" required>

    <div class="row">
      <div class="col-md">
        <div class="bouton-modifpassword">
          <button class="btnpage" type="submit">Valider</button>     
          <a href="/identification/modifpassword">
            <button class="btnpage">Modifier mot de passe</button>
          </a>
        </div>
      </div>
    </div>
  </form>
</div>

