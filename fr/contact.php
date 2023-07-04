<?php 
    include('admin/tables/contents/part/content.php'); 
    
    if(array_key_exists('action', $_POST)) {
        if($_POST['action'] = 'mail') {
            $choix = $_POST['choix'];
            $objet_detaille = $_POST['questionInput'];
            $devisSelect = $_POST['devisSelect'];
            $nbEleve = $_POST['nbEleve'];
            $prix = $_POST['prix'];
            $mail = $_POST['mail'];
            $message = $_POST['message'];

            if($devisSelect == 'club-pedagogique') {
                $devisSelect = 'Club pédagogique';
            } else if($devisSelect == 'club-climat') {
                $devisSelect = 'Club climat';
            } else if($devisSelect == 'club-humour') {
                $devisSelect = 'Club humour';
            }

            $content = 'Une erreur est survenue';
            if($choix == 'question') {
                $content = "<html>
                            <head>
                                <style>
                                    body {
                                        font-family: Arial, sans-serif;
                                        background-color: #f7f7f7;
                                    }
                                    h1 {
                                        color: #333333;
                                    }
                                    p {
                                        color: #555555;
                                        line-height: 1.5;
                                    }
                                </style>
                            </head>
                            <body>
                                <h1>Demande de contact pour : une question</h1>
                                <div>
                                    Le mail provient de : <a href=\"mailto:".$mail."\">".$mail."</a>
                                    <br> <br> <br>
                                    La question porte sur : ".$objet_detaille." :
                                    <br> <br>
                                    <p>
                                        ".$message."
                                    </p>
                                </div>
                            </body>
                            </html>";
            }
            if($choix == 'devis') {
                $content = "<html>
                            <head>
                                <style>
                                    body {
                                        font-family: Arial, sans-serif;
                                        background: #d9d9d9;
                                        max-width: 200px;
                                        min-height: 200px;
                                    }
                                    h1 {
                                        color: #333333;
                                        text-align: center;
                                    }
                                    div {
                                        color: #000000;
                                        line-height: 1.5;
                                    }
                                    p {
                                        color: #555555;
                                        line-height: 1;
                                    }
                                </style>
                            </head>
                            <body>
                                <h1>Demande de contact pour : un devis</h1>
                                <div>
                                    Le mail provient de : <a href=\"mailto:".$mail."\">".$mail."</a>
                                    <br> <br> <br>
                                    La demande de devis porte sur : ".$devisSelect." :
                                    <br>
                                    L'AF concernée comporte ".$nbEleve." étudiants et font payer le cours ".$prix."€.
                                    <br> <br>
                                    <p>
                                        ".$message."
                                    </p>
                                </div>
                            </body>
                            </html>";
            }

            $to = "palermo.enzo.ep@gmail.com"; 
            $subject = "Test mail PHP"; 
            $headers = "From: Climat-2030 <contact@climat-2030.org>\r\n";
            $headers .= "Reply-To: contact@climat-2030.org\r\n";
            $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
            $error_message = '';

            if (mail($to, $subject, $content, $headers)) {
                header("Refresh: 0;url=/contact?message=0");
            } else {
                header("Refresh: 0;url=/contact?message=1");
            }
        }
    }

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('fr/php/head.php'); ?>
    <link rel="stylesheet" href="/css/contact.css">
    <title>Contact - Climat-2030</title>
</head>
<body id="body">
    <header>
        <?php include('fr/php/header.php'); ?>
    </header>

    <main>

        <h1 class="top_txt"><?php echo html_entity_decode($contenuView['contact']['fr']['titre']['contenu']); ?></h1>
        <script src="/js/contact.js"></script>

        <?php
            $jsonPriceTab = json_encode($pricesTab);
        ?>
        <script>
            setTab(<?php echo $jsonPriceTab; ?>);
        </script>
        <div class="contact">
            <div class="objet">
                <form action="" method="POST">
                    <input type="hidden" name="action" value="mail">
                    <label for="choix">Choisir une option :</label>
                    <select id="choix" name="choix" onchange="afficherChamps()">
                        <option value="">-- Sélectionnez --</option>
                        <option value="question">Question</option>
                        <option value="devis">Devis</option>
                    </select>

                    <div id="champsQuestion">
                        <label for="questionInput">Objet détaillé :</label>
                        <input type="text" id="questionInput" name="questionInput">
                    </div>

                    <div id="champsDevis">
                        <label for="devisSelect">Choisissez une option de devis :</label>
                        <select id="devisSelect" name="devisSelect">
                            <option value="">-- Sélectionnez --</option>
                            <option value="club-pedagogique">Club Pédagogique</option>
                            <option value="club-climat">Club Climat</option>
                            <option value="club-humour">Club Humour</option>
                        </select>
                    </div>

                    <div id="champsNbEleve">
                        <label for="nbEleve">Nombre moyen d'éleve de votre AF :</label>
                        <input type="number" id="nbEleve" name="nbEleve" oninput="estimationPrix();">
                    </div>

                    <div id="ChampsPrix">
                        <label for="prix">Prix moyen du cours :</label>
                        <input type="number" id="prix" name="prix" oninput="estimationPrix();">
                    </div>

                    <div class="prixEstime" id="prixEstime">Estimation : 0€ par abonnement par mois la 1ère année</div>

                    <label for="message">E-mail :</label>
                    <input type="mail" name="mail" id="mail" placeholder="Mail">
                    
                    <label for="message">Message :</label>
                    <textarea id="message" name="message" maxlength="500" oninput="compterCaracteres()"></textarea>
                    <div id="compteur" class="compteur">0/500 caractères</div>
                    <h2><?php echo html_entity_decode($contenuView['contact']['fr']['commentaire']['contenu']); ?></h2>
                    <input type="submit" class="en-savoir-plus" value="<?php echo html_entity_decode($contenuView['contact']['fr']['en-savoir-plus']['contenu']); ?>">
                </form>
                
            </div>
        </div>

        <div class="scrollUp">
            <a href="#top"><img src="/img/up-arrow.svg"/></a>
        </div>

    </main>

    <footer>
        <?php include('fr/php/footer.php'); ?>
    </footer>
</body>
</html>