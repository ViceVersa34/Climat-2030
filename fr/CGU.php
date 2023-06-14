<?php include('../admin/tables/contents/part/content.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('php/head.php'); ?>
    <link rel="stylesheet" href="/css/CGU.css">
    <title>CGU - Climat-2030</title>
</head>
<body id="body">
    <header>
        <?php include('php/header.php'); ?>
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
            <div class="title-mention-image">Credit for image creators</div>
            <div class="image">
                <img src="/img/index/earth_day.jpg" alt="earth day every day">
                <div class="mention"><a href="https://www.hannahrosengren.com/#/earth-day-every-day/" target="blank">Hanna Rosengren</a></div>
            </div>
            <div class="image">
                <img src="/img/academie_du_climat/oiseau.jpg" alt="Illustration oiseau">
                <div class="mention"><a href="https://i.pinimg.com/564x/9e/4b/26/9e4b26c459c7078c7da15a085e1c384b.jpg" target="blank">i.pinimg.com</a></div>
            </div>
            <div class="image">
                <img src="/img/index/butterfly.jpg" alt="Illustration butterfly">
                <div class="mention"><a href="https://i.pinimg.com/564x/1a/99/6e/1a996e0052ff9ea0f19eae1f98577961.jpg" target="blank">i.pinimg.com</a></div>
            </div>
            <div class="image">
                <img src="/img/we_can_do_it.png" alt="Illustration we-can-do-it">
                <div class="mention"><a href="https://www.instagram.com/p/B9e5rOgB8BY/" target="blank">Instagram Vo_Maria</a></div>
            </div>
            <div class="image">
                <img src="/img/social_club/fiche_telecom.jpg" alt="Illustration fiche télécom">
                <div class="mention"><a href="https://i.pinimg.com/564x/13/98/9e/13989e4f3e58c0c47bef32c8ff3a33c6.jpg" target="blank">i.pinimg.com</a></div>
            </div>
            <div class="image">
                <img src="/img/social_club/casque.jpg" alt="Illustration casque">
                <div class="mention"><a href="https://i.pinimg.com/564x/2b/fc/b7/2bfcb788f335145d1f81d7f17af16ec5.jpg" target="blank">i.pinimg.com</a></div>
            </div>
            <div class="image">
                <img src="/img/humour/ALONDRA_DE_LA_PARRA.jpg" alt="Illustration chnateuse">
                <div class="mention"><a href="https://www.limelightmagazine.com.au/wp-content/uploads/2018/08/891be202-alondra-de-la-parra-copy.jpg" target="blank">lime light magazine</a></div>
            </div>
            <!-- <div class="image">
                <img src="/img/humour/illustration_humour.png" alt="Illutration femme qui chante/crie">
                <div class="mention"><a href=""></a></div>
            </div> -->
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