<?php 
session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: ../index.php");
    exit;
}

// Si le token a expiré, rediriger vers la page d accueil et mettre un message d erreur
if (!isset($_COOKIE['auth_token'])) {
    session_destroy();
    header('Location: ../index.php');
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vue/style.css">
    <title>Document</title>
</head>
<body class="home">
    <header class="super-entete">
        <div class="entete">
            <div class="sousentete">
                <img class="logo" src="../images/jaunePlan de travail 5.png" alt="logo">
                <h1 class="titre-principal">Hello</h1>
            </div>
            
            <nav class="navigation">
               
                    <button class="logOut"><a href="../vue/userListView.php">Liste des utilisateurs</a></button>
                    <button class="logOut"><a href="../controleur/logout.php">Déconnexion</a></button>
               
            </nav>
        </div>
    </header>

    <main class="main-content">
        <h1>Bienvenue sur la page admin
            
        </h1>
    </main>
</body>
</html>