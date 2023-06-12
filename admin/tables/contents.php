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
                <div class="page-selector" id="index"></div>
                <div class="contents">
                    <div class="content">
                        <!-- TITRE -->
                        <?php
                            $sql = "SELECT `contents_content` FROM `contents` WHERE `contents_name` = 'titre'";
                            $requete = $db->query($sql);
                            $contents = $requete->fetchAll();
                            echo $contents[0]['contents_content'];
                        ?>
                    </div>
                    <div class="content">
                        <!-- QUESTION -->
                        <?php
                            $sql = "SELECT `contents_content` FROM `contents` WHERE `contents_name` = 'question 1'";
                            $requete = $db->query($sql);
                            $contents = $requete->fetchAll();
                            echo $contents[0]['contents_content'];
                        ?>
                    </div>
                    <div class="content">
                        <!-- CONSTAT -->
                        <?php
                            $sql = "SELECT `contents_content` FROM `contents` WHERE `contents_name` = 'question 2'";
                            $requete = $db->query($sql);
                            $contents = $requete->fetchAll();
                            echo $contents[0]['contents_content'];
                        ?>
                    </div>
                    <div class="content">
                        <!-- VALEURS -->
                        <?php
                            $sql = "SELECT `contents_content` FROM `contents` WHERE `contents_name` = 'question 3'";
                            $requete = $db->query($sql);
                            $contents = $requete->fetchAll();
                            echo $contents[0]['contents_content'];
                        ?>
                    </div>
                    <div class="content">
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>