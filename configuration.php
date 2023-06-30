<?php
define('VAR_LOGIN', 'login');
define('VAR_PASSWORD', 'password');

const MAPPING = [
    '' => 'fr/index.php',
    'club-pedagogique' => 'fr/club-pedagogique.php',
    'club-social' => 'fr/club-social.php',
    'club-foret' => 'fr/club-foret.php',
    'en-savoir-plus' => 'fr/en-savoir-plus.php',
    'contact' => 'fr/contact.php',
    'eco-sensibilise' => 'fr/eco-sensibilise.php',
    'CGU' => 'fr/CGU.php',
    '404' => 'fr/404.php',

    'home' => 'en/index.php',
    'the-pedagogical-club' => 'en/the-pedagogical-club.php',
    'the-social-club' => 'en/the-social-club.php',
    'forest-club' => 'en/forest-club.php',
    'more-about-climat-2030' => 'en/more-about-climat-2030.php',
    'contact-us' => 'en/contact.php',
    'en-CGU' => 'en/CGU.php',
    'eco-aware' => 'en/eco-aware.php',
    'en-404' => 'en/404.php',
];

function getFileFromUrl(){
    $url = getVar('url');
    if(is_bool($url)){
        $url = '';
    }
    if(!array_key_exists($url, MAPPING)){
        $url = '404';
    }
    return MAPPING[$url];
}

function getVar($name) {
    return retrieveVar($name, $_GET);
}
function postVar($name) {
    return retrieveVar($name, $_POST);
}
function sessionVar($name) {
    return retrieveVar($name, $_SESSION);
}
function retrieveVar($name, $tab){
    if (isset($tab[$name])) {
        if (! empty($tab[$name])) {
            return $tab[$name];
        }
        return TRUE;
    }
    return FALSE;
}