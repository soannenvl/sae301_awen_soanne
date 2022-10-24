<?php 
foreach ($vehArray as $key => $value){
$id =           $vehArray[$key]['id'];
$type_vehicule =$vehArray[$key]['type_vehicule'];
$kilometrage =  $vehArray[$key]['kilometrage'];
$nb_places =    $vehArray[$key]['nb_places'];
$marque =       $vehArray[$key]['marque'];
$modele =       $vehArray[$key]['modele'];
$puissance =    $vehArray[$key]['puissance'];

    echo("<div>");
        echo("<div>Type de véhicule: ".$type_vehicule."</div>");
        echo("<div>Kilométrage: ".$kilometrage."</div>");
        echo("<div>Nombre de places: ".$nb_places."</div>");
        echo("<div>Marque: ".$marque."</div>");
        echo("<div>Modele: ".$modele."</div>");
        echo("<div>Puissance chevaux: ".$puissance."</div>");
        echo("<br>");
    echo("</div>");
}
?>

<html>
<head>
    <title>vehicule list</title>
</head>
<body>




</body>
</html>