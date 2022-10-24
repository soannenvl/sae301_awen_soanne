<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
</head>
<body>
   
<div class="container">
    <h2>Codeigniter Form Validation</h2>
   
    <?php echo validation_errors(); ?>
   
    <form method="POST" action="/checkPassword">
        <div>
            <label>Login</label>
            <input type="text" name="login"placeholder="Login">
        </div>
   
        <div class="form-group">
            <label>Mdp</label>
            <input type="password" name="password"placeholder="Mot de passe">
        </div>
 
        <div>
            <button>Submit</button>
        </div>
    </form>
</div>
  
</body>
</html>