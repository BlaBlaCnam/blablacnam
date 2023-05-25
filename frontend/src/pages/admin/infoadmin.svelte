<<<<<<< Updated upstream
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css">

<div class="test-container">
=======
<script>
    import {user} from "./../../stores/user"
  </script>
  
  <div class="row test-container">
>>>>>>> Stashed changes
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



    <!--tables-->
  <div class="row">
    <div class="col adminlist-container">
        <div class="col">
            <h2>Liste des utilisateurs :</h2>
        </div>
        <div class="col">
            <a href="/admin/tools/adminallusers">
                <img src="/add.png" >
              </a>
              
        </div>
    
    
        <form class="systeme-recherche" action="/recherche" method="get">
            <input class="recherche-user" type="text" name="q" placeholder="Recherche">
            <button class="btnpage" type="submit">Rechercher</button>
        </form>

        <table class="table-utilisateur">
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
        <!--table2-->
    <div class="col adminlist-container">
        <div class="col">
            <h2>Liste des messages :</h2>
        </div>
        <div class="col">
            <a href="/admin/tools/adminallmessages">
                <img src="/add.png" >
            </a>
        </div>
        <form class="systeme-recherche" action="/recherche" method="get">
            <input class="recherche-user" type="text" name="q" placeholder="Recherche">
            <button class="btnpage" type="submit">Rechercher</button>
        </form>
        <table class="table-utilisateur">
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
</div> 
<div class="row">
    <div class="col adminlist-container">
        <div class="col">
            <h2>Liste des utilisateurs :</h2>
        </div>
        <div class="col">
            <a href="/admin/tools/adminallusers">
                <img src="/add.png" >
              </a>
              
        </div>
    
    
        <form class="systeme-recherche" action="/recherche" method="get">
            <input class="recherche-user" type="text" name="q" placeholder="Recherche">
            <button class="btnpage" type="submit">Rechercher</button>
        </form>

        <table class="table-utilisateur">
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
        <!--table2-->
    <div class="col adminlist-container">
        <div class="col">
            <h2>Liste des messages :</h2>
        </div>
        <div class="col">
            <a href="/admin/tools/adminallmessages">
                <img src="/add.png" >
            </a>
        </div>
        <form class="systeme-recherche" action="/recherche" method="get">
            <input class="recherche-user" type="text" name="q" placeholder="Recherche">
            <button class="btnpage" type="submit">Rechercher</button>
        </form>
        <table class="table-utilisateur">
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
</div> 
  
  
  
  
  