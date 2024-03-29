<?php
    session_start();
    include('../contents/part/content.php');
    include('../../php/isAdmin.php');

    // Vérifie si l'action "updateImage" est présente dans le tableau $_POST
    if(array_key_exists('action', $_POST)) {
        if($_POST['action'] == 'updateImage') { 
            // Récupère le chemin de l'image existante
            $existingImage = $_POST['oldImage'];
            $oldImage = explode('/', $existingImage);
            $existingImage = $_SERVER['DOCUMENT_ROOT'] . $existingImage;
            unset($oldImage[count($oldImage)-1]);
            $existingPathImage = '';
            foreach($oldImage as $old) {
                $existingPathImage = $existingPathImage . $old . '/';
            }
            
            // Vérifie si le fichier image a été correctement téléchargé
            if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {
                $id_images = $_POST['id_images'];
                $tempFile = $_FILES['image']['tmp_name'];
                $targetDirectory = $existingPathImage;
                $targetFile = $_SERVER['DOCUMENT_ROOT'] . $targetDirectory . basename($_FILES['image']['name']);
        
                // Vérifier si le répertoire cible existe, sinon le créer
                if (!is_dir($_SERVER['DOCUMENT_ROOT'] . $targetDirectory)) {
                    mkdir($_SERVER['DOCUMENT_ROOT'] . $targetDirectory, 0777, true);
                }
        
                // Déplacer le fichier temporaire vers le répertoire cible
                if (move_uploaded_file($tempFile, $targetFile)) {
                    // Succès de l'upload, vous pouvez effectuer des opérations supplémentaires si nécessaire
                    // Afficher l'image téléchargée

                    // Supprime l'image existante
                    if (file_exists($existingImage)) {
                        unlink($existingImage);
                    }
                    
                    // Définit le nouveau chemin de l'image
                    $newPath = $targetDirectory . basename($_FILES['image']['name']);

                    // Met à jour le chemin de l'image dans la base de données
                    $sql = "UPDATE `images` SET `images_path`=\"$newPath\" WHERE id_images = $id_images";
                    $requete = $db->query($sql);
                    header("Refresh: 0;url=/admin/tables/images/footer.php");
                } else {
                    echo "Une erreur est survenue lors du téléchargement de l'image.";
                }
            } else {
                echo "Une erreur est survenue lors du téléchargement de l'image.";
            }
        }
    }    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('../../php/head.php'); ?>
    <link rel="stylesheet" href="/admin/css/images.css">
    <title>Images - Climat 2030</title>
</head>
<body>
    <header>
        <?php include('../../php/header.php'); ?>
    </header>
    <main>
        <div class="global-title">
            <div class="title">Images</div>
            <div class="info-icon" id="infoIcon">i</div>
            <div class="info" id="info">La table 'images' contient les images du site. Vous pouvez les modifier ici. <br>
                                        Attention au format de l'image (identique à la précedente) et au poids (une image trop lourde ne sera pas uploadée. <br>
                                        Dans ce cas la, la compressé).</div>
        </div>
        <script src="/admin/js/info.js"></script>
        <div class="pages">
            <div class="page index">
                <div class="images">
                    <div class="group-image">
                        <div class="image">
                            <img src="<?php echo $images['footer']['illustration 1']['image']; ?>">
                            <form action="" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="action" value="updateImage">
                                <input type="hidden" name="id_images" value="<?php echo $images['footer']['illustration 1']['id']; ?>">
                                <input type="hidden" name="oldImage" value="<?php echo $images['footer']['illustration 1']['image']; ?>">
                                <input type="file" name="image">
                                <button type="submit">Modifier</button>
                            </form>
                        </div>
                    </div>

                    <div class="group-image">
                        <div class="image">
                            <img src="<?php echo $images['footer']['label1']['image']; ?>">
                            <form action="" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="action" value="updateImage">
                                <input type="hidden" name="id_images" value="<?php echo $images['footer']['label1']['id']; ?>">
                                <input type="hidden" name="oldImage" value="<?php echo $images['footer']['label1']['image']; ?>">
                                <input type="file" name="image">
                                <button type="submit">Modifier</button>
                            </form>
                        </div>
                    </div>

                    <div class="group-image">
                        <div class="image">
                            <img src="<?php echo $images['footer']['label2']['image']; ?>">
                            <form action="" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="action" value="updateImage">
                                <input type="hidden" name="id_images" value="<?php echo $images['footer']['label2']['id']; ?>">
                                <input type="hidden" name="oldImage" value="<?php echo $images['footer']['label2']['image']; ?>">
                                <input type="file" name="image">
                                <button type="submit">Modifier</button>
                            </form>
                        </div>
                    </div>

                    <div class="group-image">
                        <div class="image">
                            <img src="<?php echo $images['footer']['label3']['image']; ?>">
                            <form action="" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="action" value="updateImage">
                                <input type="hidden" name="id_images" value="<?php echo $images['footer']['label3']['id']; ?>">
                                <input type="hidden" name="oldImage" value="<?php echo $images['footer']['label3']['image']; ?>">
                                <input type="file" name="image">
                                <button type="submit">Modifier</button>
                            </form>
                        </div>
                    </div>

                    <div class="group-image">
                        <div class="image">
                            <img src="<?php echo $images['footer']['label4']['image']; ?>">
                            <form action="" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="action" value="updateImage">
                                <input type="hidden" name="id_images" value="<?php echo $images['footer']['label4']['id']; ?>">
                                <input type="hidden" name="oldImage" value="<?php echo $images['footer']['label4']['image']; ?>">
                                <input type="file" name="image">
                                <button type="submit">Modifier</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="scrollUp">
            <a href="#top"><img src="/img/up-arrow.svg"/></a>
        </div>
    </main>
</body>
</html>