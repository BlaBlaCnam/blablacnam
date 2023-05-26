<script>

    import { api } from "../../config"    
    import { onMount } from "svelte";
    import { api_fetch } from "../../function";

    let users = [];
    let table;

    onMount(async () => {

        users = await api_fetch(api + "/get_users.php");

        setTimeout(() => {
             table = window['$']('#table_user').DataTable({
                columns: [
                 null,
                  null,
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

<div class="adminlist-container">
    <a href="/admin/infoadmin">
        <button class="btnpage" type="submit">Retour</button>
    </a>
    <h2 class="listeuser-body">Liste des utilisateurs :</h2>

        <table class="table-utilisateur" id="table_user">
            <thead>
                <tr>
                    <th>Code ARA</th>
                    <th>Site</th>
                    <th>Section</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Admin</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <tbody>
                {#each users as user}
                <tr>
                    <td>{user.id_utilisateur}</td>
                    <td>{user.site}</td>
                    <td>{user.section}</td>
                    <td>{user.nom}</td>
                    <td>{user.prenom}</td>
                    <td>{user.email}</td>
                    <td>{parseInt(user.administrateur) ? "OUI" : "NON"}</td>
                    <td><a href="#" class="pomme" on:click={async function() {
                        
                        await api_fetch(api + "/delete_user.php?id=" + user.id_utilisateur);
                       
                        alert("Utilisateur supprimé avec succès!");

                        window.location.reload();

                       /* table
                            .row(window['$'](this).parent().parent())
                            .remove();
                        table.draw();*/
                    }}><img src="/bin.png"></a></td>
                </tr>
                {/each}
            </tbody>
        </table>
</div>
