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
<h1> Créer un compte </h1>
        <?php echo form_open('User/Register'); ?>
        <div class="form-group">
            <label for="email">Adresse mail</label>
            <input type="email" class="form-control" value="<?php echo set_value('email'); ?>" id="email" name="email" aria-describedby="emailHelp" placeholder="Entrer votre e-mail">
            <?php echo form_error('email'); ?>
        </div>

        <div class="form-group">
            <label for="Login">Nom d'utilisateur</label>
            <input type="text" class="form-control" value="<?php echo set_value('login'); ?>" name="login" placeholder="Entrer un nom d'utilisateur">
            <?php echo form_error('Login'); ?>
        </div>

        <div class="form-group">
            <label for="Nom">Nom</label>
            <input type="text" class="form-control" value="<?php echo set_value('nom'); ?>" name="nom" placeholder="Entrer votre nom">
            <?php echo form_error('Nom'); ?>
        </div>

        <div class="form-group">
            <label for="Prenom">Prénom</label>
            <input type="text" class="form-control" value="<?php echo set_value('prenom'); ?>" name="prenom" placeholder="Entrer votre prénom">
            <?php echo form_error('Prenom'); ?>
        </div>

        <div class="form-group">
            <label for="ddn">Date de naissance</label>
            <input type="date" class="form-control" value="<?php echo set_value('ddn'); ?>" name="ddn" placeholder="Entrer votre date de naissance">
            <?php echo form_error('ddn'); ?>
        </div>
        
        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Créer un mot de passe">
            <?php echo form_error('password'); ?>
        </div>

        <div class="form-group">
            <label for="verif_password">Vérification Mot de passe</label>
            <input type="password" class="form-control" value="<?php echo set_value('verif_password'); ?>" name="verif_password" placeholder="Recopier le mot de passe">
            <?php echo form_error('verif_password'); ?>
        </div>

    <button type="submit" class="submit">Créer</button>
        <?php echo form_error('login_error'); ?>
        <?php form_close(); ?>
    </div>


</body>



</html>