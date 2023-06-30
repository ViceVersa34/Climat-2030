<?php include('../admin/tables/contents/part/content.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('php/head.php'); ?>
    <link rel="stylesheet" href="/css/club-climat.css">
    <link rel="stylesheet" href="/css/humour.css">
    <title>The Social Club - Climat-2030</title>
</head>
<body id="body">
    <header>
        <?php include('php/header.php'); ?>
    </header>

    <main>
        <div class="social-network">
            <div class="repere social-club-repere" id="climate-club"></div>
            <h1 class="top_txt"><?php echo html_entity_decode($contenuView['club-climat']['en']['titre']['contenu']); ?></span></h1>
            <a href="/en/contact.php" class="en-savoir-plus"><?php echo html_entity_decode($contenuView['club-climat']['en']['en-savoir-plus']['contenu']); ?></a>
            <div class="desc-club-climat">
                <div class="size-txt"><?php echo html_entity_decode($contenuView['academie-du-climat']['fr']['programme 0']['contenu']); ?></div>
                <div class="liens-club-climat">
                    <a href="#presentation" class="lien-club-climat"><?php echo html_entity_decode($contenuView['club-climat']['en']['repere 1']['contenu']); ?></a>
                    <a href="#parcours" class="lien-club-climat"><?php echo html_entity_decode($contenuView['club-climat']['en']['repere 2']['contenu']); ?></a>
                </div>
            </div>
            <div class="titre-presentation"><?php echo html_entity_decode($contenuView['club-climat']['en']['titre presentation']['contenu']); ?></div>
            <div class="top-illustration">
                <img src="<?php echo $images['club-climat']['illustration 1']['image']; ?>" alt="Illustration social club">
            </div>

            <div class="valeurs">
                <div class="repere-climat repere-climat-top" id="presentation"></div>
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
                <div class="titre-parcours"><?php echo html_entity_decode($contenuView['club-climat']['en']['titre parcours']['contenu']); ?></div>
                <div class="bottom-illustration">
                    <img src="<?php echo $images['club-climat']['illustration 2']['image']; ?>" alt="Illustration social club">
                </div>
                <div class="repere-climat repere-climat-bottom" id="parcours"></div>
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
            <div class="repere humour-repere" id="humour-club"></div>
        </div>

        <div class="separation"></div>

        <div class="humour">
            <h1 class="top_txt titre-humour"><?php echo html_entity_decode($contenuView['club-humour']['en']['titre 1']['contenu']); ?></h1>
            <a href="/en/contact.php" class="en-savoir-plus"><?php echo html_entity_decode($contenuView['club-climat']['en']['en-savoir-plus']['contenu']); ?></a>
            <h2><?php echo html_entity_decode($contenuView['club-humour']['en']['titre 2']['contenu']); ?></h2>

            <div class="top-illustration">
                <img src="<?php echo $images['club-humour']['illustration 1']['image']; ?>" alt="Illustration humour">
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