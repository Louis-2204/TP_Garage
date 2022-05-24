<h2>Gestion des techniciens</h2>

<?php
  require_once ("vue/vue_insert_technicien.php");

  if(isset($_POST['Valider']))
  {
    $tab = array("nom"=>$_POST['nom'],
    "prenom"=>$_POST['prenom'],
    "qualification"=>$_POST['qualification'],
    "email"=>$_POST['email'],
    "tel"=>$_POST['tel'],
    "mdp"=>$_POST['mdp']
  );
  $unControleur->insertTechnicien($tab);
  }

  //extraction de tous les techniciens
  $lesTechniciens = $unControleur->selectAllTechniciens();

  require_once ("vue/vue_les_techniciens.php");
?>
