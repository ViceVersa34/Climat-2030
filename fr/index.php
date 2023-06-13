<?php include('../admin/tables/contents//part/content.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('php/head.php'); ?>
    <link rel="stylesheet" href="/css/index.css">
    <title>Accueil - Climat-2030</title>
</head>
<body id="body">
    <header>
        <?php include('php/header.php'); ?>
    </header>

    <main>
        <h1 class="top_txt"><?php echo $contenuView['index']['fr']['titre']['contenu']; ?></h1>
        <div class="global-bouton">
            <a href="/fr/#countdown" class="bouton">En combien de temps ?</a>
            <a href="/fr/en-savoir-plus.php" class="bouton">En savoir +</a>
        </div>
        
        <div class="top-illustration">
            <img src="/img/index/butterfly.jpg" alt="Illustration - 'earth day'">
        </div>

        <div class="valeurs">
            <div class="valeurs-part1">
                <div class="principe">
                    <p>
                        <?php echo $contenuView['index']['fr']['question 1']['contenu']; ?>
                    </p>
                </div>
                <div class="principe">
                    <div class="repere" id="countdown"></div>
                    <p>
                        <?php echo $contenuView['index']['fr']['question 2']['contenu']; ?>
                    </p>
                </div>
                <div class="principe">
                    <p>
                        <?php echo $contenuView['index']['fr']['question 3']['contenu']; ?>
                    </p>    
                </div>
            </div>

            <div class="global-countdown">
                <div class="countdown">
                    <div class="countdown-top">
                        <div class="countdown-item">
                            <div id="years" class="time size-txt2 font-weight orange-txt">00</div>
                            <div class="unit">ANS</div>
                        </div>
                        <div class="countdown-item">
                            <div id="months" class="time size-txt2 font-weight orange-txt">00</div>
                            <div class="unit">MOIS</div>
                        </div>  
                        <div class="countdown-item">
                            <div id="days" class="time size-txt2 font-weight orange-txt">00</div>
                            <div class="unit">JOURS</div>
                        </div>
                    </div>  
                    <div class="countdown-bottom">
                        <div class="countdown-item">
                            <div id="hours" class="time size-txt2 font-weight orange-txt">00</div>
                            <div class="unit">HEURES</div>
                        </div>
                        <div class="countdown-item">
                            <div id="minutes" class="time size-txt2 font-weight orange-txt">00</div>
                            <div class="unit">MIN</div>
                        </div>
                        <div class="countdown-item">
                            <div id="seconds" class="time size-txt2 font-weight orange-txt">00</div>
                            <div class="unit">SEC</div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="/js/countdown.js"></script>

            <div class="valeurs-part2">
                <div class="principe sl">
                    <p><p>
                        <?php echo $contenuView['index']['fr']['question 4']['contenu']; ?>
                    </p>
                </div>
                <div class="principe sl">
                    <p>
                        <?php echo $contenuView['index']['fr']['question 5']['contenu']; ?>
                    </p>
                </div>
                <div class="valeur"><?php echo $contenuView['index']['fr']['question 6']['contenu']; ?></div>
                
                <div class="penser-climat">
                    <div class="penser-le-climat"><?php echo $contenuView['index']['fr']['valeurs 0']['contenu']; ?></div>
                    
                    <div class="pensee">
                        <p>
                            <?php echo $contenuView['index']['fr']['valeurs 1']['contenu']; ?>
                        </p>
                    </div>
                    <div class="pensee">
                        <p>
                            <?php echo $contenuView['index']['fr']['valeurs 2']['contenu']; ?>
                        </p>
                    </div>
                    <div class="pensee">
                        <p>
                            <?php echo $contenuView['index']['fr']['valeurs 3']['contenu']; ?>
                        </p>
                    </div>
                    <div class="pensee">
                        <p>
                            <?php echo $contenuView['index']['fr']['valeurs 4']['contenu']; ?>
                        </p>
                    </div>
                    <div class="pensee">
                        <p>
                            <?php echo $contenuView['index']['fr']['valeurs 5']['contenu']; ?>
                        </p>
                    </div>
                    <div class="pensee">
                        <p>
                            <?php echo $contenuView['index']['fr']['valeurs 6']['contenu']; ?>
                        </p>
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