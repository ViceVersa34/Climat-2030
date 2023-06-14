<div class="page-selector" id="CGU"></div>
<h2 class="title-page">Footer</h2>
<div class="contents">
    <div class="group-content">
            <div class="language">
                <?php
                    $tempContenu = $contenu['footer']['fr']['texte compteur 1']['contenu'];
                    $tempContenuView = $contenuView['footer']['fr']['texte compteur 1']['contenu'];
                    $tempId = $contenu['footer']['fr']['texte compteur 1']['id'];
                    $language = 'fr';
                ?>
                <?php include('repeat.php'); ?>
                <?php
                    $tempContenu = $contenu['footer']['fr']['texte compteur 2']['contenu'];
                    $tempContenuView = $contenuView['footer']['fr']['texte compteur 2']['contenu'];
                    $tempId = $contenu['footer']['fr']['texte compteur 2']['id'];
                    $language = 'fr';
                ?>
                <?php include('repeat.php'); ?>
            </div>
            <div class="language">
            <?php
                    $tempContenu = $contenu['footer']['en']['texte compteur 1']['contenu'];
                    $tempContenuView = $contenuView['footer']['en']['texte compteur 1']['contenu'];
                    $tempId = $contenu['footer']['en']['texte compteur 1']['id'];
                    $language = 'en';
                ?>
                <?php include('repeat.php'); ?>
                <?php
                    $tempContenu = $contenu['footer']['en']['texte compteur 2']['contenu'];
                    $tempContenuView = $contenuView['footer']['en']['texte compteur 2']['contenu'];
                    $tempId = $contenu['footer']['en']['texte compteur 2']['id'];
                    $language = 'en';
                ?>
                <?php include('repeat.php'); ?>
            </div>
        </div>
    </div>


    <div class="group-content">
            <div class="language">
                <?php
                    $tempContenu = $contenu['footer']['fr']['mention']['contenu'];
                    $tempContenuView = $contenuView['footer']['fr']['mention']['contenu'];
                    $tempId = $contenu['footer']['fr']['mention']['id'];
                    $language = 'fr';
                ?>
                <?php include('repeat.php'); ?>
            </div>
            <div class="language">
                <?php
                    $tempContenu = $contenu['footer']['en']['mention']['contenu'];
                    $tempContenuView = $contenuView['footer']['en']['mention']['contenu'];
                    $tempId = $contenu['footer']['en']['mention']['id'];
                    $language = 'en';
                ?>
                <?php include('repeat.php'); ?>
            </div>
        </div>
    </div>
</div>