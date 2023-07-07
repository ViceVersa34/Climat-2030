<?php

// Mapping des URL vers les fichiers correspondants
// Si une URL est reçue, elle sera utilisée pour récupérer le fichier correspondant
// Si aucune URL correspondante n'est trouvée, le fichier 'fr/404.php' sera utilisé par défaut
const MAPPING = [
    '' => 'fr/index.php',
    'club-pedagogique' => 'fr/club-pedagogique.php',
    'club-social' => 'fr/club-climat.php',
    'club-foret' => 'fr/club-foret.php',
    'en-savoir-plus' => 'fr/en-savoir-plus.php',
    'contact' => 'fr/contact.php',
    'eco-sensibilise' => 'fr/eco-sensibilise.php',
    'CGU' => 'fr/CGU.php',
    '404' => 'fr/404.php',

    'home' => 'en/index.php',
    'the-pedagogical-club' => 'en/the-pedagogical-club.php',
    'the-social-club' => 'en/the-climate-club.php',
    'forest-club' => 'en/forest-club.php',
    'more-about-climat-2030' => 'en/more-about-climat-2030.php',
    'contact-us' => 'en/contact.php',
    'en-CGU' => 'en/CGU.php',
    'eco-aware' => 'en/eco-aware.php',
    'en-404' => 'en/404.php',
];

// Fonction pour récupérer le fichier correspondant à une URL
// Si aucune URL n'est spécifiée ou si l'URL n'est pas présente dans le mapping, le fichier 'fr/404.php' sera utilisé
function getFileFromUrl(){
    $url = retrieveVar('url', $_GET);
    if(is_bool($url)){
        $url = '';
    }
    if(!array_key_exists($url, MAPPING)){
        $url = '404';
    }
    return MAPPING[$url];
}

// Fonction pour récupérer une variable à partir d'un tableau
// Si la variable existe et n'est pas vide, elle est renvoyée
// Sinon, si la variable existe mais est vide, la valeur TRUE est renvoyée
// Si la variable n'existe pas, la valeur FALSE est renvoyée
function retrieveVar($name, $tab){
    if (isset($tab[$name])) {
        if (! empty($tab[$name])) {
            return $tab[$name];
        }
        return TRUE;
    }
    return FALSE;
}

?>