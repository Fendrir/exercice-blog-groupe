<?php
include("../database/connexion-bdd.php");
$author = (INT)$_POST["article_admin_id"];
$article_id = (INT)$_POST["article_admin_id"];
$title= $_POST['title'];
$content= $_POST['content'];
$date = $_POST['date'];
// var_dump($author);
// var_dump($article_id);
// var_dump($title);
// var_dump($content);
// var_dump($date);


$sql_ajout_article = sprintf('INSERT INTO article (article_title, article_content, article_date, article_type_id, article_admin_id) 
VALUES ("%s", "%s", "%s", %d, %d)', $title, $content, $date, $author, $article_id);



try    
{
    $bdd->query($sql_ajout_article);
    echo "Article enregistré avec succès !";
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
};

?>