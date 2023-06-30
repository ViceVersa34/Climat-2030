<div class="page-selector" id="index"></div>
<h2 class="title-page">Header</h2>
<div class="contents">
    <div class="group-content">
        <div class="content">
            <div class="language">
                <?php 
                    $tempContenu = $contenu['contact']['fr']['titre']['contenu'];
                    $tempContenuView = $contenuView['contact']['fr']['titre']['contenu'];
                    $tempId = $contenu['contact']['fr']['titre']['id'];
                    $language = 'fr';
                ?>
                <?php include('repeat.php'); ?>
            </div>
            <div class="language">
            <?php 
                    $tempContenu = $contenu['contact']['en']['titre']['contenu'];
                    $tempContenuView = $contenuView['contact']['en']['titre']['contenu'];
                    $tempId = $contenu['contact']['en']['titre']['id'];
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
                    $tempContenu = $contenu['contact']['fr']['commentaire']['contenu'];
                    $tempContenuView = $contenuView['contact']['fr']['commentaire']['contenu'];
                    $tempId = $contenu['contact']['fr']['commentaire']['id'];
                    $language = 'fr';
                ?>
                <?php include('repeat.php'); ?>
            </div>
            <div class="language">
            <?php 
                    $tempContenu = $contenu['contact']['en']['commentaire']['contenu'];
                    $tempContenuView = $contenuView['contact']['en']['commentaire']['contenu'];
                    $tempId = $contenu['contact']['en']['commentaire']['id'];
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
                    $tempContenu = $contenu['contact']['fr']['en-savoir-plus']['contenu'];
                    $tempContenuView = $contenuView['contact']['fr']['en-savoir-plus']['contenu'];
                    $tempId = $contenu['contact']['fr']['en-savoir-plus']['id'];
                    $language = 'fr';
                ?>
                <?php include('repeat.php'); ?>
            </div>
            <div class="language">
            <?php 
                    $tempContenu = $contenu['contact']['en']['en-savoir-plus']['contenu'];
                    $tempContenuView = $contenuView['contact']['en']['en-savoir-plus']['contenu'];
                    $tempId = $contenu['contact']['en']['en-savoir-plus']['id'];
                    $language = 'en';
                ?>
                <?php include('repeat.php'); ?>
            </div>            
        </div>
    </div>
</div>