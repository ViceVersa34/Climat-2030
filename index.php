<?php

// Inclure le fichier de configuration
include 'configuration.php';

// Récupérer le fichier correspondant à l'URL
$file = getFileFromUrl();

// Inclure le fichier récupéré
include $file;
