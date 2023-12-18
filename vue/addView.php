<?php
include '../controleur/connexion.php';
include '../controleur/add.php';
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
    <link rel="stylesheet" href="../vue/style.css">
</head>

<body class="add">

    <div class="form">
        <a href="../index.php" class="back_btn"><img src="../images/back.png"> Retour</a>
        <h2>S'inscrire</h2>
        <p class="erreur_message">
        </p>
        <form action="" method="POST">
            <label>Nom</label>
            <input type="text" name="lastname" requires maxlength="50">
            <label>Prénom</label>
            <input type="text" name="firstname" requires maxlength="50">
            <label>Email</label>
            <input type="email" name="email" requires maxlength="100">
            <label>Mot de passe</label>
            <input type="password" name="password" requires minlength="6">
            <input type="submit" value="S'inscrire" name="button">
        </form>
        <p>Vous avez deja un compte : <a href="../vue/loginView.php">S'identifier</a></p>
    </div>
</body>

</html>