<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
</head>
<body>
   
<div class="container">
        <?php echo form_open('User/Register'); ?>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" value="<?php echo set_value('email'); ?>" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
            <?php echo form_error('email'); ?>
        </div>
        <div class="form-group">
            <label for="login">Login</label>
            <input type="text" class="form-control" value="<?php echo set_value('login'); ?>" name="login" placeholder="Enter Login">
            <?php echo form_error('Login'); ?>
        </div>
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" value="<?php echo set_value('nom'); ?>" name="nom" placeholder="Enter Name">
            <?php echo form_error('Nom'); ?>
        </div>
        <div class="form-group">
            <label for="prenom">Prenom</label>
            <input type="text" class="form-control" value="<?php echo set_value('prenom'); ?>" name="prenom" placeholder="Enter Prenom">
            <?php echo form_error('Prenom'); ?>
        </div>
        <div class="form-group">
            <label for="ddn">Date de naissance</label>
            <input type="date" class="form-control" value="<?php echo set_value('ddn'); ?>" name="ddn" placeholder="Enter ddn">
            <?php echo form_error('ddn'); ?>
        </div>
        
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
            <?php echo form_error('password'); ?>
        </div>
        <div class="form-group">
            <label for="verif_password">Verification Password</label>
            <input type="password" class="form-control" value="<?php echo set_value('verif_password'); ?>" name="verif_password" placeholder="Enter verif_password">
            <?php echo form_error('verif_password'); ?>
        </div>

        <button type="submit" class="btn btn-primary">Register</button>
        <?php echo form_error('login_error'); ?>
        <?php form_close(); ?>
    </div>
</body>
</html>