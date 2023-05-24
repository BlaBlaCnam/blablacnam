<div class="register-container">
    <img src="/BLABLACNAM.png" alt="Logo" class="logo">
    <h2 class="register-heading">Inscription</h2>
    <form>
      <input class="inputCenter" type="text" placeholder="ARA" required>
      <input class="inputCenter" type="email" placeholder="Adresse e-mail" required>
      <input class="inputCenter" type="tel" placeholder="Numéro de téléphone" required>
      <input class="inputCenter" type="date" placeholder="Date de naissance">
  
      <select name="site" id="site" class="inputCenter">
        <option value="" disabled selected>Choisissez un site</option>
        <option value="lyon">Cnam Lyon</option>
        <option value="saint-etinne">Cnam Saint-Etienne</option>
        <option value="marseille">Cnam Marseille</option>
        <option value="other">Autre</option>
      </select>
  
      <select name="section" id="section" class="inputCenter">
        <option value="" disabled selected>Choisissez une section</option>
        <option value="info">Informatique</option>
        <option value="commerciale">Commerciale</option>
        <option value="other">Autre</option>
      </select>

      <input class="inputCenter" type="password" placeholder="Mot de passe" required>
  
      <button type="submit">S'inscrire</button>
    </form>
    <div class="login-link">
      <p>Déjà membre ? <a href="/identification/connexion">Se connecter</a></p>
    </div>
  </div>
  