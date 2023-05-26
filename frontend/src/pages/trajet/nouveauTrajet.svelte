<script>
  import { onMount } from "svelte";
  import { api_fetch, api_submit } from "../../function";
  import { api } from "../../config";
  import { empty } from "svelte/internal";


  let villes = [];
  let sites = [];

onMount(async () => {
  villes = await api_fetch(api + "/get_villes.php");
  sites = await api_fetch(api + "/get_sites.php");
})

 function enableDisableSelect2() {
      var select1 = document.getElementById("etape1");
      var select2 = document.getElementById("etape2");

      if (select1.value !== "") {
          select2.disabled = false;
      } else {
          select2.disabled = true;
          select2.selectedIndex = 0;
      }
  }

  function retour() {
    var retour = document.getElementById("retour");
    

    if (retour.value = 0)
    {
        
    }
    else
    {

    }
  }

</script>

<div class="newtrajet-container">
    <a href="/trajet/mesTrajets">
      <button class="btnpage" type="submit">Retour</button>
    </a>
    <h2 class="register-heading">Ajouter un nouveau trajet</h2>
    <form method="POST" action={api + "/add_trajet.php"} on:submit={api_submit(() => {
      window.history.pushState({}, '', '/trajet/mesTrajets');
    })}>

    <div class="label-input">
                  
    </div>

    <div class="label-input">
      <label for="date-input">Aller ou Retour :</label>
        <select name="retour" id="retour" class="inputCenter" required="required">
            <option value="0">Aller</option>
            <option value="1">Retour</option>
        </select>
    </div>

      <div class="label-input">
        <label for="date-input">Départ :</label>
        <select name="depart" id="depart" class="inputCenter" required="required">
            <option value="">Choissisez un départ</option>
            {#each villes as ville}
            <option value={ville.id_ville}>{ville.nom}</option>
            {/each}
        </select>
      </div>

      <div class="label-input">
        <label for="date-input">Etape 1 :</label>
        <select name="etape1" id="etape1" class="inputCenter" on:change={enableDisableSelect2}>
            <option value="">Choissisez une étape</option>
            {#each villes as ville}
            <option value={ville.id_ville}>{ville.nom}</option>
            {/each}
          </select>
     </div>

     <div class="label-input">
        <label for="date-input">Etape 2 :</label>
        <select name="etape2" id="etape2" class="inputCenter" disabled="disabled">
            <option value="">Choisissez une étape</option>
            {#each villes as ville}
            <option value={ville.id_ville}>{ville.nom}</option>
            {/each}
          </select>
     </div>

     <div class="label-input">
        <label for="date-input">Arrivé :</label>
        <select name="arrivee" id="arrivee" class="inputCenter" required="required">
            <option value="">Choisissez une arrivée</option>
            {#each villes as ville}
            <option value={ville.id_ville}>{ville.nom}</option>
            {/each}
          </select>
     </div>

     <div class="label-input">
      <label for="date-input">Places :</label>
        <input name="places" id="date-input" type="text" placeholder="Nombre de places" required="required">
      </div>

      <div class="label-input">
        <label for="date-input">Date :</label>
        <input name="date" id="date-input" required="required" class="inputCenter" type="datetime-local" placeholder="Date">
      </div>

      <button class="btnpage" type="submit" style="margin:auto;">Enregistrer</button>
    </form>
  </div>