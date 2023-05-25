<script>
  import {api} from  "../../config"
    import { api_submit } from "../../function";
</script>

<div class="center-page">
    <div class="password-container">
      <a href="/user/modifinfouser">
        <button class="btnpage" type="submit">Retour</button>
      </a>
        <h2 class="register-heading">Modifier le mot de passe</h2>
        <form method="POST" action={api + "/resetpw.php"} on:submit={api_submit(() => {
           window.history.pushState({}, '', '/identification/connexion');
        })}>
          <label for="currentPassword">Mot de passe actuel :</label>
          <input name="old_pw" type="password" id="currentPassword" required>
          
          <label for="newPassword">Nouveau mot de passe :</label>
          <input name="pw1" type="password" id="newPassword" required>
          
          <label for="confirmPassword">Confirmer le nouveau mot de passe :</label>
          <input name="pw2" type="password" id="confirmPassword" required>
          
          <div class="row">
            <div class="col-md-8">
              <div class="bouton-modifpassword">       
                <button class="btnpage" type="submit">Modifier</button>
              </div>
            </div>
          </div>
          
        </form>
    </div>
</div>



