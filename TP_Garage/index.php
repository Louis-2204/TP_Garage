<?php
  require_once("controleur/controleur.class.php");
  //instanciation du Controleur
  $unControleur = new Controleur();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Gestion d'un garage</title>
  </head>
  <body>
    <center>
      <h1>Gestion du garage IRIS</h1>
      <br>
      <a href="index.php?page=1"><img src="images/home.png" height="100" width="100"></a>
      <a href="index.php?page=2"><img src="images/client.png" height="100" width="100"></a>
      <a href="index.php?page=3"><img src="images/technicien.png" height="100" width="100"></a>
      <a href="index.php?page=4"><img src="images/vehicule.png" height="100" width="100"></a>
      <a href="index.php?page=5"><img src="images/intervention.png" height="100" width="100"></a>

      <?php
      if (isset($_GET['page'])){
        $page = $_GET['page'];
      }else{
        $page = 0;
      }
      switch($page){
        case 1 : require_once("home.php");break;
        case 2 : require_once("clients.php");break;
        case 3 : require_once("techniciens.php");break;
        case 4 : require_once("vehicules.php");break;
        case 5 : require_once("interventions.php");break;
      }

      ?>
    </center>
  </body>
</html>
