<?php

// Initialisation de la variable $i à -1
$i = -1;

// Parcours de chaque caractère du chemin de fichier actuel ($_SERVER['PHP_SELF'])
foreach (str_split($_SERVER['PHP_SELF']) as $chemin) {
    // Vérifie si le caractère est un slash '/'
    if ($chemin == '/') {
        // Incrémente $i de 1 pour compter le nombre de slashs rencontrés
        $i += 1;
    }
}

// Construction du chemin du fichier 'link_db.php' en utilisant la fonction str_repeat()
$path = str_repeat('../', $i) . 'admin/php/link_db.php';

// Vérifie si le chemin du fichier actuel ($_SERVER['PHP_SELF']) est égal à 'admin/login.php'
if ($_SERVER['PHP_SELF'] == 'admin/login.php') {
    // Modifie le chemin du fichier à 'php/link_db.php'
    $path = 'php/link_db.php';
}

// Inclusion du fichier correspondant au chemin déterminé dans la variable $path
include($path);

// Création de la rêquete SQL
$sql = "SELECT * FROM `contents` ORDER BY id_contents ASC";
// Exécution de la rêquete SQL
$requete = $db->query($sql);
// Récupère tous les enregistrements résultants de la requête
$contents = $requete->fetchAll();

// Définition de la fonction content avec un paramètre $donnees
function content($donnees) {
    // Initialisation du tableau $contenu
    $contenu = array();

    // Parcours de chaque ligne des données fournies
    foreach ($donnees as $ligne) {
        // Récupération des valeurs de chaque colonne de la ligne
        $page = $ligne['contents_page'];
        $langue = $ligne['contents_language'];
        $titre = $ligne['contents_name'];
        $texte = $ligne['contents_content'];
        $id = $ligne['id_contents'];

        // Vérification et création des niveaux de tableau nécessaires dans $contenu
        if (!isset($contenu[$page])) {
            $contenu[$page] = array();
        }

        if (!isset($contenu[$page][$langue])) {
            $contenu[$page][$langue] = array();
        }

        if (!isset($contenu[$page][$langue][$titre])) {
            $contenu[$page][$langue][$titre] = array();
        }

        // Attribution des valeurs à l'entrée correspondante dans le tableau $contenu
        $contenu[$page][$langue][$titre] = array(
            'contenu' => $texte,
            'id' => $id
        );
    }

    // Retourne le tableau $contenu
    return $contenu;
}


// Définition de la fonction contentView avec un paramètre $donnees
function contentView($donnees) {
    // Initialisation du tableau $contenu
    $contenu = array();

    // Parcours de chaque ligne des données fournies
    foreach ($donnees as $ligne) {
        // Récupération des valeurs de chaque colonne de la ligne
        $page = $ligne['contents_page'];
        $langue = $ligne['contents_language'];
        $titre = $ligne['contents_name'];
        $texte = $ligne['contents_content'];
        $id = $ligne['id_contents'];

        // Vérification et création des niveaux de tableau nécessaires dans $contenu
        if (!isset($contenu[$page])) {
            $contenu[$page] = array();
        }

        if (!isset($contenu[$page][$langue])) {
            $contenu[$page][$langue] = array();
        }

        if (!isset($contenu[$page][$langue][$titre])) {
            $contenu[$page][$langue][$titre] = array();
        }

        // Attribution des valeurs à l'entrée correspondante dans le tableau $contenu
        $contenu[$page][$langue][$titre] = array(
            'contenu' => texteView($texte),
            'id' => $id
        );
    }

    // Retourne le tableau $contenu
    return $contenu;
}


// Définition de la fonction texteView avec un paramètre $texte
function texteView($texte) {
    // Définition du motif de recherche utilisant des expressions régulières
    $pattern = '/{{(.*?)}}/s';
    // Calcul du nombre d'itérations nécessaires
    $n = strlen($texte) / 8;

    // Boucle tant que $n est supérieur à 0
    while ($n > 0) {
        // Si une correspondance est trouvée avec le motif dans le texte
        if (preg_match($pattern, $texte, $matches)) {
            // Récupération du contenu correspondant à l'expression régulière
            $regExContent = $matches[1];
            // Construction de la chaîne de recherche
            $search = '{{'.$regExContent.'}}';
            // Appel de la fonction regExReplace pour effectuer le remplacement
            $replace = regExReplace($regExContent);
            // Remplacement de la chaîne de recherche par la chaîne de remplacement dans le texte
            $texte = str_replace($search, $replace, $texte);
        }
        // Décrémentation de $n pour la prochaine itération
        $n--;
    }

    // Retourne le texte modifié
    return $texte;
}


