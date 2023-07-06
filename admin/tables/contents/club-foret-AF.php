<?php

    session_start();
    include('part/content.php');
    include('../../php/isAdmin.php');

    if(array_key_exists('action', $_GET) and
    array_key_exists('id_contents', $_GET) and
    array_key_exists('contents_content', $_GET)) {
        $id_contents = htmlspecialchars($_GET['id_contents']);
        $contents_content = htmlspecialchars($_GET['contents_content']);

        $sql = "UPDATE `contents` SET `contents_content`=\"$contents_content\" WHERE id_contents = $id_contents";
        $requete = $db->query($sql);

        header("Refresh: 0;url=/admin/tables/contents/club-foret-AF.php#r$id_contents");
    }
    
    // $contenuView = contentView($contents); (dans /admin/php/content.php)
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('../../php/head.php'); ?>
    <link rel="stylesheet" href="/admin/css/contents.css">
    <script src="/admin/js/updateContents.js"></script>
    <title>Content - Climat 2030</title>
</head>
<body>
    <header>
        <?php include('../../php/header.php'); ?>
    </header>
    <main>
        <div class="global-title">
            <div class="title">Contents</div>
            <div class="info-icon" id="infoIcon">i</div>
            <div class="info" id="info">La page 'Contents' contient les textes du site. Il est possible de les modifiés ici.</div>
        </div>
        <script src="/admin/js/info.js"></script>

        <div class="boutons">
            <a href="" onclick="miseEnForme();" class="bouton">Mise en forme</a>
        </div>
        <?php include('part/mise-en-forme.php'); ?>
        <div class="pages">
            <div class="page index">
                <?php include('part/club-foret-AF.php'); ?>
                <script src="/admin/js/repereId.js"></script>
            </div>
        </div>
        <div class="scrollUp">
            <a href="#top"><img src="/img/up-arrow.svg"/></a>
        </div>
    </main>
</body>
</html>