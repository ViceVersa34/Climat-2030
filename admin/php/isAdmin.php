<?php

// Variable pour déterminer si l'utilisateur est un administrateur (par défaut, 0 = non administrateur)
$isAdmin = 0;

// Vérification si la variable de session est définie et si la clé 'isAdmin' existe
if(!empty($_SESSION)) {
    if (array_key_exists('isAdmin', $_SESSION)) {
        // Vérification si la valeur de 'isAdmin' est égale à 1 (administrateur)
        if($_SESSION['isAdmin'] == 1) {
            // Si oui, mettre la variable $isAdmin à 1 pour indiquer que l'utilisateur est un administrateur
            $isAdmin = 1;
        }
    }
}

// Vérification si l'utilisateur n'est pas un administrateur
if($isAdmin == 0) {
    // Redirection vers la page de connexion pour les administrateurs
    header("Refresh: 0;url=/admin/login.php");
    // Arrêt de l'exécution du script
    die();
}
