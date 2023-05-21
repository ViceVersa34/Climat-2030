<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('php/head.php'); ?>
    <link rel="stylesheet" href="/css/inscription.css">
    <title>Inscription - Climat-2030</title>
</head>
<body id="body">
    <header>
        <?php include('php/header.php'); ?>
    </header>

    <main>

    <h1 class="top_txt" id="academie-du-climat">L'inscription -<span class="orange-txt size-txt2 font-weight font-family"> Climat-2030</span></h1>

    <div class="inscription">
        <div class="academie-du-climat">
            <h2 class="orange-txt">Académie du climat 2030</h2>
            <div class="tarif-public">
                <div class="desc">
                    <h3>Tarif public</h3>
                    <div class="description">
                        Parcour intégral : 29€ par personne et par mois / 12 mois. <br><br>
                        A- Débutant : 80€/personne. <br><br>
                        B- Intermédiaire : 160€/personne. <br><br>
                        C- Confirmé : 160€/personne.
                    </div>
                </div>
                <a class="bouton-inscription">S'inscrire</a>
            </div>
            <div class="tarif-pro">
                <h3 id="exposition">Tarif Professionnel sur devis</h3>
                <a href="" class="bouton-inscription">Demander un devis</a>
            </div>
        </div>

        <div class="exposition">
            <div class="desc" id="humour">
                <h2 class="orange-txt">Exposition "La grande histoire du climat"</h2>
                <div class="description">Tarif sur devis</div>
            </div>
            <a href="" class="bouton-inscription">Demander un devis</a>
        </div>
        
        <div class="humour">
            <div class="desc">
                <h2 class="orange-txt">Humour "L'émancipation des femmes et le climat"</h2>
                <div class="description">Tarif sur devis</div>
            </div>
            <a href="" class="bouton-inscription">Pré-réservation</a>
        </div>
        
        <div class="social-club">
            <div class="desc">
                <h2 class="orange-txt">Social Club</h2>
                <div class="description">Disponible à l'horizon fin 2023 pour la version Bêta par abonnement annuel : 2,90€/mois/personne.</div>
            </div>
            <a href="" class="bouton-inscription" id="social-club">Pré-réservation</a>
        </div>
    </div>

    <div class="scrollUp">
        <a href="#top"><img src="/img/up-arrow.svg"/></a>
    </div>

    </main>

    <footer>
        <?php include('php/footer.php'); ?>
    </footer>
</body>
</html>