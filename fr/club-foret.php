<?php include('../admin/tables/contents/part/content.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('php/head.php'); ?>
    <link rel="stylesheet" href="/css/club-foret.css">
    <title>Club Foret - Climat-2030</title>
</head>
<body id="body">
    <header>
        <?php include('php/header.php'); ?>
    </header>

    <main>
        <div class="repere AF-repere" id="AF"></div>
        <h1 class="top_txt"><?php echo html_entity_decode($contenuView['club-foret-AF']['fr']['titre']['contenu']); ?></span></h1>
        
        <div class="carousel-wrapper">
            <input type="radio" name="position" id="position1" />
            <input type="radio" name="position" id="position2" checked/>
            <input type="radio" name="position" id="position3" />
            <div class="carousel-container">
                <div class="carousel">
                    <div class="titre-carousel"><?php echo html_entity_decode($contenuView['club-foret-AF']['fr']['titre carousel 1']['contenu']); ?></div>
                    <div class="img-carousel">
                        <img src="<?php echo $images['club-foret-AF']['illustration carousel 1']['image']; ?>" alt="Illustration carousel n°1">
                    </div>
                    <div class="description">
                        <p><?php echo html_entity_decode($contenuView['club-foret-AF']['fr']['carousel 1']['contenu']); ?></p>
                    </div>
                </div>
                <div class="carousel">
                    <div class="titre-carousel"><?php echo html_entity_decode($contenuView['club-foret-AF']['fr']['titre carousel 2']['contenu']); ?></div>
                    <div class="img-carousel">
                        <img src="<?php echo $images['club-foret-AF']['illustration carousel 2']['image']; ?>" alt="Illustration carousel n°2">
                    </div>
                    <div class="description">
                        <p><?php echo html_entity_decode($contenuView['club-foret-AF']['fr']['carousel 2']['contenu']); ?></p>
                    </div>
                </div>
                <div class="carousel">
                    <div class="titre-carousel"><?php echo html_entity_decode($contenuView['club-foret-AF']['fr']['titre carousel 3']['contenu']); ?></div>
                    <div class="img-carousel">
                        <img src="<?php echo $images['club-foret-AF']['illustration carousel 3']['image']; ?>" alt="Illustration carousel n°3">
                    </div>
                    <div class="description">
                        <p><?php echo html_entity_decode($contenuView['club-foret-AF']['fr']['carousel 3']['contenu']); ?></p>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="/js/autoscroll.js"></script>

        <a href="/fr/contact.php" class="en-savoir-plus"><?php echo html_entity_decode($contenuView['club-foret-AF']['fr']['en-savoir-plus']['contenu']); ?></a>
        
        <div class="valeurs">
            <div class="valeurs-part1">
                <div class="principe">
                    <p><?php echo html_entity_decode($contenuView['club-foret-AF']['fr']['question 1']['contenu']); ?></p>
                </div>
                <div class="principe">
                    <p><?php echo html_entity_decode($contenuView['club-foret-AF']['fr']['question 2']['contenu']); ?></p>
                </div>
                <div class="principe">
                    <p><?php echo html_entity_decode($contenuView['club-foret-AF']['fr']['question 3']['contenu']); ?></p>
                </div>
            <div class="repere etudiants-repere" id="etudiants"></div>
        </div>

        
        <div class="separation"></div>


        <h1 class="etudiant top_txt"><?php echo html_entity_decode($contenuView['club-foret-etudiants']['fr']['titre']['contenu']); ?></span></h1>

        <div class="carousel-book-wrapper">
            <div class="carousel-book-titre"><?php echo html_entity_decode($contenuView['club-foret-etudiants']['fr']['carousel livre titre']['contenu']); ?></div>
            <div class="carousel-book-container">
                <div class="carousel-book active-carousel-book">
                    <img src="<?php echo $images['club-foret-etudiants']['illustration carousel livre 1']['image']; ?>" alt="Illustration livret page 1" onclick="zoomerImage(this)">
                </div>
                <div class="carousel-book">
                    <img src="<?php echo $images['club-foret-etudiants']['illustration carousel livre 2']['image']; ?>" alt="Illustration livret page 2" onclick="zoomerImage(this)">
                </div>
                <div class="carousel-book">
                    <img src="<?php echo $images['club-foret-etudiants']['illustration carousel livre 3']['image']; ?>" alt="Illustration livret page 3" onclick="zoomerImage(this)">
                </div>
            </div>
            <div class="carousel-book-buttons">
                <button class="prev-button"><img src="/img/precedent.svg" alt=""></button>
                <div class="page-counter">
                    <span id="current-page">1</span> / <span id="total-pages">3</span>
                </div>
                <button class="next-button"><img src="/img/suivant.svg" alt=""></button>
            </div>
        </div>
        <script src="/js/carousel.js"></script>

        <a href="/fr/contact.php" class="en-savoir-plus"><?php echo html_entity_decode($contenuView['club-foret-etudiants']['fr']['en-savoir-plus']['contenu']); ?></a>

        <div class="valeurs">
            <div class="valeurs-part1">
                <div class="principe">
                    <p><?php echo html_entity_decode($contenuView['club-foret-etudiants']['fr']['question 1']['contenu']); ?></p>
                </div>
                <div class="principe">
                    <p><?php echo html_entity_decode($contenuView['club-foret-etudiants']['fr']['question 2']['contenu']); ?></p>
                </div>
                <div class="principe">
                    <p><?php echo html_entity_decode($contenuView['club-foret-etudiants']['fr']['question 3']['contenu']); ?></p>
                </div>
                <div class="principe ml-principe">
                    <p><?php echo html_entity_decode($contenuView['club-foret-etudiants']['fr']['contenu 1']['contenu']); ?></p>
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