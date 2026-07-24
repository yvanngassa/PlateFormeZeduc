<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil Utilisateur</title>
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet"> <!-- Custom styles -->
  <style>
  body {

display: flex;
flex-direction: column;
/* min-height: 100vh; */
font-family: Arial, sans-serif;
}

.header {
background-color: black;
text-align: center;
display: flex;
justify-content: space-between;
}


.header h1 {
font-size: 24px;
margin: 0;
color: #f0ad4e;
/* Couleur dorée */
}

.nav-links {
margin-top: 22px;
margin-right: 30px;
font-size: 13px;
}

.nav-links a {
color: #cfbd97;
margin: 0 15px;
text-decoration: none;
font-weight: 600;
}

.login-container {
/* Couleur de fond jaune */
padding: 10px;
align-items: center;
width: 70%;
max-width: 40%;
min-width: fit-content;
height: 80%;
margin: 30px auto;
/* Ajout de marges en haut et en bas */
flex-grow: 1;
position: relative;
z-index: 2;
/* Contenu au-dessus du filtre */

}

.upload-container {
align-items: center;
text-align: center;
}

.upload-button {
width: 150px;
height: 150px;
border-radius: 50%;
background-color: #c1c2d6;
color: white;
justify-content: center;
align-items: center;
cursor: pointer;
position: relative;
box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
font-size: 14px;
transition: background-color 0.3s;
}
body {
            margin: 0;
            padding: 0;
        }
        header {
            position: sticky; /* Fait en sorte que l'en-tête reste en haut lors du défilement */
            top: 0; /* Positionne l'en-tête en haut de la page */
            z-index: 1000; /* Assure que l'en-tête est au-dessus des autres éléments */
        }
.profile-circle {
width: 150px;
height: 150px;
border-radius: 50%;
/* Arrondir l'image */
background-color: #d1d1d1;
/* Couleur de fond par défaut */
display: flex;
align-items: center;
justify-content: center;
margin: 0 auto;
/* Centrer le cercle */
border: 2px solid #007bff;
/* Bordure autour du cercle */
}

.upload-container {
text-align: center;
/* Centrer le contenu */
margin-top: 50px;
/* Écarter du haut */
}

#cadre {
color: white;
text-align: left;
}

#login-h2 {
color: white;
text-align: center;
text-decoration: solid;
font-weight: 600;
}

.form-control {
border-radius: 10px;
}

.form-check-label {
color: white
}

.btn {
background-color: #f0ad4e;
border: none;
border-radius: 20px;
}

.btn:hover {
background-color: #ec971f;
}

footer {
background-color: black;
color: white;
font-size: 12px;
padding: 20px 0;
text-align: center;
font-family: Verdana, Geneva, Tahoma, sans-serif;

}

#terms {
display: flex;
justify-content: space-between;

}

footer a {
color: white;
text-decoration: none;
margin: 0px;
display: flex;
}

.subscribe {
margin-top: 15px;
}

.msg-login {
position: relative;
z-index: 2;
font-family: "Dancing Script", cursive;
font-size: 60px;
margin-top: 60px;
color: #cfbd97;
text-align: center;
}

.deux {
display: flex;
justify-content: space-between;
}

main {
position: relative;
overflow: hidden;
background-image: url('../../assets/BG 1.png');
/* Remplacez par le chemin de votre image */
background-size: cover;
/* L'image s'ajuste pour être entièrement visible */
background-repeat: no-repeat;
/* Empêche la répétition de l'image */
background-position: center;
/* Centre l'image dans le conteneur */
height: auto;
/* Prend toute la hauteur de la fenêtre */
margin: 0;
/* Supprime les marges par défaut */
}

main::after {
content: '';
position: absolute;
top: 0;
left: 0;
right: 0;
bottom: 0;
background-color: rgba(0, 0, 0, 0.5);
/* Couleur noire avec 50% d'opacité */
z-index: 1;
/* Assure que le filtre est au-dessus de l'image */
}
</style>
<header class="py-3 mb-4 bg-black text-white">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="#"><img src="assets/Zeduc.jpg" alt="logo" width="100"> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
    <li class="nav-item">
        <a href="http://127.0.0.1:8000/#home" class="nav-link custom-link">Home</a>
    </li>
    <li class="nav-item">
        <a href="http://127.0.0.1:8000/menu" class="nav-link custom-link">Menu</a>
    </li>
    <li class="nav-item">
        <a href="http://127.0.0.1:8000/#contact" class="nav-link custom-link">Contact</a>
    </li>
</ul>


            </div>
        </nav>
    </div>
