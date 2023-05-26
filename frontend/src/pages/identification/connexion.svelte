<script>
  import {api_submit, set_cookie, get_cookie} from "./../../function";
  import {api} from "../../config";
  import {user} from "../../stores/user";
  
  user.subscribe((e) => {
    console.log("NEW USR!!", e);
  })
</script>

<div class="login-container wave">
    <img src="/BLABLACNAM.png" alt="Logo" class="logo">
    <h2 class="login-heading">Connexion</h2>
    <form action="{api}/login.php" on:submit={api_submit(async (data) => {

        await user.set(data);
        set_cookie("PHPSESSID", $user.PHPSESSID);
        alert ("Login success for " + data.prenom);
        window.history.pushState({}, '', '/');

      })}>
      <input name="user" type="text" placeholder="Numéro ARA" required>
      <input name="pw" type="password" placeholder="Mot de passe" required>
      <button type="submit">Se connecter</button>
    </form>
    <div class="register-link">
      <p>Vous n'avez pas de compte ? <a href="/identification/inscription">S'inscrire</a></p>
    </div>
  </div>
  

  
  