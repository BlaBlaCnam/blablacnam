<script>
    import { onMount } from "svelte";

    onMount(() => {
         window['$']('#table_user').DataTable({
            columns: [
                null,
                null,
                null,
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
    <h2 class="listeuser-body">Liste des messages :</h2>

        <table class="table-utilisateur" id="table_user">
            <thead>
                <tr>
                    <th>n°ARA expediteur</th>
                    <th>n°ARA receveur</th>
                    <th>Contenu</th>
                    <th>Date du message</th>
                    <th>Voir</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Smith</td>
                    <td>John</td>
                    <td>hello world</td>
                    <td>20/10/2019</td>
                    <td><p><img src="/eye.png"></p></td>
                    <td><p><img src="/bin.png"></p></td>
                </tr>
                <tr>
                    <td>Doe</td>
                    <td>Jane</td>
                    <td>very useful message</td>
                    <td>20/10/2019</td>
                    <td><p><img src="/eye.png"></p></td>
                    <td><p><img src="/bin.png"></p></td>
                </tr>
            </tbody>
        </table>
</div>