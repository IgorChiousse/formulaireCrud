<?php
include_once 'connexion.php';


// Verifier la soumission du formulaire
if (isset($_POST['button'])) {
    try {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Récupérer l'utilisateur depuis la base de données en fonction de l'email
        $query = "SELECT * FROM users WHERE email = :email";
        $statement = $db->prepare($query);
        $statement->execute(array(":email" => $email));

        $user = $statement->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            // Vérifier le mot de passe
            if (password_verify($password, $user["password"])) {
                //Authentification réussi, démarrer la session et rediriger vers index.php
                session_start();
                //Stocker l'identifiand de l'utilisateur dans la session
                $_SESSION['user_id'] = $user['id'];
                // Stoker le prénom dans la session
                $_SESSION['firstname'] = $user['firstname'];
                // Stoker le nom dans la session
                $_SESSION['lastname'] = $user['lastname'];
                // Stocker le role dans la session
                $_SESSION['user_role'] = $user['role'];

                // Générer un token aléatoir
                // Génération d'un token aléatoir de 32 octets
                $token = bin2hex(random_bytes(32));

                // Enregistrer le token dans un cookie (valide pendant 1 heure)
                // '/' signifie que le cookie est valide pour tout le domaine
                setcookie('auth_token', $token, time() + 3600, '/');


                // Condition si le role est admin
                if ($user['role'] === 'admin') {
                    header('Location: ../vue/dashboard.php');
                    exit;
                } else {
                    header('Location: ../vue/welcom.php');
                    exit;
                }
            } else {
                echo "Mot de passe incorrect";
            }
        } else {
            echo "utilisateur non trouvé";
        }
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
}
