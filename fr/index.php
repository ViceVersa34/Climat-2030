<?php include('admin/tables/contents/part/content.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('fr/php/head.php'); ?>
    <link rel="stylesheet" href="/css/index.css">
    <title>Accueil - Climat-2030</title>
</head>
<body id="body">
    <header>
        <?php include('fr/php/header.php'); ?>
    </header>

    <main>
        <h1 class="top_txt"><?php echo html_entity_decode($contenuView['index']['fr']['titre']['contenu']); ?></h1>
        <div class="global-bouton">
            <a href="/#countdown" class="bouton bouton-unresponsive" onclick="countdownPopUp(3000, 4000);"><?php echo html_entity_decode($contenuView['index']['fr']['en-savoir-plus temps']['contenu']); ?></a>
            <a href="/#countdown" class="bouton bouton-responsive"><?php echo html_entity_decode($contenuView['index']['fr']['en-savoir-plus temps']['contenu']); ?></a>
            <a href="/en-savoir-plus" class="bouton"><?php echo html_entity_decode($contenuView['index']['fr']['en-savoir-plus']['contenu']); ?></a>
        </div>
        
        <div class="top-illustration">
            <img src="<?php echo $images['index']['illustration 1']['image']; ?>" alt="Illustration - 'earth day'">
        </div>

        <div class="valeurs">
            <div class="valeurs-part1">
                <div class="principe">
                    <p>
                        <?php echo html_entity_decode($contenuView['index']['fr']['question 1']['contenu']); ?>
                    </p>
                </div>
                <div class="principe">
                    <p>
                        <?php echo html_entity_decode($contenuView['index']['fr']['question 2']['contenu']); ?>
                    </p>
                </div>
                <div class="principe">
                    <p>
                        <?php echo html_entity_decode($contenuView['index']['fr']['question 3']['contenu']); ?>
                    </p>    
                </div>
            </div>
            
            <div class="repere-coundown" id="countdown"></div>
            <div class="global-countdown" id="countdownPopUp">
                <div class="countdown">
                    <div class="countdown-top">
                        <div class="countdown-item">
                            <div id="years" class="time size-txt2 font-weight orange-txt">00</div>
                            <div class="unit" id="unit1">ANS</div>
                        </div>
                        <div class="countdown-item">
                            <div id="months" class="time size-txt2 font-weight orange-txt">00</div>
                            <div class="unit" id="unit2">MOIS</div>
                        </div>  
                        <div class="countdown-item">
                            <div id="days" class="time size-txt2 font-weight orange-txt">00</div>
                            <div class="unit" id="unit3">JOURS</div>
                        </div>
                    </div>  
                    <div class="countdown-bottom">
                        <div class="countdown-item">
                            <div id="hours" class="time size-txt2 font-weight orange-txt">00</div>
                            <div class="unit" id="unit4">HEURES</div>
                        </div>
                        <div class="countdown-item">
                            <div id="minutes" class="time size-txt2 font-weight orange-txt">00</div>
                            <div class="unit" id="unit5">MIN</div>
                        </div>
                        <div class="countdown-item">
                            <div id="seconds" class="time size-txt2 font-weight orange-txt">00</div>
                            <div class="unit" id="unit6">SEC</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="popupcountdown" id="popupcountdown"></div>
            <script src="/js/countdown.js"></script>

            <div class="valeurs-part2">
                <div class="principe sl">
                    <p><p>
                        <?php echo html_entity_decode($contenuView['index']['fr']['question 4']['contenu']); ?>
                    </p>
                </div>
                <div class="principe sl">
                    <p>
                        <?php echo html_entity_decode($contenuView['index']['fr']['question 5']['contenu']); ?>
                    </p>
                </div>

                <div class="valeur">
                    <p>
                        <?php echo html_entity_decode($contenuView['index']['fr']['question 6']['contenu']); ?>
                    </p>
                </div>
                
                <div class="penser-climat">
                    <div class="penser-le-climat">
                        <p>
                            <?php echo html_entity_decode($contenuView['index']['fr']['valeurs 0']['contenu']); ?></div>
                        </p>    
                    
                    <div class="pensee">
                        <p>
                            <?php echo html_entity_decode($contenuView['index']['fr']['valeurs 1']['contenu']); ?>
                        </p>
                    </div>
                    <div class="pensee">
                        <p>
                            <?php echo html_entity_decode($contenuView['index']['fr']['valeurs 2']['contenu']); ?>
                        </p>
                    </div>
                    <div class="pensee">
                        <p>
                            <?php echo html_entity_decode($contenuView['index']['fr']['valeurs 3']['contenu']); ?>
                        </p>
                    </div>
                    <div class="pensee">
                        <p>
                            <?php echo html_entity_decode($contenuView['index']['fr']['valeurs 4']['contenu']); ?>
                        </p>
                    </div>
                    <div class="pensee">
                        <p>
                            <?php echo html_entity_decode($contenuView['index']['fr']['valeurs 5']['contenu']); ?>
                        </p>
                    </div>
                    <div class="pensee">
                        <p>
                            <?php echo html_entity_decode($contenuView['index']['fr']['valeurs 6']['contenu']); ?>
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
        <?php include('fr/php/footer.php'); ?>
    </footer>
</body>
</html>