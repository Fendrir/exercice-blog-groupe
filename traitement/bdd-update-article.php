<?php
include("database/connexion-bdd.php");

$author = (INT)$_POST["article_admin_id"];
$title= $_POST['title'];
$type = $_POST['type'];
$date = $_POST['date'];
$content= $_POST['content'];
$article_id = $_POST['article_id'];

$sql_update_article = sprintf('UPDATE article
    SET article_title= "%s", article_content= "%s", article_date = "%s", article_type_id = %d
    WHERE article_id = %d', $title, $content, $date, $type, $article_id );


$bdd->query($sql_update_article);
?>