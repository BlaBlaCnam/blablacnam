<script>
    import { onMount } from "svelte";
    import { api_submit } from "../../function";
    import { api } from "../../config";

    let users = [];

    onMount(async () => {
        users = await api_fetch(api + "/get_users.php");
    })
</script>

<div class="row message-user">
    <form method="POST" action={api + "/post_message.php"} on:submit={api_submit(() => {
        window.history.pushState({}, '', '/messagerie/messagerie');
      })}>
        <select name="destinataire" class="inputCenter" required>
            <option value="-1" disabled selected>Choissisez un destinataire</option>
            {#each users as user}
                <option value={user.id_utilisateur}>{user.nom}-{user.prenom}</option>
            {/each}
        </select>

        <label>Mon message:</label>
        <input class="inputCenter" id = "contenu" name="contenu" type="text" placeholder="Entrer votre message" required>
        <div class="row">
            <div class="col-md">
                <div class="bouton-modifpassword">
                    <button class="btnpage" type="submit">Valider</button>
                </div>
            </div>
        </div>
    </form>
</div>