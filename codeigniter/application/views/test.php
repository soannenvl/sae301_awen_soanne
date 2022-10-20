<?php

$sql = "SELECT * FROM `vehicule` ORDER BY `vehicule`.`modele` ASC";
$req = mysql_query($sql);
$data = mysql_fetch_array($req);
echo $data['modele'];
?>