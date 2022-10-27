<div class="container">
    <h1> Locations </h1>

<?php
//print_r($location);
?>
        <div class="form-group">
        <div class="form">
                <label for="voiture">Voiture : </label>
                <div class="form-control" name="voiture">
                <?php print($location[0]['marque']." ".$location[0]['modele']); ?></div>
            </div>
            <div class="form">
                <label for="dd">Date de début</label>
                <div class="form-control" name="dd">
                <?php print($location[0]['date_debut']); ?></div>
            </div>
            <div class="form">
                <label for="df">Date de fin</label>
                <div class="form-control" name="df">
                <?php print($location[0]['date_fin']); ?></div>
            </div>
            <div class="form">
                <label for="prix">Prix de la location</label>
                <div class="form-control" name="prix">
                <?php print($location[0]['prix_location']."€"); ?></div>
            </div>

</div>
<div><?php echo (anchor('client/annuler/' . $location[0]['id'], '[annuler ma location]'));?></div>
<?php print("<br>");?>

<p><a href="http://localhost/sae301_awen_soanne/codeigniter/index.php/Veh/add">Louer un autre vehicule</a></p>
</div>