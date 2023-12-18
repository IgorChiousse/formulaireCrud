<?php
include_once '../controleur/connexion.php';
include_once '../controleur/login.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vue/style.css">
    <title>Login</title>
</head>
<body class="login">
<div class="form">
        <a href="../index.php" class="back_btn"><img src="../images/back.png"> Retour</a>
        <h2>Se connecter :</h2>
        <p class="erreur_message">
        </p>
        <form action="" method="POST">
            <label>Email</label>
            <input type="email" name="email" required maxlength="50" value="">
            <label>Mot de passe</label>
            <input type="password" name="password" required minlength="100" value="">
            <input type="submit" value="Entrer" name="button">
        </form>
        <p>Vous n'avez pas de compte ? : <a href="../vue/addView.php">Inscription</a></p>
        
        
    </div>
</body>
</html>