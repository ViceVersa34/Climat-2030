<?php include('admin/tables/contents/part/content.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('fr/php/head.php'); ?>
    <link rel="stylesheet" href="/css/en-savoir-plus.css">
    <title>En savoir plus - Climat-2030</title>
</head>
<body id="body">
    <header>
        <?php include('fr/php/header.php'); ?>
    </header>

    <main>

        <h1 class="top_txt"><?php echo html_entity_decode($contenuView['en-savoir-plus']['fr']['titre']['contenu']); ?></h1>

        <div class="content">
            <div class="manifeste">
                <h2><?php echo html_entity_decode($contenuView['en-savoir-plus']['fr']['manifeste titre']['contenu']); ?></h2>
                <p><?php echo html_entity_decode($contenuView['en-savoir-plus']['fr']['manifeste']['contenu']); ?></p>
                <div class="sign"><?php echo html_entity_decode($contenuView['en-savoir-plus']['fr']['manifeste signature']['contenu']); ?></div>
            </div>
            <div class="raisons">
                <div class="raison">
                    <h3><?php echo html_entity_decode($contenuView['en-savoir-plus']['fr']['titre raison 1']['contenu']); ?></h3>
                    <p><?php echo html_entity_decode($contenuView['en-savoir-plus']['fr']['raison 1']['contenu']); ?></p>
                </div>
                <div class="raison">
                    <h3><?php echo html_entity_decode($contenuView['en-savoir-plus']['fr']['titre raison 2']['contenu']); ?></h3>
                    <p><?php echo html_entity_decode($contenuView['en-savoir-plus']['fr']['raison 2']['contenu']); ?></p>
                </div>
                <div class="raison">
                    <h3><?php echo html_entity_decode($contenuView['en-savoir-plus']['fr']['titre raison 3']['contenu']); ?></h3>
                    <p><?php echo html_entity_decode($contenuView['en-savoir-plus']['fr']['raison 3']['contenu']); ?></p>
                </div>
                <div class="raison">
                    <h3><?php echo html_entity_decode($contenuView['en-savoir-plus']['fr']['titre raison 4']['contenu']); ?></h3>
                    <p><?php echo html_entity_decode($contenuView['en-savoir-plus']['fr']['raison 4']['contenu']); ?></p>
                </div>
                <div class="raison">
                    <h3><?php echo html_entity_decode($contenuView['en-savoir-plus']['fr']['titre raison 5']['contenu']); ?></h3>
                    <p><?php echo html_entity_decode($contenuView['en-savoir-plus']['fr']['raison 5']['contenu']); ?></p>
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