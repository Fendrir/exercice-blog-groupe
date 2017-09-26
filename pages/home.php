<?php 
if (isset($_POST["valider"])){
$pseudo = htmlspecialchars($_POST["login"]);
$pwd = htmlspecialchars($_POST["password"]);
$sql = sprintf("SELECT * FROM admin WHERE admin_username = '%s' OR admin_password = '%s'", $pseudo, $pwd );
$result_sql = $bdd->query($sql);
$row = $result_sql->fetch();

if (!empty($row)){

    $_SESSION['identifier'] = $row["admin_username"];
    $_SESSION['admin_id'] = $row["admin_id"];
    $message = "Vous êtes connecté en tant que " . $pseudo;
    header("refresh:5;url=?p=admin");
} else {
echo "Identifiant ou mot de passe incorrect";}
};
?>

<h1>Hello World</h1>

<p>j'affiche ici de base tout mes articles en format réduit</p>
<p><?= isset($message) ? $message:"" ?></p>

<?php

// AFFICHER TOUT LES ARTICLES DANS UN TABLEAU AVEC UNE REQUETE SQL PERMETTANT DE LES RANGER AVEC UN ORDER BY
// FAIRE EN SORTE DE RESTER SUR LA MÊME PAGE EN RAJOUTANT UNE REF DE TYPE _GET[]
// POUR RÉCUPÉRER CETTE SUPERGLOBALE QUI FACILITERA L'UTILISATEUR POUR CLASSER SELON SON GOUT




//-------------------------------------- RECHERCHE ET AFFICHAGE ARTICLE ------------------------------


$ordre_tri='';
$search ='';
$url_search_and_tri = '';


if (!empty($_GET["ordre_tri"])){
 
$ordre_tri=' ORDER BY '.$_GET["ordre_tri"];

}
if (!empty($_GET["search"])){
  $url_search_and_tri="&search=".$_GET["search"];
 $search=" AND article_title like '%".$_GET["search"]."%' ";
 
 }
$code_sql = 'SELECT article_id, article_title, article_content, article_date, type_name, admin_username 
FROM article, type, admin
WHERE article.article_type_id =type.type_id
and article_admin_id = admin.admin_id'.$search.$ordre_tri;

$reponse = $bdd->query($code_sql);
?>

<div class="container">

  <table class="table table-bordered">
    <thead>
      <tr>
        <th><a href="?p=home&ordre_tri=article_id<?= $url_search_and_tri?>">Numéro de l'article</a></th>
        <th><a href="?p=home&ordre_tri=article_title<?= $url_search_and_tri?>">Title</a></th>
        <th><a href="?p=home&ordre_tri=type_name<?= $url_search_and_tri?>">Type</a></th>
        <th><a href="?p=home&ordre_tri=article_content<?= $url_search_and_tri?>">Content</a></th>
        <th><a href="?p=home&ordre_tri=article_date<?= $url_search_and_tri?>">Date</a></th>
        <th><a href="?p=home&ordre_tri=admin_username<?= $url_search_and_tri?>">Author</a></th>        
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