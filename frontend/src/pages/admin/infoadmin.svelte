<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css">
<script>
<<<<<<< Updated upstream
    import {user} from "./../../stores/user"
</script>
<div class="test-container"></div>
  <div class="row test-container">
=======
    import { onDestroy, onMount } from "svelte";
    import { api_fetch } from "../../function";
    import { api } from "../../config";
    import { user } from "../../stores/user";
    let tablemessages;
    let messages = [];
    let sections = [];
    let users = [];
    let trajets = [];

    onMount(async () => {
        
        //listuser
        users = await api_fetch(api + "/get_users.php");
        //??
        window['$']('#table_user').DataTable({
            columns: [
                null,
                null,
                null,
                {orderable: false},
                {orderable: false},
            ]
         });
         //list messages
        messages = (await api_fetch(api + "/get_all_message.php")).slice(0,4);

        setTimeout(() => {
            tablemessages = window['$']('#table_user').DataTable({
                columns: [
                    null,
                    null,
                    null,
                    null,
                ]
            });
        }, 0)
        //list sections
        sections =  (await api_fetch(api + "/get_sections.php")).slice(0,4);

        setTimeout(() => {
            tablesections = window['$']('#table_section').DataTable();
        }, 200)
        //list trajets
        tabletrajets = window['$']('#table_user').DataTable({
            columns: [
                null,
                null,
                {orderable: false},
                {orderable: false},
            ]
         });


    })

    onDestroy(() => {
        tablemessages.destroy();
    })
</script>

<!--infouserconnected-->
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

<<<<<<< Updated upstream
    <!--tables-->
=======


<!--infouser-->
>>>>>>> Stashed changes
<div class="row">
    <div class="col adminlist-container">
        <div class="col">
            <h2>Liste des utilisateurs :</h2>
        </div>
        <div class="col">
            <a href="/admin/listeuser">
                <img src="/add.png" />
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
                </tr>
            </thead>
            <tbody>
            {#each users as user}
                <tr>
                    <td>
                        {user.nom}
                    </td>
                    <td>
                        {user.prenom}
                    </td>
                </tr>
            {/each}
            </tbody>
        </table>
    </div>
        <!--infotablemessages-->
    <div class="col adminlist-container">
        <div class="col">
            <h2>Liste des messages :</h2>
        </div>
        <div class="col">
            <a href="/admin/tools/adminallmessages">
                <img src="/add.png" />
            </a>
        </div>
        <form class="systeme-recherche" action="/recherche" method="get">
            <input class="recherche-user" type="text" name="q" placeholder="Recherche">
            <button class="btnpage" type="submit">Rechercher</button>
        </form>
        <table class="table-utilisateur">
            <thead>
                <tr>
                    <th>n°ARA expediteur</th>
                    <th>n°ARA receveur</th>
                    <th>Contenu</th>
                    <th>Date du message</th>
                </tr>
            </thead>
            <tbody>
                <!--ajouter 4 derniers messages-->
                {#each messages as message}
                <tr>
                    <td>{message.id_utilisateur_expediteur }</td>
                    <td>{message.id_utilisateur_destinataire}</td>
                    <td>{message.contenu}</td>
                    <td>{message.date_message}</td>
                </tr>
            {/each}
            </tbody>
        </table>
    </div>
</div>
<div class="row">
    <!--infotablesections-->
    <div class="col adminlist-container">
        <div class="col">
            <h2>Liste des sections :</h2>
        </div>
        <div class="col">
            <a href="/admin/tools/adminallsections">
                <img src="/add.png" />
              </a>
              
        </div>
    
    
        <form class="systeme-recherche" action="/recherche" method="get">
            <input class="recherche-user" type="text" name="q" placeholder="Recherche">
            <button class="btnpage" type="submit">sites</button>
        </form>

        <table class="table-utilisateur">
            <thead>
                <tr>
                    <th>Nom de section</th>
                </tr>
            </thead>
            <tbody>
                {#each sections as section}
            <tr>
                <td>{section.nom}</td>
            </tr>
            {/each}
            </tbody>
        </table>
    </div>
        <!--tabletrajets-->
    <div class="col adminlist-container">
        <div class="col">
            <h2>Liste des trajets :</h2>
        </div>
        <div class="col">
            <a href="/admin/tools/adminalltrajets">
                <img src="/add.png" />
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
  
  
  
  
  