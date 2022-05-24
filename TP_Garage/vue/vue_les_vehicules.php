<h3>Liste des Véhicules</h3>
<table border="1">
  <tr>
    <td>Matricule</td>
    <td>Marque</td>
    <td>Nombre de kilomètres</td>
    <td>Enérgie</td>
    <td>Id client</td>
  </tr>
  <?php
  if(isset($lesVehicules)){
    foreach ($lesVehicules as $unVehicule) {
      echo "<tr>";
      echo "<td>".$unVehicule['matricule']."</td>";
      echo "<td>".$unVehicule['marque']."</td>";
      echo "<td>".$unVehicule['nbkm']."</td>";
      echo "<td>".$unVehicule['energie']."</td>";
      echo "<td>".$unVehicule['idclient']."</td>";
      echo "</tr>";
    }
  }
  ?>
</table>
