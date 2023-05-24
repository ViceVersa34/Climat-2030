<?php
$url = $_SERVER['REQUEST_URI'];

const MAPPING = [
    "/fr/404.php" => "/en/404.php",
    "/fr/academie-du-climat.php" => "/en/the-climate-2030-academy.php",
    "/fr/CGU.php" => "/en/CGU.php",
    "/fr/contact.php" => "/en/contact.php",
    "/fr/en-savoir-plus.php" => "/en/more-about-climat-2030.php",
    "/fr/exposition.php" => "/en/the-exhibition.php",
    "/fr/humour.php" => "/en/the-humour.php",
    "/fr/" => "/en/",
    "/fr/inscription.php" => "/en/sign-up.php",
    "/fr/social-club.php" => "/en/the-social-club-network.php"
];

$url = MAPPING[$url];

?>

<div class="nav">
    <div class="blur" id="blur" onclick="changerLeft2('-18rem');"></div> <!-- Cache permettant de sortir du menu (en mode responsive) lors d'un click a côté -->
    <button class="menu-burger" onclick="changerLeft('0');"><img src="/img/menu.svg" alt="Menu burger"></button>
    <a href="/fr/" class="img-logo"><img src="/img/logo.png" alt="logo Climat-2030"></a>
    <ul class="nav-list" id="nav">
        <li class="arrow-menu"><button class="arrow-menu-burger" onclick="changerLeft2('-20rem');"><img src="/img/croix.svg" alt="Menu burger"></button></li>
        <li class="nav-item menu-acceuil"><a href="/fr/">Accueil</a></li>
        <li class="nav-item menu-academie-du-climat"><a href="/fr/academie-du-climat.php">L'académie du climat</a></li>
        <li class="nav-item menu-social-club"><a href="/fr/social-club.php">Le Social Club</a></li>
        <li class="nav-item menu-exposition"><a href="/fr/exposition.php">L'exposition</a></li>
        <li class="nav-item menu-humour"><a href="/fr/humour.php">L'humour</a></li>
        <!-- <li class="nav-item menu-inscription"><a href="/fr/inscription.php">S'inscrire</a></li> -->
        <li class="nav-item menu-inscription"><a href="/fr/inscription.php"><?php echo $url; ?></a></li>
        <li class="nav-item">
            <ul class="language">
                <li class="nav-item-language active"><a href="<?php echo $url; ?>">FR</a></li>
                <li class="nav-item-language"><a href="<?php echo $url; ?>">EN</a></li>
            </ul>
        </li>
    </ul>
</div>