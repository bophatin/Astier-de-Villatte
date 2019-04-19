<?php $css='public/adminedit.css' ?>
<?php $title='Newsletter - BO Astier de Villatte' ?>


<?php ob_start(); ?>
    <div class="update_delete">
        <p class=titre>Liste des abonnés</p>
        <?php foreach($getEmails as $getEmail): ?>
            <table>
                <tr>
                    <td class="td_newslett"><label for="id"><?= $getEmail->email(); ?></label></td>
                    <td class="td_newslett"><label for="id" class="lab_up_del"><?= $getEmail->dateInscription(); ?></label></td>
                    <td>
                        <a href="admin.php?page=updateNewsletterView&id=<?=$getEmail->id();?>"><input type="submit" name="update" value="modifier" class="button"></a>
                    </td>
                    <td>
                        <form method="post" action="admin.php?page=delete&id=<?=$getEmail->id();?>" >
                            <input type="submit" name="delete_email" value="supprimer" class="button_delete"/>
                        </form>
                    </td>
                </tr>
            </table>
        <?php endforeach ?>

        <form method="post" action="admin.php?page=exportCSV">
            <input type="submit" name="export_emails" value="exporter la liste" class="button" id="input_export"/>
        </form>
    </div>
<?php $content = ob_get_clean(); ?>

<?php require ('template/templateAdmin.php') ?>
