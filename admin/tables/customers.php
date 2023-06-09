<?php
    session_start();
    include('../php/link_db.php');
    include('../php/isAdmin.php');

    $sql = "SELECT * FROM `customers` ORDER BY `id_customers` ASC";

    if(array_key_exists('action', $_GET)) {
        if($_GET['action'] == 'delete' and array_key_exists('id', $_GET)) {
            if($_GET['id'] == 'all') {
                $sql = "TRUNCATE `climat-2030`.`customers`";
                $requete = $db->query($sql);
                $customers = $requete->fetchAll();
                header("Refresh: 0;url=/admin/tables/customers.php");
            } else {
                $id = $_GET['id'];
                $sql = "DELETE FROM `customers` WHERE id_customers = $id";
                $requete = $db->query($sql);
                $customers = $requete->fetchAll();
                header("Refresh: 0;url=/admin/tables/customers.php");
            }
        }
        
        if($_GET['action'] == 'add' and 
        array_key_exists('customers_name', $_GET) and
        array_key_exists('customers_surname', $_GET) and
        array_key_exists('customers_mail', $_GET) and
        array_key_exists('customers_phone', $_GET) and
        array_key_exists('customers_age', $_GET) and
        array_key_exists('customers_status', $_GET) and
        array_key_exists('customers_nationality', $_GET) and
        array_key_exists('customers_organism', $_GET) and
        array_key_exists('customers_country_organism', $_GET) and
        array_key_exists('customers_city_organism', $_GET)) {
            
            $customers_name = htmlspecialchars(strtolower($_GET['customers_name']));
            $customers_surname = htmlspecialchars(strtolower($_GET['customers_surname']));
            $customers_mail = htmlspecialchars(strtolower($_GET['customers_mail']));
            $customers_phone = htmlspecialchars(strtolower($_GET['customers_phone']));
            $customers_age = htmlspecialchars((int)$_GET['customers_age']);
            $customers_status = htmlspecialchars(strtolower($_GET['customers_status']));
            $customers_nationality = htmlspecialchars(strtolower($_GET['customers_nationality']));
            $customers_organism = htmlspecialchars(strtolower($_GET['customers_organism']));
            $customers_country_organism = htmlspecialchars(strtolower($_GET['customers_country_organism']));
            $customers_city_organism = htmlspecialchars(strtolower($_GET['customers_city_organism']));
            
            $sql = "INSERT INTO `customers`(`customers_name`, `customers_surname`, `customers_mail`, `customers_phone`, `customers_age`, `customers_status`, `customers_nationality`, `customers_organism`, `customers_country_organism`, `customers_city_organism`) 
            VALUES ('$customers_name', '$customers_surname', '$customers_mail', '$customers_phone', '$customers_age', '$customers_status', '$customers_nationality', '$customers_organism', '$customers_country_organism', '$customers_city_organism')";
            $requete = $db->query($sql);
            $customers = $requete->fetchAll();
            $sql = "SELECT * FROM `customers` ORDER BY `id_customers` ASC";

            header("Refresh: 0;url=/admin/tables/customers.php");
        }
        
        if($_GET['action'] == 'update' and 
        array_key_exists('id_customers', $_GET) and
        array_key_exists('customers_name', $_GET) and
        array_key_exists('customers_surname', $_GET) and
        array_key_exists('customers_mail', $_GET) and
        array_key_exists('customers_phone', $_GET) and
        array_key_exists('customers_age', $_GET) and
        array_key_exists('customers_status', $_GET) and
        array_key_exists('customers_nationality', $_GET) and
        array_key_exists('customers_organism', $_GET) and
        array_key_exists('customers_country_organism', $_GET) and
        array_key_exists('customers_city_organism', $_GET)) {
            
            $id_customers = htmlspecialchars(strtolower($_GET['id_customers']));
            $customers_name = htmlspecialchars(strtolower($_GET['customers_name']));
            $customers_surname = htmlspecialchars(strtolower($_GET['customers_surname']));
            $customers_mail = htmlspecialchars(strtolower($_GET['customers_mail']));
            $customers_phone = htmlspecialchars(strtolower($_GET['customers_phone']));
            $customers_age = htmlspecialchars((int)$_GET['customers_age']);
            $customers_status = htmlspecialchars(strtolower($_GET['customers_status']));
            $customers_nationality = htmlspecialchars(strtolower($_GET['customers_nationality']));
            $customers_organism = htmlspecialchars(strtolower($_GET['customers_organism']));
            $customers_country_organism = htmlspecialchars(strtolower($_GET['customers_country_organism']));
            $customers_city_organism = htmlspecialchars(strtolower($_GET['customers_city_organism']));
            
            $sql = "UPDATE `customers` 
            SET `customers_name`='$customers_name',`customers_surname`='$customers_surname',`customers_mail`='$customers_mail',
            `customers_phone`='$customers_phone',`customers_age`='$customers_age',`customers_status`='$customers_status',`customers_nationality`='$customers_nationality',
            `customers_organism`='$customers_organism',`customers_country_organism`='$customers_country_organism',`customers_city_organism`='$customers_city_organism' WHERE id_customers='$id_customers'";
            $requete = $db->query($sql);
            $customers = $requete->fetchAll();
            $sql = "SELECT * FROM `customers` ORDER BY `id_customers` ASC";

            header("Refresh: 0;url=/admin/tables/customers.php");
        }

        if($_GET['action'] == 'sortSearch' and 
        array_key_exists('sort', $_GET) and
        array_key_exists('order', $_GET) and
        array_key_exists('search', $_GET) and
        array_key_exists('query', $_GET)) {
            if(!empty($_GET['sort']) and !empty($_GET['order']) and empty($_GET['search']) and empty($_GET['query'])) {
                $sort = strtolower($_GET['sort']);
                $order = strtolower($_GET['order']);
                
                $sql = "SELECT * FROM `customers` ORDER BY $sort $order";
            }

            if(empty($_GET['sort']) and empty($_GET['order']) and !empty($_GET['search']) and !empty($_GET['query'])) {
                $search = strtolower($_GET['search']);
                $query = strtolower($_GET['query']);
                
                $sql = "SELECT * FROM `customers` WHERE $search='$query'";
            }
            
            if(!empty($_GET['sort']) and !empty($_GET['order']) and !empty($_GET['search']) and !empty($_GET['query'])) {
                $sort = strtolower($_GET['sort']);
                $order = strtolower($_GET['order']);
                $search = strtolower($_GET['search']);
                $query = strtolower($_GET['query']);

                $sql = "SELECT * FROM `customers` WHERE $search=$query ORDER BY $sort $order";
            }
            
        }
        
    }
    
    


    $requete = $db->query($sql);
    $customers = $requete->fetchAll();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('../php/head.php'); ?>
    <title>Document</title>
    <link rel="stylesheet" href="/admin/css/tables.css">
    <script src="/admin/js/delete.js"></script>
    <script src="/admin/js/add.js"></script>
