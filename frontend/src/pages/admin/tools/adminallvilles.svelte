<script>
    import { onDestroy, onMount } from "svelte";
    import { api_fetch } from "../../../function";
    import { api } from "../../../config";

    let villes = [];
    let table;

    onMount(async () => {
        villes = await api_fetch(api + "/get_villes.php");
        setTimeout(() => {
            table = window['$']('#table_ville').DataTable();
        }, 200);
    })


    onDestroy(() => {
        table.destroy();
    })
</script>

<div class="adminlist-container">
    <a href="/admin/infoadmin">
        <button class="btnpage" type="submit">Retour</button>
    </a>
    <h2 class="listeuser-body">Liste des villes :</h2>

        <table class="table-utilisateur" id="table_ville">
            <thead>
                <tr>
                    <th>Nom de la ville</th>
                </tr>
            </thead>
            <tbody>
                {#each villes as ville}
                  <tr>
                    <td>{ville.nom}</td>
                </tr>  
                {/each}
            </tbody>
        </table>
</div>
