<?php

    include('../php/link_db.php');
    
    $sql = "SELECT * FROM `contents` ORDER BY id_contents ASC";
    $requete = $db->query($sql);
    $contents = $requete->fetchAll();
    // header("Refresh: 0;url=/admin/tables/contents.php");

    // print_r($contents);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('../php/head.php'); ?>
    <link rel="stylesheet" href="/admin/css/contents.css">
    <title>Document</title>
</head>
<body>
    <header>
        <?php include('../php/header.php'); ?>
    </header>
    <main>
        <div class="pages-selectors">
            <div class="selector"><a href="#index">Accueil</a></div>
        </div>
        <div class="pages">
            <div class="page index">
                <?php include('../contents/accueil.php'); ?>
            </div>
        </div>
    </main>
</body>
</html>