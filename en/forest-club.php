<?php include('admin/tables/contents/part/content.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('en/php/head.php'); ?>
    <link rel="stylesheet" href="/css/club-foret.css">
    <title>Forets Club - Climat-2030</title>
</head>
<body id="body">
    <header>
        <?php include('en/php/header.php'); ?>
    </header>

    <main>

    <div class="AF-repere" id="AF"></div>
        <h1 class="top_txt"><?php echo html_entity_decode($contenuView['club-foret-AF']['en']['titre']['contenu']); ?></span></h1>
        
        <div class="carousel-wrapper">
            <input type="radio" name="position" id="position1" />
            <input type="radio" name="position" id="position2" checked/>
            <input type="radio" name="position" id="position3" />
            <div class="carousel-container">
                <div class="carousel">
                    <div class="titre-carousel"><?php echo html_entity_decode($contenuView['club-foret-AF']['en']['titre carousel 1']['contenu']); ?></div>
                    <div class="img-carousel">
                        <img src="<?php echo $images['club-foret-AF']['illustration carousel 1']['image']; ?>" alt="">
                    </div>
                    <div class="description">
                        <p><?php echo html_entity_decode($contenuView['club-foret-AF']['en']['carousel 1']['contenu']); ?></p>
                    </div>
                </div>
                <div class="carousel">
                    <div class="titre-carousel"><?php echo html_entity_decode($contenuView['club-foret-AF']['en']['titre carousel 2']['contenu']); ?></div>
                    <div class="img-carousel">
                        <img src="<?php echo $images['club-foret-AF']['illustration carousel 2']['image']; ?>" alt="">
                    </div>
                    <div class="description">
                        <p><?php echo html_entity_decode($contenuView['club-foret-AF']['en']['carousel 2']['contenu']); ?></p>
                    </div>
                </div>
                <div class="carousel">
                    <div class="titre-carousel"><?php echo html_entity_decode($contenuView['club-foret-AF']['en']['titre carousel 3']['contenu']); ?></div>
                    <div class="img-carousel">
                        <img src="<?php echo $images['club-foret-AF']['illustration carousel 3']['image']; ?>" alt="">
                    </div>
                    <div class="description">
                        <p><?php echo html_entity_decode($contenuView['club-foret-AF']['en']['carousel 3']['contenu']); ?></p>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="/js/autoscroll.js"></script>

        <a href="<?php echo html_entity_decode($contenuView['club-foret-AF']['fr/en']['lien payasso']['contenu']); ?>" class="en-savoir-plus"><?php echo html_entity_decode($contenuView['club-foret-AF']['en']['en-savoir-plus']['contenu']); ?></a>
        
        <div class="valeurs">
            <div class="valeurs-part1">
                <div class="principe">
                    <p><?php echo html_entity_decode($contenuView['club-foret-AF']['en']['question 1']['contenu']); ?></p>
                </div>
                <div class="principe">
                    <p><?php echo html_entity_decode($contenuView['club-foret-AF']['en']['question 2']['contenu']); ?></p>
                </div>
                <div class="principe">
                    <p><?php echo html_entity_decode($contenuView['club-foret-AF']['en']['question 3']['contenu']); ?></p>
                </div>
            </div>
        </div>
            
            
        <div class="separation"></div>
            
            
        <div class="etudiants-repere" id="etudiants"></div>
        <h1 class="etudiant top_txt"><?php echo html_entity_decode($contenuView['club-foret-etudiants']['en']['titre']['contenu']); ?></span></h1>
        <div class="carousel-book-wrapper">
            <div class="carousel-book-titre"><?php echo html_entity_decode($contenuView['club-foret-etudiants']['en']['carousel livre titre']['contenu']); ?></div>
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

        <a href="<?php echo html_entity_decode($contenuView['club-foret-AF']['fr/en']['lien payasso']['contenu']); ?>" class="en-savoir-plus"><?php echo html_entity_decode($contenuView['club-foret-etudiants']['en']['en-savoir-plus']['contenu']); ?></a>

        <div class="valeurs">
            <div class="valeurs-part1">
                <div class="principe">
                    <p><?php echo html_entity_decode($contenuView['club-foret-etudiants']['en']['question 1']['contenu']); ?></p>
                </div>
                <div class="principe">
                    <p><?php echo html_entity_decode($contenuView['club-foret-etudiants']['en']['question 2']['contenu']); ?></p>
                </div>
                <div class="principe">
                    <p><?php echo html_entity_decode($contenuView['club-foret-etudiants']['en']['question 3']['contenu']); ?></p>
                </div>
                <div class="principe ml-principe">
                    <p><?php echo html_entity_decode($contenuView['club-foret-etudiants']['en']['contenu 1']['contenu']); ?></p>
                </div>
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