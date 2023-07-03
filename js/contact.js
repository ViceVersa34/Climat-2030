function afficherChamps() {
    // Récupération des éléments nécessaires à la fonction
    var choix = document.getElementById("choix");
    var choixDevisSelect = document.getElementById("devisSelect");
    var champsQuestion = document.getElementById("champsQuestion");
    var champsDevis = document.getElementById("champsDevis");
    var champsNbEleve = document.getElementById("champsNbEleve");
    var ChampsPrix = document.getElementById("ChampsPrix");
    var prixEstime = document.getElementById("prixEstime");

    if (choix.value === "question") {
        // Affichage de 'Question'
        champsQuestion.style.display = "block";
        champsDevis.style.display = "none";
        champsNbEleve.style.display = "none";
        ChampsPrix.style.display = "none";
        prixEstime.style.display = "none";
    } else if (choix.value === "devis") {
        // Affichage de 'Devis', 'nbEeve', 'prix' et 'prixEstime'
        champsQuestion.style.display = "none";
        champsDevis.style.display = "block";
        champsNbEleve.style.display = "block";
        ChampsPrix.style.display = "block";
        prixEstime.style.display = "block";
    } else {
        // Masquage de tous les éléments
        champsQuestion.style.display = "none";
        champsDevis.style.display = "none";
        champsNbEleve.style.display = "none";
        ChampsPrix.style.display = "none";
        prixEstime.style.display = "none";
    }
}

function compterCaracteres() {
    // Récupération des éléments nécessaires à la fonction
    var message = document.getElementById("message");
    var compteur = document.getElementById("compteur");
    var nombreCaracteres = message.value.length;

    // Affiche la nombre de caractères
    compteur.textContent = nombreCaracteres + "/500 caractères";
}

// Création du tableau vide
var TAB = '';

// Remplis le tableau
function setTab(tab) {
    TAB = tab;
}

