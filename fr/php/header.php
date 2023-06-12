<?php
$url = $_SERVER['REQUEST_URI'];

if (!strpos($_SERVER['REQUEST_URI'], '?') == '') {
    $i = strpos($_SERVER['REQUEST_URI'], '?');
    $url = substr($_SERVER['REQUEST_URI'], 0, $i);
    $url2 = $url;
}

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

if (!array_key_exists($url, MAPPING)) {
    $url2 = "/en/404.php";
    $url = "/fr/404.php";
} else {
    $url2 = MAPPING[$url];
}

?>

<div class="nav">
    <div class="blur" id="blur" onclick="changerLeft2('-18rem');"></div> <!-- Cache permettant de sortir du menu (en mode responsive) lors d'un click a côté -->
    <button class="menu-burger" onclick="changerLeft('0');"><img src="/img/menu.svg" alt="Menu burger"></button>
    <a href="/fr/" class="img-logo"><img src="/img/logoV2.00.png" alt="logo Climat-2030"></a>
    <ul class="nav-list" id="nav">
        <li class="arrow-menu"><button class="arrow-menu-burger" onclick="changerLeft2('-20rem');"><img src="/img/croix.svg" alt="Menu burger"></button></li>
        <li class="nav-item menu-acceuil"><a href="/fr/">Accueil</a></li>
        <li class="nav-item menu-academie-du-climat">
            <a href="/fr/academie-du-climat.php">L'Académie du Climat</a>
            <ul class="sub-menu">
                <li class="sub-nav-item"><a href="/fr/academie-du-climat.php" onclick="changerLeft2('-18rem');">Sensibilisation</a></li>
                <li class="sub-nav-item"><a href="/fr/academie-du-climat.php" onclick="changerLeft2('-18rem');">Formation Référent Climat</a></li>
            </ul>
        </li>
        <li class="nav-item menu-social-club">
            <a>Le Social Club</a>
            <ul class="sub-menu">
                <li class="sub-nav-item"><a href="/fr/academie-du-climat.php" onclick="changerLeft2('-18rem');">Parcours Climat</a></li>
                <li class="sub-nav-item"><a href="/fr/social-club.php#social-network" onclick="changerLeft2('-18rem');">Club Climat</a></li>
                <li class="sub-nav-item"><a href="/fr/social-club.php#social-network" onclick="changerLeft2('-18rem');">Forêt Club</a></li>
                <li class="sub-nav-item"><a href="/fr/social-club.php#humour" onclick="changerLeft2('-18rem');">L'humour</a></li>
            </ul>
        </li>
        <li class="nav-item menu-exposition">
            <a href="/fr/exposition.php">L'édition</a>
            <ul class="sub-menu">
                <li class="sub-nav-item"><a href="/fr/exposition.php" onclick="changerLeft2('-18rem');">Étudiants</a></li>
                <li class="sub-nav-item"><a href="/fr/exposition.php" onclick="changerLeft2('-18rem');">AF</a></li>
            </ul>
        </li>
        <li class="nav-item menu-search" id="searchActive">
            <div class="search main-div">
                <img src="/img/search.svg" alt="" class="search-icon" id="search-icon" onclick="search();">
                <div class="search-container" id="search-container">
                    <input type="text" id="search-input" placeholder="Recherche">
                    <ul id="suggestions-list"></ul>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <ul class="language">
                <li class="nav-item-language active unresponsive"><a href="<?php echo $url; ?>">FR</a></li>
                <li class="nav-item-language active responsive"><a href="<?php echo $url."?navbar=1"; ?>">FR</a></li>
                <li class="nav-item-language unresponsive"><a href="<?php echo $url2; ?>">EN</a></li>
                <li class="nav-item-language responsive"><a href="<?php echo $url2."?navbar=1"; ?>">EN</a></li>
            </ul>
        </li>
    </ul>
</div>
<script src="/js/search.js"></script>

<?php
if (array_key_exists('navbar', $_GET)) {
    echo "<script>";
    echo "changerLeft('0');";
    echo "</script>";
}
?>