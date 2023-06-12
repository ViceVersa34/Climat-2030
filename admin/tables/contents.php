<?php

    include('../php/link_db.php');
    
    $sql = "SELECT * FROM `contents` ORDER BY id_contents ASC";
    $requete = $db->query($sql);
    $contents = $requete->fetchAll();

    function content($donnees) {
        $contenu = array();
    
        foreach ($donnees as $ligne) {
            $page = $ligne['contents_page'];
            $langue = $ligne['contents_language'];
            $titre = $ligne['contents_name'];
            $texte = $ligne['contents_content'];
            $id = $ligne['id_contents'];
    
            if (!isset($contenu[$page])) {
                $contenu[$page] = array();
            }
    
            if (!isset($contenu[$page][$langue])) {
                $contenu[$page][$langue] = array();
            }
    
            if (!isset($contenu[$page][$langue][$titre])) {
                $contenu[$page][$langue][$titre] = array();
            }
    
            $contenu[$page][$langue][$titre] = array(
                'contenu' => $texte,
                'id' => $id
            );
        }
    
        return $contenu;
    }

    function contentView($donnees) {
        $contenu = array();
    
        foreach ($donnees as $ligne) {
            $page = $ligne['contents_page'];
            $langue = $ligne['contents_language'];
            $titre = $ligne['contents_name'];
            $texte = $ligne['contents_content'];
            $id = $ligne['id_contents'];
    
            if (!isset($contenu[$page])) {
                $contenu[$page] = array();
            }
    
            if (!isset($contenu[$page][$langue])) {
                $contenu[$page][$langue] = array();
            }
    
            if (!isset($contenu[$page][$langue][$titre])) {
                $contenu[$page][$langue][$titre] = array();
            }
    
            $contenu[$page][$langue][$titre] = array(
                'contenu' => texteView($texte),
                'id' => $id
            );
        }
    
        return $contenu;
    }

    function texteView($texte) {
        $texte = str_replace('{{/', '</span ', $texte);
        $texte = str_replace('{{', '<span class="', $texte);
        $texte = str_replace('}}', '">', $texte);
    
        foreach ($replacements as $recherche => $remplacement) {
            $texte = str_replace($recherche, $remplacement, $texte);
        }
        return $texte;
    }

    if(array_key_exists('action', $_GET) and
    array_key_exists('id_contents', $_GET) and
    array_key_exists('contents_content', $_GET)) {
        $id_contents = htmlspecialchars($_GET['id_contents']);
        $contents_content = htmlspecialchars($_GET['contents_content']);

        $sql = "UPDATE `contents` SET `contents_content`=\"$contents_content\" WHERE id_contents = $id_contents";
        $requete = $db->query($sql);

        header("Refresh: 0;url=/admin/tables/contents.php");
    }

    $contenu = content($contents);
    $contenuView = contentView($contents);
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