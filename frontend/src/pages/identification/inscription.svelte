<script>
    import { onMount } from "svelte";
    import { api_submit } from "../../function";
    import { api } from "../../config";

    
    let sites = [];
    let sections = [];

  onMount(async () => {
    sites = await api_fetch(api + "/get_sites.php");
    sections = await api_fetch(api + "/get_sections.php");

  })

</script>

<div class="register-container">
    <img src="/BLABLACNAM.png" alt="Logo" class="logo">
    <h2 class="register-heading">Inscription</h2>
    <form method="POST" action={api + "/register.php"} on:submit={api_submit(() => {
      window.history.pushState({}, '', '/identification/connexion');
    })}>
      <input name="id_ara" class="inputCenter" type="text" placeholder="Numéro ARA" required />
      <input name="mail" class="inputCenter" type="email" placeholder="Adresse e-mail" required />
      <input name="phone" class="inputCenter" type="tel" placeholder="Numéro de téléphone" required />
      <input name="date_naissance" class="inputCenter" type="date" placeholder="Date de naissance" />
  
      <select name="site" id="site" class="inputCenter">
                <option value="-1" disabled selected>Choisissez un site</option>
        {#each sites as site}
        <option value={site.id_site}>{site.nom}</option>
        {/each}
      </select>
  
      <select name="section" id="section" class="inputCenter">
        <option value="" disabled selected>Choisissez une section</option>
        {#each sections as section}
        <option value={section.id_section}>{section.nom}</option>
        {/each}
      </select>

      <input name="pw" class="inputCenter" type="password" placeholder="Mot de passe" required>
  
      <button type="submit">S'inscrire</button>
    </form>
    <div class="login-link">
      <p>Déjà membre ? <a href="/identification/connexion">Se connecter</a></p>
    </div>
  </div>
  