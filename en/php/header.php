<?php
$url = $_SERVER['REQUEST_URI'];

const MAPPING = [
    "/en/404.php" => "/fr/404.php",
    "/en/the-climate-2030-academy.php" => "/fr/academie-du-climat.php",
    "/en/CGU.php" => "/fr/CGU.php",
    "/en/contact.php" => "/fr/contact.php",
    "/en/more-about-climat-2030.php" => "/fr/en-savoir-plus.php",
    "/en/the-exhibition.php" => "/fr/exposition.php",
    "/en/the-humour.php" => "/fr/humour.php",
    "/en/" => "/fr/",
    "/en/sign-up.php" => "/fr/inscription.php",
    "/en/the-social-club-network.php" => "/fr/social-club.php"
];

$url2 = MAPPING[$url];

?>

<div class="nav">
    <div class="blur" id="blur" onclick="changerLeft2('-18rem');"></div> <!-- Cache permettant de sortir du menu (en mode responsive) lors d'un click a côté -->
    <button class="menu-burger" onclick="changerLeft('0');"><img src="/img/menu.svg" alt="Menu burger"></button>
    <a href="/en/" class="img-logo"><img src="/img/logo.png" alt="logo Climat-2030"></a>
    <ul class="nav-list" id="nav">
        <li class="arrow-menu"><button class="arrow-menu-burger" onclick="changerLeft2('-20rem');"><img src="/img/croix.svg" alt="Menu burger"></button></li>
        <li class="nav-item menu-acceuil"><a href="/en/">Home</a></li>
        <li class="nav-item menu-academie-du-climat"><a href="/en/the-climate-2030-academy.php">Climate-2023 Academy</a></li>
        <li class="nav-item menu-social-club"><a href="/en/the-social-club-network.php">Social Club Network</a></li>
        <li class="nav-item menu-exposition"><a href="/en/the-exhibition.php">Exhibition</a></li>
        <li class="nav-item menu-humour"><a href="/en/the-humour.php">Humour</a></li>
        <li class="nav-item menu-inscription"><a href="/en/sign-up.php">Sign up</a></li>
        <li class="nav-item">
            <ul class="language">
                <li class="nav-item-language"><a href="<?php echo $url2; ?>">FR</a></li>
                <li class="nav-item-language active"><a href="<?php echo $url; ?>">EN</a></li>
            </ul>
        </li>
    </ul>
</div>