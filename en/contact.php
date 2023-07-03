<?php include('admin/tables/contents/part/content.php'); ?>
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
                <form>
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
                            <option value="option1">Pedagogical Club</option>
                            <option value="option2">Climate Club</option>
                            <option value="option2">Humour Club</option>
                        </select>
                    </div>

                    <div id="champsNbEleve">
                        <label for="nbEleve">Average number of students in your AF :</label>
                        <input type="number" id="nbEleve" oninput="estimationPrixEn();">
                    </div>

                    <div id="ChampsPrix">
                        <label for="prix">Average course price :</label>
                        <input type="number" id="prix" oninput="estimationPrixEn();">
                    </div>

                    <div class="prixEstime" id="prixEstime">Estimate: 0€ per subscription per month the 1st year</div>

                    <label for="message">E-mail :</label>
                    <input type="mail" name="mail" id="mail" placeholder="Mail">
                    
                    <label for="message">Message :</label>
                    <textarea id="message" name="message" maxlength="500" oninput="compterCaracteres()"></textarea>
                    <div id="compteur" class="compteur">0/500 caractères</div>
                    <h2><?php echo html_entity_decode($contenuView['contact']['en']['commentaire']['contenu']); ?></h2>
                    <input type="submit" class="en-savoir-plus" value="<?php echo html_entity_decode($contenuView['contact']['en']['en-savoir-plus']['contenu']); ?>">
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