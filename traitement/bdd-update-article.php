<?php
include("database/connexion-bdd.php");

$author = htmlspecialchars((INT)$_POST["article_admin_id"]);
$title= htmlspecialchars($_POST['title']);
$type =htmlspecialchars($_POST['type']);
$date = htmlspecialchars($_POST['date']);
$content= htmlspecialchars($_POST['content']);
$article_id = htmlspecialchars($_POST['article_id']);

$sql_update_article = sprintf('UPDATE article
    SET article_title= "%s", article_content= "%s", article_date = "%s", article_type_id = %d
    WHERE article_id = %d', $title, $content, $date, $type, $article_id );

try    
{
    $bdd->query($sql_update_article);
    echo "Article modifié avec succès !";
    ?><br><a href="?p=home"><button class="btn">retour a l'accueil du site</button></a> <?php
    header('refresh:3;url=?p=home');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
};

?>