<?php

$i = -1;
foreach (str_split($_SERVER['PHP_SELF']) as $chemin) {
    if ($chemin == '/') {
        $i += 1;
    }   
}
$path = str_repeat('../', $i) . 'admin/php/link_db.php';

if ($_SERVER['PHP_SELF'] != '/admin/login.php') {
    include($path); 
}

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
      $list = ['y', 'o', 't1', 't2', 'g', 'p', '/'];
      $replace = [
        'y' => 'yello-txt',
        'o' => 'orange-txt',
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

?>