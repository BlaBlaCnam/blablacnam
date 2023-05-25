<script>

    import { api } from "./../../config";
    import { api_submit } from "../../function";
    import { user } from "../../stores/user";

</script>
<div class="container">
    <div class="row">
        <form method="POST" action={api + "/delete_current_user.php"} on:submit={api_submit(async () => {
            await user.set(null);
            alert ("Compte supprimé avec succes!");
            window.history.pushState({}, '', '/identification/connexion');
        })}>
            <input class="inputCenter" type="password" placeholder="Mot de passe" required>
            <input type="submit" />
        </form>
    </div>
</div>