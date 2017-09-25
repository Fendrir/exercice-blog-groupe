<h1>Hello World</h1>

<p>j'affiche ici de base tout mes articles en format réduit</p>

<?php

// afficher tout les articles dans un tableau avec une requete sql permettant de les ranger avec un ORDER BY
// faire en sorte de rester sur la même page en rajoutant une ref de type _GET[]
// pour récupérer cette superglobale qui facilitera l'utilisateur pour classer selon son gout




$ordre_tri='';
$search ='';
$test2 = '';
if (!empty($_GET["ordre_tri"])){
 
$ordre_tri=' ORDER BY '.$_GET["ordre_tri"];

}
if (!empty($_GET["search"])){
  $test2="&search=".$_GET["search"];
 $search=" AND article_title like '%".$_GET["search"]."%' ";
 
 }
$test = 'SELECT article_id, article_title, article_content, article_date, type_name, admin_username 
FROM article, type, admin
WHERE article.article_type_id =type.type_id
and article_admin_id = admin.admin_id'.$search.$ordre_tri;
var_dump($test);
$reponse = $bdd->query($test);
?>

<div class="container">

  <table class="table table-bordered">
    <thead>
      <tr>
        <th><a href="?p=home&ordre_tri=article_id<?= $test2?>">Numéro de l'article</a></th>
        <th><a href="?p=home&ordre_tri=article_title<?= $test2?>">Title</a></th>
        <th><a href="?p=home&ordre_tri=type_name<?= $test2?>">Type</a></th>
        <th><a href="?p=home&ordre_tri=article_content<?= $test2?>">Content</a></th>
        <th><a href="?p=home&ordre_tri=article_date<?= $test2?>">Date</a></th>
        <th><a href="?p=home&ordre_tri=admin_username<?= $test2?>">Author</a></th>        
      </tr>
    </thead>

    <h1 class="text-center page-header">Articles actualité notre super site</h1>
<?php
while  ($donnees = $reponse->fetch()){
?>
<p>
<td><?=$donnees['article_id']?></td>
<td><?=$donnees['article_title']?></td>
<td><?=$donnees['type_name']?> </td>
<td><?=$donnees['article_content']?></td>
<td><?=$donnees['article_date']?> </td>
<td><?=$donnees['admin_username']?> </td>
</tr>
</tbody>


    <?php
}
$reponse->closeCursor();
?>