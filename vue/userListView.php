<?php 
include '../controleur/connexion.php';
include '../controleur/userList.php';

// Si le token a expiré, rediriger vers la page d accueil et mettre un message d erreur
if (!isset($_COOKIE['auth_token'])) {
    session_destroy();
    header('Location: ../index.php');
    
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Utilisateurs</title>
    <link rel="stylesheet" href="../vue/style.css">
</head>

<body>
    <header class="super-entete">
        <div class="entete">
            <div class="sousentete">
                <img class="logo" src="../images/jaunePlan de travail 5.png" alt="logo">
                <h1 class="titre-principal">Hello</h1>
            </div>
            
            <nav class="navigation">
               
                    <button class="logOut"><a href="../controleur/logout.php">Déconnexion</a></button>
               
            </nav>
        </div>
    </header>
   
    <div  class="userList">
        <div class="aj">
            <a href="controleur/add.php" class="Btn_add"> <img src="../images/plus.png"> Ajouter</a>
        </div>

        <table>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Mot de passe</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
            <?php
            foreach ($users as $user) {
            ?>
                <tr>
                    <td><?php echo $user['lastname']?></td>
                    <td><?php echo $user['firstname']?></td>
                    <td><?php echo $user['email']?></td>
                    <td><?php echo $user['password']?></td>
                    <td><a href="controleur/add.php?id=<?php echo $user['id']?>"><img src="../images/pen.png"></a></td>
                    <td><a href="controleur/delete.php?id=<?php echo $user['id']?>"><img src="../images/trash.png"></a></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>

</html>