<?php

$i = -1;
foreach (str_split($_SERVER['PHP_SELF']) as $chemin) {
    if ($chemin == '/') {
        $i += 1;
    }   
}
$path = str_repeat('../', $i) . 'admin/php/link_db.php';

if ($_SERVER['PHP_SELF'] == 'admin/login.php') {
    $path = 'php/link_db.php';
}

include($path); 


$sql = "SELECT * FROM `contents` ORDER BY id_contents ASC";
$requete = $db->query($sql);
$contents = $requete->fetchAll();

function content($donnees) {
    $contenu = array();

    foreach ($donnees as $ligne) {
        $page = $ligne['contents_page'];
        $langue = $ligne['contents_language'];
        $titre = $ligne['contents_name'];
        $texte = $ligne['contents_content'];
        $id = $ligne['id_contents'];

        if (!isset($contenu[$page])) {
            $contenu[$page] = array();
        }

        if (!isset($contenu[$page][$langue])) {
            $contenu[$page][$langue] = array();
        }

        if (!isset($contenu[$page][$langue][$titre])) {
            $contenu[$page][$langue][$titre] = array();
        }

        $contenu[$page][$langue][$titre] = array(
            'contenu' => $texte,
            'id' => $id
        );
    }

    return $contenu;
}

function contentView($donnees) {
    $contenu = array();

    foreach ($donnees as $ligne) {
        $page = $ligne['contents_page'];
        $langue = $ligne['contents_language'];
        $titre = $ligne['contents_name'];
        $texte = $ligne['contents_content'];
        $id = $ligne['id_contents'];

        if (!isset($contenu[$page])) {
            $contenu[$page] = array();
        }

        if (!isset($contenu[$page][$langue])) {
            $contenu[$page][$langue] = array();
        }

        if (!isset($contenu[$page][$langue][$titre])) {
            $contenu[$page][$langue][$titre] = array();
        }

        $contenu[$page][$langue][$titre] = array(
            'contenu' => texteView($texte),
            'id' => $id
        );
    }

    return $contenu;
}

function texteView($texte) {
    $pattern = '/{{(.*?)}}/s';
    $n = strlen($texte)/8;
    while($n > 0) {
        if (preg_match($pattern, $texte, $matches)) {
            $regExContent = $matches[1];
            $search = '{{'.$regExContent.'}}';
            $replace = regExReplace($regExContent);
            $texte = str_replace($search, $replace, $texte);
        }
    $n--;
    }
    return $texte;
}

function regExReplace($regExContent) {
    $splitContent = explode('-', $regExContent);
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
      $result = [];
    foreach($splitContent as $content) {
        foreach($list as $rep) {
            if($content == $rep) {
                array_push($result, $replace[$rep]);
            }
        }
    }
      
    if($result[0] == '/span') {
        $regExContent = '</span>';
    }
    if($result[0] != '/span' and $result[0] != 'br') {
        $regExContent = '<span class="';
        foreach($result as $res) {
            $regExContent = $regExContent.' '.$res;
        }
        $regExContent = $regExContent.'">';
    }
      return $regExContent;
}

$contenu = content($contents);
$contenuView = contentView($contents);

$sql = "SELECT * FROM `images` ORDER BY id_images ASC";
$requete = $db->query($sql);
$images = $requete->fetchAll();

function images($images) {
    $image = array();

    foreach ($images as $ligne) {
        $page = $ligne['images_page'];
        $titre = $ligne['images_name'];
        $path = $ligne['images_path'];
        $id = $ligne['id_images'];

        if (!isset($image[$page])) {
            $image[$page] = array();
        }

        if (!isset($image[$page][$titre])) {
            $image[$page][$titre] = array();
        }

        $image[$page][$titre] = array(
            'image' => $path,
            'id' => $id
        );
    }

    return $image;
}

$images = images($images);


$sql = "SELECT * FROM `prices` ORDER BY `id_prices` ASC";
$requete = $db->query($sql);
$prices = $requete->fetchAll();

function prices($donnees) {
    $prices = array();

    foreach ($donnees as $ligne) {
        $row = $ligne['prices_row'];
        $col = $ligne['prices_col'];
        $price = $ligne['prices_price'];
        $id = $ligne['id_prices'];

        if (!isset($prices[$row])) {
            $prices[$row] = array();
        }

        if (!isset($prices[$row][$col])) {
            $prices[$row][$col] = array();
        }

        $prices[$row][$col]= array(
            'prices' => $price,
            'id' => $id
        );
    }

    return $prices;
}

$pricesTab = prices($prices);

?>