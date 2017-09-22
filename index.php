<?php 
session_start();
if (isset($_SESSION['identifier'])){
    if ($_SESSION['identifier']){
        echo "Bonjour, vous êtes connecté en tant que : ".$_SESSION['identifier'];
    }
}else{
    // header("Location: ?p=connexion");
};

include("database/connexion-bdd.php");


if(isset($_GET['p'])){
    $p = $_GET['p'];
}else{
    $p = 'home';
}
ob_start();
if($p === 'home'){
    include('pages/home.php');
}if($p === 'admin'){
    include('pages/admin.php');
}
$content = ob_get_clean();
include('assets/template/default.php');
?>