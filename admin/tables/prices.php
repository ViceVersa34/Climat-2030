<?php
    session_start();
    include('contents/part/content.php'); 
    include('../php/isAdmin.php');

    // Vérifie si le paramètre 'action' est présent dans l'URL
    if(array_key_exists('action', $_GET)) {

        // Vérifie si la valeur du paramètre 'action' est 'update'
        if($_GET['action'] == 'update') {
            // Parcours les lignes de 1 à 9
            for($k = 1; $k <= 9; $k++) {
                // Parcours les colonnes de 1 à 15
                for($l = 1; $l <= 15; $l++) {
                    // Récupère le prix à partir des paramètres de l'URL
                    $price = $_GET[$k.'-'.$l];
                    $row = $k; // Numéro de ligne
                    $col = $l; // Numéro de colonne

                    // Requête SQL pour mettre à jour le prix dans la table 'prices' selon les coordonnées (ligne, colonne)
                    $sql = "UPDATE `prices` SET `prices_price`='$price' WHERE `prices_row` = $row AND `prices_col` = $col";
                    $requete = $db->query($sql);
                    $users = $requete->fetchAll();
                }
            }
            // Redirige l'utilisateur vers la page "/admin/tables/prices.php" après la mise à jour
            header("Refresh: 0;url=/admin/tables/prices.php");
        }
    }
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('../php/head.php'); ?>
    <title>Prices - Climat 2030</title>
    <link rel="stylesheet" href="/admin/css/prices.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="/admin/js/updatePrices.js"></script>
</head>
<body>
    <header>
        <?php include('../php/header.php'); ?>
    </header>
    
    <main>        
        <div class="global-title">
            <div class="title">Prices</div>
            <div class="info-icon" id="infoIcon">i</div>
            <div class="info" id="info">La table 'Prices' contient le tableau de correspondance des prix en fonction du nombre d'étudiants et du prix du cours de chaque AF.</div>
        </div>

        <script src="/admin/js/info.js"></script>

        <div class="bouton" onclick="updatePrices();">Modifier le tableau</div>
        
        <div class="titre-tableau">Éco-participation par élève selon l'effectif et la tranche de prix par AF par an.</div>

        <div class="tableau">
            <table class="prices-tab" id="prices-tab">
                <?php
                    for($i = 1; $i <= 9; $i++) {
                        echo '<tr>';
                        for($j = 1; $j <= 15; $j++) {
                            if(($i == 1) or ($j == 1)) {
                                echo '<td class="td">'.$pricesTab[$i][$j]['prices'].'</td>';
                            } else {
                                echo '<th>'.number_format(round(floatval($pricesTab[$i][$j]['prices']), 2), 2, '.', '').'€</th>';
                            }
                        }
                        echo '</tr>';
                    }
                ?>
            </table>
        </div>


        <?php echo '<form action="" method="get" class="invisible" id="update-tab">'; ?>
        <input type="hidden" name="action" value="update">
        <div class="tableau">
            <table class="update-tab">
                <?php
                    for($i = 1; $i <= 9; $i++) {
                        echo '<tr>';
                        for($j = 1; $j <= 15; $j++) {
                            if(($i == 1) or ($j == 1)) {
                                echo '<td><input type="text" name="'.$i.'-'.$j.'" value="'.$pricesTab[$i][$j]['prices'].'"></td>';
                            } else {
                                echo '<th><input type="text" name="'.$i.'-'.$j.'" value="'.$pricesTab[$i][$j]['prices'].'"></th>';
                            }
                        }
                        echo '</tr>';
                    }
                    ?>
            </table>
        </div>
        <?php
        echo '<input type="submit" value="Modifier">';
        echo '</form>'; 
        ?>

        <canvas id="myChart"></canvas>
        <script src="/admin/js/prices.js"></script>
        <?php
        $jsonPriceTab = json_encode($pricesTab);
        ?>
        <script>
            createCanvas(<?php echo $jsonPriceTab; ?>);
        </script>

        <div class="titre-tableau">Abonnement des AF par mois (éco-part x effectif moyen / 12)</div>

        <div class="tableau">
            <table class="calculed-prices-tab">
                <?php
                    for($i = 11; $i <= 19; $i++) {
                        echo '<tr>';
                        for($j = 1; $j <= 15; $j++) {
                            if(($i == 11) or ($j == 1)) {
                                echo '<td class="td">'.$pricesTab[$i][$j]['prices'].'</td>';
                            } else {
                                echo '<th>'.number_format(round(floatval(($pricesTab[$i-10][$j]['prices'] * $pricesTab[11][$j]['prices']) / 12), 2), 2, '.', '').'€</th>';
                            }
                        }
                        echo '</tr>';
                    }
                ?>
            </table>
        </div>
        
        <canvas id="myChart2"></canvas>
        <script src="/admin/js/prices.js"></script>
        <?php
        $jsonPriceTab = json_encode($pricesTab);
        ?>
        <script>
            createCanvas2(<?php echo $jsonPriceTab; ?>);
        </script>
        
        <div class="scrollUp">
            <a href="#top"><img src="/img/up-arrow.svg"/></a>
        </div>
    </main>
</body>
</html>