
<?php

  $log= '<li><a  data-toggle="modal" data-target="#connexion" href="#">Login</a></li>';

  if(!empty($_SESSION['identifier'])){

    $log= '<li id="disconnect"><a href="?p=disconnect">disconnect</a></li>';

  }

?>

                                  <!-- Navbar sit web -->

<nav class="navbar navbar-inverse bg-faded">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">Mon super site</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="?p=home">Home</a></li>
      <li><a href="?p=admin">Administrator dashboard</a></li>
      <li><a href="?p=new_article">New article</a></li>
      <!-- <li><a href="?p=login">Login</a></li> -->
    </ul>

                <!-- partie recherche avec le menu déroulant -->

    <ul class="nav navbar-nav navbar-right">
      
    <form class="navbar-form form-inline" method="GET" action="pages/recherche.php">

    <div class="dropdown form-group">
      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
      Filter
        <span class="caret"></span>
      </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">

                    <!-- Filtre recherche 1 -->

          <li class="dropdown-header">filtre à cocher 1</li>
          
          <div class="input-group">
            <span class="input-group-addon">
              <input type="checkbox" aria-label="filtre_1">
            </span>
            <p class="form-control">filtre 1</p>
          </div>
          <li role="separator" class="divider"></li>

                    <!-- Filtre recherche 2 -->

          <li class="dropdown-header">filtre à cocher 2</li>
          
          <div class="input-group">
            <span class="input-group-addon">
              <input type="checkbox" aria-label="filtre_2">
            </span>
            <p class="form-control">filtre 2</p>
          </div>
          <li role="separator" class="divider"></li>

                    <!-- Filtre recherche 3 -->

          <li class="dropdown-header">filtre à cocher 3</li>
          
          <div class="input-group">
            <span class="input-group-addon">
              <input type="checkbox" aria-label="filtre_3">
            </span>
            <p class="form-control">filtre 3</p>
          </div>
          <li role="separator" class="divider"></li>

                    <!-- Filtre recherche 4 -->

          <li class="dropdown-header">filtre à cocher 4</li>
          
          <div class="input-group">
            <span class="input-group-addon">
              <input type="checkbox" aria-label="filtre_4">
            </span>
            <p class="form-control">filtre 4</p>
          </div>
          <li role="separator" class="divider"></li>

        </ul>
    </div> 

                    <!-- Bouton de recherche -->
    
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search" name="recherche_nav">
      </div>
      <button type="submit" class="btn btn-success">Submit</button>
    </form>
    </ul>

    <ul class="nav navbar-nav navbar-right" >
    
      <?= $log ?>
    
    </ul>

  </div>
</nav>