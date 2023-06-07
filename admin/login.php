<?php

    
    include('php/link_db.php');

    if(!empty($_SESSION)) {
        if (array_key_exists('isAdmin', $_SESSION)) {
            if($_SESSION['isAdmin'] == 1) {
                header("Refresh: 0;url=/admin");
            }
        }
    }

    if(!empty($_POST)) {
        if(array_key_exists('mail', $_POST) and array_key_exists('password', $_POST)) {
            $mail = htmlspecialchars($_POST['mail']);
            $password = htmlspecialchars($_POST['password']);

            $sql = "SELECT * FROM `users`";
            $requete = $db->query($sql);
            $users = $requete->fetchAll();

            foreach($users as $user) {
                if($mail == $user['users_mail'] and password_verify($password, $user['users_password'])) {
                    session_start();
                    $_SESSION['mail'] = $mail;
                    $_SESSION['password'] = $password;
                    $_SESSION['isAdmin'] = $user['users_isAdmin'];
                    header("Refresh: 0;url=/admin");
                    die();
                }
            }
        }
    }

    if(!empty($_GET)) {
        if(array_key_exists('destroy', $_GET)) {
            session_start();
            session_destroy();
        }
    }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('../fr/php/head.php'); ?>
    <link rel="stylesheet" href="/admin/css/login.css">
    <title>Admin - Climat-2030</title>
</head>
<body id="body">
    <header>
        <?php include('../fr/php/header.php'); ?>
    </header>

    <main>

        <div class="form">
            <form action="" method="POST">
                <div class="fort-content">Email :</div><input type="email" name="mail" placeholder="Mail">
                <div class="fort-content">Mot de passe :</div><input type="password" name="password" placeholder="Password">
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