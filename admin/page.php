<?php
include("../fonctions.php");
if(!verif_session_admin()){
header("location:../admin.php");
}
?>
<html>
<head>
        <link href="../css/assets/css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
    <header id="header" class="header-transparent">
    <div class="container">

    <div id="logo" class="pull-left">
        <a href="../index.php">Accueil</a>
      </div>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="ajoutcompagnie.php">Ajouter Entreprise</a></li>
          <li><a href="ajoutsuper.php">Ajouter Super Utilisateur</a></li>
          <li><a href="dashboard.php">Tableau de bord</a></li>
          <li><a href="logout.php">D&eacute;connexion</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <br><br><br>
    <section id="hero">
 </section>
        <script src="css/jquery-3.5.1.slim.min.js"></script>
        <script src="css/popper.min.js"></script>
        <script src="css/bootstrap.min.js"></script>
    </body>
</html>