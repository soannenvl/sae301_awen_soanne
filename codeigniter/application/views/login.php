<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" />
</head>

<header>
    
</header>

<body>

<div class="container">
    <h1> Connexion </h1>
        <?php echo form_open('User/login'); ?>
        <div class="form-group">
            <label for="email">Adresse mail</label>
            <input type="email" class="form-control" value="<?php echo set_value('email'); ?>" id="email" name="email" aria-describedby="emailHelp" placeholder="Entrer votre adresse mail">
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

        <p><a href="http://localhost/sae301_awen_soanne/codeigniter/index.php/user/register">Créer un compte</a></p>
    </div>
    
</body>
</html>