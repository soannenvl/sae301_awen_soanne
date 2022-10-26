<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" />
</head>

<header>
    <div class="navbar">
            <ul class="nav-list">
                <li> <img src="../../css/img/logo_rentocar.svg" alt="Rentocar"/> </li>
                <li class="perso"><a href="#Car">Mes locations</a></li>
                <li class="perso"><a href="#file">Mon compte</a></li>
            </ul>
    </div>
</header>

<body>

<div class="container">
    <h1> Connexion </h1>
        <?php echo form_open('User/login'); ?>
        <div class="form-group">
            <label for="email">Adresse mail</label>
            <input type="text" class="form-control" value="<?php echo set_value('email'); ?>" id="email" name="email" aria-describedby="emailHelp" placeholder="Entrer votre adresse mail">
            <?php echo form_error('email'); ?>
        </div>

        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Entrer votre mot de passe">
            <?php echo form_error('password'); ?>
        </div>

        <button type="submit" class="submit">Se connecter</button>
        

        <?php echo form_error('login_error'); ?>
        <?php form_close(); ?>

        <p><a id="create" href="http://localhost/sae301_awen_soanne/codeigniter/index.php/user/register">Créer un compte</a></p>
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