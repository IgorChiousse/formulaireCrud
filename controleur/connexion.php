

<?php
  //connexion à la base de données

  // nom du serveur
  $host = 'localhost';

  // nom d utilisateur
  $username = 'root';

  // mot de passe de phpmyadmin
  $password = '';

  // nom de la base de données
  $database = 'form_users';

  try {
    // connection avec PDO
    $db = new PDO("mysql:host=$host;dbname=$database", $username, $password);
} catch (PDOException $e) {
    die("Echec de la connexion : " . $e->getMessage());
}

