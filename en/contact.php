<?php 
    include('admin/tables/contents/part/content.php'); 
    
    if(array_key_exists('action', $_POST)) {
        if($_POST['action'] = 'mail') {
            $choix = htmlspecialchars($_POST['choix']);
            $objet_detaille = htmlspecialchars($_POST['questionInput']);
            $devisSelect = htmlspecialchars($_POST['devisSelect']);
            $nbEleve = htmlspecialchars($_POST['nbEleve']);
            $prix = htmlspecialchars($_POST['prix']);
            $mail = htmlspecialchars($_POST['mail']);
            $message = htmlspecialchars($_POST['message']);

            if($devisSelect == 'club-pedagogique') {
                $devisSelect = 'Pedagogical Club';
            } else if($devisSelect == 'club-climat') {
                $devisSelect = 'Climate Club';
            } else if($devisSelect == 'club-humour') {
                $devisSelect = 'Humour Club';
            }

            $content = 'Une erreur est survenue';
            if($choix == 'question') {
                $content = "<html>
                            <head>
                            <style>
                            body {
                                font-family: Arial, sans-serif;
                                background: #d9d9d9;
                                max-width: 600px;
                                min-height: 400px;
                                margin-left: auto;
                                margin-right: auto;
                                padding: 1.5rem;
                                border-radius: 10px;
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
                            span {
                                font-weght: 700;
                            }
                        </style>
                            </head>
                            <body>
                                <h1>Demande de contact pour : une question</h1>
                                <div>
                                    Le mail provient de : <a href=\"mailto:".$mail."?subject=Re%20:%20Contact%20Climat-2030%20-%20".$objet_detaille."&body=Bonjour%2C%0D%0A%0D%0AJe%20fais%20suite%20à%20votre%20prise%20de%20contact.%0D%0A%0D%0A\">".$mail."</a>
                                    <br> <br> <br>
                                    La question porte sur : ".$objet_detaille.".
                                    <br> <br>
                                    Message : <br>
                                    <p>
                                        ".$message."
                                    </p>
                                    <div>
                                        <span style=\"color: #ff0000;\">ATTENTION : NE PAS RÉPONDRE DE CETTE ADRESSE !</span> <br> <br>
                                        <a href=\"https://mail.ovh.net/roundcube/?_task=mail&_mbox=INBOX\">Aller sur roundcube</a>
                                    </div>
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
                                        max-width: 600px;
                                        min-height: 400px;
                                        margin-left: auto;
                                        margin-right: auto;
                                        padding: 1.5rem;
                                        border-radius: 10px;
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
                                    span {
                                        font-weight: 700;
                                    }
                                </style>
                            </head>
                            <body>
                                <h1>Demande de contact pour : un devis</h1>
                                <div>
                                    Le mail provient de : <a href=\"mailto:".$mail."?subject=Re%20:%20Contact%20Climat-2030%20-%20".$devisSelect."&body=Bonjour%2C%0D%0A%0D%0AJe%20fais%20suite%20à%20votre%20prise%20de%20contact.%0D%0A%0D%0A\">".$mail."</a>
                                    <br> <br> <br>
                                    La demande de devis porte sur : ".$devisSelect.".
                                    <br>
                                    L'AF concernée comporte <span>".$nbEleve." étudiants</span> et le tarif des cours est de <span>".$prix."€</span>.
                                    <br> <br>
                                    Message : <br>
                                    <p>
                                        ".$message."
                                    </p>
                                    <div>
                                        <span style=\"color: #ff0000;\">ATTENTION : NE PAS RÉPONDRE DE CETTE ADRESSE !</span> <br> <br>
                                        <a href=\"https://mail.ovh.net/roundcube/?_task=mail&_mbox=INBOX\">Aller sur roundcube</a>
                                    </div>
                                </div>
                            </body>
                            </html>";
            }

            $to = "contact@climat-2030.org"; 
            $subject = "climat-2030"; 
            $headers = "From: Climat-2030 <contact@climat-2030.org>\r\n";
            $headers .= "Reply-To: contact@climat-2030.org\r\n";
            $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
            $error_message = '';

            if (mail($to, $subject, $content, $headers)) {
                header("Refresh: 0;url=/contact-us?message=0");
            } else {
                header("Refresh: 0;url=/contact-us?message=1");
            }
        }
    }

    $tab_message = [
        0 => '<span style="color: #225d1b !important">The email was sent successfully</span>',
        1 => '<span style="color: #ff0000 !important">An error has occurred. The email could not be sent</span>'
    ];

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('en/php/head.php'); ?>
    <link rel="stylesheet" href="/css/contact.css">
    <title>Contact - Climat-2030</title>
</head>
<body id="body">
    <header>
        <?php include('en/php/header.php'); ?>
    </header>

    <main>

        <h1 class="top_txt"><?php echo html_entity_decode($contenuView['contact']['en']['titre']['contenu']); ?></h1>

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
                    <label for="choix">Choose an option :</label>
                    <select id="choix" name="choix" onchange="afficherChamps()">
                        <option value="">-- Select --</option>
                        <option value="question">Question</option>
                        <option value="devis">Quote</option>
                    </select>

                    <div id="champsQuestion" style="display: none;">
                        <label for="questionInput">Detailed object :</label>
                        <input type="text" id="questionInput" name="questionInput">
                    </div>

                    <div id="champsDevis">
                        <label for="devisSelect">Choose a quote option :</label>
                        <select id="devisSelect" name="devisSelect">
                            <option value="">-- Select --</option>
                            <option value="club-pedagogique">Pedagogical Club</option>
                            <option value="club-climat">Climate Club</option>
                            <option value="club-humour">Humour Club</option>
                        </select>
                    </div>

                    <div id="champsNbEleve">
                        <label for="nbEleve">Average number of students in your AF :</label>
                        <input type="number" id="nbEleve" name="nbEleve" oninput="estimationPrixEn();">
                    </div>

                    <div id="ChampsPrix">
                        <label for="prix">Average course price :</label>
                        <input type="number" id="prix" name="prix" oninput="estimationPrixEn();">
                    </div>

                    <div class="prixEstime" id="prixEstime">Estimate: 0€ per subscription per month the 1st year</div>

                    <label for="message">E-mail :</label>
                    <input type="mail" name="mail" id="mail" placeholder="Mail">
                    
                    <label for="message">Message :</label>
                    <textarea id="message" name="message" maxlength="500" oninput="compterCaracteres()"></textarea>
                    <div id="compteur" class="compteur">0/500 caractères</div>
                    <h2><?php echo html_entity_decode($contenuView['contact']['en']['commentaire']['contenu']); ?></h2>
                    <input type="submit" class="en-savoir-plus" value="<?php echo html_entity_decode($contenuView['contact']['en']['en-savoir-plus']['contenu']); ?>">
                    <div class="message-mail">
                        <?php
                            if(array_key_exists('message', $_GET)) {
                                echo html_entity_decode($tab_message[$_GET['message']]);
                            }
                        ?>
                    </div>
                </form>
            </div>
        </div>

        <div class="scrollUp">
            <a href="#top"><img src="/img/up-arrow.svg"/></a>
        </div>
    </main>

    <footer>
        <?php include('en/php/footer.php'); ?>
    </footer>
</body>
</html>