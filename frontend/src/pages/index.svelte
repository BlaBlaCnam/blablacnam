<script>
    import {metatags} from '@roxi/routify'
    import { onMount } from "svelte";
    import { api_submit } from "../function";
    import { api } from "../config";

    metatags.title = 'My Routify app'
    metatags.description = 'Description coming soon...'

    let villes = [];
    let sites = [];

    onMount(async () => {
        villes = await api_fetch(api + "/get_villes.php");
        sites = await api_fetch(api + "/get_sites.php");

    })
</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<main class="container">
    <div class="row">
        <div class="justify-content-center row">
            <h2>Trouver le covoiturage qui correspond à vos besoin</h2>
            <p>Besoin d'un covoiturage pour se rendre dans un centre du CNAM? BLABLACNAM est là pour vous!</p>
            <h2></h2>
        </div>
    </div>
    <div class="row form-search">
        <h3 class="">Rechercher un trajet - Ville -> CNAM</h3>

        <form method="POST" action={api + "/get_trajets.php"} on:submit={api_submit(() => {
          window.history.pushState({}, '', '/trajet/resultTrajet');
        })}>
            <div class="row">
                <input type="hidden" name="retour" value="0">
                <div class="col">
                    <select name="ville" id="ville" class="inputCenter">
                        <option value="-1" disabled selected>Ville de départ</option>
                        {#each villes as ville}
                            <option value={ville.id_ville}>{ville.nom}</option>
                        {/each}
                    </select>
                </div>
                <div class="col">
                    <select name="site" id="site" class="inputCenter">
                        <option value="-1" disabled selected>CNAM d'arrivé</option>
                        {#each sites as site}
                            <option value={site.id_site}>{site.nom}</option>
                        {/each}
                    </select>
                </div>
                <div class="col">
                    <input type="date" placeholder="Date" required>
                </div>
                <div class="col">
                    <button type="submit">Rechercher</button>
                </div>
            </div>


        </form>
    </div>

    <div class="row form-search">
        <h3 class="">Rechercher un trajet - CNAM -> Ville</h3>
        <form>
            <div class="row">
                <div class="col">
                    <input type="text" placeholder="CNAM de départ" required>
                </div>
                <div class="col">
                    <input type="text" placeholder="Ville d'arrivée" required>
                </div>
                <div class="col">
                    <input type="date" placeholder="Date" required>
                </div>
                <div class="col">
                    <button type="submit">Rechercher</button>

                </div>
            </div>


        </form>
    </div>









</main>