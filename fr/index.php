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
        <h1 class="top_txt">Métamorphoser l'humanité en virtuose du climat</h1>
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
                        <span class="yello-txt size-txt">Pourquoi</span> Si nous arrivons à comprendre le réchauffement climatique, cela changera l'avenir de l'humanité dans le monde.
                    </p>
                </div>
                <div class="principe">
                    <div class="repere" id="countdown"></div>
                    <p>
                        <span class="yello-txt size-txt">Comment</span> En mettant l'accent sur <span class="yello-txt">l'émancipation</span> des humains et <span class="yello-txt">des femmes</span> en particulier pour garantir un avenir durable.
                    </p>
                </div>
                <div class="principe">
                    <p>
                        <span class="yello-txt size-txt">Proposition</span> Une éducation aussi puissante qu'originale au climat pour se métamorphoser en virtuose du climat.
                    </p>
                </div>
            </div>

            <div class="global-countdown">
                <div class="global-counter">
                    <p>
                        Climat-2030 a permis de sensibiliser
                        <span class="counter orange-txt font-weight"> 12 </span>
                        personnes à ce jour.
                    </p>
                </div>
                <div class="countdown-text">
                    Pour parvenir a nos objectifs, nous avons :
                </div>
                <div class="countdown">
                    <div class="countdown-top">
                        <div class="countdown-item">
                            <div id="years" class="time size-txt2 font-weight orange-txt">00</div>
                            <div class="unit">ANS</div>
                        </div>
                        <div class="separateur size-txt2 font-weight orange-txt">:</div>
                        <div class="countdown-item">
                            <div id="months" class="time size-txt2 font-weight orange-txt">00</div>
                            <div class="unit">MOIS</div>
                        </div>  
                        <div class="separateur size-txt2 font-weight orange-txt">:</div>
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
                        <div class="separateur size-txt2 font-weight orange-txt">:</div>
                        <div class="countdown-item">
                            <div id="minutes" class="time size-txt2 font-weight orange-txt">00</div>
                            <div class="unit">MINUTES</div>
                        </div>
                        <div class="separateur size-txt2 font-weight orange-txt">:</div>
                        <div class="countdown-item">
                            <div id="seconds" class="time size-txt2 font-weight orange-txt">00</div>
                            <div class="unit">SECONDES</div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="/js/countdown.js"></script>

            <div class="valeurs-part2">
                <div class="principe sl">
                    <p>
                        <span class="yello-txt size-txt">Vision</span> Un monde où chaque personne a <span class="yello-txt">conscience</span> de la nécessité de limiter le réchauffement climatique à 1,5°C d'ici 2030 et au delà. <br>
                        Pour cela, il faut mettre à disposition de chaque cerveau humain la passion pour l'érudition et la capacité d'innovation pour faire de "2 tonnes de carbone" une habitude de pensée quotidienne.
                    </p>
                </div>
                <div class="principe sl">
                    <p>
                        <span class="yello-txt size-txt">Mission</span> Encourager les femmes et les hommes à prendre leur place pour parvenir à contenir l'objectif de réchauffement climatique à 1,5°C...en créant 
                        un programme d'éducation sur le climat pour respecter l'échéance de <span class="yello-txt">l'humanité</span>.
                    </p>
                </div>
                <div class="yello-txt size-txt pr valeur">Valeurs ?</div>
                <div class="penser-climat">
                    <div class="yello-txt size-txt pr penser-le-climat">Penser le climat</div>
                    <div class="pensee"><span class="yello-txt size-txt pr">C</span> ommencer par soi</div>
                    <div class="pensee"><span class="yello-txt size-txt pr">L</span> ibérer (se) des habitudes passées</div>
                    <div class="pensee"><span class="yello-txt size-txt pr">I</span> nvestir du temps pour s'éduquer</div>
                    <div class="pensee"><span class="yello-txt size-txt pr">M</span> aintenant. Plus tard n'est plus une option</div>
                    <div class="pensee"><span class="yello-txt size-txt pr">A</span> dapter son comportement à l'urgence climatique</div>
                    <div class="pensee"><span class="yello-txt size-txt pr">T</span> riompher collectivement !</div>
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