<div class="listeuser-container">
    <h2 class="listeuser-body">Liste des messages :</h2>
    <form class="systeme-recherche" action="/recherche" method="get">
        <input class="recherche-user" type="text" name="q" placeholder="Recherche">
        <button class="bouton-recherche" type="submit">Rechercher</button>
    </form>


        <table class="table-utilisateur">
            <thead>
                <tr>
                    <th>n°ARA expediteur</th>
                    <th>n°ARA receveur</th>
                    <th>messagecontenu</th>
                    <th>messagedate</th>
                    <th>Voir</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Smith</td>
                    <td>John</td>
                    <td>hello world</td>
                    <td>20/10/2019</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Doe</td>
                    <td>Jane</td>
                    <td>very useful message</td>
                    <td>20/10/2019</td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
</div>