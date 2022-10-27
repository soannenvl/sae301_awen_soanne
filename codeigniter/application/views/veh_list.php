<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" />
    <title>Liste de véhicules</title>
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
<body>

<div class="container">
    <h1> Véhicules </h1>

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
<div class='button'><?php echo (anchor('Veh/delete/' . $vehArray[$key]['id'], 'Supprimer'));?></div>
<?php print("<br>");
    } ?>
<?php echo form_error('veh_error'); ?>
<?php form_close(); ?>

<p><a class='button'href="http://localhost/sae301_awen_soanne/codeigniter/index.php/Veh/add">Ajouter un nouveau véhicule</a></p>
</div>
</body>