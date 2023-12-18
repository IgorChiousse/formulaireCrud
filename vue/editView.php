<?php
include '../controleur/connexion.php';
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

<body class="edit">

    <div class="form">
        <a href="../index.php" class="back_btn"><img src="../images/back.png"> Retour</a>
        <h2>Modifier l'employé :</h2>
        <p class="erreur_message">
        </p>
        <form action="" method="POST">
            <label>Nom</label>
            <input type="text" name="lastname" requires maxlength="50" value="<?php echo $user['lastname']?>">
            <label>Prénom</label>
            <input type="text" name="firstname" requires maxlength="50" value="<?php echo $user['firstname']?>">
            <label>Email</label>
            <input type="email" name="email" requires maxlength="100" value="<?php echo $user['email']?>">
            <label>Mot de passe</label>
            <input type="password" name="password" requires minlength="6" value="<?php echo $user['password']?>">
            <input type="submit" value="Ajouter" name="button">
        </form>
        
        
    </div>
</body>

</html>