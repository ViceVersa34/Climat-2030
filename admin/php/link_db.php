<?php

//constante d'environnement
if ($_SERVER['SERVER_NAME'] == 'climat-2030.org') {
    define("DBHOST", "bgooodiclimat.mysql.db");
    define("DBUSER", "bgooodiclimat");
    define("DBPASS", "************");
    define("DBNAME", "bgooodiclimat");
}

if ($_SERVER['SERVER_NAME'] == 'climat-2030') {
    define("DBHOST", "localhost");
    define("DBUSER", "root");
    define("DBPASS", "");
    define("DBNAME", "climat-2030");
}

//DSN de connection
$dsn = "mysql:dbname=".DBNAME.";host=".DBHOST;

//On se connecte à la base de données
try{
        //On instancie PDO
    $db = new PDO($dsn, DBUSER, DBPASS);

    //echo "On est connectés";

        //On s'assure d'envoyer les données en utf8
    $db->exec("SET NAMES utf8");

        //On défini le mode de fetch par default
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    die($e->getMessage());
}

?>
