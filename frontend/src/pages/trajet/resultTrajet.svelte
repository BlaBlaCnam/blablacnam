<script>
    import { onMount } from "svelte";
    import { api_fetch } from "../../function";
    import { api } from "../../config";

    let trajets = [];

    onMount(async () => {
        trajets = await api_fetch(api + "/get_trajets.php");
        console.log(trajets)
    })


</script>

<div class="result-container">
    <div class="row">
        <div class="col-md-8">
            <h2 class="">Résultat de la recherche : </h2>

            <table class="table">
                <thead>
                <tr>
                    <th>Lieu de départ</th>
                    <th>Lieu d'arrivée</th>
                    <th>Date de départ</th>
                    <th>Heure de départ</th>
                    <th>Nombre de places</th>
                </tr>
                </thead>
                <tbody>
                {#each trajets as trajet}
                    <tr>
                        <td>{trajet.depart}</td>
                        <td>{trajet.arrivee}</td>
                        <td>{new Date(trajet.date_trajet).toLocaleDateString()}</td>
                        <td>{new Date(trajet.date_trajet).toLocaleTimeString()}</td>
                        <td>{trajet.places}</td>
                    </tr>
                {/each}
                <!-- ... et ainsi de suite pour chaque trajet -->
                </tbody>
            </table>

        </div>

        <div class="col-md-4">
            <img src="/loupe.jpg" alt="" class="img-accueil">
        </div>

    </div>

</div>
