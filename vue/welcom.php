<?php 
session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: ../index.php");
    exit;
}

if ($_SESSION['user_role'] === 'admin') {
    header('Location: dashboard.php');
    exit;
}

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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vue/style.css">
    <title>Home</title>
</head>
<body class="home">
    <header class="super-entete">
        <div class="entete">
            <div class="sousentete">
                <img class="logo" src="../images/jaunePlan de travail 5.png" alt="logo">
                <h1 class="titre-principal">Hello</h1>
            </div>
            
            <nav class="navigation">
                <?php if (!isset($_SESSION['user_id'])) : ?>
                    <button class="signIn"><a href="controleur/add.php">Sign up</a></button>
                    <button class="logIn"><a href="vue/loginView.php">Login</a></button>
                <?php endif; ?>
                <?php if (isset($_SESSION['user_id'])) : ?>
                    <button class="logOut"><a href="../controleur/logout.php">Déconnexion</a></button>
                <?php endif; ?>
            </nav>
        </div>
    </header>

    <main class="main-content">
        <h1>Bienvenue sur le formulaire
            <?php 
            if(isset($_SESSION['user_id'])) {
                echo ' ' . $_SESSION['firstname'] . ' ' . $_SESSION['lastname'];
            }
            ?>
        </h1>
    </main>
    
    <a href="https://www.igorchiousse.fr">lien</a>
</body>
</html>

