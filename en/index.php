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

        <h1 class="top_txt">Metamorphosis humanity into climate virtuosos</h1>
        <div class="global-bouton">
            <a href="/en/#countdown" class="bouton">How long did it take ?</a>
            <a href="/en/more-about-climat-2030.php" class="bouton">Learn more</a>
        </div>

        <div class="top-illustration">
            <img src="/img/index/butterfly.jpg" alt="Illustration - 'earth day'">
        </div>

        <div class="valeurs">
            <div class="valeurs-part1">
                <div class="principe">
                    <p>
                        <span class="yello-txt size-txt">Why</span> If we can figure out climate warming , it will change the future of humanity in the world.
                    </p>
                </div>
                <div class="principe">
                    <div class="repere" id="countdown"></div>
                    <p>
                        <span class="yello-txt size-txt">How</span> We focus on <span class="yello-txt">empowering</span> people and <span class="yello-txt">women</span> 
                        in particular to fight global warming and ensure a sustainable future.
                    </p>
                </div>
                <div class="principe">
                    <p>
                        <span class="yello-txt size-txt">What</span> We are building smart and powerful climate program to metamorphosis human in climate virtuoso.
                        To achieve our goals, we have :
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
                        <div class="separateur size-txt2 font-weight orange-txt">:</div>
                        <div class="countdown-item">
                            <div id="months" class="time size-txt2 font-weight orange-txt">00</div>
                            <div class="unit">MONTHS</div>
                        </div>  
                        <div class="separateur size-txt2 font-weight orange-txt">:</div>
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
                        <div class="separateur size-txt2 font-weight orange-txt">:</div>
                        <div class="countdown-item">
                            <div id="minutes" class="time size-txt2 font-weight orange-txt">00</div>
                            <div class="unit">MINUTES</div>
                        </div>
                        <div class="separateur size-txt2 font-weight orange-txt">:</div>
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
                    <p>
                        <span class="yello-txt size-txt">Our vision</span> We see a world where everybody matters of 1,5°C of climate warming limit before 2030  — united 
                        in the action. Driven by our passion for education and our instinct for innovation, we aim to empower every brain to make 2 tons carbon a daily habit.
                    </p>
                </div>
                <div class="principe sl">
                    <p>
                        <span class="yello-txt size-txt">Our mission</span> Our mission is to encourage women and men to take the power in containing the climate target of 
                        1.5°C or less. We do this by creating an innovative global warming education programme to meet humanity's deadline.
                    </p>
                </div>
                <div class="yello-txt size-txt pr valeur">Our values</div>
                <div class="penser-climat">
                    <div class="yello-txt size-txt pr penser-le-climat">Thinking the climate</div>
                    <div class="pensee">
                        <p>
                            <span class="yello-txt size-txt pr">C</span> ritical
                        </p>
                    </div>
                    <div class="pensee">
                        <p>
                            <span class="yello-txt size-txt pr">L</span> Later is not an option
                        </p>
                    </div>
                    <div class="pensee">
                        <p>
                            <span class="yello-txt size-txt pr">I</span> ndividuals will make the difference
                        </p>
                    </div>
                    <div class="pensee">
                        <p>
                            <span class="yello-txt size-txt pr">M</span> ake choices with climate in mind
                        </p>
                    </div>
                    <div class="pensee">
                        <p>
                            <span class="yello-txt size-txt pr">A</span> act
                        </p>
                    </div>
                    <div class="pensee">
                        <p>
                            <span class="yello-txt size-txt pr">T</span> oo late (before is)
                        </p>
                    </div>
                    <div class="pensee">
                        <p>
                            <span class="yello-txt size-txt pr">E</span> very little bit will help
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