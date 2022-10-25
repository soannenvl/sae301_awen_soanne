
<div class="container">
    <h1> Utilisateurs </h1>

        <?php echo form_open('Utilisateurs/form'); 
        foreach ($userArray as $key => $value){
        ?>
        <div class="form-group">
        <div class="form">
            <label for="login">Login :</label>
            <input type="text" class="form-control" value="<?php echo set_value('login'); ?>" id="login" name="login" aria-describedby="loginHelp" 
            placeholder="<?php print($userArray[$key]['login']);?>">
            <?php echo form_error('login');?>
        </div>
        <div class="form">
            <label for="email">Email :</label>
            <input type="email" class="form-control" value="<?php echo set_value('email'); ?>" id="email" name="email" aria-describedby="emailHelp" 
            placeholder="<?php print($userArray[$key]['email']);?>">
            <?php echo form_error('email');?>
        </div>
        <div class="form">
            <label for="id">Id: </label>
            <input type="number" class="form-control" value="<?php echo set_value('id'); ?>" id="id" name="id" aria-describedby="idHelp" 
            placeholder="<?php print($userArray[$key]['id']);?>">
            <?php echo form_error('id');?>
        </div>
        </div>
        <button><?php echo(anchor('Utilisateurs/delete/'.$userArray[$key]['id'],'[suppriiiimer]'));?></button>
        <button type="submit" class="submit">Augmenter</button>
        <?php print("<br>");} ?> 

        <?php echo form_error('login_error'); ?>
        <?php form_close(); ?>

        <p><a href="http://localhost/sae301_awen_soanne/codeigniter/index.php/user/register">Créer un compte</a></p>
    </div>