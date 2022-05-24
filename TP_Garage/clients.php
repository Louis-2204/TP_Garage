<h2>Gestion des clients</h2>

<?php
  require_once ("vue/vue_insert_client.php");

  if(isset($_POST['Valider']))
  {
    $tab = array("nom"=>$_POST['nom'],
    "prenom"=>$_POST['prenom'],
    "adresse"=>$_POST['adresse'],
    "email"=>$_POST['email'],
    "tel"=>$_POST['tel']
  );
  $unControleur->insertClient($tab);
  }

  //extraction de tous les clients
  $lesClients = $unControleur->selectAllClients();

  require_once ("vue/vue_les_clients.php");
?>
