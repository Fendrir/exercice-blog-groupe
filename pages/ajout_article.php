
<h1 class="text-center">Ajouter un Article:</h1>
<form action="traitement/bdd-ajout-article.php" method="post">
<input type="number" class="hidden" id="article_admin_id" name="article_admin_id" value="1">
<input type="number" class="hidden" id="article_type_id" name="article_type_id" value="1">
<!-- input title -->
<div class="row">
  <div class="form-group col-sm-4">
    <label for="title">titre</label>
    <input class="form-control" id="title" type="text" name="title" value="test">
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
  <div class="form-group col-sm-4">
    <!-- input date -->
    <label for="date">date</label>
    <input type="date" name="date" id="date">
    </div>
</div>
<div class="row">
  <div class="form-group col-sm-4 col-sm-offset-1">
    <input type="submit" class="btn btn-default" value="envoyer">
  </div>
</div>
</form>

