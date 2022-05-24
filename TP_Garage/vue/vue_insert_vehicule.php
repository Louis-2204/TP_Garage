<h3>Insertion d'un Véhicule</h3>

<form method="post" action="">
  <table>
    <tr>
      <td>Matricule : </td>
      <td><input type="text" name="matricule"></td>
    </tr>
    <tr>
      <td>Marque : </td>
      <td><input type="text" name="marque"></td>
    </tr>
    <tr>
      <td>Nombre de kilomètres : </td>
      <td><input type="text" name="nbkm"></td>
    </tr>
    <tr>
      <td>Enérgie : </td>
      <td><input type="text" name="energie"></td>
    </tr>
    <tr>
      <td>Id client : </td>
      <td><select name="idclient">
					<?php
						$lesClients = $unControleur->selectAllClients();
						foreach ($lesClients as $unClient) {
							echo "<option value ='".$unClient['idclient']."'>";
							echo $unClient['idclient']." - ".$unClient['nom'];
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
