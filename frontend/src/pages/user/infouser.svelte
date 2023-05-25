<script>
  import {user} from "./../../stores/user"
</script>

<div class="test-container">
  <div class="row">
    <div class="col-md-6">
      <div class="info-container">
        <h2 class="info-heading">Information utilisateurs</h2>
        <p> Nom: {$user ? $user.nom : ''}</p>
        <p> Prénom: {$user ? $user.prenom : ''}</p>
        <p> Téléphone: {$user ? $user.telephone : ''}</p>
        <p> Date de Naissance: {$user ? $user.date_naissance : ''}</p>
        <p> Site de formation:{$user ? $user.site.nom : ''} </p>
        <p> Section:{$user ? $user.section.nom : ''} </p>
      </div>
    </div>

    <div class="col-md-4">
      <div class="row">
        <div class="gestion-container">
          <h3 style="text-align: center;">Gestion de mon profil</h3>
          <div class="bouton-user">
            <div class="col-md-4">
              <a href="/user/modifinfouser"><button class="btnpage" > Modifier mon profil</button></a>
            </div>
            <div class="col-md-4">
              <a href="/trajet/mesTrajets"><button class="btnpage">Voir mes trajets</button></a>
            </div>
            <div class="col-md-4">
              <p class="message-user"><img src="/message-icon-png-14932.png"></p>
            </div>
            <div class="col-md-4">
              <a href="/user/deleteaccount" class="btnpage">Supprimer le compte</a>
            </div>
          </div>
        </div>
        
      </div>
      <div class="row">
        <div>
          <img class="img-accueil" src="/voiturerouge.jpg" alt="">

        </div>

      </div>

    </div>
  </div>
  </div>





