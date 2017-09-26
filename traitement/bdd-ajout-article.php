<?php
include("database/connexion-bdd.php");
$author = htmlspecialchars((INT)$_POST["type"]);
$article_id = htmlspecialchars((INT)$_POST["article_admin_id"]);
$title= htmlspecialchars($_POST['title']);
$content= htmlspecialchars($_POST['content']);
$date = htmlspecialchars($_POST['date']);
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
    ?><br><a href="?p=home"><button class="btn">retour a l'accueil du site</button></a> <?php
    header('refresh:3;url=?p=home');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
};

?>