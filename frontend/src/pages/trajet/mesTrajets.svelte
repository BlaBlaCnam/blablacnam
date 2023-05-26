<script>
    import { user } from "./../../stores/user";
    import { onMount } from "svelte";
    import { api_fetch } from "../../function";
    import { api } from "../../config";

    let trajets = [];

    onMount(async () => {
        trajets = await api_fetch(api + "/get_mesTrajets.php");
        console.log(trajets)
    })


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
              <th>Lieu de départ</th>
              <th>Lieu d'arrivée</th>
              <th>Date de départ</th>
              <th>Heure de départ</th>
              <th>Nombre de places</th>
          </tr>
      </thead>
      <tbody>
          {#each trajets as trajet}
              <tr>
                  <td>{trajet.depart}</td>
                  <td>{trajet.arrivee}</td>
                  <td>{new Date(trajet.date_trajet).toLocaleDateString()}</td>
                  <td>{new Date(trajet.date_trajet).toLocaleTimeString()}</td>
                  <td>{trajet.places}</td>
              </tr>
          {/each}
      </tbody>
    </table>
  </div>
  