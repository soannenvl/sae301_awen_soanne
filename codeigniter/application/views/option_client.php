<!DOCTYPE html>
<html>
<head>
    <title>Informations client</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" />
</head>

<header>
    <div class="navbar">
            <ul class="nav-list">
                <li> <img src="../../css/img/logo_rentocar.svg" alt="Rentocar"/> </li>
                <li><a href="#Home">Accueil</a></li>
                <li><a href="#Car">Mes locations</a></li>
                <li><a href="http://[::1]/sae301_awen_soanne/codeigniter/index.php/client/client">Mon compte</a></li>
            </ul>
    </div>
</header>

<div>
<h1 class='h1_modif'>Vos informations</h1>
<?php 

if(!$clientUserdata['login']){
    redirect('Vehicule/liste');
}
?>
<div class='container_info_client'>

            <div class="form-group-info">
                <label for="login">Nom: </label>
                <div type="text" class="form-control" name="login">
                    <?php print($clientUserdata['last_name']); ?></div>
            </div>
            <div class="form-group-info">
                <label for="login">Prénom: </label>
                <div type="text" class="form-control" name="login">
                    <?php print($clientUserdata['first_name']); ?></div>
            </div>
            <div class="form-group-info">
                <label for="login">Email: </label>
                <div type="text" class="form-control" name="login">
                    <?php print($clientUserdata['email']); ?></div>
            </div>
            <div class="form-group-info">
                <label for="login">Nom d'utilisateur </label>
                <div type="text" class="form-control" name="login">
                    <?php print($clientUserdata['login']); ?></div>
            </div>
            <div class="form-group-info">
                <label for="login">Date de naissance: </label>
                <div type="text" class="form-control" name="login">
                    <?php print($clientUserdata['ddn']); ?></div>
            </div>


</div>
<div class='boutons'>
    <div class='button' ><?php echo (anchor('client/supr/' . $clientUserdata['id'], 'Supprimer mon compte'));?></div>
    <div class='button' ><?php echo (anchor('client/modif/' . $clientUserdata['id'], 'Modifier des informations'));?></d>
</div>

</html>