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
    $mois = mois[date('m')];
    $annee = date('Y');
    $date = $jour.' '.$mois.' '.$annee;
    
    $sql = "SELECT COUNT(*) AS `compteur` FROM `customers`";
    $requete = $db->query($sql);
    $customers = $requete->fetchAll();
?>

<div class="footer">
    <div class="top">
        <div class="left">
            <div class="lien-utile">
                <div class="lien-utile-item">Climat-2030</div>
                <div class="lien-utile-item"><a href="/en-savoir-plus">En savoir plus sur Climat-2030</a></div>
                <div class="lien-utile-item"><a href="https://www.instagram.com/climat.2030/" target="blank">Instagram</a></div>
                <div class="lien-utile-item"><a href="/contact">Contact</a></div>
                <div class="lien-utile-item"><a href="/admin">Admin</a></div>
            </div>
        </div>
        <div class="center">
            <img src="<?php echo $images['footer']['illustration 1']['image']; ?>" alt="illustration 'we can do it'">
            <div class="global-counter">
                <a href="/eco-sensibilise">
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
                <div class="label-img">
                    <img src="<?php echo $images['footer']['label1']['image']; ?>" alt="logo génération égalité">
                    <img src="<?php echo $images['footer']['label2']['image']; ?>" alt="logo génération égalité">
                    <img src="<?php echo $images['footer']['label3']['image']; ?>" alt="logo génération égalité">
                    <img src="<?php echo $images['footer']['label4']['image']; ?>" alt="logo génération égalité">
                </div>
            </div>
        </div>
    </div>
    <div class="bottom">
        <div class="line"></div>
        <div class="legal">
            <a href="/CGU"><?php echo html_entity_decode($contenu['footer']['fr']['mention']['contenu']); ?></a>
        </div>
    </div>
</div>