<?php
    session_start();
    include('tables/contents/part/content.php'); 
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
        <div class="scrollUp">
            <a href="#top"><img src="/img/up-arrow.svg"/></a>
        </div>
    </main>
</body>
</html>