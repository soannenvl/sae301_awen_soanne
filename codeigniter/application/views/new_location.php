<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" />
</head>
<body>
<header>
    <div class="navbar">
            <ul class="nav-list">
                <li> <img src="../../css/img/logo_rentocar.svg" alt="Rentocar"/> </li>
                <li><a href="#Home">Accueil</a></li>
                <li><a href="#Car">Mes locations</a></li>
                <li><a href="#file">Mon compte</a></li>
            </ul>
    </div>
</header>

<div class="container_inscription">
<h1> Louer un vehicule </h1>
        <?php echo form_open('client/location'); ?>
        <div class="form-group">
            <label for="date_debut">Date de debut</label>
            <input type="date" class="form-control" value="<?php echo set_value('date_debut'); ?>" name="date_debut">
        </div>

        <div class="form-group">
            <label for="date_debut">Date de fin</label>
            <input type="date" class="form-control" value="<?php echo set_value('date_debut'); ?>" name="date_debut">
        </div>

        <div class="form-group">
            <label for="nb_km">km louer :</label>
            <input type="number" class="form-control" value="<?php echo set_value('nb_km'); ?>" name="nb_km" placeholder="Entrer le nombre de kilométres">
        </div>

        <button type="submit" class="submit"><?php // echo (anchor('Client/location/'. $vehicule[0]['id'], 'Louer'));?></button>
        <?php
        form_close(); 
        ?>
    </div>


</body>



</html>