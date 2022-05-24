<h3>Insertion d'une Intervention</h3>

<form method="post" action="">
  <table>
    <tr>
      <td>Date Intervention : </td>
      <td><input type="text" name="dateinter"></td>
    </tr>
    <tr>
      <td>Heure : </td>
      <td><input type="text" name="heure"></td>
    </tr>
    <tr>
      <td>Prix : </td>
      <td><input type="text" name="prix"></td>
    </tr>
    <tr>
      <td>Description : </td>
      <td><input type="text" name="description"></td>
    </tr>
    <tr>
      <td>Id Véhicule : </td>
      <td><select name="idvehicule">
					<?php
						$lesVehicules = $unControleur->selectAllVehicules();
						foreach ($lesVehicules as $unVehicule) {
							echo "<option value ='".$unVehicule['idvehicule']."'>";
							echo $unVehicule['idvehicule']." - ".$unVehicule['matricule'];
							echo "</option>";
						}
					?>
				</select></td>
    </tr>
    <tr>
      <td>Id Technicien : </td>
      <td><select name="idtechnicien">
					<?php
						$lesTechniciens = $unControleur->selectAllTechniciens();
						foreach ($lesTechniciens as $unTechnicien) {
							echo "<option value ='".$unTechnicien['idtechnicien']."'>";
							echo $unTechnicien['idtechnicien']." - ".$unTechnicien['nom'];
							echo "</option>";
						}
					?>
				</select></td>
    </tr>
    <tr>
      <td><input type="reset" name="Annuler" value="Annuler"></td>
      <td><input type="submit" name="Valider" value="Valider"></td>
    </tr>
  </table>
</form>
