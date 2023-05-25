<script>
    import { user } from "./../../stores/user";
   </script>

<div class="newtrajet-container">
    {#if $user && parseInt($user.administrateur)}
    <a href="/admin/infoadmin"><button class="btnpage" type="submit">Retour</button></a>
    {:else if $user}
    <a href="/user/infouser"><button class="btnpage" type="submit">Retour</button></a>
    {/if}
    <h2 class="login-heading">Mes Trajets</h2>
    <a href="/trajet/nouveauTrajet"><button class="btnNewTrajet">Nouveau trajet</button></a>

    <table class="table">
      <thead>
        <tr>
          <th>Date</th>
          <th>Lieu de départ</th>
          <th>Lieu d'arrivée</th>
          <th>Details</th>
          <th>Supprimer</th>
        </tr>
      </thead>
      <tbody>
      
        <tr>
          <td>01/05/2023</td>
          <td>Paris</td>
          <td>Lyon</td>
          <td><p><img src="/eye.png"></p></td>
          <td><p><img src="/bin.png"></p></td>
        </tr>
        <tr>
          <td>05/05/2023</td>
          <td>Lyon</td>
          <td>Marseille</td>
          <td><p><img src="/eye.png"></p></td>
          <td><p><img src="/bin.png"></p></td>
        </tr>
     
      </tbody>
    </table>
  </div>
  