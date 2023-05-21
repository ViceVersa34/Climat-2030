<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('php/head.php'); ?>
    <link rel="stylesheet" href="/css/academie-du-climat.css">
    <title>Climat-2030</title>
</head>
<body id="body">
    <header>
        <?php include('php/header.php'); ?>
    </header>

    <main>

    <h1 class="top_txt">The Climate-2030 Academy </h1>
    <a href="/en/sign-up.php#academie-du-climat" class="en-savoir-plus">Sign up</a>

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
                    <span class="yello-txt size-txt">Aim</span> The academy’s goal is to educate each person about climate issues whatever their level of knowledge.
                </p>
            </div>
            <div class="principe">
                <p>
                    <span class="yello-txt size-txt">Terms</span><br>
                    Three levels for proficiency: Beginner, Intermediate and Confirmed.<br>
                    The climate academy-2030 promotes group collective intelligence.<br>
                    The sessions combine play, interaction and data from the IPCC, ADEME and other scientific organizations related to Climate.
                </p>
            </div>
        </div>
        <div class="programmes">
            <div class="desc-programmes">
                <div class="desc">Climate Training Program</div>
                <div class="lien-programmes">
                    <a href="#levelA" class="lien-programme">Beginner</a>
                    <a href="#levelB" class="lien-programme">Intermediate</a>
                    <a href="#levelC" class="lien-programme">Confirmed</a>
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