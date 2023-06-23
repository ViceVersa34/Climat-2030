<?php include('../admin/tables/contents/part/content.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('php/head.php'); ?>
    <link rel="stylesheet" href="/css/exposition.css">
    <title>The Exhibition - Climat-2030</title>
</head>
<body id="body">
    <header>
        <?php include('php/header.php'); ?>
    </header>

    <main>

    <div class="repere AF-repere" id="AF"></div>
        <h1 class="top_txt"><?php echo html_entity_decode($contenuView['club-foret-AF']['en']['titre']['contenu']); ?></span></h1>

        <div class="top-illustration">
            <img src="/img/exposition/illustration_exposition.png" alt="Illustration exposition">
        </div>

        <div class="valeurs">
            <div class="valeurs-part1">
                <div class="principe">
                    <p>
                        <span class="yello-txt size-txt">Goal</span> Understand the historical origins of global warming and its current and future impacts.
                    </p>
                </div>
                <div class="principe">
                    <p>
                        <span class="yello-txt size-txt">How</span> Exhibition of chronological friezes explaining the historical, political, economic, scientific 
                        and artistic mechanisms that led to our current situation where containing global warming to 1.5°C by 2030 and beyond has become an absolute 
                        necessity.
                    </p>
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