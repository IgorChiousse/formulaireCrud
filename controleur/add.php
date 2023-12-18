<?php
include_once 'connexion.php';
include_once '../vue/addView.php';

// Ajouter un utilisateur
if (isset($_POST['button'])) {
    try {
        
    // interprete les balises html en l'écrivant (contre les failles)
    $lastname = htmlspecialchars($_POST['lastname']);
    $firstname = htmlspecialchars($_POST['firstname']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    $email_confirm = "SELECT * FROM users WHERE email = :email";

    $statement = $db->prepare($email_confirm);
    $statement->execute(array(":email"=> $email));

    $user = $statement->fetch(PDO::FETCH_ASSOC);

if ($user) {
    echo "L'email existe déjà";
} else {
    //Hacher le mot de passeavec bcrypt
    $password = password_hash($password, PASSWORD_DEFAULT);
        // password_hash() est une fonction native de PHP utilisée pour hacher les mots de passe.
        // $password est la variable qui contient le mot de passe en texte brut que vous souhaitez hacher.
        // PASSWORD_DEFAULT est une constante passée en deuxième argument de password_hash(). Elle indique à PHP d'utiliser l'algorithme de hachage par défaut, actuellement bcrypt.


        // Préparation de la requête
    $query = "INSERT INTO users(lastname, firstname, email, password) VALUES(:lastname, :firstname, :email, :password)";

    $statement = $db->prepare($query);

    // Execution de la requête
    $statement->execute(array(
        ':lastname' => $lastname, 
        ':firstname' => $firstname,
        ':email' => $email,
        ':password' => $password
    ));

    echo 'Utilisateur ajouté avec succès';
    header('Location: ../vue/loginView.php');
}
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
}
?>