</head>
<body>
    <header>
        <?php include('../php/header.php'); ?>
    </header>
    
    <main>        
        <div class="global-title">
            <div class="title">Customers</div>
            <div class="info-icon" id="infoIcon">🛈</div>
            <div class="info" id="info">La table 'Customers' contient les informations liées aux clients.</div>
        </div>

        <script src="/admin/js/info.js"></script>

        <div class="boutons">
            <a href="" onclick="ajouter();" class="bouton">Ajouter une ligne</a>
            <a href="" onclick="effacerCustomers('all');" class="bouton">Tout effacer</a>
            <a href="" class="bouton">Trier</a>
            <a href="" class="bouton">Rechercher</a>
        </div>
        <div class="table">
            <table>
                <tr class="invisible" id="add">
                    <form action="/admin/tables/customers.php" class="form-add">
                        <input type="hidden" name="action" value="add">
                        <td>  </td>
                        <td> <input type="text" name="customers_name" placeholder="Nom" class="input-add"> </td>
                        <td> <input type="text" name="customers_surname" placeholder="Prénom" class="input-add"> </td>
                        <td> <input type="text" name="customers_mail" placeholder="Mail" class="input-add"> </td>
                        <td> <input type="text" name="customers_phone" placeholder="Tel (facultatif)" class="input-add"> </td>
                        <td> <input type="text" name="customers_age" placeholder="Âge" class="input-add"> </td>
                        <td> <input type="text" name="customers_status" placeholder="Statut" class="input-add"> </td>
                        <td> <input type="text" name="customers_nationality" placeholder="Nationalité" class="input-add"> </td>
                        <td> <input type="text" name="customers_organism" placeholder="Organisme" class="input-add"> </td>
                        <td> <input type="text" name="customers_country_organism" placeholder="Pays organisme" class="input-add"> </td>
                        <td> <input type="text" name="customers_city_organism" placeholder="Ville organisme" class="input-add"> </td>
                        <td> <input type="submit" value="Ajouter" class="input-add"></td>
                    </form>
                </tr>
                <tr>
                    <th> id </td>
                    <th> Nom </td>
                    <th> Prénom </td>
                    <th> Mail </td>
                    <th> Téléphone </td>
                    <th> Âge </td>
                    <th> Statut</td>
                    <th> Nationalité </td>
                    <th> Organisme </td>
                    <th> Pays organisme </td>
                    <th> Ville organisme </td>
                    <th> Actions </th>
                </tr>
                <?php foreach ($customers as $customer) { ?>
                <tr>
                    <td> <?php echo $customer['id_customers']; ?> </td>
                    <td> <?php echo strtoupper($customer['customers_name']); ?> </td>
                    <td> <?php echo ucfirst($customer['customers_surname']); ?> </td>
                    <td> <?php echo $customer['customers_mail']; ?> </td>
                    <td> <?php echo $customer['customers_phone']; ?> </td>
                    <td> <?php echo $customer['customers_age']; ?> </td>
                    <td> <?php echo $customer['customers_status']; ?> </td>
                    <td> <?php echo ucfirst($customer['customers_nationality']); ?> </td>
                    <td> <?php echo ucfirst($customer['customers_organism']); ?> </td>
                    <td> <?php echo ucfirst($customer['customers_country_organism']); ?> </td>
                    <td> <?php echo ucfirst($customer['customers_city_organism']); ?> </td>
                    <td class="table-center"> 
                        <a href="" onclick="effacerCustomers(<?php echo $customer['id_customers']; ?>);"><img src="/admin/img/effacer.svg" alt="logo effacer"></a>
                        <a href="?id=<?php echo $customer['id_customers']; ?>#afficher2" class="afficher2"><img src="/admin/img/modifier.svg" alt="logo modifier"></a>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </main>
</body>
</html>