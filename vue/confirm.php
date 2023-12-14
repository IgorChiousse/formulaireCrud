<?php 
include_once '../controleur/connexion.php';
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
}
?>

<!DOCTYPE html>
  <html lang="fr">

  <head>
    <meta charset="UTF-8">
    <title>Confirmation de suppression</title>
    <link rel="stylesheet" href="../vue/style.css">
  </head>

  <body>
    <div class="confirmation-container">
      <p>Voulez-vous vraiment supprimer cet élément ? </br>Cette action est irréversible.</p>
      <a href="delete.php?id=<?= $id ?>&confirm=yes" class="btn btn-danger">Supprimer</a>
      <a href="../index.php" class="btn btn-secondary">Annuler</a>
    </div>
  </body>

  </html>