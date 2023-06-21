<?php include('../admin/tables/contents/part/content.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('php/head.php'); ?>
    <link rel="stylesheet" href="/css/social-club.css">
    <link rel="stylesheet" href="/css/humour.css">
    <title>The Social Club network - Climat-2030</title>
</head>
<body id="body">
    <header>
        <?php include('php/header.php'); ?>
    </header>

    <main>
        <div class="social-network">
            <div class="repere social-club-repere" id="social-network"></div>
            <h1 class="top_txt"><?php echo html_entity_decode($contenuView['club-climat']['en']['titre']['contenu']); ?></span></h1>
            <a href="/fr/contact.php" class="en-savoir-plus">Pré-inscription</a>

            <div class="top-illustration">
                <img src="/img/social_club/casque.jpg" alt="Illustration social club">
            </div>

            <div class="valeurs">
                <div class="valeurs-part1">
                    <div class="principe">
                        <p><?php echo html_entity_decode($contenuView['club-climat']['en']['question 1']['contenu']); ?></p>
                    </div>
                    <div class="principe">
                        <p><?php echo html_entity_decode($contenuView['club-climat']['en']['question 2']['contenu']); ?></p>
                    </div>
                    <div class="principe">
                        <p><?php echo html_entity_decode($contenuView['club-climat']['en']['question 3']['contenu']); ?></p>
                    </div>
                    <div class="principe">
                        <p><?php echo html_entity_decode($contenuView['club-climat']['en']['question 4']['contenu']); ?></p>
                    </div>
                </div>
                <div class="bottom-illustration">
                    <img src="/img/social_club/fiche_telecom.jpg" alt="Illustration social club">
                </div>
                <div class="infos">
                    <div class="info">
                        <p><?php echo html_entity_decode($contenuView['club-climat']['en']['contenu 1']['contenu']); ?></p>
                    </div>
                    <div class="info">
                        <p><?php echo html_entity_decode($contenuView['club-climat']['en']['contenu 2']['contenu']); ?></p>
                    </div>
                    <div class="info">
                        <p><?php echo html_entity_decode($contenuView['club-climat']['en']['contenu 3']['contenu']); ?></p>
                    </div>
                    <div class="info">
                        <p><?php echo html_entity_decode($contenuView['club-climat']['en']['contenu 4']['contenu']); ?></p>
                    </div>
                </div>
            </div>
            <div class="repere humour-repere" id="humour"></div>
        </div>

        <div class="separation"></div>

        <div class="humour">
            <h1 class="top_txt titre-humour"><?php echo html_entity_decode($contenuView['club-humour']['en']['titre 1']['contenu']); ?></h1>
            <a href="/fr/contact.php" class="en-savoir-plus">Pré-réservation</a>
            <div><?php echo html_entity_decode($contenuView['club-humour']['en']['titre 2']['contenu']); ?></div>

            <div class="top-illustration">
                <img src="/img/humour/illustration_humour.png" alt="Illustration humour">
            </div>

            <div class="valeurs">
                <div class="valeurs-part1">
                    <div class="principe club-humour">
                        <div class="titre"><?php echo html_entity_decode($contenuView['club-humour']['en']['titre question 1']['contenu']); ?></div>
                        <p><?php echo html_entity_decode($contenuView['club-humour']['en']['question 1']['contenu']); ?></p>
                    </div>
                    <div class="principe club-humour">
                        <div class="titre"><?php echo html_entity_decode($contenuView['club-humour']['en']['titre question 2']['contenu']); ?></div>
                        <p><?php echo html_entity_decode($contenuView['club-humour']['en']['question 2']['contenu']); ?></p>
                    </div>
                </div>
            </div>
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