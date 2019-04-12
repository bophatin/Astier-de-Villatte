<?php $css='public/adminedit.css' ?>
<?php $title='Newsletter - BO Astier de Villatte' ?>


<?php ob_start(); ?>
    <h1>Newsletter</h1>

    <?php foreach($getEmails as $getEmail): ?>
        <table>
            <tr>
                <td><label for="id"><?= $getEmail->email(); ?></label></td>
                <td><label for="id"><?= $getEmail->dateInscription(); ?></label></td>
                <td>
                    <a href="admin.php?page=updateNewsletterView&id=<?=$getEmail->id();?>"><input type="submit" name="update" value="update" class="button-tab"></a>
                </td>
                <td>
                    <form method="post" action="admin.php?page=delete&id=<?=$getEmail->id();?>" >
                        <input type="submit" name="delete_email" value="delete" class="button-tab"/>
                    </form>
                </td>
            </tr>
        </table>
    <?php endforeach ?>
    
<?php $content = ob_get_clean(); ?>

<?php require ('template/templateAdmin.php') ?>
