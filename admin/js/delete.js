function effacerCustomers(id) {
    event.preventDefault(); // Annule le comportement par défaut du lien ou du formulaire
    // Affichage de la pop-up de confirmation
    if (window.confirm('Êtes-vous sûr de vouloir supprimer la ligne ' + id + ' ?')) {
        // Renvoi vers un fichier si confirmation
        window.location.href = '/admin/tables/customers.php?action=delete&id=' + id;
    }
}

function effacerUsers(id) {
    event.preventDefault(); // Annule le comportement par défaut du lien ou du formulaire
    // Affichage de la pop-up de confirmation
    if (window.confirm('Êtes-vous sûr de vouloir supprimer la ligne ' + id + ' ?')) {
        // Renvoi vers un fichier si confirmation
        window.location.href = '/admin/tables/users.php?action=delete&id=' + id;
    }
}
