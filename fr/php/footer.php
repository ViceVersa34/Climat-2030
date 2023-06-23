<?php
    CONST mois = [
        '01' => "janvier",
        '02' => "février",
        '03' => "mars",
        '04' => "avril",
        '05' => "mai",
        '06' => "juin",
        '07' => "juillet",
        '08' => "août",
        '09' => "septembre",
        '10' => "octobre",
        '11' => "novembre",
        '12' => "décembre"
    ];

    $jour = date('d');
    $moi = mois[date('m')];
    $annee = date('Y');
    $date = $jour.' '.$moi.' '.$annee;

    $i = -1;
    foreach (str_split($_SERVER['PHP_SELF']) as $chemin) {
        if ($chemin == '/') {
            $i += 1;
        }   
    }
    // $path = str_repeat('../', $i) . 'admin/php/link_db.php';

    // if ($_SERVER['PHP_SELF'] != '/admin/login.php') {
    //     include($path); 
    // }
    
    $sql = "SELECT COUNT(*) AS `compteur` FROM `customers`";
    $requete = $db->query($sql);
    $customers = $requete->fetchAll();
?>

<div class="footer">
    <div class="top">
        <div class="left">
            <div class="lien-utile">
                <div class="lien-utile-item">Climat-2030</div>
                <div class="lien-utile-item"><a href="/fr/en-savoir-plus.php">En savoir plus sur Climat-2030</a></div>
                <div class="lien-utile-item"><a href="https://www.instagram.com/climat.2030/" target="blank">Instagram</a></div>
                <div class="lien-utile-item"><a href="/fr/contact.php">Contact</a></div>
                <div class="lien-utile-item"><a href="/admin">Admin</a></div>
            </div>
        </div>
        <div class="center">
            <img src="<?php echo $images['footer']['illustration 1']['image']; ?>" alt="illustration 'we can do it'">
            <div class="global-counter">
                <a href="/fr/eco-sensibilise.php">
                    <p>
                    <?php echo html_entity_decode($contenu['footer']['fr']['texte compteur 1']['contenu']).' '.$date; ?> :
                    <span class="counter orange-txt font-weight"> <?php echo $customers[0]['compteur']; ?> </span>
                    <?php echo ' '.html_entity_decode($contenu['footer']['fr']['texte compteur 2']['contenu']); ?>
                    </p>
                </a>
            </div>
        </div>
        <div class="right">
            <div class="label">
                <div class="txt orange-txt size-txt2 txt-g font-family">Label</div>
                <img src="<?php echo $images['footer']['label']['image']; ?>" alt="logo génération égalité">
            </div>
        </div>
    </div>
    <div class="bottom">
        <div class="line"></div>
        <div class="legal">
            <a href="/fr/CGU.php"><?php echo html_entity_decode($contenu['footer']['fr']['mention']['contenu']); ?></a>
        </div>
    </div>
</div>