</header>

  <!-- Main content -->
  <div class="container">
    <div class="row">

      <!-- Sidebar -->
      <div class="col-md-3">
        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-action" onclick="showSection('profileSection')">Profil</a>
          <a href="#" class="list-group-item list-group-item-action" onclick="showSection('reclamationSection')">Réclamation</a>
          <a href="#" class="list-group-item list-group-item-action" onclick="showSection('historiqueSection')">Historique des commandes</a>
          <a href="#" class="list-group-item list-group-item-action" onclick="showSection('parrainageSection')">Parrainage</a>
          <a href="#" class="list-group-item list-group-item-action" onclick="showSection('aideSection')">Aide</a> <!-- New Help Link -->
          <a href="http://127.0.0.1:8000/" class="list-group-item list-group-item-action text-danger">Logout</a>
        </div>
      </div>

      <!-- Profile Info and Sections -->
      <div class="col-md-9">

        <!-- Profil Section -->
        <div id="profileSection" class="content-section">
          <div class="card mb-4">
            <div class="card-header">
              <h4 class="mb-0">Information de Profil</h4>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-4 text-center">
                <img class="user" src="../../assets/user.svg" alt="" width="100">
                  <h5>Tessa Axel</h5>
                  <p class="text-muted">Étudiant</p>
                </div>
                <div class="col-md-8">
                  <form>
                    <div class="row mb-3">
                      <label class="col-sm-4 col-form-label">Nom Complet</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" value="TESSA Axel">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label class="col-sm-4 col-form-label">Âge</label>
                      <div class="col-sm-8">
                        <input type="number" class="form-control" value="14">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label class="col-sm-4 col-form-label">Solde de parrainage</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" value="7000F">
                        <button class="btn btn-outline-secondary mt-2" type="button">Refresh</button>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label class="col-sm-4 col-form-label">Téléphone</label>
                      <div class="col-sm-8">
                        <input type="tel" class="form-control" value="+237700000000">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label class="col-sm-4 col-form-label">Email</label>
                      <div class="col-sm-8">
                        <input type="email" class="form-control" value="ralph@test.com">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label class="col-sm-4 col-form-label">Pays</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" value="BanzoBaile">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label class="col-sm-4 col-form-label">Ville</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" value="Douala">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label class="col-sm-4 col-form-label">Adresse complète</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" value="Yansoki, Douala">
                      </div>
                    </div>
                    <div class="text-end">
                      <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Réclamation Section -->
        <div id="reclamationSection" class="content-section" style="display:none;">
          <div class="card mb-4">
            <div class="card-header">
              <h4 class="mb-0">Réclamation</h4>
            </div>
            <div class="card-body">
              <!-- Reclamation Content -->
              <div class="reclamation-item">
                <div class="d-flex">
                <img class="user" src="../../assets/user.png" alt="" width="50">
                  <div class="ms-3">
                    <h6>Prix trop élevés</h6>
                    <p>Je trouve que les prix sont un peu trop élevés.</p>
                  </div>
                </div>
                <hr>
              </div>
              <div class="reclamation-item">
                <div class="d-flex">
                <img class="user" src="../../assets/user.png" alt="" width="50">
                  <div class="ms-3">
                    <h6>Service lent</h6>
                    <p>Le service était vraiment trop lent.</p>
                  </div>
                </div>
                <hr>
              </div>
            </div>
          </div>
        </div>

        <!-- Historique des commandes Section -->
        <div id="historiqueSection" class="content-section" style="display:none;">
          <div class="card mb-4">
            <div class="card-header">
              <h4 class="mb-0">Historique des commandes</h4>
            </div>
            <div class="card-body">
              <!-- Historique Content -->
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Product</th>
                    <th>Product Name</th>
                    <th>Unit Price (FCFA)</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td> <img class="banana" src="../../assets/banana.jpeg" alt="" width="50"></td>
                    <td>Banane Malaxée</td>
                    <td>2500</td>
                    <td>1</td>
                    <td>2500</td>
                    <td>11/10/2024</td>
                  </tr>
                  <tr>
                    <td><img class="poulet rôti" src="../../assets/poulet rôti.jpeg" alt="" width="50"></td>
                    <td>Rôti de Poulet</td>
                    <td>3000</td>
                    <td>2</td>
                    <td>6000</td>
                    <td>13/11/2024</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      
       <!-- Parrainage Section -->
