<div class="adminlist-container">
    <div class="row">
        <div class="col">
            <h2>Liste des utilisateurs :</h2>
        </div>
        <div class="col">
            <a href="/admin/tools/adminallmessages">
                <img src="/add.png" >
              </a>
              
        </div>
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