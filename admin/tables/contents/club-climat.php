<?php

    session_start();
    include('part/content.php');
    include('../../php/isAdmin.php');

    // Vérifie si les paramètres 'action', 'id_contents' et 'contents_content' sont présents dans l'URL
    if(array_key_exists('action', $_GET) and
    array_key_exists('id_contents', $_GET) and
    array_key_exists('contents_content', $_GET)) {
        // Récupère les valeurs des paramètres 'id_contents' et 'contents_content'
        $id_contents = htmlspecialchars($_GET['id_contents']);
        $contents_content = htmlspecialchars($_GET['contents_content']);

        // Met à jour le contenu du champ 'contents_content' de la table 'contents' pour l'enregistrement avec l'ID spécifié
        $sql = "UPDATE `contents` SET `contents_content`=\"$contents_content\" WHERE id_contents = $id_contents";
        $requete = $db->query($sql);

        // Redirige l'utilisateur vers la page "/admin/tables/contents/club-climat.php#r$id_contents"
        header("Refresh: 0;url=/admin/tables/contents/club-climat.php#r$id_contents");
    }
    
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
                <?php include('part/club-climat.php'); ?>
                <script src="/admin/js/repereId.js"></script>
            </div>
        </div>
        <div class="scrollUp">
            <a href="#top"><img src="/img/up-arrow.svg"/></a>
        </div>
    </main>
</body>
</html>