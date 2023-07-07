<?php

// Démarrage de la session
session_start();

// Inclusion du contenu du fichier 'tables/contents/part/content.php'
include('tables/contents/part/content.php'); 

// Inclusion du fichier 'php/isAdmin.php' qui contient la logique de vérification de l'administrateur
include('php/isAdmin.php');

// Vérification si des données ont été envoyées via POST
if(!empty($_POST)) {
    // Vérification si les clés 'id_users', 'oldPassword', 'newPassword1' et 'newPassword2' existent dans les données POST
    if(array_key_exists('id_users', $_POST) and 
        array_key_exists('oldPassword', $_POST) and 
        array_key_exists('newPassword1', $_POST) and 
        array_key_exists('newPassword2', $_POST)) {
        
        // Récupération des valeurs des champs avec la fonction htmlspecialchars() pour éviter les attaques XSS
        $id_users = htmlspecialchars($_POST['id_users']);
        $oldPassword = htmlspecialchars($_POST['oldPassword']);
        $newPassword1 = htmlspecialchars($_POST['newPassword1']);
        $newPassword2 = htmlspecialchars($_POST['newPassword2']);

        // Vérification si le mot de passe actuel correspond au mot de passe stocké en session et si les nouveaux mots de passe correspondent
        if(password_verify($oldPassword, $_SESSION['password']) and $newPassword1 == $newPassword2) {
            // Hashage du nouveau mot de passe avec la fonction password_hash()
            $newPassword1 = password_hash($newPassword1, PASSWORD_DEFAULT);

            // Mise à jour du mot de passe dans la base de données
            $sql = "UPDATE `users` SET `users_password`='$newPassword1' WHERE id_users = $id_users";
            $requete = $db->query($sql);
            $users = $requete->fetchAll();

            // Redirection vers la page de compte de l'administrateur avec un message d'erreur ('error=1')
            header("Refresh: 0;url=/admin/my-account.php?error=1");
        } else {
            // Redirection vers la page de compte de l'administrateur avec un message d'erreur ('error=0')
            header("Refresh: 0;url=/admin/my-account.php?error=0");
        }
    }
}

// Variable pour stocker un message d'erreur
$error_message = '';

// Vérification si la clé 'error' existe dans les données GET
if(array_key_exists('error', $_GET)) {
    // Vérification de la valeur de 'error'
    if($_GET['error'] == '0') {
        $error_message = 'Les mots de passe ne correspondent pas !';
    }
    if($_GET['error'] == '1') {
        $error_message = 'Le mot de passe a bien été modifié !';
    }
}

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('php/head.php'); ?>
    <link rel="stylesheet" href="/admin/css/my-account.css">
    <title>My account - Climat-2030</title>
</head>
<body id="body">
    <header>
        <?php include('php/header.php'); ?>
    </header>

    <main>
        <h1 class="top_txt"><?php echo ucfirst($_SESSION['users_surname']); ?> - <span class="orange-txt size-txt2 font-weight font-family">Climat-2030</span></h1>
        <div class="form">
            <form action="/admin/my-account.php" method="POST">
                <input type="hidden" name="id_users" value="<?php echo $_SESSION['id_users']; ?>">
                <div>
                    <label for="oldPassword">Ancien mot de passe :</label>
                    <input type="password" name="oldPassword" id="oldPassword">
                </div>
                <div>
                    <label for="newPassword1">Nouveau mot de passe :</label>
                    <input type="password" name="newPassword1" id="newPassword1">
                </div>
                <div>
                    <label for="newPassword2">Nouveau mot de passe :</label>
                    <input type="password" name="newPassword2" id="newPassword2">
                </div>
                <div class="error-message"><?php echo $error_message; ?></div>
                <input type="submit" value="Valider">
            </form>
        </div>
        <div class="scrollUp">
            <a href="#top"><img src="/img/up-arrow.svg"/></a>
        </div>
    </main>
</body>
</html>