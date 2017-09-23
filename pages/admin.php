<?php include("database/connexion-bdd.php") ?>

<hr />
<div class="row">
    <div class="col-sm-3">
        <h3>Filtre</h3>
    </div>
</div>
<br>

<div class="row">
    <div class="col-sm-12">
        <form action="#" method="post">
        <!-- Ici sont situés les labels -->
            <div class="row">
                <div class="col-sm-2">
                    <label for="titre">Titre</label>
                </div>
                <div class="col-sm-2">
                    <label for="genre">Genre</label>
                </div>
            </div>
        <!-- Ici sont situé les inputs -->
            <div class="row">
                <div class="col-sm-2">
                    <input class="form-control" name="title" id="titre" type="text">
                </div>
                <div class="col-sm-2">
                    <select id="genre" class="form-control col-sm-12">
                        <option value="Test1">Test1</option>
                        <option value="Test2">Test2</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-2">
                    <input class="btn btn-default"type="submit" value="valider">
                </div>
            </div>
        </form>
        <hr />
    </div>
</div>
<!-- Partie avec le tableau -->
<div class="row">
    <div class="col-sm-12">
        <table class="table table bordered">
            <thead>
                <tr>
                    <th class="col-sm-1">ID</th>
                    <th class="col-sm-1">Genre</th>
                    <th class="col-sm-8">Titre</th>
                    <th class="col-sm-1">Editer</th>
                    <th class="col-sm-1">Supprimer</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                $reponse = $bdd->query('SELECT * FROM article');
                while ($donnees = $reponse->fetch()) 
                {
            ?>
            <tr>
                <td><?= $donnees["article_id"] ?></td>
                <td><?= $donnees["article_title"] ?></td>
                <td><?= $donnees["article_content"] ?></td>
                <td><a href=""><img src="https://cdn3.iconfinder.com/data/icons/glyph/227/Cancel-128.png" alt="editer" height="40" width="40"></a></td>
                <td><a href=""><img src="https://image.freepik.com/free-icon/edit-badge_318-32366.jpg" alt="editer" height="40" width="40"></a></td>
            </tr>
            <?php 
                }
                $reponse->closeCursor();
            ?>
            </tbody>
        </table>
    </div>
</div>