<?php include("database/connexion-bdd.php"); ?>
<h1 class="text-center">Ajouter un Article:</h1>
<form action="traitement/bdd-ajout-article.php" method="post">
<input type="number" class="hidden" id="article_admin_id" name="article_admin_id" value="1">
<!-- <input type="number" class="hidden" id="article_type_id" name="article_type_id" value="1"> -->
<!-- input title -->
<div class="row">
  <div class="form-group col-sm-4">
    <label for="title">titre</label>
    <input class="form-control" id="title" type="text" name="title" value="test">
  </div>
</div>
<div class="row">
  <div class="form-group col-sm-2">
    <!-- input type -->
    <label for="type">Genre</label>
    <select class="form-control" name="type" id="type">
    <?php 
      $reponse = $bdd->query('SELECT * FROM type');
      while ($donnees = $reponse->fetch()) 
      {
    ?>
      <option value="<?= $donnees['type_id'] ?>"><?= $donnees['type_name'] ?></option>
      <?php 
                }
                $reponse->closeCursor();
            ?>
    </select>
  </div>
  <div class="form-group col-sm-2">
      <!-- input date -->
      <label for="date">date</label>
    <input class="form-control" type="date" name="date" id="date">
  </div>
</div>
<div class="row">
  <div class="form-group col-sm-4">
    <!-- input content -->
    <label for="content">contenu</label>
    <textarea name="content" class="form-control" id="content" cols="30" rows="10"></textarea>
  </div>
</div>

<div class="row">
  <div class="form-group col-sm-4 col-sm-offset-1">
    <input type="submit" class="btn btn-default" value="envoyer">
  </div>
</div>
</form>

