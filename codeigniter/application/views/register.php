<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" />
</head>
<body>
   
<div class="container_inscription">
<h1> Créer un compte </h1>
        <?php echo form_open('User/Register'); ?>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" value="<?php echo set_value('email'); ?>" id="email" name="email" aria-describedby="emailHelp" placeholder="Entrer votre e-mail">
            <?php echo form_error('email'); ?>
        </div>

        <div class="form-group">
<<<<<<< HEAD
            <label for="Login">Login</label>
            <input type="text" class="form-control" value="<?php echo set_value('Login'); ?>" name="Login" placeholder="Entrer un nom d'utilisateur">
=======
            <label for="login">Login</label>
            <input type="text" class="form-control" value="<?php echo set_value('login'); ?>" name="login" placeholder="Enter Login">
>>>>>>> 6840018046beac767d0b090f791dbe34c932e80e
            <?php echo form_error('Login'); ?>
        </div>

        <div class="form-group">
<<<<<<< HEAD
            <label for="Nom">Nom</label>
            <input type="text" class="form-control" value="<?php echo set_value('Nom'); ?>" name="Nom" placeholder="Entrer votre nom">
=======
            <label for="nom">Nom</label>
            <input type="text" class="form-control" value="<?php echo set_value('nom'); ?>" name="nom" placeholder="Enter Name">
>>>>>>> 6840018046beac767d0b090f791dbe34c932e80e
            <?php echo form_error('Nom'); ?>
        </div>

        <div class="form-group">
<<<<<<< HEAD
            <label for="Prenom">Prenom</label>
            <input type="text" class="form-control" value="<?php echo set_value('Prenom'); ?>" name="Prenom" placeholder="Entrer votre prénom">
=======
            <label for="prenom">Prenom</label>
            <input type="text" class="form-control" value="<?php echo set_value('prenom'); ?>" name="prenom" placeholder="Enter Prenom">
>>>>>>> 6840018046beac767d0b090f791dbe34c932e80e
            <?php echo form_error('Prenom'); ?>
        </div>

        <div class="form-group">
            <label for="ddn">Date de naissance</label>
            <input type="date" class="form-control" value="<?php echo set_value('ddn'); ?>" name="ddn" placeholder="Entrer votre date de naissance">
            <?php echo form_error('ddn'); ?>
        </div>
        
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Créer un mot de passe">
            <?php echo form_error('password'); ?>
        </div>

        <div class="form-group">
            <label for="verif_password">Verification Password</label>
            <input type="password" class="form-control" value="<?php echo set_value('verif_password'); ?>" name="verif_password" placeholder="Recopier le mot de passe">
            <?php echo form_error('verif_password'); ?>
        </div>

        <button type="submit" class="submit">Créer</button>
        <?php echo form_error('login_error'); ?>
        <?php form_close(); ?>
    </div>
</body>
</html>