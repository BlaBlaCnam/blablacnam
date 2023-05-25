<script>
    import { onDestroy, onMount } from "svelte";
    import { api_fetch } from "../../../function";
    import { api } from "../../../config";

    let aras = [];
    let table;

    onMount(async () => {
        aras = await api_fetch(api + "/get_ara.php");
        setTimeout(() => {
            table = window['$']('#table_aras').DataTable();
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
    <h2 class="listeuser-body">Liste des numéro ARA :</h2>

        <table class="table-utilisateur" id="table_aras">
            <thead>
                <tr>
                    <th>N°ara</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                </tr>
            </thead>
            <tbody>
                {#each aras as ara}
                <tr>
                    <td>{ara.id_ara}</td>
                    <td>{ara.nom}</td>
                    <td>{ara.prenom}</td>
                </tr>
                {/each}
            </tbody>
        </table>
</div>
