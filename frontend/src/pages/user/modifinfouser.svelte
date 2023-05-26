<script>
  import { onMount } from "svelte";
  import { user } from "./../../stores/user";
  import { api } from "../../config";
  import { api_fetch, api_submit } from "../../function";

  let sites = [];
  let sections = [];

  onMount(async () => {
    sites = await api_fetch(api + "/get_sites.php");
    sections = await api_fetch(api + "/get_sections.php");

  })

</script>

<div class="modifinfo-container">

  {#if $user && parseInt($user.administrateur)}
  <a href="/admin/infoadmin"><button class="btnpage" type="submit">Retour</button></a>
  {:else if $user}
  <a href="/user/infouser"><button class="btnpage" type="submit">Retour</button></a>
  {/if}
  
  <h2 class="info-heading">Modification des informations utilisateurs</h2>
  <form method="POST" action={api + "/modifuser.php"} on:submit={api_submit(async (data) => {
    await user.set(data);
    window.history.pushState({}, '', '/');
  })}>
    <input name="nom" class="inputCenter" type="text" placeholder="Nom" required value={$user.nom}>
    <input name="prenom" class="inputCenter" type="text" placeholder="Prénom" required value={$user.prenom}>
    <input name="telephone" class="inputCenter" type="text" placeholder="Téléphone" required value={$user.telephone}>
    <input name="email" class="inputCenter" type="text" placeholder="Email" required value={$user.email}>

    <input name="date_naissance" class="inputCenter" type="date" placeholder="Date de naissance" required value={$user.date_naissance}>
    
    <select name="site" id="site" class="inputCenter">
        {#each sites as site}
          {#if site.id_site == $user.site.id_site}
            <option value={site.id_site} selected>{site.nom}</option>
          {:else}
            <option value={site.id_site}>{site.nom}</option>
          {/if}
        {/each}
    </select>

    <select name="section" id="section" class="inputCenter">
        {#each sections as section}
          {#if site.id_section == $user.section.id_section}
            <option value={section.id_section}>{section.nom}</option>
          {:else}
            <option value={section.id_section}>{section.nom}</option>
          {/if}
        {/each}
    </select>

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

