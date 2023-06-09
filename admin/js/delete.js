function effacerCustomers(id) {
    event.preventDefault(); // Annule le comportement par défaut du lien ou du formulaire
    if (window.confirm('Êtes-vous sûr de vouloir supprimer la ligne ' + id + ' ?')) {
        window.location.href = '/admin/tables/customers.php?action=delete&id=' + id;
    }
}

function effacerUsers(id) {
    event.preventDefault(); // Annule le comportement par défaut du lien ou du formulaire
    if (window.confirm('Êtes-vous sûr de vouloir supprimer la ligne ' + id + ' ?')) {
        window.location.href = '/admin/tables/users.php?action=delete&id=' + id;
    }
}
