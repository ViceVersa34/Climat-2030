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
    <script src="/admin/js/updateContents.js"></script>
    <title>Document</title>
</head>
<body>
    <header>
        <?php include('../php/header.php'); ?>
    </header>
    <main>
        <div class="global-title">
            <div class="title">Contents</div>
            <div class="info-icon" id="infoIcon">🛈</div>
            <div class="info" id="info">La page 'Contents' contient les textes du site. Il est possible de les modifiés ici.</div>
        </div>
        <script src="/admin/js/info.js"></script>
        
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