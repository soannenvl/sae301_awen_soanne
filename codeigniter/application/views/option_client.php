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
<div>
<h1>Vos informations</h1>
<?php 

if(!$clientUserdata['login']){
    redirect('Vehicule/liste');
}
?>
            <div class="form">
                <label for="login">Nom: </label>
                <div type="text" class="form-control" name="login">
                    <?php print($clientUserdata['last_name']); ?></div>
            </div>
            <div class="form">
                <label for="login">Prenom: </label>
                <div type="text" class="form-control" name="login">
                    <?php print($clientUserdata['first_name']); ?></div>
            </div>
            <div class="form">
                <label for="login">Email: </label>
                <div type="text" class="form-control" name="login">
                    <?php print($clientUserdata['email']); ?></div>
            </div>
            <div class="form">
                <label for="login">Login </label>
                <div type="text" class="form-control" name="login">
                    <?php print($clientUserdata['login']); ?></div>
            </div>
            <div class="form">
                <label for="login">Date de naissance: </label>
                <div type="text" class="form-control" name="login">
                    <?php print($clientUserdata['ddn']); ?></div>
            </div>
    <div><?php echo (anchor('client/supr/' . $clientUserdata['id'], '[supprimer mon compte]'));?></div>
    <div ><?php echo (anchor('client/modif/' . $clientUserdata['id'], '[Modifier des informations]'));?></d>
</div>

<body>

</body>

<footer>
        <p>Aide & Contact</p>
        <p>Informations générales</p>
        <p>RENTOCAR Partenaires</p>
        <p>Mentions légales</p>
        <p>Données personnelles</p>
    
</footer>
</html>