<script>
    import { onDestroy, onMount } from "svelte";
    import { api } from "../../../config";
    import { api_fetch } from "../../../function";

    let sites = [];
    let table;

    onMount(async () => {
        sites =  await api_fetch(api + "/get_sites.php");

        setTimeout(() => {
            table = window['$']('#table_site').DataTable();
        }, 200)
    })

    onDestroy(() => {
        table.destroy();
    })
</script>

<div class="adminlist-container">
    <a href="/admin/infoadmin">
        <button class="btnpage" type="submit">Retour</button>
    </a>
    <h2 class="listeuser-body">Liste des sites :</h2>

        <table class="table-utilisateur" id="table_site">
            <thead>
                <tr>
                    <th>Nom du site</th>
                    <th>ville</th>
                </tr>
            </thead>
            <tbody>
                {#each sites as site}
                <tr>
                    <td>{site.nom}</td>
                    <td>{site.ville}</td>
                </tr>
                {/each}
            </tbody>
        </table>
</div>
