<?php 
include("database/connexion-bdd.php");
$id_delete = $_POST['suppr-article'];
var_dump($id_delete);
$sql_suppression_article= sprintf("DELETE FROM article WHERE article_id = %d", $id_delete);

try {
    $bdd->query($sql_suppression_article);
    echo "Article supprimé !";
} catch (Exception $e) {
    echo 'Exception reçue : ',  $e->getMessage(), "\n";
}





?>