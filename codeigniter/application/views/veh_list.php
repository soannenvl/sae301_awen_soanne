<div class="container">
    <h1> Vehicules </h1>

    <?php echo form_open('Veh/liste');
    foreach ($vehArray as $key => $value) {
    ?>
        <div class="form-group">

            <div class="form">
                <label for="marque">Marque</label>
                <div class="form-control" name="marque">
                <?php print($vehArray[$key]['marque']); ?></div>
            </div>
            <div class="form">
                <label for="modele">Modele</label>
                <div class="form-control" name="modele">
                <?php print($vehArray[$key]['modele']); ?></div>
            </div>

</div>
<div><?php echo (anchor('Veh/delete/' . $vehArray[$key]['id'], '[supprimer]'));?></div>
<?php print("<br>");
    } ?>
<?php echo form_error('veh_error'); ?>
<?php form_close(); ?>

<p><a href="http://localhost/sae301_awen_soanne/codeigniter/index.php/Veh/add">Créer un nouveau vehicule</a></p>
</div>