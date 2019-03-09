<?php $css='public/adminedit.css' ?>
<?php $title='B0 Category - Astier de Villatte' ?>


<?php ob_start(); ?>
   
    <h1>Category</h1>

    <form method="post" enctype="multipart/form-data">
        <label for="name-cat">New category</label>
        <input type="text" name="name-cat"/>
        <label for="desc-cat">Description</label>
        <textarea type="text" name="desc-cat"></textarea>
        <label for="img-cat">Image</label>
        <input type="hidden" name="MAX_FILE_SIZE"/>
        <input type="file" name="img-cat"/>
        <input type="submit" name="send-cat" value="ADD" class ="button"/>
    </form> 

<?php $content = ob_get_clean(); ?>

<?php require ('template/templateAdmin.php') ?>
