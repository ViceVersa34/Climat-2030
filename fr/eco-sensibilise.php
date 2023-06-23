<?php 
    include('../admin/tables/contents/part/content.php'); 
    $sql = "SELECT COUNT(*) AS `compteur` FROM `customers`";
    $requete = $db->query($sql);
    $customers = $requete->fetchAll();    
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('php/head.php'); ?>
    <!-- <link rel="stylesheet" href="/css/eco-sensibilise.css"> -->
    <title>Accueil - Climat-2030</title>
</head>
<body id="body">
    <header>
        <?php include('php/header.php'); ?>
    </header>

    <main>
        <h1 class="top_txt"><?php echo html_entity_decode($contenuView['eco-sensibilise']['fr']['titre 1']['contenu']) . ' <span class="orange-txt size-txt2 font-family">' . $customers[0]['compteur'] . '</span> ' . html_entity_decode($contenuView['eco-sensibilise']['fr']['titre 2']['contenu']); ?></h1>
        
        <div class="scrollUp">
            <a href="#top"><img src="/img/up-arrow.svg"/></a>
        </div>

    </main>

    <footer>
        <?php include('php/footer.php'); ?>
    </footer>
</body>
</html>