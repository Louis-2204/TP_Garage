<?php
  require_once("modele/modele.class.php");

  class Controleur{

    private $unModele;

    public function __construct()
    {
      $this->unModele = new Modele();
    }

    //Clients

    public function insertClient($tab)
    {
      //on contrôle les données avant insertion dans le modele
      $this->unModele->insertClient($tab);
    }
    public function selectAllClients()
    {
        return $this->unModele->selectAllClients();
    }

    //Techniciens

    public function insertTechnicien($tab)
    {
      //on contrôle les données avant insertion dans le modele
      $this->unModele->insertTechnicien($tab);
    }
    public function selectAllTechniciens()
    {
        return $this->unModele->selectAllTechniciens();
    }

    //Vehicules

    public function insertVehicule($tab)
    {
      //on contrôle les données avant insertion dans le modele
      $this->unModele->insertVehicule($tab);
    }
    public function selectAllVehicules()
    {
        return $this->unModele->selectAllVehicules();
    }

    //Interventions

    public function insertIntervention($tab)
    {
      //on contrôle les données avant insertion dans le modele
      $this->unModele->insertIntervention($tab);
    }
    public function selectAllInterventions()
    {
        return $this->unModele->selectAllInterventions();
    }
  }
?>
