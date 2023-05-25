<script>
  import { onMount } from "svelte";
  import { api_submit } from "../../function";
  import { api } from "../../config";


  let villes = [];

onMount(async () => {
  villes = await api_fetch(api + "/get_villes.php");
})

</script>

<div class="newtrajet-container">
    <a href="/trajet/mesTrajets">
      <button class="btnpage" type="submit">Retour</button>
    </a>
    <h2 class="register-heading">Ajouter un nouveau trajet</h2>
    <form>

    <div class="label-input">
                  
    </div>

      <div class="label-input">
        <label for="date-input">Départ :</label>
        <select class="inputCenter" required>
            <option value="-1" disabled selected>Choissisez un départ</option>
            {#each villes as ville}
            <option value={ville.id_ville}>{ville.nom}</option>
            {/each}
        </select>
      </div>

      <div class="label-input">
        <label for="date-input">Etape 1 :</label>
        <select class="inputCenter" required>
            <option value="-1" disabled selected>Choissisez une étape</option>
            {#each villes as ville}
            <option value={ville.id_ville}>{ville.nom}</option>
            {/each}
          </select>
     </div>

     <div class="label-input">
        <label for="date-input">Etape 2 :</label>
        <select class="inputCenter" required>
            <option value="-1" disabled selected>Choisissez une étape</option>
            {#each villes as ville}
            <option value={ville.id_ville}>{ville.nom}</option>
            {/each}
          </select>
     </div>

     <div class="label-input">
        <label for="date-input">Arrivé :</label>
        <select class="inputCenter" required>
            <option value="-1" disabled selected>Choisissez une arrivée</option>
            {#each villes as ville}
            <option value={ville.id_ville}>{ville.nom}</option>
            {/each}
          </select>
     </div>

      <div class="label-input">
        <label for="date-input">Date :</label>
        <input id="date-input" class="inputCenter" type="date" placeholder="Date">
      </div>
      <div class="label-input">
        <label for="heure-input">Heure :</label>
        <input id="heure-input" class="inputCenter" type="time" placeholder="Heure">
      </div>

      <button class="btnpage" type="submit" style="margin:auto;">Enregistrer</button>
    </form>
  </div>
  