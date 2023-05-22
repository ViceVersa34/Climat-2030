<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('php/head.php'); ?>
    <link rel="stylesheet" href="/css/academie-du-climat.css">
    <title>L'Académie du climat - Climat-2030</title>
</head>
<body id="body">
    <header>
        <?php include('php/header.php'); ?>
    </header>

    <main>

    <h1 class="top_txt">Académie du climat-2030</h1>
    <a href="/fr/inscription.php#academie-du-climat" class="en-savoir-plus">S'inscrire</a>

    <div class="top-illustration">
        <img src="/img/academie_du_climat/oiseau.jpg" alt="Illustration - 'oiseau'">
        <img src="/img/academie_du_climat/oiseau.jpg" alt="Illustration - 'oiseau'">
        <img src="/img/academie_du_climat/oiseau.jpg" alt="Illustration - 'oiseau'">
        <img src="/img/academie_du_climat/oiseau.jpg" alt="Illustration - 'oiseau'">
    </div>

    <div class="valeurs">
        <div class="valeurs-part1">
            <div class="principe">
                <p>
                    <span class="yello-txt size-txt">Objectif</span> L'académie s'est fixée comme objectif que chaque personne puisse s'éduquer aux enjeux du climat, quelque soit son niveau de connaissances de départ.
                </p>
            </div>
            <div class="principe">
                <p>
                    <span class="yello-txt size-txt">Modalités</span><br>
                    Trois niveaux pour monter en compétence : Débutant, Intermédiaire et Confirmé.<br>
                    L'académie du climat-2030 favorise l'intelligence collective de groupe.<br>
                    Les séances mixent le jeu, l'interaction et les données issues du GIEC, de l'ADEME et d'autres organisations scientifiques en lien avec Le Climat.
                </p>
            </div>
        </div>
        <div class="programmes">
            <div class="desc-programmes">
                <div class="desc">Programme de formation au climat</div>
                <div class="lien-programmes">
                    <a href="#levelA_fr" class="lien-programme">Débutant</a>
                    <a href="#levelB_fr" class="lien-programme">Intermédiaire</a>
                    <a href="#levelC_fr" class="lien-programme">Confirmé</a>
                </div>
                <div class="repere" id="levelA"></div>
            </div>
            <div class="programme">
                <div class="programme-img">
                    <img src="/img/academie_du_climat/levelA" alt="Programme niveau débutant">
                    <div class="repere" id="levelB"></div>
                </div>
                <div class="programme-img">
                    <img src="/img/academie_du_climat/levelB" alt="Programme niveau intermédiaire">
                    <div class="repere" id="levelC"></div>
                </div>
                <div class="programme-img">
                    <img src="/img/academie_du_climat/levelC" alt="Programme niveau confirmé">
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