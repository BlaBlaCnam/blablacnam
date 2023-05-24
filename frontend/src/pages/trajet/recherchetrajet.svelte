<script>
    import {metatags} from '@roxi/routify'

    metatags.title = 'My Routify app'
    metatags.description = 'Description coming soon...'
</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<main class="container">

<div class="row">
    <h2>Rechercher un trajet</h2>
</div>
    <div class="row form-search">
        <h3 class="">Rechercher un trajet - Ville -> CNAM</h3>

        <form>
            <div class="row">
                <div class="col">
                    <input type="text" placeholder="Ville de départ" required>
                </div>
                <div class="col">
                    <input type="text" placeholder="CNAM d'arrivé" required>
                </div>
                <div class="col">
                    <input type="date" placeholder="Date" required>
                </div>
                <div class="col">
                    <button type="submit">Rechercher</button>

                </div>
            </div>


        </form>
    </div>

    <div class="row form-search">
        <h3 class="">Rechercher un trajet - CNAM -> Ville</h3>
        <form>
            <div class="row">
                <div class="col">
                    <input type="text" placeholder="CNAM de départ" required>
                </div>
                <div class="col">
                    <input type="text" placeholder="Ville d'arrivée" required>
                </div>
                <div class="col">
                    <input type="date" placeholder="Date" required>
                </div>
                <div class="col">
                    <button type="submit">Rechercher</button>

                </div>
            </div>


        </form>
    </div>



    <div class="row">
        <div class="justify-content-center row">
            <h2>Trouver le covoiturage qui correspond à vos besoin</h2>
            <p>Besoin d'un covoiturage pour se rendre dans un centre du CNAM? BLABLACNAM est là pour vous!</p>
            <h2></h2>
        </div>
    </div>





</main>