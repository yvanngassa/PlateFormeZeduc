
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Panier</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="panier.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
  <style>
    /* Style pour le header */
    header {
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Style pour les sections */
    section {
      margin-top: 30px;
    }

    /* Style pour les tables */
    .table {
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .custom-link {
        color: #cfbd97; /* Couleur personnalisée */
    }

    .custom-link:hover {
        text-decoration: underline; /* Style au survol */
        color: #b0a78a; /* Une teinte plus foncée au survol (optionnel) */
    }

    /* Style pour les boutons */
    .btn-dark {
      background-color: #cfbd97;
      border: none;
      transition: background-color 0.3s, transform 0.2s;
    }

    .btn-dark:hover {
      background-color: #cfbd97;
      transform: translateY(-2px);
    }

    /* Style pour les cartes de paiement et de sous-total */
    .payment-method, .cart-subtotal {
      background-color: #cfbd97; /* Utilisation de la couleur cfbd97 */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Style pour le footer */
    footer {
      background-color: #333;
      color: #fff;
      padding: 20px 0;
    }

    footer a {
      color: #fff;
      text-decoration: none;
    }

    footer a:hover {
      text-decoration: underline;
    }

    /* Style pour les grands titres */
    h2, h4 {
      font-family: 'Dancing Script', cursive;
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
  <!-- Panier Section -->
  <section class="container mt-5">
    <h2 class="text-center">Panier</h2>
    <div class="table-responsive">
      <table class="table table-bordered">
        <thead class="table-dark">
          <tr>
            <th>Product</th>
            <th>Product Name</th>
            <th>Unit Price (FCFA)</th>
            <th>Quantity</th>
            <th>Total</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody id="cart-items">
        </tbody>
      </table>
    </div>
  </section>

  <!-- Payment Section -->
  <section class="container d-flex justify-content-between mt-5">
    <div class="payment-method bg-tan p-3 rounded">
        <h4 class="text-center">Mode De Paiement</h4>
        <form id="payment-form">
            <div class="mb-3">
                <select class="form-select" aria-label="Mode de paiement">
                    <option selected>Choisissez votre moyen de paiement</option>
                    <option value="1">Carte Bancaire</option>
                    <option value="2">Orange Money</option>
                    <option value="3">MTN Mobile Money</option>
                </select>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Card number">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="CVC/Date">
            </div>
            <button type="button" class="btn btn-dark w-100" id="use-points-btn">Utilisez vos points de fidelite</button>
        </form>
        <p id="points-message" class="mt-3"></p>
    </div>
    <div>

    <section class="container d-flex justify-content-end mt-5">
    <div class="cart-subtotal bg-tan p-3 rounded" style="width: 300px;">
        <h4 class="text-center">CART SUBTOTAL</h4>
        <p>Prix: <span id="subtotal">0</span></p>
        <p>Livraison: <span id="livraison">500</span></p>
        <p>Réduction: <span id="reduction">1000</span></p>
        <p>Total: <span id="total-final">2000</span></p>      
        <button class="btn btn-dark w-100" id="proceed-payment-btn">Procéder au Paiement</button>
    </div>
  </div>
</section>
  

  <!-- Footer -->
  <footer class="bg-black text-white mt-5 p-4 text-center">
        <div class="row">
            <div class="col">
                <h5>Company</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white">About us</a></li>
                    <li><a href="#" class="text-white">Team</a></li>
                    <li><a href="#" class="text-white">Careers</a></li>
                </ul>
            </div>
            <div class="col">
                <h5>Contact</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white">Help & Support</a></li>
                    <li><a href="#" class="text-white">Partner with us</a></li>
                </ul>
            </div>
            <div class="col">
                <h5>Legal</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white">Terms & Conditions</a></li>
                    <li><a href="#" class="text-white">Refund & Cancellation</a></li>
                </ul>
            </div>
        </div>
        <div class="mt-4">
            <p>© Zeduc Sp@ce, 2024</p>
        </div>
    </footer>
    



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/panier.js"></script>
  <script>
    // Exemple de données initiales
    let pointsFidelite = 30; // Points accumulés
    let montantDepense = 15000; // Montant de la commande en FCFA

    // Fonction pour mettre à jour l'affichage des points et des remises
    function updatePointsMessage() {
        const message = pointsFidelite > 0 
            ? `Vous avez ${pointsFidelite} points de fidélité restants.`
            : "Vous n'avez plus de points de fidélité.";
        document.getElementById('points-message').innerText = message;
    }

    // Affichage initial des points
    updatePointsMessage();

    document.getElementById('use-points-btn').addEventListener('click', function() {
        // Calcul des remises possibles
        const remisePossible = Math.floor(pointsFidelite / 15) * 1000; // 15 points = 1000 FCFA
        if (remisePossible > 0) {
            // Appliquer la remise à la commande
            montantDepense -= remisePossible; // Réduire le montant de la commande
            pointsFidelite -= Math.floor(remisePossible / 1000) * 15; // Déduire les points utilisés
            updatePointsMessage(); // Mettre à jour l'affichage
            alert(`Vous avez utilisé ${Math.floor(remisePossible / 1000) * 15} points pour une remise de ${remisePossible} FCFA.`);
            alert(`Montant total après remise : ${montantDepense} FCFA`);
        } else {
            document.getElementById('points-message').innerText = "Vous n'avez pas assez de points pour obtenir une remise.";
        }
    });
    document.getElementById('proceed-payment-btn').addEventListener('click', function() {
        // Logique pour le paiement ici (simulation)
        const total = parseInt(document.getElementById('total-final').innerText); // Récupérer le total
        if (total > 0) {
            alert(`Paiement de ${total} FCFA effectué avec succès !`);
        } else {
            alert("Veuillez vérifier votre total avant de procéder au paiement.");
        }
    });
</script>
</body>
</html>
