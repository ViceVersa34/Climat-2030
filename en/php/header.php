<?php
$url = $_SERVER['REQUEST_URI'];

if (!strpos($_SERVER['REQUEST_URI'], '?') == '') {
    $i = strpos($_SERVER['REQUEST_URI'], '?');
    $url = substr($_SERVER['REQUEST_URI'], 0, $i);
    $url2 = $url;
}

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

if (!array_key_exists($url, MAPPING)) {
    $url = "/en/404.php";
    $url2 = "/fr/404.php";
} else {
    $url2 = MAPPING[$url];
}

?>

<div class="nav">
    <div class="blur" id="blur" onclick="changerLeft2('-18rem');"></div> <!-- Cache permettant de sortir du menu (en mode responsive) lors d'un click a côté -->
    <button class="menu-burger" onclick="changerLeft('0');"><img src="/img/menu.svg" alt="Menu burger"></button>
    <a href="/en/" class="img-logo"><img src="/img/logoV2.00.png" alt="logo Climat-2030"></a>
    <ul class="nav-list" id="nav">
        <li class="arrow-menu"><button class="arrow-menu-burger" onclick="changerLeft2('-20rem');"><img src="/img/croix.svg" alt="Menu burger"></button></li>
        <li class="nav-item menu-acceuil"><a href="/en/"><?php echo $contenuView['header']['en']['page 1']['contenu']; ?></a></li>
        <li class="nav-item menu-academie-du-climat">
            <a href="/en/the-climate-2030-academy.php"><?php echo $contenuView['header']['en']['page 2']['contenu']; ?></a>
            <ul class="sub-menu">
                <!-- <li class="sub-nav-item"><a href="" onclick="changerLeft2('-18rem');"><?php echo $contenuView['header']['en']['page 2.1']['contenu']; ?></a></li> -->
                <!-- <li class="sub-nav-item"><a href="" onclick="changerLeft2('-18rem');"><?php echo $contenuView['header']['en']['page 2.2']['contenu']; ?></a></li> -->
                <!-- <li class="sub-nav-item"><a href="" onclick="changerLeft2('-18rem');"><?php echo $contenuView['header']['en']['page 2.3']['contenu']; ?></a></li> -->
                <!-- <li class="sub-nav-item"><a href="" onclick="changerLeft2('-18rem');"><?php echo $contenuView['header']['en']['page 2.4']['contenu']; ?></a></li> -->
                <!-- Les pages en commentaire permettent d'en ajouter dans le site. 
                Pour cela, il faut : Déocommenter, remplir le lien (href) et entrez le nom dans la partie admin (dans contents -> hearder) -->
            </ul>
        </li>
        <li class="nav-item menu-social-club">
            <a><?php echo $contenuView['header']['en']['page 3']['contenu']; ?></a>
            <ul class="sub-menu">
                <li class="sub-nav-item"><a href="/en/the-social-club-network.php#social-network" onclick="changerLeft2('-18rem');"><?php echo $contenuView['header']['en']['page 3.1']['contenu']; ?></a></li>
                <li class="sub-nav-item"><a href="/en/the-social-club-network.php#social-network" onclick="changerLeft2('-18rem');"><?php echo $contenuView['header']['en']['page 3.2']['contenu']; ?></a></li>
                <li class="sub-nav-item"><a href="/en/the-social-club-network.php#humour" onclick="changerLeft2('-18rem');"><?php echo $contenuView['header']['en']['page 3.3']['contenu']; ?></a></li>
                <!-- <li class="sub-nav-item"><a href="" onclick="changerLeft2('-18rem');"><?php echo $contenuView['header']['en']['page 3.4']['contenu']; ?></a></li> -->
                <!-- Les pages en commentaire permettent d'en ajouter dans le site. 
                Pour cela, il faut : Déocommenter, remplir le lien (href) et entrez le nom dans la partie admin (dans contents -> hearder) -->
            </ul>
        </li>
        <li class="nav-item menu-exposition">
            <a href="/en/the-exhibition.php"><?php echo $contenuView['header']['en']['page 4']['contenu']; ?></a>
            <ul class="sub-menu">
                <li class="sub-nav-item"><a href="/en/the-exhibition.php" onclick="changerLeft2('-18rem');"><?php echo $contenuView['header']['en']['page 4.1']['contenu']; ?></a></li>
                <li class="sub-nav-item"><a href="/en/the-exhibition.php" onclick="changerLeft2('-18rem');"><?php echo $contenuView['header']['en']['page 4.2']['contenu']; ?></a></li>
                <!-- <li class="sub-nav-item"><a href="" onclick="changerLeft2('-18rem');"><?php echo $contenuView['header']['en']['page 4.3']['contenu']; ?></a></li> -->
                <!-- <li class="sub-nav-item"><a href="" onclick="changerLeft2('-18rem');"><?php echo $contenuView['header']['en']['page 4.4']['contenu']; ?></a></li> -->
                <!-- Les pages en commentaire permettent d'en ajouter dans le site. 
                Pour cela, il faut : Déocommenter, remplir le lien (href) et entrez le nom dans la partie admin (dans contents -> hearder) -->
            </ul>
        </li>
        <li class="nav-item">
            <ul class="language">
                <li class="nav-item-language unresponsive"><a href="<?php echo $url2; ?>">FR</a></li>
                <li class="nav-item-language responsive"><a href="<?php echo $url2."?navbar=1"; ?>">FR</a></li>
                <li class="nav-item-language active unresponsive"><a href="<?php echo $url; ?>">EN</a></li>
                <li class="nav-item-language active responsive"><a href="<?php echo $url."?navbar=1"; ?>">EN</a></li>
            </ul>
        </li>
    </ul>
</div>
<script src="/js/enSearch.js"></script>

<?php
    if (array_key_exists('navbar', $_GET)) {
        echo "<script>";
        echo "changerLeft('0');";
        echo "</script>";
    }
?>