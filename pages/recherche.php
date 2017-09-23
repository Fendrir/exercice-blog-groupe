<?php

$recherche =$_GET["recherche_nav"];



$sql = sprintf("SELECT * FROM article type 
WHERE article_title LIKE '%%%s%%' 
OR type_name LIKE '%%%s%%'
OR article_admin_id LIKE '%%%s%%'
OR article_date LIKE '%%%d%%'"
,$recherche,$recherche,$recherche,$recherche);



$users = $bdd->query($sql);
	?>

<div class="container">

    <div class="row">

        <div class="col-md-6 col-md-offset-3">

	        <h1>Le résultat de votre recherche</h1>

	<?php 
		while ($data = $users->fetch()){
	?>



	<p>
    
    <?= $data['type_name']." ". $data['article_title'] . " Fait le : " . $data['article_admin_id'] . " avec pour pseudo : " . $data['article_admin_id']?>
    
    </p>
    
	<br />

	<?php 
} 

$users->closeCursor();
?>
        </div>
    
    </div>

</div>