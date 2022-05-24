<h3>Liste des Interventions</h3>
<table border="1">
  <tr>
    <td>Id Intervention</td>
    <td>Date Intervention</td>
    <td>Heure</td>
    <td>Prix</td>
    <td>Description</td>
    <td>Id Véhicule</td>
    <td>Id Technicien</td>
  </tr>
  <?php
  if(isset($lesInterventions)){
    foreach ($lesInterventions as $uneIntervention) {
      echo "<tr>";
      echo "<td>".$uneIntervention['idintervention']."</td>";
      echo "<td>".$uneIntervention['dateinter']."</td>";
      echo "<td>".$uneIntervention['heure']."</td>";
      echo "<td>".$uneIntervention['prix']."</td>";
      echo "<td>".$uneIntervention['description']."</td>";
      echo "<td>".$uneIntervention['idvehicule']."</td>";
      echo "<td>".$uneIntervention['idtechnicien']."</td>";
      echo "</tr>";
    }
  }
  ?>
</table>
