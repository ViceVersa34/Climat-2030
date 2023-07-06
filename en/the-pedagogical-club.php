<?php include('admin/tables/contents/part/content.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('en/php/head.php'); ?>
    <link rel="stylesheet" href="/css/club-pedaogique.css">
    <title>The Pedagogical Club - Climat-2030</title>
</head>
<body id="body">
    <header>
        <?php include('en/php/header.php'); ?>
    </header>

    <main>

        <h1 class="top_txt"><?php echo html_entity_decode($contenuView['academie-du-climat']['en']['titre']['contenu']); ?></h1>
        <a href="/contact-us" class="en-savoir-plus"><?php echo html_entity_decode($contenuView['academie-du-climat']['en']['en-savoir-plus']['contenu']); ?></a>
        <div class="desc-programmes">
            <div class="lien-programmes">
                <a href="#levelA" class="lien-programme"><?php echo html_entity_decode($contenuView['academie-du-climat']['en']['programme 1']['contenu']); ?></a>
                <a href="#levelB" class="lien-programme"><?php echo html_entity_decode($contenuView['academie-du-climat']['en']['programme 2']['contenu']); ?></a>
                <a href="#levelC" class="lien-programme"><?php echo html_entity_decode($contenuView['academie-du-climat']['en']['programme 3']['contenu']); ?></a>
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
                    <p><?php echo html_entity_decode($contenuView['academie-du-climat']['en']['titre detail 1']['contenu']); ?></p>
                </div>
                <div class="principe">
                    <p><?php echo html_entity_decode($contenuView['academie-du-climat']['en']['detail 1']['contenu']); ?></p>
                </div>
                <div class="principe titre">
                    <p><?php echo html_entity_decode($contenuView['academie-du-climat']['en']['titre detail 2']['contenu']); ?></p>
                </div>
                <div class="principe">
                    <p><?php echo html_entity_decode($contenuView['academie-du-climat']['en']['detail 2']['contenu']); ?></p>
                </div>
            </div>
        </div>
        
        <div class="repere-levelA" id="levelA"></div>
        <div class="programmes">
            <div class="programme">
                <div class="level levelA">
                    <div class="txt">
                        <div class="level-content groupe-titre-paragraphe titre">
                            <p><?php echo html_entity_decode($contenuView['academie-du-climat']['en']['prog 1 titre']['contenu']); ?></p>
                        </div>
                        <div class="level-content">
                            <p><?php echo html_entity_decode($contenuView['academie-du-climat']['en']['prog 1 titre objectif']['contenu']); ?></p>
                        </div>
                        <div class="level-content paragraphe groupe-titre-paragraphe">
                            <p><?php echo html_entity_decode($contenuView['academie-du-climat']['en']['prog 1 objectif']['contenu']); ?></p>
                        </div>
                        <div class="level-content">
                            <p><?php echo html_entity_decode($contenuView['academie-du-climat']['en']['prog 1 titre competences']['contenu']); ?></p>
                        </div>
                        <div class="level-content paragraphe groupe-titre-paragraphe">
                            <p><?php echo html_entity_decode($contenuView['academie-du-climat']['en']['prog 1 competences']['contenu']); ?></p>
                        </div>
                        <div class="level-content">
                            <p><?php echo html_entity_decode($contenuView['academie-du-climat']['en']['prog 1 titre duree']['contenu']); ?></p>
                        </div>
                        <div class="level-content paragraphe groupe-titre-paragraphe">
                            <p><?php echo html_entity_decode($contenuView['academie-du-climat']['en']['prog 1 duree']['contenu']); ?></p>
                        </div>
                        <div class="level-content paragraphe">
                            <p><?php echo html_entity_decode($contenuView['academie-du-climat']['en']['prog 1 titre seance 1']['contenu']); ?></p>
                        </div>
                        <div class="level-content paragraphe2 groupe-titre-paragraphe">
                            <p><?php echo html_entity_decode($contenuView['academie-du-climat']['en']['prog 1 seance 1']['contenu']); ?></p>
                        </div>
                        <div class="level-content paragraphe">
                            <p><?php echo html_entity_decode($contenuView['academie-du-climat']['en']['prog 1 titre seance 2']['contenu']); ?></p>
                        </div>
                        <div class="level-content paragraphe2">
                            <p><?php echo html_entity_decode($contenuView['academie-du-climat']['en']['prog 1 seance 2']['contenu']); ?></p>
                        </div>
                        <div class="inscription">
                            <a href="/contact" class="inscription-sensibilisation"><?php echo html_entity_decode($contenuView['academie-du-climat']['en']['s-inscrire-sensibilisation']['contenu']); ?></a>
                        </div>
                    </div>
                    <div class="img">
                        <img src="<?php echo $images['club-pedagogique']['illustration programmes']['image']; ?>" alt="Illustration programmes">
                    </div>
                </div>
            </div>
            <div class="ligne"></div>
            <div class="repere-levelB-en" id="levelB"></div>
            <div class="programme">
                <div class="level levelB">
                    <div class="txt">
                        <div class="level-content groupe-titre-paragraphe titre">
                            <p><?php echo html_entity_decode($contenuView['academie-du-climat']['en']['prog 2 titre']['contenu']); ?></p>
                        </div>
                        <div class="level-content">
                            <p><?php echo html_entity_decode($contenuView['academie-du-climat']['en']['prog 2 titre objectif']['contenu']); ?></p>
                        </div>
                        <div class="level-content paragraphe groupe-titre-paragraphe">
                            <p><?php echo html_entity_decode($contenuView['academie-du-climat']['en']['prog 2 objectif']['contenu']); ?></p>
                        </div>
                        <div class="level-content">
                            <p><?php echo html_entity_decode($contenuView['academie-du-climat']['en']['prog 2 titre competences 1']['contenu']); ?></p>
                        </div>
                        <div class="level-content paragraphe groupe-titre-paragraphe2">
                            <p><?php echo html_entity_decode($contenuView['academie-du-climat']['en']['prog 2 competences 1.1']['contenu']); ?></p>
                        </div>
                        <div class="level-content paragraphe2">
                            <p><?php echo html_entity_decode($contenuView['academie-du-climat']['en']['prog 2 competences 1.2']['contenu']); ?></p>
                        </div>
                        <div class="level-content paragraphe2 groupe-titre-paragraphe">
                            <p><?php echo html_entity_decode($contenuView['academie-du-climat']['en']['prog 2 competences 1.3']['contenu']); ?></p>
                        </div>
                        <div class="level-content">
                            <p><?php echo html_entity_decode($contenuView['academie-du-climat']['en']['prog 2 titre competences 2']['contenu']); ?></p>
                        </div>
                        <div class="level-content paragraphe groupe-titre-paragraphe2">
                            <p><?php echo html_entity_decode($contenuView['academie-du-climat']['en']['prog 2 competences 2.1']['contenu']); ?></p>
                        </div>
                        <div class="level-content paragraphe2">
                            <p><?php echo html_entity_decode($contenuView['academie-du-climat']['en']['prog 2 competences 2.2']['contenu']); ?></p>
                        </div>
                        <div class="level-content paragraphe2">
                            <p><?php echo html_entity_decode($contenuView['academie-du-climat']['en']['prog 2 competences 2.3']['contenu']); ?></p>
                        </div>
                        <div class="inscription">
                            <a href="/contact" class="inscription-formation"><?php echo html_entity_decode($contenuView['academie-du-climat']['en']['s-inscrire-formation-AF']['contenu']); ?></a>
                        </div>
                    </div>
                    <div class="img">
                        <img src="<?php echo $images['club-pedagogique']['illustration programmes']['image']; ?>" alt="Illustration programmes">
                    </div>
                </div>
                <div class="repere" id="levelC"></div>
            </div>
        </div>
            <div class="ligne"></div>
            <div class="repere-levelC" id="levelC"></div>
            <div class="programme">
                <div class="level levelC">
                    <div class="txt">
                        <div class="level-content groupe-titre-paragraphe titre">
                            <p><?php echo html_entity_decode($contenuView['academie-du-climat']['en']['prog 3 titre']['contenu']); ?></p>
                        </div>
                        <div class="level-content">
                            <p><?php echo html_entity_decode($contenuView['academie-du-climat']['en']['prog 3 titre objectif']['contenu']); ?></p>
                        </div>
                        <div class="level-content paragraphe groupe-titre-paragraphe">
                            <p><?php echo html_entity_decode($contenuView['academie-du-climat']['en']['prog 3 objectif']['contenu']); ?></p>
                        </div>
                        <div class="level-content">
                            <p><?php echo html_entity_decode($contenuView['academie-du-climat']['en']['prog 3 titre competences 1']['contenu']); ?></p>
                        </div>
                        <div class="level-content paragraphe groupe-titre-paragraphe2">
                            <p><?php echo html_entity_decode($contenuView['academie-du-climat']['en']['prog 3 competences 1.1']['contenu']); ?></p>
                        </div>
                        <div class="level-content paragraphe2">
                            <p><?php echo html_entity_decode($contenuView['academie-du-climat']['en']['prog 3 competences 1.2']['contenu']); ?></p>
                        </div>
                        <div class="level-content paragraphe2 groupe-titre-paragraphe">
                            <p><?php echo html_entity_decode($contenuView['academie-du-climat']['en']['prog 3 competences 1.3']['contenu']); ?></p>
                        </div>
                        <div class="level-content">
                            <p><?php echo html_entity_decode($contenuView['academie-du-climat']['en']['prog 3 titre competences 2']['contenu']); ?></p>
                        </div>
                        <div class="level-content paragraphe groupe-titre-paragraphe2">
                            <p><?php echo html_entity_decode($contenuView['academie-du-climat']['en']['prog 3 competences 2.1']['contenu']); ?></p>
                        </div>
                        <div class="level-content paragraphe2">
                            <p><?php echo html_entity_decode($contenuView['academie-du-climat']['en']['prog 3 competences 2.2']['contenu']); ?></p>
                        </div>
                        <div class="level-content paragraphe2">
                            <p><?php echo html_entity_decode($contenuView['academie-du-climat']['en']['prog 3 competences 2.3']['contenu']); ?></p>
                        </div>
                        <div class="inscription">
                            <a href="/contact" class="inscription-formation"><?php echo html_entity_decode($contenuView['academie-du-climat']['en']['s-inscrire-formation']['contenu']); ?></a>
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
        <?php include('en/php/footer.php'); ?>
    </footer>
</body>
</html>