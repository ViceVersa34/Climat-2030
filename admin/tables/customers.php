<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
        session_start();
        include('../php/link_db.php');
        include('../php/isAdmin.php');


        $sql = "SELECT * FROM `customers`";
        $requete = $db->query($sql);
        $customers = $requete->fetchAll();
    
    ?>
    <table>
        <tr>
            <th> Actions </th>
            <th> id </td>
            <th> Nom </td>
            <th> Prénom </td>
            <th> Mail </td>
            <th> Téléphone </td>
            <th> Âge </td>
            <th> Statut</td>
            <th> Nationalité </td>
        </tr>
        <?php foreach ($customers as $customer) { ?>
        <tr>
            <td class="table-center"> 
                <a href="php/gestion_BDD/user/user_delete.php?id=<?php echo $customer['id_customers']; ?>"><img src="image/effacer.png" alt="logo effacer"></a>
                
                <a href="?id=<?php echo $customer['id_customers']; ?>#afficher2" class="afficher2"><img src="image/modifier.png" alt="logo modifier"></a>
                <a href="user.php" class="masquer2"><img src="image/modifier.png" alt="logo modifier"></a>
            
            </td>
            <td> <?php echo $customer['id_customers']; ?> </td>
            <td> <?php echo $customer['customers_name']; ?> </td>
            <td> <?php echo $customer['customers_surname']; ?> </td>
            <td> <?php echo $customer['customers_mail']; ?> </td>
            <td> <?php echo $customer['customers_phone']; ?> </td>
            <td> <?php echo $customer['customers_age']; ?> </td>
            <td> <?php echo $customer['customers_status']; ?> </td>
            <td> <?php echo $customer['customers_nationality']; ?> </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>