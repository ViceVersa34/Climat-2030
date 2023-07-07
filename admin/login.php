<?php

// Inclusion du contenu du fichier 'tables/contents/part/content.php'
include('tables/contents/part/content.php'); 

// Vérification si la variable de session '$_SESSION' est définie
if(!empty($_SESSION)) {
    // Vérification si la clé 'isAdmin' existe dans la variable de session
    if (array_key_exists('isAdmin', $_SESSION)) {
        // Vérification si la valeur de 'isAdmin' est égale à 1 (administrateur)
        if($_SESSION['isAdmin'] == 1) {
            // Redirection vers la page d'administration ('/admin')
            header("Refresh: 0;url=/admin");
        }
    }
}

// Vérification si des données ont été envoyées via POST
if(!empty($_POST)) {
    // Vérification si les clés 'mail' et 'password' existent dans les données POST
    if(array_key_exists('mail', $_POST) and array_key_exists('password', $_POST)) {
        // Récupération des valeurs des champs 'mail' et 'password' avec la fonction htmlspecialchars() pour éviter les attaques XSS
        $mail = htmlspecialchars($_POST['mail']);
        $password = htmlspecialchars($_POST['password']);

        // Requête pour récupérer tous les utilisateurs
        $sql = "SELECT * FROM `users`";
        $requete = $db->query($sql);
        $users = $requete->fetchAll();

        // Boucle sur les utilisateurs pour vérifier les identifiants
        foreach($users as $user) {
            // Vérification de la correspondance entre l'adresse e-mail et le mot de passe avec ceux stockés en base de données
            if($mail == $user['users_mail'] and password_verify($password, $user['users_password'])) {
                // Début de la session et stockage des informations de l'utilisateur dans des variables de session
                session_start();
                $_SESSION['id_users'] = $user['id_users'];
                $_SESSION['users_surname'] = $user['users_surname'];
                $_SESSION['mail'] = $mail;
                $_SESSION['password'] = password_hash($password, PASSWORD_DEFAULT);
                $_SESSION['isAdmin'] = $user['users_isAdmin'];
                // Redirection vers la page d'administration ('/admin')
                header("Refresh: 0;url=/admin/");
                // Arrêt de l'exécution du script
                die();
            } else {
                // Redirection vers la page de connexion avec un message d'erreur ('error=0')
                header("Refresh: 0;url=/admin/login.php?error=0");
            }
        }
    }
}

// Vérification si des données ont été envoyées via GET
if(!empty($_GET)) {
    // Vérification si la clé 'destroy' existe dans les données GET
    if(array_key_exists('destroy', $_GET)) {
        // Destruction de la session
        session_start();
        session_destroy();
        // Redirection vers la page d'accueil ('/')
        header("Refresh: 0;url=/");
        // Arrêt de l'exécution du script
        die();
    }
}

// Variable pour stocker un message d'erreur
$error_message = '';

// Vérification si la clé 'error' existe dans les données GET
if(array_key_exists('error', $_GET)) {
    // Vérification de la valeur de 'error'
    if($_GET['error'] == '0') {
        $error_message = 'Identifiant ou mot de passe incorrect !';
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('../fr/php/head.php'); ?>
    <link rel="stylesheet" href="/admin/css/login.css">
    <title>Login - Climat-2030</title>
</head>
<body id="body">
    <header>
        <?php include('../fr/php/header.php'); ?>
    </header>

    <main>
        <h1 class="top_txt">Admin - <span class="orange-txt size-txt2 font-weight font-family">Climat-2030</span></h1>
        <div class="form">
            <form action="" method="POST">
                <div class="form-content">
                    <div class="input-name">Email :</div>
                    <input type="email" name="mail" placeholder="Mail">
                    <div class="input-name">Mot de passe :</div>
                    <input type="password" name="password" placeholder="Password">
                </div>
                <div class="error-message"><?php echo $error_message; ?></div>
                <input type="submit" value="Se connecter">
            </form>
        </div>
        <div class="scrollUp">
            <a href="#top"><img src="/img/up-arrow.svg"/></a>
        </div>
    </main>

    <footer>
        <?php include('../fr/php/footer.php'); ?>
    </footer>
</body>
</html>