<div class="parrainage-section">
  <div id="parrainageSection" class="content-section" style="display:none;">
      <h3>Programme de Fidélité et Parrainage</h3>

      <div class="card mb-4">
          <div class="card-header">
              <h4>Points de Fidélité</h4>
          </div>
          <div class="card-body">
              <p>Vous avez actuellement <strong id="loyaltyPoints">150</strong> points de fidélité.</p>
              <p>Utilisez vos points pour bénéficier de remises sur vos prochaines commandes.</p>
          </div>
      </div>

      <div class="card mb-4">
          <div class="card-header">
              <h4>Votre Code de Parrainage</h4>
          </div>
          <div class="card-body">
              <p>Votre code de parrainage unique est : <strong id="referralCode">ABC123</strong></p>
              <p>Partagez ce code avec d'autres étudiants. Chaque fois qu'ils l'utilisent pour commander, vous accumulez des points de fidélité supplémentaires.</p>
              <button class="btn btn-primary" onclick="copyReferralCode()">Copier le Code</button>
          </div>
      </div>

      <div class="card mb-4">
          <div class="card-header">
              <h4>Comment ça marche ?</h4>
          </div>
          <div class="card-body">
              <ol>
                  <li>Partagez votre code de parrainage avec vos amis.</li>
                  <li>Lorsqu'un ami utilise votre code pour passer une commande, vous accumulez des points de fidélité.</li>
                  <li>Utilisez vos points pour obtenir des remises sur vos futures commandes.</li>
              </ol>
          </div>
      </div>
  </div>
</div>

        <!-- Aide Section -->
        <div id="aideSection" class="content-section" style="display:none;">
          <div class="card mb-4">
            <div class="card-header">
              <h4 class="mb-0">Aide</h4>
            </div>
            <div class="card-body">
              <h5>Bienvenue dans la section d'aide</h5>
              <h6>1. Comment réinitialiser mon mot de passe?</h6>
              <p>Pour réinitialiser votre mot de passe, allez sur la page de connexion et cliquez sur "Mot de passe oublié?". Suivez les instructions qui vous seront envoyées par email.</p>
              
              <h6>2. Comment contacter le support client?</h6>
              <p>Vous pouvez contacter notre support client via le formulaire de contact sur notre site ou par email à support@zeducspace.com.</p>
              
              <h6>3. Où puis-je trouver mes commandes passées?</h6>
              <p>Vous pouvez consulter l'historique de vos commandes dans la section "Historique des commandes" de votre profil.</p>

              <h6>4.Quels sont vos horaires d'ouverture ? </h6>
              <p> Nous sommes ouverts du lundi au dimanche, de 11h00 à 22h00. </p>
              
              <h6>5.Puis-je réserver une table en ligne ? </h6>
              <p> Oui, vous pouvez réserver une table en ligne en utilisant notre système de réservation sur la page d'accueil. </p>
              
              <h6>6.Proposez-vous des plats à emporter ? </h6>
              <p> Oui, tous nos plats sont disponibles à emporter. Vous pouvez passer votre commande par téléphone ou directement sur notre site </p>
            </div>
            <h2>Contact</h2>
    <div class="contact">
        <p>Si vous avez d'autres questions, vous pouvez nous contacter par :</p>
        <p>Email : <a href="mailto:info@restaurantxyz.com">info@restaurantzeduc@space.com</a></p>
        <p>Téléphone : <a href="tel:+33123456789">+237 654 987 321</a></p>
        <p>Adresse :  Rue Joss Yansoki, Douala, Cameroun</p>
  
          </div>
        </div>

      </div>
    </div>
  </div>
</div>


<!-- Footer -->
<footer class="text-white py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>Company</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="footer-links">About Us</a></li>
                    <li><a href="#" class="footer-links">Team</a></li>
                    <li><a href="#" class="footer-links">Careers</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Contact</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="footer-links">Help & Support</a></li>
                    <li><a href="#" class="footer-links">Partner with Us</a></li>
                    <li><a href="#" class="footer-links">Ride with Us</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Legal</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="footer-links">Terms & Conditions</a></li>
                    <li><a href="#" class="footer-links">Privacy Policy</a></li>
                    <li><a href="#" class="footer-links">Cookie Policy</a></li>
                </ul>
            </div>
        </div>
        <div class="text-center mt-3">
            <p>&copy; 2024 ZEDUC@SPACE. All Rights Reserved.</p>
        </div>
    </div>
</footer>

  
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Custom JavaScript for switching sections -->
  <script>
    function showSection(sectionId) {
      // Hide all sections
      document.querySelectorAll('.content-section').forEach(function (section) {
        section.style.display = 'none';
      });
      // Show the clicked section
      document.getElementById(sectionId).style.display = 'block';
    }
    // Fonction pour copier le code de parrainage dans le presse-papiers
    function copyReferralCode() {
      const code = document.getElementById('referralCode').innerText;
      navigator.clipboard.writeText(code).then(() => {
          alert('Code de parrainage copié dans le presse-papiers : ' + code);
      }).catch(err => {
          console.error('Erreur lors de la copie : ', err);
      });
  }

   
     
  </script>

</body>

</html>