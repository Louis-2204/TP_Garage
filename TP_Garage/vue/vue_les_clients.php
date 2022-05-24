<h3>Liste des clients</h3>
<table border="1">
  <tr>
    <td>Id Client</td>
    <td>Nom Client</td>
    <td>Prénom</td>
    <td>Adresse</td>
    <td>Email</td>
    <td>Téléphone</td>
  </tr>
  <?php
  if(isset($lesClients)){
    foreach ($lesClients as $unClient) {
      echo "<tr>";
      echo "<td>".$unClient['idclient']."</td>";
      echo "<td>".$unClient['nom']."</td>";
      echo "<td>".$unClient['prenom']."</td>";
      echo "<td>".$unClient['adresse']."</td>";
      echo "<td>".$unClient['email']."</td>";
      echo "<td>".$unClient['tel']."</td>";
      echo "</tr>";
    }
  }
  ?>
</table>
