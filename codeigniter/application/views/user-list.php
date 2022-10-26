<div class="container">
    <h1> Utilisateurs </h1>

    <?php echo form_open('Utilisateurs/modif');
    foreach ($userArray as $key => $value) {
    ?>
        <div class="form-group">

            <div class="form">
                <label for="login">Login:</label>
                <div type="text" class="form-control" value="<?php $userArray[$key]['login']; ?>" id="login" name="login">
                    <?php print($userArray[$key]['login']); ?></div>
            </div>

            <div class="form">
                <label for="email">Email:</label>
                <div type="email" class="form-control" value="<?php $userArray[$key]['email']; ?>" id="email" name="email">
                    <?php print($userArray[$key]['email']); ?></div>
            </div>

            <div class="form"></div>
                <label for="id">Id:</label>
                <div type="number" class="form-control" value="<?php $userArray[$key]['id']; ?>" id="id" name="id">
                    <?php print($userArray[$key]['id']); ?></div>

            <div class="form"></div>
                <label for="id">Type:</label>
                <div type="text" class="form-control" value="<?php $userArray[$key]['type_utilisateur']; ?>" id="type" name="type">
                    <?php print($userArray[$key]['type_utilisateur']); ?></div>
        </div>

</div>
<div><?php echo (anchor('Utilisateurs/delete/' . $userArray[$key]['id'], '[supprimer]'));?></div>
<div ><?php echo (anchor('Utilisateurs/change/' . $userArray[$key]['id'], '[Changer type]'));?></d>
<?php print("<br>");
    } ?>

<?php echo form_error('login_error'); ?>
<?php form_close(); ?>

<p><a href="http://localhost/sae301_awen_soanne/codeigniter/index.php/user/register">Créer un compte</a></p>
</div>