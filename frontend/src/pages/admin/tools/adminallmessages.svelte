<script>
    import { onDestroy, onMount } from "svelte";
    import { api_fetch } from "../../../function";
    import { api } from "../../../config";
    let table;
    let messages = [];

    onMount(async () => {
        messages = await api_fetch(api + "/get_all_message.php");
        setTimeout(() => {
            table = window['$']('#table_user').DataTable({
                columns: [
                    null,
                    null,
                    null,
                    null,
                    {orderable: false},
                    {orderable: false},
                ]
            });
        }, 0)

    })

    onDestroy(() => {
        table.destroy();
    })



</script>

<div class="adminlist-container">
    <a href="/admin/infoadmin">
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
            {#each messages as message}
                <tr>
                    <td>{message.id_utilisateur_expediteur }</td>
                    <td>{message.id_utilisateur_destinataire}</td>
                    <td>{message.contenu}</td>
                    <td>{message.date_message}</td>
                    <td><a href="/messagerie/message/{message.id_message}"><img src="/eye.png"></a></td>
                    <td><a href="#" class="pomme" on:click={async function() {

                        table
                            .row(window['$'](this).parent().parent())
                            .remove();

                        await api_fetch(api + "/delete_message.php?id=" + message.id_message);

                        alert("Message supprimé avec succès!");        
                        
                        table.draw();


                    }}><img src="/bin.png"></a></td>
                </tr>
            {/each}


            </tbody>
        </table>
</div>