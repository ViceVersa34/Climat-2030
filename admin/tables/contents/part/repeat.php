<div class="contenu" id="<?php echo $tempId; ?>">
    <p>
        <?php echo html_entity_decode($tempContenuView); ?>
    </p>
</div>
<div class="contenu-input invisible" id="<?php echo 'm'.$tempId; ?>">
    <form action="" method="get" id="<?php echo 'form'.$tempId; ?>">
        <input type="hidden" name="action"value="update">
        <input type="hidden" name="id_contents"value="<?php echo $tempId; ?>">
        <textarea name="contents_content"><?php echo $tempContenu; ?></textarea>
    </form>
    <button type="button" onclick="document.getElementById('<?php echo 'form'.$tempId; ?>').submit()">Envoyer</button>
</div>
<?php 
    if($language == 'fr') {
        $img = '/admin/img/modifierBleu.svg';
    } else if($language == 'en') {
        $img = '/admin/img/modifierRouge.svg';
    } else {
        $img = '/admin/img/modifier.svg';
    }
?>
<a href="" class="update-button" onclick="updateContents('<?php echo $tempId; ?>', '<?php echo 'm'.$tempId; ?>');"><img src="<?php echo $img; ?>" alt="Bouton modifier"></a>