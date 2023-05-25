<script>
    import { onMount } from "svelte";

    onMount(() => {
         window['$']('#table_user').DataTable({
            columns: [
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
    <h2 class="listeuser-body">Liste des utilisateurs :</h2>

        <table class="table-utilisateur" id="table_user">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Voir</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Smith</td>
                    <td>John</td>
                    <td>john.smith@example.com</td>
                    <td><p><img src="/eye.png"></p></td>
                    <td><p><img src="/bin.png"></p></td>
                </tr>
                <tr>
                    <td>Doe</td>
                    <td>Jane</td>
                    <td>jane.doe@example.com</td>
                    <td><p><img src="/eye.png"></p></td>
                    <td><p><img src="/bin.png"></p></td>
                </tr>
                <tr>
                    <td>Thomas</td>
                    <td>Nathan</td>
                    <td>NathanThomasAnalDestroyers@example.com</td>
                    <td><p><img src="/eye.png"></p></td>
                    <td><p><img src="/bin.png"></p></td>
                </tr>
                <tr>
                    <td>caca</td>
                    <td>Nathan</td>
                    <td>NathanThomasAnalDestroyer@example.com</td>
                    <td><p><img src="/eye.png"></p></td>
                    <td><p><img src="/bin.png"></p></td>
                </tr>
            </tbody>
        </table>
</div>
