<div class="newtrajet-container">
    <a href="/trajet/mesTrajets">
      <button class="btnpage" type="submit">Retour</button>
    </a>
    <h2 class="register-heading">Ajouter un nouveau trajet</h2>
    <form>

    <div class="label-input">
        <input type="radio" id="Aller" name="Aller" value="Aller">
        <label for="Aller">Aller</label><br>

        <input type="radio" id="Retour" name="Retour" value="Retour">
        <label for="Retour">Retour</label><br>             
    </div>

  

      <div class="label-input">
        <label for="date-input">Départ :</label>
        <select class="inputCenter" required>
            <option value="" disabled selected>Départ</option>
    
            <option value="lieu1">Lieu 1</option>
            <option value="lieu2">Lieu 2</option>
        </select>
      </div>

      <div class="label-input">
        <label for="date-input">Etape 1 :</label>
        <select class="inputCenter" required>
            <option value="" disabled selected>Etape 1</option>
    
            <option value="etape3">Etape 1</option>
            <option value="etape4">Etape 2</option>
          </select>
     </div>

     <div class="label-input">
        <label for="date-input">Etape 2 :</label>
        <select class="inputCenter" required>
            <option value="" disabled selected>Etape 2</option>
    
            <option value="etape3">Etape 3</option>
            <option value="etape4">Etape 4</option>
          </select>
     </div>

     <div class="label-input">
        <label for="date-input">Arrivé :</label>
        <select class="inputCenter" required>
            <option value="" disabled selected>Arrivé</option>
    
            <option value="arrivee1">Arrivée 1</option>
            <option value="arrivee2">Arrivée 2</option>
          </select>
     </div>

      <div class="label-input">
        <label for="date-input">Date :</label>
        <input id="date-input" class="inputCenter" type="date" placeholder="Date">
      </div>
      <div class="label-input">
        <label for="heure-input">Heure :</label>
        <input id="heure-input" class="inputCenter" type="time" placeholder="Heure">
      </div>

      <button class="btnpage" type="submit" style="margin:auto;">Enregistrer</button>
    </form>
  </div>
  