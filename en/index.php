<?php include('../admin/tables/contents/part/content.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('php/head.php'); ?>
    <link rel="stylesheet" href="/css/index.css">
    <title>Home - Climat-2030</title>
</head>
<body id="body">
    <header>
        <?php include('php/header.php'); ?>
    </header>

    <main>

        <h1 class="top_txt"><?php echo html_entity_decode($contenuView['index']['en']['titre']['contenu']); ?></h1>
        <div class="global-bouton">
            <a href="/en/#countdown" class="bouton">How long did it take ?</a>
            <a href="/en/more-about-climat-2030.php" class="bouton">Learn more</a>
        </div>

        <div class="top-illustration">
            <img src="<?php echo $images['index']['illustration 1']['image']; ?>" alt="Illustration - 'earth day'">
        </div>

        <div class="valeurs">
            <div class="valeurs-part1">
            <div class="principe">
                    <p>
                        <?php echo html_entity_decode($contenuView['index']['en']['question 1']['contenu']); ?>
                    </p>
                </div>
                <div class="principe">
                    <div class="repere" id="countdown"></div>
                    <p>
                        <?php echo html_entity_decode($contenuView['index']['en']['question 2']['contenu']); ?>
                    </p>
                </div>
                <div class="principe">
                    <p>
                        <?php echo html_entity_decode($contenuView['index']['en']['question 3']['contenu']); ?>
                    </p>    
                </div>
            </div>

            <div class="global-countdown">
                <div class="countdown">
                    <div class="countdown-top">
                        <div class="countdown-item">
                            <div id="years" class="time size-txt2 font-weight orange-txt">00</div>
                            <div class="unit">YEARS</div>
                        </div>
                        <div class="countdown-item">
                            <div id="months" class="time size-txt2 font-weight orange-txt">00</div>
                            <div class="unit">MONTHS</div>
                        </div>  
                        <div class="countdown-item">
                            <div id="days" class="time size-txt2 font-weight orange-txt">00</div>
                            <div class="unit">DAYS</div>
                        </div>
                    </div>
                    <div class="countdown-bottom">
                        <div class="countdown-item">
                            <div id="hours" class="time size-txt2 font-weight orange-txt">00</div>
                            <div class="unit">HOUR</div>
                        </div>
                        <div class="countdown-item">
                            <div id="minutes" class="time size-txt2 font-weight orange-txt">00</div>
                            <div class="unit">MINUTES</div>
                        </div>
                        <div class="countdown-item">
                            <div id="seconds" class="time size-txt2 font-weight orange-txt">00</div>
                            <div class="unit">SECONDS</div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="/js/countdown.js"></script>

            <div class="valeurs-part2">
            <div class="principe sl">
                    <p><p>
                        <?php echo html_entity_decode($contenuView['index']['en']['question 4']['contenu']); ?>
                    </p>
                </div>
                <div class="principe sl">
                    <p>
                        <?php echo html_entity_decode($contenuView['index']['en']['question 5']['contenu']); ?>
                    </p>
                </div>
                <div class="valeur"><?php echo html_entity_decode($contenuView['index']['en']['question 6']['contenu']); ?></div>
                
                <div class="penser-climat">
                    <div class="penser-le-climat"><?php echo html_entity_decode($contenuView['index']['en']['valeurs 0']['contenu']); ?></div>
                    
                    <div class="pensee">
                        <p>
                            <?php echo html_entity_decode($contenuView['index']['en']['valeurs 1']['contenu']); ?>
                        </p>
                    </div>
                    <div class="pensee">
                        <p>
                            <?php echo html_entity_decode($contenuView['index']['en']['valeurs 2']['contenu']); ?>
                        </p>
                    </div>
                    <div class="pensee">
                        <p>
                            <?php echo html_entity_decode($contenuView['index']['en']['valeurs 3']['contenu']); ?>
                        </p>
                    </div>
                    <div class="pensee">
                        <p>
                            <?php echo html_entity_decode($contenuView['index']['en']['valeurs 4']['contenu']); ?>
                        </p>
                    </div>
                    <div class="pensee">
                        <p>
                            <?php echo html_entity_decode($contenuView['index']['en']['valeurs 5']['contenu']); ?>
                        </p>
                    </div>
                    <div class="pensee">
                        <p>
                            <?php echo html_entity_decode($contenuView['index']['en']['valeurs 6']['contenu']); ?>
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