// Retourne le prix en fonction du nombre d'élève et du prix du cours
function returnPrix(tab, nbEleveValue, prixValue) {
    estimation = 0;
    if(nbEleveValue != '' && prixValue != '') {
        if(nbEleveValue <= 100) {
            if(prixValue <= 50) {
                estimation = tab[2][2];
            } else if(prixValue > 50 && prixValue <= 100) {
                estimation = tab[3][2];
            } else if(prixValue > 100 && prixValue <= 200) {
                estimation = tab[4][2];
            } else if(prixValue > 200 && prixValue <= 250) {
                estimation = tab[5][2];
            } else if(prixValue > 250 && prixValue <= 300) {
                estimation = tab[6][2];
            } else if(prixValue > 300 && prixValue <= 350) {
                estimation = tab[7][2];
            } else if(prixValue > 350 && prixValue <= 400) {
                estimation = tab[8][2];
            } else if(prixValue > 400) {
                estimation = tab[9][2];
            }
        } else if (nbEleveValue > 100 && nbEleveValue <= 250) {
            if(prixValue <= 50) {
                estimation = tab[2][3];
            } else if(prixValue > 50 && prixValue <= 100) {
                estimation = tab[3][3];
            } else if(prixValue > 100 && prixValue <= 200) {
                estimation = tab[4][3];
            } else if(prixValue > 200 && prixValue <= 250) {
                estimation = tab[5][3];
            } else if(prixValue > 250 && prixValue <= 300) {
                estimation = tab[6][3];
            } else if(prixValue > 300 && prixValue <= 350) {
                estimation = tab[7][3];
            } else if(prixValue > 350 && prixValue <= 400) {
                estimation = tab[8][3];
            } else if(prixValue > 400) {
                estimation = tab[9][3];
            }
        } else if (nbEleveValue > 250 && nbEleveValue <= 500) {
            if(prixValue <= 50) {
                estimation = tab[2][4];
            } else if(prixValue > 50 && prixValue <= 100) {
                estimation = tab[3][4];
            } else if(prixValue > 100 && prixValue <= 200) {
                estimation = tab[4][4];
            } else if(prixValue > 200 && prixValue <= 250) {
                estimation = tab[5][4];
            } else if(prixValue > 250 && prixValue <= 300) {
                estimation = tab[6][4];
            } else if(prixValue > 300 && prixValue <= 350) {
                estimation = tab[7][4];
            } else if(prixValue > 350 && prixValue <= 400) {
                estimation = tab[8][4];
            } else if(prixValue > 400) {
                estimation = tab[9][4];
            }
        } else if (nbEleveValue > 500 && nbEleveValue <= 1000) {
            if(prixValue <= 50) {
                estimation = tab[2][5];
            } else if(prixValue > 50 && prixValue <= 100) {
                estimation = tab[3][5];
            } else if(prixValue > 100 && prixValue <= 200) {
                estimation = tab[4][5];
            } else if(prixValue > 200 && prixValue <= 250) {
                estimation = tab[5][5];
            } else if(prixValue > 250 && prixValue <= 300) {
                estimation = tab[6][5];
            } else if(prixValue > 300 && prixValue <= 350) {
                estimation = tab[7][5];
            } else if(prixValue > 350 && prixValue <= 400) {
                estimation = tab[8][5];
            } else if(prixValue > 400) {
                estimation = tab[9][5];
            }
        } else if (nbEleveValue > 1000 && nbEleveValue <= 2000) {
            if(prixValue <= 50) {
                estimation = tab[2][6];
            } else if(prixValue > 50 && prixValue <= 100) {
                estimation = tab[3][6];
            } else if(prixValue > 100 && prixValue <= 200) {
                estimation = tab[4][6];
            } else if(prixValue > 200 && prixValue <= 250) {
                estimation = tab[5][6];
            } else if(prixValue > 250 && prixValue <= 300) {
                estimation = tab[6][6];
            } else if(prixValue > 300 && prixValue <= 350) {
                estimation = tab[7][6];
            } else if(prixValue > 350 && prixValue <= 400) {
                estimation = tab[8][6];
            } else if(prixValue > 400) {
                estimation = tab[9][6];
            }
        } else if (nbEleveValue > 2000 && nbEleveValue <= 3000) {
            if(prixValue <= 50) {
                estimation = tab[2][7];
            } else if(prixValue > 50 && prixValue <= 100) {
                estimation = tab[3][7];
            } else if(prixValue > 100 && prixValue <= 200) {
                estimation = tab[4][7];
            } else if(prixValue > 200 && prixValue <= 250) {
                estimation = tab[5][7];
            } else if(prixValue > 250 && prixValue <= 300) {
                estimation = tab[6][7];
            } else if(prixValue > 300 && prixValue <= 350) {
                estimation = tab[7][7];
            } else if(prixValue > 350 && prixValue <= 400) {
                estimation = tab[8][7];
            } else if(prixValue > 400) {
                estimation = tab[9][7];
            }
        } else if (nbEleveValue > 3000 && nbEleveValue <= 4000) {
            if(prixValue <= 50) {
                estimation = tab[2][8];
            } else if(prixValue > 50 && prixValue <= 100) {
                estimation = tab[3][8];
            } else if(prixValue > 100 && prixValue <= 200) {
                estimation = tab[4][8];
            } else if(prixValue > 200 && prixValue <= 250) {
                estimation = tab[5][8];
            } else if(prixValue > 250 && prixValue <= 300) {
                estimation = tab[6][8];
            } else if(prixValue > 300 && prixValue <= 350) {
                estimation = tab[7][8];
            } else if(prixValue > 350 && prixValue <= 400) {
                estimation = tab[8][8];
            } else if(prixValue > 400) {
                estimation = tab[9][8];
            }
        } else if (nbEleveValue > 4000 && nbEleveValue <= 5000) {
            if(prixValue <= 50) {
                estimation = tab[2][9];
            } else if(prixValue > 50 && prixValue <= 100) {
                estimation = tab[3][9];
            } else if(prixValue > 100 && prixValue <= 200) {
                estimation = tab[4][9];
            } else if(prixValue > 200 && prixValue <= 250) {
                estimation = tab[5][9];
            } else if(prixValue > 250 && prixValue <= 300) {
                estimation = tab[6][9];
            } else if(prixValue > 300 && prixValue <= 350) {
                estimation = tab[7][9];
            } else if(prixValue > 350 && prixValue <= 400) {
                estimation = tab[8][9];
            } else if(prixValue > 400) {
                estimation = tab[9][9];
            }
        } else if (nbEleveValue > 5000 && nbEleveValue <= 6000) {
            if(prixValue <= 50) {
                estimation = tab[2][10];
            } else if(prixValue > 50 && prixValue <= 100) {
                estimation = tab[3][10];
            } else if(prixValue > 100 && prixValue <= 200) {
                estimation = tab[4][10];
            } else if(prixValue > 200 && prixValue <= 250) {
                estimation = tab[5][10];
            } else if(prixValue > 250 && prixValue <= 300) {
                estimation = tab[6][10];
            } else if(prixValue > 300 && prixValue <= 350) {
                estimation = tab[7][10];
            } else if(prixValue > 350 && prixValue <= 400) {
                estimation = tab[8][10];
            } else if(prixValue > 400) {
                estimation = tab[9][10];
            }
        } else if (nbEleveValue > 6000 && nbEleveValue <= 7000) {
            if(prixValue <= 50) {
                estimation = tab[2][11];
            } else if(prixValue > 50 && prixValue <= 100) {
                estimation = tab[3][11];
            } else if(prixValue > 100 && prixValue <= 200) {
                estimation = tab[4][11];
            } else if(prixValue > 200 && prixValue <= 250) {
                estimation = tab[5][11];
            } else if(prixValue > 250 && prixValue <= 300) {
                estimation = tab[6][11];
            } else if(prixValue > 300 && prixValue <= 350) {
                estimation = tab[7][11];
            } else if(prixValue > 350 && prixValue <= 400) {
                estimation = tab[8][11];
            } else if(prixValue > 400) {
                estimation = tab[9][11];
            }
        } else if (nbEleveValue > 7000 && nbEleveValue <= 8000) {
            if(prixValue <= 50) {
                estimation = tab[2][12];
            } else if(prixValue > 50 && prixValue <= 100) {
                estimation = tab[3][12];
            } else if(prixValue > 100 && prixValue <= 200) {
                estimation = tab[4][12];
            } else if(prixValue > 200 && prixValue <= 250) {
                estimation = tab[5][12];
            } else if(prixValue > 250 && prixValue <= 300) {
                estimation = tab[6][12];
            } else if(prixValue > 300 && prixValue <= 350) {
                estimation = tab[7][12];
            } else if(prixValue > 350 && prixValue <= 400) {
                estimation = tab[8][12];
            } else if(prixValue > 400) {
                estimation = tab[9][12];
            }
        } else if (nbEleveValue > 8000 && nbEleveValue <= 9000) {
            if(prixValue <= 50) {
                estimation = tab[2][13];
            } else if(prixValue > 50 && prixValue <= 100) {
                estimation = tab[3][13];
            } else if(prixValue > 100 && prixValue <= 200) {
                estimation = tab[4][13];
            } else if(prixValue > 200 && prixValue <= 250) {
                estimation = tab[5][13];
            } else if(prixValue > 250 && prixValue <= 300) {
                estimation = tab[6][13];
            } else if(prixValue > 300 && prixValue <= 350) {
                estimation = tab[7][13];
            } else if(prixValue > 350 && prixValue <= 400) {
                estimation = tab[8][13];
            } else if(prixValue > 400) {
                estimation = tab[9][13];
            }
        } else if (nbEleveValue > 9000 && nbEleveValue <= 10000) {
            if(prixValue <= 50) {
                estimation = tab[2][14];
            } else if(prixValue > 50 && prixValue <= 100) {
                estimation = tab[3][14];
            } else if(prixValue > 100 && prixValue <= 200) {
                estimation = tab[4][14];
            } else if(prixValue > 200 && prixValue <= 250) {
                estimation = tab[5][14];
            } else if(prixValue > 250 && prixValue <= 300) {
                estimation = tab[6][14];
            } else if(prixValue > 300 && prixValue <= 350) {
                estimation = tab[7][14];
            } else if(prixValue > 350 && prixValue <= 400) {
                estimation = tab[8][14];
            } else if(prixValue > 400) {
                estimation = tab[9][14];
            }
        } else if (nbEleveValue > 10000) {
            if(prixValue <= 50) {
                estimation = tab[2][15];
            } else if(prixValue > 50 && prixValue <= 100) {
                estimation = tab[3][15];
            } else if(prixValue > 100 && prixValue <= 200) {
                estimation = tab[4][15];
            } else if(prixValue > 200  && prixValue <= 250) {
                estimation = tab[5][15];
            } else if(prixValue > 250 && prixValue <= 300) {
                estimation = tab[6][15];
            } else if(prixValue > 300 && prixValue <= 350) {
                estimation = tab[7][15];
            } else if(prixValue > 350 && prixValue <= 400) {
                estimation = tab[8][15];
            } else if(prixValue > 400) {
                estimation = tab[9][15];
            }
        }
    }
    return estimation;
}

