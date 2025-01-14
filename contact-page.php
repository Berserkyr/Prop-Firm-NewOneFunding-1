<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact - NewOneFunding</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>
  <!-- Header -->

  <nav class="container-fluid">
    <ul class="logo-section">
      <li><img src="Logos NewOne Funding-20250111T163743Z-001/Logos NewOne Funding/texte blanc + cercle trans.png"
          alt="NewOneFunding Logo" class="logo"></li>
    </ul>
    <button id="menu-toggle" aria-label="Toggle navigation">☰</button>
    <ul class="nav-links" id="nav-menu">
      <li><a href="index.html">Accueil</a></li>
      <li><a href="about.html">Concept</a></li>
      <li><a href="services.html">Avantages</a></li>
      <li><a href="contact-page.php" role="button">Contact</a></li>
    </ul>
  </nav>
  <header class="header">
    <h1>Contactez-nous</h1>
  </header>

  <!-- Main Content -->
  <main class="container">
    <section id="contact" class="container">
      <h2>Contactez-nous</h2>
      <form action="contact.php" method="POST">
          <label for="name">Nom :</label>
          <input type="text" id="name" name="name" placeholder="Votre nom" required>
  
          <label for="email">Email :</label>
          <input type="email" id="email" name="email" placeholder="Votre email" required>
  
          <label for="message">Message :</label>
          <textarea id="message" name="message" rows="5" placeholder="Votre message" required></textarea>
  
          <button type="submit">Envoyer</button>
      </form>
  
      <!-- Message de confirmation ou d'erreur -->
      <?php
        if (isset($_GET["status"])) {
            if ($_GET["status"] === "success") {
                echo "<p style='color: green;'>Votre message a été envoyé avec succès !</p>";
            } elseif ($_GET["status"] === "error") {
                echo "<p style='color: red;'>Une erreur est survenue. Veuillez réessayer.</p>";
            }
        }
      ?>
  </section>
  

  </main>

    <!-- Footer -->
    <footer class="footer">
      <div class="grid">
        <div>
          <h4>NewOneFunding</h4>
          <p>La première Prop Firm française dédiée aux traders francophones.</p>
        </div>
        <div>
          <h4>Liens rapides</h4>
          <ul>
            <li><a href="about.html">Concept</a></li>
            <li><a href="services.html">Avantages</a></li>
            <li><a href="contact-page.php">Contact</a></li>
            <li><a href="#">Inscription</a></li>
          </ul>
        </div>
        <div>
          <h4>Contact</h4>
          <p>Email : <a href="mailto:contact@newonefunding.com">contact@newonefunding.com</a></p>
          <p>Téléphone : +33 1 23 45 67 89</p>
        </div>
        <div class="social-icons">
          <h4>Suivez-nous</h4>
          <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
          <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
          <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
          <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
      <div class="copyright">
        <p>&copy; 2025 NewOneFunding. Tous droits réservés. <a href="#">Mentions légales</a></p>
      </div>
    </footer>
</body>

</html>