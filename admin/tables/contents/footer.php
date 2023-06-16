<?php

    include('part/content.php');

    if(array_key_exists('action', $_GET) and
    array_key_exists('id_contents', $_GET) and
    array_key_exists('contents_content', $_GET)) {
        $id_contents = htmlspecialchars($_GET['id_contents']);
        $contents_content = htmlspecialchars($_GET['contents_content']);

        $sql = "UPDATE `contents` SET `contents_content`=\"$contents_content\" WHERE id_contents = $id_contents";
        $requete = $db->query($sql);

        header("Refresh: 0;url=/admin/tables/contents/footer.php#r$id_contents");
}
    
    // $contenuView = contentView($contents); (dans /admin/php/content.php)
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('../../php/head.php'); ?>
    <link rel="stylesheet" href="/admin/css/contents.css">
    <script src="/admin/js/updateContents.js"></script>
    <title>Document</title>
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
        <div id="miseEnForme" class="mise-en-forme invisible">
            <div class="constructeur">
                <div>Balise d'ouverture :</div>
                <div class="constructeur-bouton">
                    <button id="button-g" class="selectable-button"><span class="font-weight">Gras</span></button>
                    <button id="button-t1" class="selectable-button"><span class="">Taille 1</span></button>
                    <button id="button-t2" class="selectable-button"><span class="">Taille 2</span></button>
                    <button id="button-p" class="selectable-button"><span class="font-family">Police</span></button>
                    <button id="button-o" class="selectable-button"><span class="orange-txt">Orange</span></button>
                    <button id="button-y" class="selectable-button"><span class="yello-txt">Jaune</span></button>
                </div>
                <button id="copyButton">Copier</button>
                <label for="outputText">Élement copié : </label>
                <input type="text" id="outputText" readonly>
                <div>Balise de fermeture :</div>
                <button id="copyClosingButton">Copier {{/}}</button>
                <div>Balise de saut de ligne :</div>
                <button id="copyBrButton">Copy &lt;br&gt;</button>
                <script src="/admin/js/miseEnForme.js"></script>
            </div>
        </div>
        <div class="pages">
            <div class="page index">
                <?php include('part/footer.php'); ?>
                <script src="/admin/js/repereId.js"></script>
            </div>
        </div>
    </main>
</body>
</html>