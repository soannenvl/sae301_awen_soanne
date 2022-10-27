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
                <li><a href="#file">Mon compte</a></li>
            </ul>
    </div>
</header>
<body>

<div class="container">
    <h1> Véhicules </h1>

    <?php
    foreach ($vehicule as $key => $value) {
    ?>

        <div class="form-group">

            <div class="form">
                <label for="marque">Marque</label>
                <div class="form-control" name="marque">
                <?php print($vehicule[$key]['marque']); ?></div>
            </div>
            <div class="form">
                <label for="modele">Modele</label>
                <div class="form-control" name="modele">
                <?php print($vehicule[$key]['modele']); ?></div>
            </div>

        </div>
<div class='button'><?php echo (anchor('Client/location/' . $vehicule[$key]['id'], 'Louer'));?></div>
<?php print("<br>");
    } ?>
</div>
</body>