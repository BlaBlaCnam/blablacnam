<script>
    import {metatags} from '@roxi/routify'

    metatags.title = 'My Routify app'
    metatags.description = 'Description coming soon...'
</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<main class="container">
    <div class="row ">
        <div class="col-md-4">

            <div class="search-container row justify-content-center d-flex flex-wrap">

                <img src="/BLABLACNAM.png" alt="Logo" class="logo">
                <h2 class="login-heading">Rechercher un trajet</h2>
                <form>
                    <input  type="text" placeholder="Ville de départ" required>
                    <input  type="text" placeholder="Ville d'arrivée" required>
                    <input  type="date" placeholder="Date" required>
                    <input  type="number" placeholder="Nombre de place" required>

                    <button type="submit">Rechercher</button>
                </form>
            </div>

        </div>
      <div class="col-md-8">
          <div class="justify-content-center row">
              <h2>Trouver le covoiturage qui correspond à vos besoin</h2>
              <p>Besoin d'un covoiturage pour se rendre dans un centre du CNAM? BLABLACNAM est là pour vous!</p>
              <h2></h2>
          </div>
    <div class="row justify-content-center">
        <img class="img-accueil " src="public/covoit.jpg" alt="">

    </div>
        
            </div>

        </div>





</main>
