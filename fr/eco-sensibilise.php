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
    <link rel="stylesheet" href="/css/eco-sensibilise.css">
    <title>Éco-sensibilisé - Climat-2030</title>
</head>
<body id="body">
    <header>
        <?php include('php/header.php'); ?>
    </header>

    <main>
        <h1 class="top_txt"><?php echo html_entity_decode($contenuView['eco-sensibilise']['fr']['titre 1']['contenu']) . ' <span class="orange-txt size-txt2 font-family">' . $customers[0]['compteur'] . '</span> ' . html_entity_decode($contenuView['eco-sensibilise']['fr']['titre 2']['contenu']); ?></h1>
        
        <div class="titre-eco-sensibilise"><?php echo html_entity_decode($contenuView['eco-sensibilise']['fr']['contenu']['contenu']); ?></div>
        
        <div class="eco-sensibilise-tableau">
            <div class="tableau-eco-sensibilise-img">
                <img src="<?php echo $images['eco-sensibilise']['illustration 1']['image']; ?>" alt="Image Lauriet">
                <img src="<?php echo $images['eco-sensibilise']['illustration 1']['image']; ?>" alt="Image Lauriet">
                <img src="<?php echo $images['eco-sensibilise']['illustration 1']['image']; ?>" alt="Image Lauriet">
                <img src="<?php echo $images['eco-sensibilise']['illustration 1']['image']; ?>" alt="Image Lauriet">
            </div>
            <?php
                $num = $customers[0]['compteur'];

                $sql = "SELECT * FROM `customers` ORDER BY id_customers DESC";
                $requete = $db->query($sql);
                $customers = $requete->fetchAll();


                foreach($customers as $customer) { ?>
                    <div class="eco-sensibilise">
                        N° <?php echo $num; ?> : 
                        <span class="green-txt font-weight"><?php echo ucfirst($customer['customers_surname']); ?></span>, 
                        <?php echo $customer['customers_age']; ?> ans, 
                        <?php echo $customer['customers_status']; ?> 
                        <?php echo ucfirst($customer['customers_nationality']); ?> éco-sensibilisé.e à l'
                        <?php echo strtoupper($customer['customers_organism']); ?> de 
                        <?php echo ucfirst($customer['customers_city_organism']); ?>, 
                        <?php echo ucfirst($customer['customers_country_organism']); ?>.
                    </div>
                    <!-- N° $id : $prenom, $age ans, $statut de nationalité $nationalité à l'$orga de $ville_orga en $pays_orga. -->
            <?php 
                $num --; 
                }
            ?>
        </div>

        <div class="scrollUp">
            <a href="#top"><img src="/img/up-arrow.svg"/></a>
        </div>

    </main>

    <footer>
        <?php include('php/footer.php'); ?>
    </footer>
</body>
</html>