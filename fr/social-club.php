<?php include('../admin/tables/contents/part/content.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('php/head.php'); ?>
    <link rel="stylesheet" href="/css/social-club.css">
    <link rel="stylesheet" href="/css/humour.css">
    <title>Le Social Club - Climat-2030</title>
</head>
<body id="body">
    <header>
        <?php include('php/header.php'); ?>
    </header>

    <main>
        <div class="social-network">
            <div class="repere social-club-repere" id="social-network"></div>
            <h1 class="top_txt"><?php echo html_entity_decode($contenuView['club-climat']['fr']['titre']['contenu']); ?></span></h1>
            <a href="/fr/contact.php" class="en-savoir-plus">Inscription</a>

            <div class="top-illustration">
                <img src="<?php echo $images['club-climat']['illustration 1']['image']; ?>" alt="Illustration social club">
            </div>

            <div class="valeurs">
                <div class="valeurs-part1">
                    <div class="principe">
                        <p><?php echo html_entity_decode($contenuView['club-climat']['fr']['question 1']['contenu']); ?></p>
                    </div>
                    <div class="principe">
                        <p><?php echo html_entity_decode($contenuView['club-climat']['fr']['question 2']['contenu']); ?></p>
                    </div>
                    <div class="principe">
                        <p><?php echo html_entity_decode($contenuView['club-climat']['fr']['question 3']['contenu']); ?></p>
                    </div>
                    <div class="principe">
                        <p><?php echo html_entity_decode($contenuView['club-climat']['fr']['question 4']['contenu']); ?></p>
                    </div>
                </div>
                <div class="bottom-illustration">
                    <img src="<?php echo $images['club-climat']['illustration 2']['image']; ?>" alt="Illustration social club">
                </div>
                <div class="infos">
                    <div class="info">
                        <p><?php echo html_entity_decode($contenuView['club-climat']['fr']['contenu 1']['contenu']); ?></p>
                    </div>
                    <div class="info">
                        <p><?php echo html_entity_decode($contenuView['club-climat']['fr']['contenu 2']['contenu']); ?></p>
                    </div>
                    <div class="info">
                        <p><?php echo html_entity_decode($contenuView['club-climat']['fr']['contenu 3']['contenu']); ?></p>
                    </div>
                    <div class="info">
                        <p><?php echo html_entity_decode($contenuView['club-climat']['fr']['contenu 4']['contenu']); ?></p>
                    </div>
                </div>
            </div>
            <div class="repere humour-repere" id="humour"></div>
        </div>

        <div class="separation"></div>

        <div class="humour">
            <h1 class="top_txt titre-humour"><?php echo html_entity_decode($contenuView['club-humour']['fr']['titre 1']['contenu']); ?></h1>
            <a href="/fr/contact.php" class="en-savoir-plus">Pré-réservation</a>
            <div><?php echo html_entity_decode($contenuView['club-humour']['fr']['titre 2']['contenu']); ?></div>

            <div class="top-illustration">
                <img src="<?php echo $images['club-humour']['illustration 1']['image']; ?>" alt="Illustration humour">
            </div>

            <div class="valeurs">
                <div class="valeurs-part1">
                    <div class="principe club-humour">
                        <div class="titre"><?php echo html_entity_decode($contenuView['club-humour']['fr']['titre question 1']['contenu']); ?></div>
                        <p><?php echo html_entity_decode($contenuView['club-humour']['fr']['question 1']['contenu']); ?></p>
                    </div>
                    <div class="principe club-humour">
                        <div class="titre"><?php echo html_entity_decode($contenuView['club-humour']['fr']['titre question 2']['contenu']); ?></div>
                        <p><?php echo html_entity_decode($contenuView['club-humour']['fr']['question 2']['contenu']); ?></p>
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