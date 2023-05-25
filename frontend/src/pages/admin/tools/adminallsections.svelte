<script>
    import { onMount } from "svelte";

    onMount(() => {
         window['$']('#table_user').DataTable({
            columns: [
                null,
                {orderable: false},
                {orderable: false},
            ]
         });
    })

</script>

<div class="adminlist-container">
    <a href="/admin/accueiladmin">
        <button class="btnpage" type="submit">Retour</button>
    </a>
    <h2 class="listeuser-body">Liste des sections :</h2>

    <table class="table-utilisateur" id="table_user">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Voir</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Informatique</td>
                <td><p><img src="/eye.png"></p></td>
                <td><p><img src="/bin.png"></p></td>
            </tr>
            <tr>
                <td>Comptabilité</td>
                <td><p><img src="/eye.png"></p></td>
                <td><p><img src="/bin.png"></p></td>
            </tr>
            <tr>
                <td>Pornologie</td>
                <td><p><img src="/eye.png"></p></td>
                <td><p><img src="/bin.png"></p></td>
            </tr>
        </tbody>
    </table>
</div>