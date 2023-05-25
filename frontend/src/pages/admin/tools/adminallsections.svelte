<script>
    import { onDestroy, onMount } from "svelte";
    import { api } from "../../../config";
    import { api_fetch } from "../../../function";

    let sections = [];
    let table;

    onMount(async () => {
        sections =  await api_fetch(api + "/get_sections.php");

        setTimeout(() => {
            table = window['$']('#table_section').DataTable();
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
    <h2 class="listeuser-body">Liste des sections :</h2>

    <table class="table-utilisateur" id="table_section">
        <thead>
            <tr>
                <th>Nom</th>
            </tr>
        </thead>
        <tbody>
            {#each sections as section}
            <tr>
                <td>{section.nom}</td>
            </tr>
            {/each}
        </tbody>
    </table>
</div>