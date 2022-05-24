<?php
  class Modele
  {
    private $unPdo = null;
    //PDO: classe en php pour se connecter à la base de données; P:PHP, D:Data, O:Object

    public function __construct ()
    {
      try{
        //gestion des exceptions: code qui pourra poser des problemes de connexion
        $this->unPdo= new PDO("mysql:host=localhost;dbname=garage_sioA","root","");
      }
      catch(PDOException $exp)
      {
        //la levée de l'exception: on affiche un message
        echo "Erreur de connexion à la base de données";
        echo $exp->getMessage();
      }
    }

    //Clients

    public function insertClient($tab){
      $requete = "insert into client values(null, :nom, :prenom, :adresse, :email, :tel);";
      $donnees = array(":nom"=>$tab['nom'],
      ":prenom"=>$tab['prenom'],
      ":adresse"=>$tab['adresse'],
      ":email"=>$tab['email'],
      ":tel"=>$tab['tel']
      );
      if($this->unPdo != null){
        //on prépare la requête
        $select = $this->unPdo->prepare($requete);
        //on exécute la requête
        $select->execute($donnees);
      }
    }
    public function selectAllClients(){
      $requete = "select * from client;";
      if($this->unPdo != null){
        //on prépare la requête
        $select = $this->unPdo->prepare($requete);
        //on exécute la requête
        $select->execute();
        //on récupère les clients et on les renvoient
        return $select->fetchAll();
      }else{
        return null;
      }
    }

    //Techniciens

    public function insertTechnicien($tab){
      $requete = "insert into technicien values(null, :nom, :prenom, :qualification, :email, :tel, :mdp);";
      $donnees = array(":nom"=>$tab['nom'],
      ":prenom"=>$tab['prenom'],
      ":qualification"=>$tab['qualification'],
      ":email"=>$tab['email'],
      ":tel"=>$tab['tel'],
      ":mdp"=>$tab['mdp']
      );
      if($this->unPdo != null){
        //on prépare la requête
        $select = $this->unPdo->prepare($requete);
        //on exécute la requête
        $select->execute($donnees);
      }
    }
    public function selectAllTechniciens(){
      $requete = "select * from technicien;";
      if($this->unPdo != null){
        //on prépare la requête
        $select = $this->unPdo->prepare($requete);
        //on exécute la requête
        $select->execute();
        //on récupère les techniciens et on les renvoient
        return $select->fetchAll();
      }else{
        return null;
      }
    }

    //Véhicules

    public function insertVehicule($tab){
      $requete = "insert into vehicule values(null, :matricule, :marque, :nbkm, :energie, :idclient);";
      $donnees = array(":matricule"=>$tab['matricule'],
      ":marque"=>$tab['marque'],
      ":nbkm"=>$tab['nbkm'],
      ":energie"=>$tab['energie'],
      ":idclient"=>$tab['idclient']
      );
      if($this->unPdo != null){
        //on prépare la requête
        $select = $this->unPdo->prepare($requete);
        //on exécute la requête
        $select->execute($donnees);
      }
    }
    public function selectAllVehicules(){
      $requete = "select * from vehicule;";
      if($this->unPdo != null){
        //on prépare la requête
        $select = $this->unPdo->prepare($requete);
        //on exécute la requête
        $select->execute();
        //on récupère les véhicules et on les renvoient
        return $select->fetchAll();
      }else{
        return null;
      }
    }

    //Interventions

    public function insertIntervention($tab){
      $requete = "insert into intervention values(null, :dateinter, :heure, :prix, :description, :idvehicule, :idtechnicien);";
      $donnees = array(":dateinter"=>$tab['dateinter'],
      ":heure"=>$tab['heure'],
      ":prix"=>$tab['prix'],
      ":description"=>$tab['description'],
      ":idvehicule"=>$tab['idvehicule'],
      ":idtechnicien"=>$tab['idtechnicien']
      );
      if($this->unPdo != null){
        //on prépare la requête
        $select = $this->unPdo->prepare($requete);
        //on exécute la requête
        $select->execute($donnees);
      }
    }
    public function selectAllInterventions(){
      $requete = "select * from intervention;";
      if($this->unPdo != null){
        //on prépare la requête
        $select = $this->unPdo->prepare($requete);
        //on exécute la requête
        $select->execute();
        //on récupère les interventions et on les renvoient
        return $select->fetchAll();
      }else{
        return null;
      }
    }
  }
?>
