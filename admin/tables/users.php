<?php
    session_start();
    include('../php/link_db.php');
    include('../php/isAdmin.php');

    $sql = "SELECT * FROM `users` ORDER BY `id_users` ASC";

    if(array_key_exists('action', $_GET)) {
        if($_GET['action'] == 'delete' and array_key_exists('id', $_GET)) {
            if($_GET['id'] == 'all') {
                $sql = "TRUNCATE `climat-2030`.`users`";
                $requete = $db->query($sql);
                $users = $requete->fetchAll();
                header("Refresh: 0;url=/admin/tables/users.php");
            } else {
                $id = $_GET['id'];
                $sql = "DELETE FROM `users` WHERE id_users = $id";
                $requete = $db->query($sql);
                $users = $requete->fetchAll();
                header("Refresh: 0;url=/admin/tables/users.php");
            }
        }
        
        if($_GET['action'] == 'add' and 
        array_key_exists('users_name', $_GET) and
        array_key_exists('users_surname', $_GET) and
        array_key_exists('users_mail', $_GET) and
        array_key_exists('users_password1', $_GET) and
        array_key_exists('users_password2', $_GET) and
        array_key_exists('users_isAdmin', $_GET)) {
            
            $users_name = htmlspecialchars(strtolower($_GET['users_name']));
            $users_surname = htmlspecialchars(strtolower($_GET['users_surname']));
            $users_mail = htmlspecialchars(strtolower($_GET['users_mail']));
            $users_password1 = htmlspecialchars(strtolower($_GET['users_password1']));
            $users_password2 = htmlspecialchars(strtolower($_GET['users_password2']));
            $users_isAdmin = htmlspecialchars((int)$_GET['users_isAdmin']);

            if($users_password1 == $users_password2) {
                $users_password = password_hash(htmlspecialchars(strtolower($users_password1)), PASSWORD_DEFAULT);
                $sql = "INSERT INTO `users`(`users_name`, `users_surname`, `users_mail`, `users_password`, `users_isAdmin`) 
                VALUES ('$users_name', '$users_surname', '$users_mail', '$users_password', '$users_isAdmin')";
                $requete = $db->query($sql);
                $users = $requete->fetchAll();
                $sql = "SELECT * FROM `users` ORDER BY `id_users` ASC";
                header("Refresh: 0;url=/admin/tables/users.php");
            }
            header("Refresh: 0;url=/admin/tables/users.php?error=0");
        }
        
        if($_GET['action'] == 'update' and 
        array_key_exists('id_users', $_GET) and
        array_key_exists('users_name', $_GET) and
        array_key_exists('users_surname', $_GET) and
        array_key_exists('users_mail', $_GET) and
        array_key_exists('users_isAdmin', $_GET)) {
            
            $id_users = htmlspecialchars(strtolower($_GET['id_users']));
            $users_name = htmlspecialchars(strtolower($_GET['users_name']));
            $users_surname = htmlspecialchars(strtolower($_GET['users_surname']));
            $users_mail = htmlspecialchars(strtolower($_GET['users_mail']));
            $users_isAdmin = htmlspecialchars((int)$_GET['users_isAdmin']);

            $sql = "UPDATE `users` 
            SET `users_name`='$users_name',`users_surname`='$users_surname',`users_mail`='$users_mail',
            `users_isAdmin`='$users_isAdmin'
            WHERE id_users='$id_users'";
            $requete = $db->query($sql);
            $users = $requete->fetchAll();
            $sql = "SELECT * FROM `users` ORDER BY `id_users` ASC";

            header("Refresh: 0;url=/admin/tables/users.php");
        }

        if($_GET['action'] == 'sortSearch' and 
        array_key_exists('sort', $_GET) and
        array_key_exists('order', $_GET) and
        array_key_exists('search', $_GET) and
        array_key_exists('query', $_GET)) {
            if(!empty($_GET['sort']) and !empty($_GET['order']) and empty($_GET['search']) and empty($_GET['query'])) {
                $sort = strtolower($_GET['sort']);
                $order = strtolower($_GET['order']);
                
                $sql = "SELECT * FROM `users` ORDER BY $sort $order";
            }

            if(empty($_GET['sort']) and empty($_GET['order']) and !empty($_GET['search']) and !empty($_GET['query'])) {
                $search = strtolower($_GET['search']);
                $query = strtolower($_GET['query']);
                
                $sql = "SELECT * FROM `users` WHERE $search='$query'";
            }
            
            if(!empty($_GET['sort']) and !empty($_GET['order']) and !empty($_GET['search']) and !empty($_GET['query'])) {
                $sort = strtolower($_GET['sort']);
                $order = strtolower($_GET['order']);
                $search = strtolower($_GET['search']);
                $query = strtolower($_GET['query']);

                $sql = "SELECT * FROM `users` WHERE $search=$query ORDER BY $sort $order";
            }
            
        }
        
    }

    $requete = $db->query($sql);
    $users = $requete->fetchAll();
    
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('../php/head.php'); ?>
    <title>Document</title>
    <link rel="stylesheet" href="/admin/css/tables.css">
    <link rel="stylesheet" href="/admin/css/users.css">
    <script src="/admin/js/delete.js"></script>
    <script src="/admin/js/add.js"></script>
    <script src="/admin/js/update.js"></script>

