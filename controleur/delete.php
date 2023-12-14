<?php

//connexion a la base de données
include_once 'connexion.php';
include_once '../vue/confirm.php';

//récupération de l'id dans le lien
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
  $id = $_GET['id'];

  if (isset($_GET['confirm']) && $_GET['confirm'] === 'yes') {
    try {
      //requête de suppression
      $query = "DELETE FROM users WHERE id = :id";
      $statement = $db->prepare($query);
      $statement->bindValue(":id", $id, PDO::PARAM_INT);
      $statement->execute();

      //redirection vers la page index.php
      header('Location: ../index.php');
    } catch (PDOException $e) {
      echo "Erreur : " . $e->getMessage();
      exit();
    }
  }
} else {
  header('Location: ../index.php');
  exit();
}
?>
