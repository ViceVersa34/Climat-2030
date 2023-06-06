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
?>

<div class="footer">
    <div class="top">
        <div class="left">
            <div class="lien-utile">
                <div class="lien-utile-item">Climat-2030</div>
                <div class="lien-utile-item"><a href="/en/en-savoir-plus.php">Learn more about Climat-2030</a></div>
                <div class="lien-utile-item"><a href="https://www.instagram.com/climat.2030/" target="blank">Instagram</a></div>
                <div class="lien-utile-item"><a href="https://www.linkedin.com/" target="blank">Linkedin</a></div>
                <div class="lien-utile-item"><a href="/en/contact.php">Contact</a></div>
            </div>
        </div>
        <div class="center">
            <img src="/img/we_can_do_it.png" alt="illustration 'we can do it'">
            <div class="global-counter">
                <p>
                    people impacted as of <?php echo $date ?> :
                    <span class="counter orange-txt font-weight"> 12 </span>
                    eco-aware
                </p>
            </div>
        </div>
        <div class="right">
            <div class="label">
                <div class="txt orange-txt size-txt2 txt-g font-family">Label</div>
                <img src="/img/generation_egalite.svg" alt="logo génération égalité">
            </div>
        </div>
    </div>
    <div class="bottom">
        <div class="line"></div>
        <div class="legal">
            <a href="/en/CGU.php">© Climat-2030 | Estelle Couderc-Doat - 2023</a>
        </div>
    </div>
</div>
