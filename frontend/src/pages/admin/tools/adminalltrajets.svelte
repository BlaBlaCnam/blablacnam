<script>
    import { onDestroy, onMount } from "svelte";

    let table;

    onMount(() => {

         table = window['$']('#table_user').DataTable({
            columns: [
                null,
                null,
                {orderable: false},
                {orderable: false},
            ]
         });
    })

    onDestroy(() => {
        table.destroy();
    })

</script>

<div class="adminlist-container">
    <a href="/admin/infoadmin">
        <button class="btnpage" type="submit">Retour</button>
    </a>
    <h2 class="listeuser-body">Liste des trajets :</h2>

        <table class="table-utilisateur" id="table_user">
            <thead>
                <tr>
                    <th>Départ</th>
                    <th>Destination</th>
                    <th>Date</th>
                    <th>Nombre de places</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>CUM Lyon</td>
                    <td>CNAM Saint etienne</td>
                    <td><p><img src="/eye.png"></p></td>
                    <td><p><img src="/bin.png"></p></td>
                </tr>
                <tr>
                    <td>CNAM Saint Etienne</td>
                    <td>CUM Lyon</td>
                    <td><p><img src="/eye.png"></p></td>
                    <td><p><img src="/bin.png"></p></td>
                </tr>
            </tbody>
        </table>
</div>
