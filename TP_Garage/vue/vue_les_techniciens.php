<h3>Liste des Techniciens</h3>
<table border="1">
  <tr>
    <td>Id Technicien</td>
    <td>Nom Technicien</td>
    <td>Prénom</td>
    <td>Qualification</td>
    <td>Email</td>
    <td>Téléphone</td>
    <td>Mot de passe</td>
  </tr>
  <?php
  if(isset($lesTechniciens)){
    foreach ($lesTechniciens as $unTechnicien) {
      echo "<tr>";
      echo "<td>".$unTechnicien['idtechnicien']."</td>";
      echo "<td>".$unTechnicien['nom']."</td>";
      echo "<td>".$unTechnicien['prenom']."</td>";
      echo "<td>".$unTechnicien['qualification']."</td>";
      echo "<td>".$unTechnicien['email']."</td>";
      echo "<td>".$unTechnicien['tel']."</td>";
      echo "<td>".$unTechnicien['mdp']."</td>";
      echo "</tr>";
    }
  }
  ?>
</table>
