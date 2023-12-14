<?php
session_start();

// Verifier si l'utilisateur est connecté avant de le déconnecter
if (isset($_SESSION['user_id'])) {
    // Supprimer toutes les variables de session
    $_SESSION = array();

    // Détruire la session
    session_destroy();

    // rediriger l'utilisateur sur la page d accueil

    header('Location: ../index.php');
    exit;
} else {
    // par sécurité si l utilisateur n est pas connecter rediriger vers la page d accueil
    header('Location: ../index.php');
    exit;
}
?>