</head>
<body>
    <header>
        <?php include('../php/header.php'); ?>
    </header>
    
    <main>        
        <div class="global-title">
            <div class="title">Users</div>
            <div class="info-icon" id="infoIcon">🛈</div>
            <div class="info" id="info">La table 'Users' contient les informations liées aux utilisateurs du site (qui se connectes).</div>
        </div>

        <script src="/admin/js/info.js"></script>

        <div class="boutons">
            <a href="" onclick="ajouter();" class="bouton">Ajouter une ligne</a>
            <a href="" onclick="effacerUsers('all');" class="bouton">Tout effacer</a>
            <a href="" onclick="filtres();" class="bouton">Rechercher et Trier</a>
            <?php
                if(!empty(strpos($_SERVER['REQUEST_URI'], '?action=sortSearch'))) {
                    echo '<a href="/admin/tables/users" class="bouton" id="reset">Réinitialiser Trie / Recherche</a>';
                }
            ?>
        </div>
        <div class="filtres invisible" id="filtres">
            <form action="/admin/tables/users.php" method="get">
                <input type="hidden" name="action" value="sortSearch">
                    <div class="search">
                        <label for="search">Recherche :</label>
                        <select id="search" name="search" onchange="afficherSearch()">
                            <option value="">-- Sélectionnez --</option>
                            <option value="id_users">id</option>
                            <option value="users_name">Nom</option>
                            <option value="users_surname">Prénom</option>
                            <option value="users_mail">Mail</option>
                            <option value="users_password">Mot de passe</option>
                            <option value="users_isAdmin">isAdmin</option>
                        </select>
                        <div id="globalQuery">
                            <label for="query">Recherche :</label>
                            <input type="text" name="query" id="query">
                        </div>
                    </div>
                    <div class="sort">
                        <label for="sort">Trie :</label>
                        <select id="sort" name="sort" onchange="afficherSort()">
                            <option value="">-- Sélectionnez --</option>
                            <option value="id_users">id</option>
                            <option value="users_name">Nom</option>
                            <option value="users_surname">Prénom</option>
                            <option value="users_mail">Mail</option>
                            <option value="users_password">Mot de passe</option>
                            <option value="users_isAdmin">isAdmin</option>
                        </select>
                        <div id="radio0">
                            <input type="radio" id="initial" name="order" value="" checked>
                            <label for="initial"></label>
                        </div>
                        <div id="radio1">
                            <input type="radio" id="asc" name="order" value="asc">
                            <label for="asc">Croissant</label>
                        </div>
                        <div id="radio2">
                            <input type="radio" id="desc" name="order" value="desc">
                            <label for="desc">Décroissant</label>
                        </div>
                    </div>
                <input type="submit" value="Valider">
            </form>
            <script src="/admin/js/filtres.js"></script>
        </div>
        <div class="table">
            <table>
                <tr class="invisible" id="add">
                    <form action="/admin/tables/users.php" class="form-add">
                        <input type="hidden" name="action" value="add">
                        <td>  </td>
                        <td> <input type="text" name="users_name" placeholder="Nom" class="input-add"> </td>
                        <td> <input type="text" name="users_surname" placeholder="Prénom" class="input-add"> </td>
                        <td> <input type="text" name="users_mail" placeholder="Mail" class="input-add"> </td>
                        <td class="password"> 
                            <div>
                                <label for="password1">Mot de passe : </label>
                                <input type="password" name="users_password1" placeholder="Password" class="input-add" id="password1">
                            </div>
                            <div>
                                <label for="password2">Verification :</label>
                                <input type="password" name="users_password2" placeholder="Password" class="input-add" id="password2">
                            </div>
                        </td>
                        <td> <input type="text" name="users_isAdmin" placeholder="isAdmin" class="input-add"> </td>
                        <td> <input type="submit" value="Ajouter" class="input-add"></td>
                    </form>
                </tr>
                <tr>
                    <th> id </td>
                    <th> Nom </td>
                    <th> Prénom </td>
                    <th> Mail </td>
                    <th> Password </td>
                    <th> isAdmin </td>
                    <th> Actions </th>
                </tr>
                <?php foreach ($users as $user) { ?>
                <tr>
                    <td> <?php echo $user['id_users']; ?> </td>
                    <td> <?php echo strtoupper($user['users_name']); ?> </td>
                    <td> <?php echo ucfirst($user['users_surname']); ?> </td>
                    <td> <?php echo $user['users_mail']; ?> </td>
                    <td> <?php echo $user['users_password']; ?> </td>
                    <td> <?php echo $user['users_isAdmin']; ?> </td>
                    <td class="table-center"> 
                        <a href="" onclick="effacerUsers(<?php echo $user['id_users']; ?>);"><img src="/admin/img/effacer.svg" alt="logo effacer"></a>
                        <a href="" onclick="update(<?php echo $user['id_users']; ?>);"><img src="/admin/img/modifier.svg" alt="logo modifier"></a>
                    </td>
                </tr>
                <tr class="invisible" id="<?php echo $user['id_users']; ?>">
                    <form action="/admin/tables/users.php" class="form-update">
                        <input type="hidden" name="action" value="update">
                        <td> <input type="hidden" name="id_users" value="<?php echo $user['id_users']; ?>"> </td>

                        <td> <input type="text" name="users_name" value="<?php echo strtoupper($user['users_name']); ?>" class="input-update"> </td>
                        <td> <input type="text" name="users_surname" value="<?php echo ucfirst($user['users_surname']); ?>" class="input-update"> </td>
                        <td> <input type="text" name="users_mail" value="<?php echo $user['users_mail']; ?>" class="input-update"> </td>
                        <td> Vous ne pouvez pas modifier votre mot de passe ici. Allez dans '<a href="/admin/my-account">mon compte</a>' </td>
                        <td> <input type="text" name="users_isAdmin" value="<?php echo $user['users_isAdmin']; ?>" class="input-update"> </td>
                        <td> <input type="submit" value="Modifier" class="input-update"></td>
                    </form>
                </tr>
                <?php } ?>
            </table>
        </div>
    </main>
</body>
</html>