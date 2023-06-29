<?php

    session_start();
    include('tables/contents/part/content.php'); 
    include('php/isAdmin.php');

    if(!empty($_POST)) {
        if(array_key_exists('id_users', $_POST) and 
        array_key_exists('oldPassword', $_POST) and 
        array_key_exists('newPassword1', $_POST) and 
        array_key_exists('newPassword2', $_POST)) {
            $id_users = htmlspecialchars($_POST['id_users']);
            $oldPassword = htmlspecialchars($_POST['oldPassword']);
            $newPassword1 = htmlspecialchars($_POST['newPassword1']);
            $newPassword2 = htmlspecialchars($_POST['newPassword2']);

            if(password_verify($oldPassword, $_SESSION['password'])  and $newPassword1 == $newPassword2) {
                $newPassword1 = password_hash($newPassword1, PASSWORD_DEFAULT);
                $sql = "UPDATE `users` SET `users_password`='$newPassword1' WHERE id_users = $id_users";
                $requete = $db->query($sql);
                $users = $requete->fetchAll();
                header("Refresh: 0;url=/admin/my-account.php?error=1");
            } else {
                header("Refresh: 0;url=/admin/my-account.php?error=0");
            }
        }
    }

    $error_message = '';
    if(array_key_exists('error', $_GET)) {
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
    </main>
</body>
</html>