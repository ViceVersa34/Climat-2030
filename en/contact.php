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

        <div class="contact">
            <div class="objet">
                <form>
                    <label for="choix">Choose an option :</label>
                    <select id="choix" name="choix" onchange="afficherChamps()" class="mb">
                        <option value="">-- Select --</option>
                        <option value="question">Question</option>
                        <option value="devis">Quote</option>
                    </select>

                    <div id="champsQuestion" style="display: none;" class="mb">
                        <label for="questionInput">Detailed object :</label>
                        <input type="text" id="questionInput" name="questionInput">
                    </div>

                    <div id="champsDevis" style="display: none;" class="mb">
                        <label for="devisSelect">Choose a quote option :</label>
                        <select id="devisSelect" name="devisSelect">
                            <option value="">-- Select --</option>
                            <option value="option1">Climate-2030 academy</option>
                            <option value="option2">Exhibition</option>
                        </select>
                    </div>

                    <label for="message">E-mail :</label>
                    <input type="mail" name="mail" id="mail" placeholder="Mail">
                    <div class="mb">
                    </div>
                    
                    <label for="message">Message :</label>
                    <textarea id="message" name="message" maxlength="500" oninput="compterCaracteres()"></textarea>
                    <div id="compteur" class="compteur">0/500 Characters</div>
                    <div class="mb">
                    </div>
                    <h2><?php echo html_entity_decode($contenuView['contact']['en']['commentaire']['contenu']); ?></h2>
                    <input type="submit" value="<?php echo html_entity_decode($contenuView['contact']['en']['en-savoir-plus']['contenu']); ?>">
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