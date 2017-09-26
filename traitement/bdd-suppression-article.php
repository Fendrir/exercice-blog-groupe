<?php 
include("database/connexion-bdd.php");
$id_delete = $_POST['suppr-article'];
// var_dump($id_delete);
$sql_suppression_article= sprintf("DELETE FROM article WHERE article_id = %d", $id_delete);

try {
    $bdd->query($sql_suppression_article);
    echo "Article supprimé avec succès !";
    ?><br><a href="?p=home"><button class="btn">retour a l'accueil du site</button></a> <?php
    header('refresh:3;url=?p=home');
} catch (Exception $e) {
    echo 'Exception reçue : ',  $e->getMessage(), "\n";
}





?>