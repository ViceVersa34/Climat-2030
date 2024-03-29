<?php
// Définition d'un tableau constant qui associe les mois en format numérique à leurs noms en anglais
const mois = [
    '01' => "January",
    '02' => "February",
    '03' => "March",
    '04' => "April",
    '05' => "May",
    '06' => "June",
    '07' => "July",
    '08' => "August",
    '09' => "September",
    '10' => "October",
    '11' => "November",
    '12' => "December"
];

// Récupération du jour, du mois et de l'année actuels
$jour = date('d');
$moi = mois[date('m')];
$annee = date('Y');

// Création d'une variable $date contenant la date au format "jour mois année"
$date = $jour.' '.$moi.' '.$annee;

// Comptage du nombre total d'enregistrements dans la table "customers"
$sql = "SELECT COUNT(*) AS `compteur` FROM `customers`";
$requete = $db->query($sql);
$customers = $requete->fetchAll();
?>

<div class="footer">
    <div class="top">
        <div class="left">
            <div class="lien-utile">
                <div class="lien-utile-item">Climat-2030</div>
                <div class="lien-utile-item"><a href="/more-about-climat-2030">Learn more about Climat-2030</a></div>
                <div class="lien-utile-item"><a href="https://www.instagram.com/climat.2030/" target="blank">Instagram</a></div>
                <div class="lien-utile-item"><a href="/contact-us">Contact</a></div>
                <div class="lien-utile-item"><a href="/admin">Admin</a></div>
            </div>
        </div>
        <div class="center">
            <img src="<?php echo $images['footer']['illustration 1']['image']; ?>" alt="illustration 'we can do it'">
            <div class="global-counter">
                <a href="/eco-aware">
                    <p>
                        <?php echo $contenu['footer']['en']['texte compteur 1']['contenu'].' '.$date; ?> :
                        <span class="counter orange-txt font-weight"> <?php echo $customers[0]['compteur']; ?> </span>
                        <?php echo ' '.$contenu['footer']['en']['texte compteur 2']['contenu']; ?>
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
            <a href="/en-CGU"><?php echo $contenu['footer']['en']['mention']['contenu']; ?></a>
        </div>
    </div>
</div>
