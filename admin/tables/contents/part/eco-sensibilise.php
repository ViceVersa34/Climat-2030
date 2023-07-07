<div class="page-selector" id="index"></div>
<h2 class="title-page">Éco-sensibilisé</h2>
<div class="contents">
    <div class="group-content">
        <div class="content">
            <div class="language">
                <?php 
                    // Récupère le contenu, la vue du contenu et l'ID du titre en français à partir des variables $contenu et $contenuView
                    $tempContenu = $contenu['eco-sensibilise']['fr']['titre 1']['contenu'];
                    $tempContenuView = $contenuView['eco-sensibilise']['fr']['titre 1']['contenu'];
                    $tempId = $contenu['eco-sensibilise']['fr']['titre 1']['id'];
                    $language = 'fr';
                ?>
                <?php include('repeat.php'); ?>
                <?php 
                    // Récupère le contenu, la vue du contenu et l'ID du titre en français à partir des variables $contenu et $contenuView
                    $tempContenu = $contenu['eco-sensibilise']['fr']['titre 2']['contenu'];
                    $tempContenuView = $contenuView['eco-sensibilise']['fr']['titre 2']['contenu'];
                    $tempId = $contenu['eco-sensibilise']['fr']['titre 2']['id'];
                    $language = 'fr';
                ?>
                <?php include('repeat.php'); ?>
            </div>
            <div class="language">
                <?php 
                    // Récupère le contenu, la vue du contenu et l'ID du titre en français à partir des variables $contenu et $contenuView
                    $tempContenu = $contenu['eco-sensibilise']['en']['titre 1']['contenu'];
                    $tempContenuView = $contenuView['eco-sensibilise']['en']['titre 1']['contenu'];
                    $tempId = $contenu['eco-sensibilise']['en']['titre 1']['id'];
                    $language = 'en';
                ?>
                <?php include('repeat.php'); ?>
                <?php 
                    // Récupère le contenu, la vue du contenu et l'ID du titre en français à partir des variables $contenu et $contenuView
                    $tempContenu = $contenu['eco-sensibilise']['en']['titre 2']['contenu'];
                    $tempContenuView = $contenuView['eco-sensibilise']['en']['titre 2']['contenu'];
                    $tempId = $contenu['eco-sensibilise']['en']['titre 2']['id'];
                    $language = 'en';
                ?>
                <?php include('repeat.php'); ?>
            </div>            
        </div>
    </div>

    <div class="group-content">
        <div class="content">
            <div class="language">
                <?php 
                    // Récupère le contenu, la vue du contenu et l'ID du titre en français à partir des variables $contenu et $contenuView
                    $tempContenu = $contenu['eco-sensibilise']['fr']['contenu']['contenu'];
                    $tempContenuView = $contenuView['eco-sensibilise']['fr']['contenu']['contenu'];
                    $tempId = $contenu['eco-sensibilise']['fr']['contenu']['id'];
                    $language = 'fr';
                ?>
                <?php include('repeat.php'); ?>
            </div>
            <div class="language">
                <?php 
                    // Récupère le contenu, la vue du contenu et l'ID du titre en français à partir des variables $contenu et $contenuView
                    $tempContenu = $contenu['eco-sensibilise']['en']['contenu']['contenu'];
                    $tempContenuView = $contenuView['eco-sensibilise']['en']['contenu']['contenu'];
                    $tempId = $contenu['eco-sensibilise']['en']['contenu']['id'];
                    $language = 'en';
                ?>
                <?php include('repeat.php'); ?>
            </div>            
        </div>
    </div>
</div>