// Définition de la fonction regExReplace avec un paramètre $regExContent
function regExReplace($regExContent) {
    // Séparation du contenu en utilisant le tiret comme délimiteur
    $splitContent = explode('-', $regExContent);
    
    // Liste des correspondances et de leurs remplacements
    $list = ['y', 'o', 'n', 'v', 't1', 't2', 'g', 'p', '/'];
    $replace = [
        'y' => 'yello-txt',
        'o' => 'orange-txt',
        'n' => 'black-txt',
        'v' => 'green-txt',
        't1' => 'size-txt',
        't2' => 'size-txt2',
        'g' => 'font-weight',
        'p' => 'font-family',
        '/' => '/span'
    ];
    
    // Tableau pour stocker les résultats du remplacement
    $result = [];
    
    // Parcours du contenu divisé
    foreach ($splitContent as $content) {
        // Parcours de la liste des correspondances
        foreach ($list as $rep) {
            // Si une correspondance est trouvée
            if ($content == $rep) {
                // Ajout du remplacement correspondant au tableau de résultats
                array_push($result, $replace[$rep]);
            }
        }
    }
      
    // Construction du contenu final à partir des résultats
    if ($result[0] == '/span') {
        $regExContent = '</span>';
    }
    if ($result[0] != '/span' && $result[0] != 'br') {
        $regExContent = '<span class="';
        foreach ($result as $res) {
            $regExContent = $regExContent.' '.$res;
        }
        $regExContent = $regExContent.'">';
    }
      
    // Retourne le contenu modifié
    return $regExContent;
}

// Création du tableau $contenu grâce à la fonction content()
$contenu = content($contents);
// Création du tableau $contenuView grâce à la fonction contentView()
$contenuView = contentView($contents);

// Création de la requête SQL
$sql = "SELECT * FROM `images` ORDER BY id_images ASC";
// Exécution de la rêquete SQL
$requete = $db->query($sql);
// Récupère tous les enregistrements résultants de la requête
$images = $requete->fetchAll();

// Définition de la fonction images avec un paramètre $images
function images($images) {
    // Création d'un tableau vide pour stocker les images
    $image = array();

    // Parcours de chaque ligne du tableau $images
    foreach ($images as $ligne) {
        // Récupération des informations de la ligne
        $page = $ligne['images_page'];
        $titre = $ligne['images_name'];
        $path = $ligne['images_path'];
        $id = $ligne['id_images'];

        // Vérification et création des clés pour les pages et les titres dans le tableau $image
        if (!isset($image[$page])) {
            $image[$page] = array();
        }

        if (!isset($image[$page][$titre])) {
            $image[$page][$titre] = array();
        }

        // Attribution des informations de l'image à la clé correspondante dans le tableau $image
        $image[$page][$titre] = array(
            'image' => $path,
            'id' => $id
        );
    }

    // Retourne le tableau d'images final
    return $image;
}


// Création du tableau $images grâce à la fonction images()
$images = images($images);


// Création de la requête SQL
$sql = "SELECT * FROM `prices` ORDER BY `id_prices` ASC";
// Récupère tous les enregistrements résultants de la requête
$requete = $db->query($sql);
// Récupère tous les enregistrements résultants de la requête
$prices = $requete->fetchAll();

// Définition de la fonction prices avec un paramètre $donnees
function prices($donnees) {
    // Création d'un tableau vide pour stocker les prix
    $prices = array();

    // Parcours de chaque ligne du tableau $donnees
    foreach ($donnees as $ligne) {
        // Récupération des informations de la ligne
        $row = $ligne['prices_row'];
        $col = $ligne['prices_col'];
        $price = $ligne['prices_price'];
        $id = $ligne['id_prices'];

        // Vérification et création des clés pour les lignes et les colonnes dans le tableau $prices
        if (!isset($prices[$row])) {
            $prices[$row] = array();
        }

        if (!isset($prices[$row][$col])) {
            $prices[$row][$col] = array();
        }

        // Attribution des informations du prix à la clé correspondante dans le tableau $prices
        $prices[$row][$col] = array(
            'prices' => $price,
            'id' => $id
        );
    }

    // Retourne le tableau de prix final
    return $prices;
}

// Création du tableau $pricesTab grâce à la fonction prices()
$pricesTab = prices($prices);

?>