<?php
//inclue une seule fois
include_once 'connexion.php';
include_once '../vue/userListView.php';

// Récupérer les utilisateurs
try {
    $query ="SELECT * FROM users";
    $statement = $db->prepare($query);
    $statement->execute();
    $users = $statement->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>


