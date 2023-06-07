<?php
    session_start();
    include('php/isAdmin.php');
    print_r($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/admin/css/main.css">
    <title>Admin</title>
</head>
<body>
    <a href="/">accueil</a>
    <a href="/admin/login.php?destroy=">déconnecter</a>
</body>
</html>