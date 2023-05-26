<script>
    import { onDestroy, onMount } from "svelte";
    import { api_fetch } from "../../function";
    import { api } from "../../config";
    let table;
    let messagesUser = [];


    onMount(async () => {
        messagesUser = await api_fetch(api + "/get_message_by_user.php");
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
</script>


<div class="result-container">

    <a href="/user/infouser">
        <button  id="refresh" class="btnpage" type="submit">Retour</button>
    </a>
    <h2 class="listeuser-body">Messagerie :</h2>

    <table class="table-utilisateur" id="table_user">
        <thead>
        <tr>
            <th>n°ARA expediteur</th>
            <th>n°ARA receveur</th>
            <th>Contenu</th>
            <th>Date du message</th>
            <th>Voir</th>
        </tr>
        </thead>
        <tbody>
        {#each messagesUser as message}
            <tr>
                <td>{message.id_utilisateur_expediteur }</td>
                <td>{message.id_utilisateur_destinataire}</td>
                <td>{message.contenu}</td>
                <td>{message.date_message}</td>
                <td><p><img src="/eye.png"></p></td>
            </tr>
        {/each}


        </tbody>
    </table>
</div>