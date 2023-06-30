<?php
$url = $_SERVER['REQUEST_URI'];

if (!strpos($_SERVER['REQUEST_URI'], '?') == '') {
    $i = strpos($_SERVER['REQUEST_URI'], '?');
    $url = substr($_SERVER['REQUEST_URI'], 0, $i);
    $url2 = $url;
}

const MAPPINGENFR = [
    "/the-pedagogical-club" => "/club-pedagogique",
    "/en-CGU" => "/CGU",
    "/contact-us" => "/contact",
    "/more-about-climat-2030" => "/en-savoir-plus",
    "/forest-club" => "/club-foret",
    "/the-humour" => "/humour",
    "/home" => "/",
    "/sign-up" => "/inscription",
    "/the-social-club" => "/club-social",
    "/eco-aware" => "/eco-sensibilise"
];

if (!array_key_exists($url, MAPPINGENFR)) {
    $url = "/404";
    $url2 = "/en-404";
} else {
    $url2 = MAPPINGENFR[$url];
}

?>

<div class="nav">
    <div class="blur" id="blur" onclick="changerLeft2('-18rem');"></div> <!-- Cache permettant de sortir du menu (en mode responsive) lors d'un click a côté -->
    <button class="menu-burger" onclick="changerLeft('0');"><img src="/img/menu.svg" alt="Menu burger"></button>
    <a href="/home" class="img-logo"><img src="<?php echo $images['header']['logo']['image']; ?>" alt="logo Climat-2030"></a>
    <ul class="nav-list" id="nav">
        <li class="arrow-menu"><button class="arrow-menu-burger" onclick="changerLeft2('-20rem');"><img src="/img/croix.svg" alt="Menu burger"></button></li>
        <li class="nav-item menu-acceuil"><a href="/home"><?php echo $contenuView['header']['en']['page 1']['contenu']; ?></a></li>
        <li class="nav-item menu-academie-du-climat">
            <a href="/the-pedagogical-club"><?php echo $contenuView['header']['en']['page 2']['contenu']; ?></a>
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
            <a href="/the-social-club"><?php echo $contenuView['header']['en']['page 3']['contenu']; ?></a>
            <ul class="sub-menu">
                <li class="sub-nav-item"><a href="/the-social-club#climate-club" onclick="changerLeft2('-18rem');"><?php echo $contenuView['header']['en']['page 3.1']['contenu']; ?></a></li>
                <li class="sub-nav-item"><a href="/the-social-club#humour-club" onclick="changerLeft2('-18rem');"><?php echo $contenuView['header']['en']['page 3.2']['contenu']; ?></a></li>
                <!-- <li class="sub-nav-item"><a href="" onclick="changerLeft2('-18rem');"><?php echo $contenuView['header']['en']['page 3.3']['contenu']; ?></a></li> -->
                <!-- <li class="sub-nav-item"><a href="" onclick="changerLeft2('-18rem');"><?php echo $contenuView['header']['en']['page 3.4']['contenu']; ?></a></li> -->
                <!-- Les pages en commentaire permettent d'en ajouter dans le site. 
                Pour cela, il faut : Déocommenter, remplir le lien (href) et entrez le nom dans la partie admin (dans contents -> hearder) -->
            </ul>
        </li>
        <li class="nav-item menu-exposition">
            <a href="/forest-club"><?php echo $contenuView['header']['en']['page 4']['contenu']; ?></a>
            <ul class="sub-menu">
                <li class="sub-nav-item"><a href="/forest-club#AF" onclick="changerLeft2('-18rem');"><?php echo $contenuView['header']['en']['page 4.1']['contenu']; ?></a></li>
                <li class="sub-nav-item"><a href="/forest-club#etudiants" onclick="changerLeft2('-18rem');"><?php echo $contenuView['header']['en']['page 4.2']['contenu']; ?></a></li>
                <!-- <li class="sub-nav-item"><a href="" onclick="changerLeft2('-18rem');"><?php echo $contenuView['header']['en']['page 4.3']['contenu']; ?></a></li> -->
                <!-- <li class="sub-nav-item"><a href="" onclick="changerLeft2('-18rem');"><?php echo $contenuView['header']['en']['page 4.4']['contenu']; ?></a></li> -->
                <!-- Les pages en commentaire permettent d'en ajouter dans le site. 
                Pour cela, il faut : Déocommenter, remplir le lien (href) et entrez le nom dans la partie admin (dans contents -> hearder) -->
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