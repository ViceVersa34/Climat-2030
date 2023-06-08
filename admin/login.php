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
                    header("Refresh: 0;url=/admin/");
                    die();
                } else {
                    header("Refresh: 0;url=/admin/login.php?error=0");
                }
            }
        }
    }
    
    if(!empty($_GET)) {
        if(array_key_exists('destroy', $_GET)) {
            session_start();
            session_destroy();
            header("Refresh: 0;url=/");
        }
    }

    $error_message = '';
    if(array_key_exists('error', $_GET)) {
        if($_GET['error'] == '0') {
            $error_message = 'Identifiant ou mot de passe incorect !';
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