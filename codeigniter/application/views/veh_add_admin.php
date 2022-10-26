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
                <li class="perso"><a href="#Car">Mes locations</a></li>
                <li class="perso"><a href="#file">Mon compte</a></li>
            </ul>
    </div>
</header>

<div class="container_inscription">
<h1> Créer un véhicule</h1>
        <?php echo form_open('Veh/Register'); ?>
        <div class="form-group">
            <label for="type_vehicule">Type de vehicule</label>
            <input type="text" class="form-control" value="<?php echo set_value('type_vehicule'); ?>" name="type_vehicule" placeholder="Entrer le type du vehicule">
        </div>
        <div class="form-group">
            <label for=" kilometrage">Kilometrage</label>
            <input type="number" class="form-control" value="<?php echo set_value('kilometrage'); ?>" name="kilometrage" placeholder="Entrer le  kilometrage">
        </div>
        <div class="form-group">
            <label for="nb_places">Nombre de places</label>
            <input type="number" class="form-control" value="<?php echo set_value('nb_places'); ?>" name="nb_places" placeholder="Entrer le nombre de place">
        </div>
        <div class="form-group">
            <label for="type_vehicule">Marque</label>
            <input type="text" class="form-control" value="<?php echo set_value('marque'); ?>" name="marque" placeholder="Entrer la marque du vehicule">
        </div>
        <div class="form-group">
            <label for="modele">Modele</label>
            <input type="text" class="form-control" value="<?php echo set_value('modele'); ?>" name="modele" placeholder="Entrer le Modele du vehicule">
        </div>
        <div class="form-group">
            <label for="puissance">Puissance</label>
            <input type="number" class="form-control" value="<?php echo set_value('puissance'); ?>" name="puissance" placeholder="Entrer la puissance du vehicule">
        </div>
        <div class="form-group">
            <label for="prix_location">Prix_location</label>
            <input type="number" class="form-control" value="<?php echo set_value('prix_location'); ?>" name="prix_location" placeholder="Entrer le prix pour la location">
        </div>
        <div class="form-group">
            <label for="etat">Etat</label>
            <input type="text" class="form-control" value="<?php echo set_value('etat'); ?>" name="etat" placeholder="Entrer l'etat du vehicule">
        </div>
        <div class="form-group">
            <label for="vitesse_max">Vitesse max</label>
            <input type="number" class="form-control" value="<?php echo set_value('vitesse_max'); ?>" name="vitesse_max" placeholder="Entrer la vitesse max du vehicule">
        </div>

        <button type="submit" class="submit">Créer</button>
        <?php echo form_error('login_error'); ?>
        <?php form_close(); ?>
    </div>
</body>

<footer>
        <p>Aide & Contact</p>
        <p>Informations générales</p>
        <p>RENTOCAR Partenaires</p>
        <p>Mentions légales</p>
        <p>Données personnelles</p>
    
</footer>

</html>