<?php
    session_start();
    include('php/isAdmin.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('php/head.php'); ?>
    <link rel="stylesheet" href="/admin/css/index.css">
    <title>Admin</title>
</head>
<body>
    <header>
        <?php include('php/header.php'); ?>
    </header>
    <main>
        <div>
            Aucune table sélectionnée. Sélectionnez-en une pour continuer.
        </div>
    </main>
</body>
</html>