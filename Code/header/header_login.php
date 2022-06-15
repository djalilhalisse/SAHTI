<nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="index_login.php"><img src="./Logo.png" width="178" height="50" class="d-inline-block align-top" alt=""></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index_login.php">Acceuil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="nos_medecins.php">Recherche Médecin</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contactez-nous</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="annuler_rendez_vous.php">Annuler rendez-vous</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="mes_rendez_vous.php">Mes rendez-vous</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i>Bonjour,</i><br> <b><?php echo $_SESSION['nom_utilisateur']; ?></b></a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="logout.php">Logout</a>
            </li>
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>