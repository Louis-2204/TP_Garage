<h2>Gestion des vehicules</h2>

<?php
  require_once ("vue/vue_insert_vehicule.php");

  if(isset($_POST['Valider']))
  {
    $tab = array("matricule"=>$_POST['matricule'],
    "marque"=>$_POST['marque'],
    "nbkm"=>$_POST['nbkm'],
    "energie"=>$_POST['energie'],
    "idclient"=>$_POST['idclient']
  );
  $unControleur->insertVehicule($tab);
  }

  //extraction de tous les véhicules
  $lesVehicules = $unControleur->selectAllVehicules();

  require_once ("vue/vue_les_vehicules.php");
?>
