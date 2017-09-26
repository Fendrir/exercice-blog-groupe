<?php 
include("database/connexion-bdd.php");
$id_article = $_GET['id'];
$id_type = $_GET['id_type'];
// var_dump($id_type);
// var_dump($id_article);

$requete = sprintf('SELECT * FROM article, type WHERE article.article_type_id = type.type_id AND article_id= %d',$id_article);
$reponse = $bdd->query($requete);
$donnees = $reponse->fetch();
// var_dump($donnees);

?>


<h1 class="text-center">Editer l'article:</h1>
<form action="?p=bdd-update-article" method="post">
<input type="number" class="hidden" id="article_admin_id" name="article_admin_id" value="1">
<input type="number" class="hidden" id="article_type_id" name="article_id" value="<?= $id_article ?>">
<!-- input title -->
<div class="row">
    <div class="form-group col-sm-4">
        <label for="title">titre</label>
        <input class="form-control" id="title" type="text" name="title" value="<?= $donnees['article_title'] ?>">
    </div>
</div>
<div class="row">
<div class="form-group col-sm-2">
    <!-- input type -->
    <label for="type">Genre</label>
    <select class="form-control" name="type" id="type">

    <?php 
    $reponse2 = $bdd->query('SELECT * FROM type');
    while ($donnees2 = $reponse2->fetch()) 
    {
    ?>
    <option value="<?= $donnees2['type_id'] ?>"><?= $donnees2['type_name'] ?></option>
    <?php 
        }
        $reponse2->closeCursor();
    ?>
    </select>
</div>
<div class="form-group col-sm-2">
    <!-- input date -->
    <label for="date">date</label>
    <input class="form-control" value="<?= $donnees['article_date'] ?>" type="date" name="date" id="date">
</div>
</div>
<div class="row">
<div class="form-group col-sm-4">
    <!-- input content -->
    <label for="content">contenu</label>
    <textarea name="content" class="form-control" id="content" cols="30" rows="10"><?= $donnees['article_content'] ?></textarea>
</div>
</div>

<div class="row">
<div class="form-group col-sm-4 col-sm-offset-1">
    <input type="submit" class="btn btn-default" value="envoyer">
</div>
</div>
