<h2>Gestion des interventions</h2>

<?php
  require_once ("vue/vue_insert_intervention.php");

  if(isset($_POST['Valider']))
  {
    $tab = array("dateinter"=>$_POST['dateinter'],
    "heure"=>$_POST['heure'],
    "prix"=>$_POST['prix'],
    "description"=>$_POST['description'],
    "idvehicule"=>$_POST['idvehicule'],
    "idtechnicien"=>$_POST['idtechnicien']
  );
  $unControleur->insertIntervention($tab);
  }

  //extraction de toutes les interventions
  $lesInterventions = $unControleur->selectAllInterventions();

  require_once ("vue/vue_les_interventions.php");
?>