function estimationPrix() {
    // Récupération des éléments nécessaires à la fonction
    var nbEleve = document.getElementById("nbEleve");
    var prix = document.getElementById("prix");
    var prixEstime = document.getElementById("prixEstime");
    var nbEleveValue = nbEleve.value
    var prixValue = prix.value
    var tab = TAB;
    var finalEstimation = 0;

    // Récupération du prix
    returnPrix(tab, nbEleveValue, prixValue);

    // Calcul de total par mois + arrondi
    finalEstimation = Math.round(estimation['prices'] * nbEleveValue / 12 * 100) / 100;
    if(isNaN(finalEstimation)) {
        // Mise a 0 si la valeur = NaN
        finalEstimation = 0;
    }

    // Affichage du prix
    prixEstime.textContent = 'Estimation : ' + finalEstimation + "€ par abonnement par mois la 1ère année";
}

function estimationPrixEn() {
    // Récupération des éléments nécessaires à la fonction
    var nbEleve = document.getElementById("nbEleve");
    var prix = document.getElementById("prix");
    var prixEstime = document.getElementById("prixEstime");
    var nbEleveValue = nbEleve.value
    var prixValue = prix.value
    var tab = TAB;
    var finalEstimation = 0;

    // Récupération du prix
    returnPrix(tab, nbEleveValue, prixValue);

    // Calcul de total par mois + arrondi
    finalEstimation = Math.round(estimation['prices'] * nbEleveValue / 12 * 100) / 100;
    if(isNaN(finalEstimation)) {
        // Mise a 0 si la valeur = NaN
        finalEstimation = 0;
    }

    // Affichage du prix
    prixEstime.textContent = 'Estimate: ' + finalEstimation + "€ per subscription per month the 1st year";
}