<?php include('admin/tables/contents/part/content.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('fr/php/head.php'); ?>
    <link rel="stylesheet" href="/css/club-pedaogique.css">
    <title>Club Pégagogique - Climat-2030</title>
</head>
<body id="body">
    <header>
        <?php include('fr/php/header.php'); ?>
    </header>

    <main>

        <h1 class="top_txt"><?php echo html_entity_decode($contenuView['academie-du-climat']['fr']['titre']['contenu']); ?></h1>
        <a href="/contact" class="en-savoir-plus"><?php echo html_entity_decode($contenuView['academie-du-climat']['fr']['en-savoir-plus']['contenu']); ?></a>
        <div class="desc-programmes">
            <div class="size-txt"><?php echo html_entity_decode($contenuView['academie-du-climat']['fr']['programme 0']['contenu']); ?></div>
            <div class="lien-programmes">
                <a href="#levelA" class="lien-programme yello-txt"><?php echo html_entity_decode($contenuView['academie-du-climat']['fr']['programme 1']['contenu']); ?></a>
                <a href="#levelB" class="lien-programme yello-txt"><?php echo html_entity_decode($contenuView['academie-du-climat']['fr']['programme 2']['contenu']); ?></a>
            </div>
        </div>
        <div class="top-illustration">
            <img src="<?php echo $images['club-pedagogique']['illustration 1']['image']; ?>" alt="Illustration - 'oiseau'">
            <img src="<?php echo $images['club-pedagogique']['illustration 1']['image']; ?>" alt="Illustration - 'oiseau'">
            <img src="<?php echo $images['club-pedagogique']['illustration 1']['image']; ?>" alt="Illustration - 'oiseau'">
            <img src="<?php echo $images['club-pedagogique']['illustration 1']['image']; ?>" alt="Illustration - 'oiseau'">
        </div>

        <div class="valeurs">
            <div class="valeurs-part1">
                <div class="principe titre">
                    <p><?php echo html_entity_decode($contenuView['academie-du-climat']['fr']['titre detail 1']['contenu']); ?></p>
                </div>
                <div class="principe">
                    <p><?php echo html_entity_decode($contenuView['academie-du-climat']['fr']['detail 1']['contenu']); ?></p>
                </div>
                <div class="principe titre">
                    <p><?php echo html_entity_decode($contenuView['academie-du-climat']['fr']['titre detail 2']['contenu']); ?></p>
                </div>
                <div class="repere" id="levelA"></div>
                <div class="principe">
                    <p><?php echo html_entity_decode($contenuView['academie-du-climat']['fr']['detail 2']['contenu']); ?></p>
                </div>
            </div>
        </div>
        
        <div class="programmes">
            <div class="programme">
                <div class="level levelA">
                    <div class="txt">
                        <div class="level-content groupe-titre-paragraphe titre">
                            <p><?php echo html_entity_decode($contenuView['academie-du-climat']['fr']['prog 1 titre']['contenu']); ?></p>
                        </div>
                        <div class="level-content">
                            <p><?php echo html_entity_decode($contenuView['academie-du-climat']['fr']['prog 1 titre objectif']['contenu']); ?></p>
                        </div>
                        <div class="level-content paragraphe groupe-titre-paragraphe">
                            <p><?php echo html_entity_decode($contenuView['academie-du-climat']['fr']['prog 1 objectif']['contenu']); ?></p>
                        </div>
                        <div class="level-content">
                            <p><?php echo html_entity_decode($contenuView['academie-du-climat']['fr']['prog 1 titre competances']['contenu']); ?></p>
                        </div>
                        <div class="level-content paragraphe groupe-titre-paragraphe">
                            <p><?php echo html_entity_decode($contenuView['academie-du-climat']['fr']['prog 1 competances']['contenu']); ?></p>
                        </div>
                        <div class="level-content">
                            <p><?php echo html_entity_decode($contenuView['academie-du-climat']['fr']['prog 1 titre duree']['contenu']); ?></p>
                        </div>
                        <div class="level-content paragraphe groupe-titre-paragraphe">
                            <p><?php echo html_entity_decode($contenuView['academie-du-climat']['fr']['prog 1 duree']['contenu']); ?></p>
                        </div>
                        <div class="level-content paragraphe">
                            <p><?php echo html_entity_decode($contenuView['academie-du-climat']['fr']['prog 1 titre seance 1']['contenu']); ?></p>
                        </div>
                        <div class="level-content paragraphe2 groupe-titre-paragraphe">
                            <p><?php echo html_entity_decode($contenuView['academie-du-climat']['fr']['prog 1 seance 1']['contenu']); ?></p>
                        </div>
                        <div class="level-content paragraphe">
                            <p><?php echo html_entity_decode($contenuView['academie-du-climat']['fr']['prog 1 titre seance 2']['contenu']); ?></p>
                        </div>
                        <div class="level-content paragraphe2">
                            <p><?php echo html_entity_decode($contenuView['academie-du-climat']['fr']['prog 1 seance 2']['contenu']); ?></p>
                        </div>
                    </div>
                    <div class="img">
                        <img src="<?php echo $images['club-pedagogique']['illustration programmes']['image']; ?>" alt="Illustration programmes">
                    </div>
                </div>
                <div class="repere" id="levelB"></div>
            </div>
            <div class="ligne"></div>
            <div class="programme">
                <div class="level levelB">
                    <div class="txt">
                        <div class="level-content groupe-titre-paragraphe titre">
                            <p><?php echo html_entity_decode($contenuView['academie-du-climat']['fr']['prog 2 titre']['contenu']); ?></p>
                        </div>
                        <div class="level-content">
                            <p><?php echo html_entity_decode($contenuView['academie-du-climat']['fr']['prog 2 titre objectif']['contenu']); ?></p>
                        </div>
                        <div class="level-content paragraphe groupe-titre-paragraphe">
                            <p><?php echo html_entity_decode($contenuView['academie-du-climat']['fr']['prog 2 objectif']['contenu']); ?></p>
                        </div>
                        <div class="level-content">
                            <p><?php echo html_entity_decode($contenuView['academie-du-climat']['fr']['prog 2 titre competances 1']['contenu']); ?></p>
                        </div>
                        <div class="level-content paragraphe groupe-titre-paragraphe2">
                            <p><?php echo html_entity_decode($contenuView['academie-du-climat']['fr']['prog 2 competances 1.1']['contenu']); ?></p>
                        </div>
                        <div class="level-content paragraphe2">
                            <p><?php echo html_entity_decode($contenuView['academie-du-climat']['fr']['prog 2 competances 1.2']['contenu']); ?></p>
                        </div>
                        <div class="level-content paragraphe2 groupe-titre-paragraphe">
                            <p><?php echo html_entity_decode($contenuView['academie-du-climat']['fr']['prog 2 competances 1.3']['contenu']); ?></p>
                        </div>
                        <div class="level-content">
                            <p><?php echo html_entity_decode($contenuView['academie-du-climat']['fr']['prog 2 titre competances 2']['contenu']); ?></p>
                        </div>
                        <div class="level-content paragraphe groupe-titre-paragraphe2">
                            <p><?php echo html_entity_decode($contenuView['academie-du-climat']['fr']['prog 2 competances 2.1']['contenu']); ?></p>
                        </div>
                        <div class="level-content paragraphe2">
                            <p><?php echo html_entity_decode($contenuView['academie-du-climat']['fr']['prog 2 competances 2.2']['contenu']); ?></p>
                        </div>
                        <div class="level-content paragraphe2">
                            <p><?php echo html_entity_decode($contenuView['academie-du-climat']['fr']['prog 2 competances 2.3']['contenu']); ?></p>
                        </div>
                    </div>
                    <div class="img">
                        <img src="<?php echo $images['club-pedagogique']['illustration programmes']['image']; ?>" alt="Illustration programmes">
                    </div>
                </div>
                <div class="repere" id="levelC"></div>
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