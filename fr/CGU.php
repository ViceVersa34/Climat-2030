<?php include('admin/tables/contents/part/content.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('fr/php/head.php'); ?>
    <link rel="stylesheet" href="/css/CGU.css">
    <title>CGU - Climat-2030</title>
</head>
<body id="body">
    <header>
        <?php include('fr/php/header.php'); ?>
    </header>

    <main>
        <div class="CGU">
            <h1 class="top_txt"><?php echo html_entity_decode($contenuView['CGU']['fr']['titre']['contenu']); ?></span></h1>
            
            <div class="articles">
                <div class="article">
                    <div class="titre-article"><?php echo html_entity_decode($contenuView['CGU']['fr']['titre article 1']['contenu']); ?></div>
                    <div class="texte-article">
                        <?php echo html_entity_decode($contenuView['CGU']['fr']['article 1.1']['contenu']); ?>
                        <ul>
                            <li><?php echo html_entity_decode($contenuView['CGU']['fr']['article 1.2']['contenu']); ?></li>
                            <li><?php echo html_entity_decode($contenuView['CGU']['fr']['article 1.3']['contenu']); ?></li>
                        </ul>
                        <?php echo html_entity_decode($contenuView['CGU']['fr']['article 1.4']['contenu']); ?>
                    </div>
                </div>
                <div class="article">
                    <div class="titre-article"><?php echo html_entity_decode($contenuView['CGU']['fr']['titre article 2']['contenu']); ?></div>
                    <div class="texte-article"><?php echo html_entity_decode($contenuView['CGU']['fr']['article 2']['contenu']); ?></div>
                </div>
                <div class="article">
                    <div class="titre-article"><?php echo html_entity_decode($contenuView['CGU']['fr']['titre article 3']['contenu']); ?></div>
                    <div class="texte-article"><?php echo html_entity_decode($contenuView['CGU']['fr']['article 3']['contenu']); ?></div>
                </div>
                <div class="article">
                    <div class="titre-article"><?php echo html_entity_decode($contenuView['CGU']['fr']['titre article 4']['contenu']); ?></div>
                    <div class="texte-article"><?php echo html_entity_decode($contenuView['CGU']['fr']['article 4']['contenu']); ?></div>
                </div>
                <div class="article">
                    <div class="titre-article"><?php echo html_entity_decode($contenuView['CGU']['fr']['titre article 5']['contenu']); ?></div>
                    <div class="texte-article"><?php echo html_entity_decode($contenuView['CGU']['fr']['article 5']['contenu']); ?></div>
                </div>
                <div class="article">
                    <div class="titre-article"><?php echo html_entity_decode($contenuView['CGU']['fr']['titre article 6']['contenu']); ?></div>
                    <div class="texte-article"><?php echo html_entity_decode($contenuView['CGU']['fr']['article 6']['contenu']); ?></div>
                </div>
                <div class="article">
                    <div class="titre-article"><?php echo html_entity_decode($contenuView['CGU']['fr']['titre article 7']['contenu']); ?></div>
                    <div class="texte-article">
                        <?php echo html_entity_decode($contenuView['CGU']['fr']['article 7.1']['contenu']); ?>
                        <ul>
                            <li><?php echo html_entity_decode($contenuView['CGU']['fr']['article 7.2']['contenu']); ?></li>
                            <li><?php echo html_entity_decode($contenuView['CGU']['fr']['article 7.3']['contenu']); ?></li>
                        </ul>
                    </div>
                </div>
                <div class="article">
                    <div class="titre-article"><?php echo html_entity_decode($contenuView['CGU']['fr']['titre article 8']['contenu']); ?></div>
                    <div class="texte-article"><?php echo html_entity_decode($contenuView['CGU']['fr']['article 8']['contenu']); ?></div>
                </div>
                <div class="article">
                    <div class="titre-article"><?php echo html_entity_decode($contenuView['CGU']['fr']['titre article 9']['contenu']); ?></div>
                    <div class="texte-article"><?php echo html_entity_decode($contenuView['CGU']['fr']['article 9']['contenu']); ?></div>
                </div>
                <div class="article">
                    <div class="titre-article"><?php echo html_entity_decode($contenuView['CGU']['fr']['titre article 10']['contenu']); ?></div>
                    <div class="texte-article"><?php echo html_entity_decode($contenuView['CGU']['fr']['article 10']['contenu']); ?></div>
                </div>
                <div class="article">
                    <div class="titre-article"><?php echo html_entity_decode($contenuView['CGU']['fr']['titre article 11']['contenu']); ?></div>
                    <div class="texte-article"><?php echo html_entity_decode($contenuView['CGU']['fr']['article 11']['contenu']); ?></div>
                </div>
            </div>
        </div>

        <div class="mention-icones">
            <div class="title-mention-icone">Mention des créateurs d'icônes</div>
            <div class="icone">
                <img src="/img/up-arrow.svg" alt="up arrow icons">
                <div class="mention">
                    <a href="https://www.flaticon.com/free-icons/up-arrow" title="up arrow icons" target="blank">Up arrow icons created by dmitri13 - Flaticon</a>
                </div>
            </div>
            <div class="icone">
                <img src="/img/menu.svg" alt="open menu icons">
                <div class="mention">
                    <a href="https://www.flaticon.com/free-icons/open-menu" title="open menu icons" target="blank">Open menu icons created by Freepik - Flaticon</a>
                </div>
            </div>
            <div class="icone">
                <img src="/img/croix.svg" alt="cross mark icons">
                <div class="mention">
                    <a href="https://www.flaticon.com/free-icons/cross-mark" title="cross mark icons" target="blank">Cross mark icons created by Andrean Prabowo - Flaticon</a>
                </div>
            </div>
        </div>

        <div class="mention-images">
            <div class="title-mention-image">Mention des créateurs d'images</div>
            <div class="image">
                <img src="<?php echo $images['index']['illustration 1']['image']; ?>" alt="Crédit image 1">
                <div class="mention">
                    <a href="<?php echo html_entity_decode($contenuView['CGU']['fr/en']['lien image 1']['contenu']); ?>" target="blank">
                        <?php echo html_entity_decode($contenuView['CGU']['fr/en']['texte image 1']['contenu']); ?>
                    </a>
                </div>
            </div>
            <div class="image">
                <img src="<?php echo $images['club-pedagogique']['illustration 1']['image']; ?>" alt="Crédit image 2">
                <div class="mention">
                    <a href="<?php echo html_entity_decode($contenuView['CGU']['fr/en']['lien image 2']['contenu']); ?>" target="blank">
                        <?php echo html_entity_decode($contenuView['CGU']['fr/en']['texte image 2']['contenu']); ?>
                    </a>
                </div>
            </div>
            <div class="image">
                <img src="<?php echo $images['club-climat']['illustration 1']['image']; ?>" alt="Crédit image 3">
                <div class="mention">
                    <a href="<?php echo html_entity_decode($contenuView['CGU']['fr/en']['lien image 3']['contenu']); ?>" target="blank">
                        <?php echo html_entity_decode($contenuView['CGU']['fr/en']['texte image 3']['contenu']); ?>
                    </a>
                </div>
            </div>
            <div class="image">
                <img src="<?php echo $images['club-climat']['illustration 2']['image']; ?>" alt="Crédit image 4">
                <div class="mention">
                    <a href="<?php echo html_entity_decode($contenuView['CGU']['fr/en']['lien image 4']['contenu']); ?>" target="blank">
                        <?php echo html_entity_decode($contenuView['CGU']['fr/en']['texte image 4']['contenu']); ?>
                    </a>
                </div>
            </div>
            <div class="image">
                <img src="<?php echo $images['club-humour']['illustration 1']['image']; ?>" alt="Crédit image 5">
                <div class="mention">
                    <a href="<?php echo html_entity_decode($contenuView['CGU']['fr/en']['lien image 5']['contenu']); ?>" target="blank">
                        <?php echo html_entity_decode($contenuView['CGU']['fr/en']['texte image 5']['contenu']); ?>
                    </a>
                </div>
            </div>
            <div class="image">
                <img src="<?php echo $images['footer']['illustration 1']['image']; ?>" alt="Crédit image 6">
                <div class="mention">
                    <a href="<?php echo html_entity_decode($contenuView['CGU']['fr/en']['lien image 6']['contenu']); ?>" target="blank">
                        <?php echo html_entity_decode($contenuView['CGU']['fr/en']['texte image 6']['contenu']); ?>
                    </a>
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